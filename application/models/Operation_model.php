<?php

class Operation_model extends CORE_Model {

    public function __construct() {
        parent::__construct();
    }

    public function do_Login($data) {
        try {
            $encrypt_pass = $this->util->hash_create('sha256', $data['password'], HASH_PASSWORD_KEY);
            $key = HASH_MYSQL_KEY;
            $sql = 'SELECT au.id,au.name,au.username,au.img,au.designation FROM ' . TBL_ADMIN_USER . ' au WHERE au.username = "' . $data['username'] . '" AND au.pass = AES_ENCRYPT("' . $encrypt_pass . '","' . $key . '")';
            if ($query = $this->db->query($sql)) {
                if (!empty($u = $query->result())) {
                    $this->session->set_userdata(SESSION_ADMIN, [
                        'id' => $u[0]->id,
                        'name' => $u[0]->name,
                        'username' => $u[0]->username,
                        'designation' => $u[0]->designation,
                        'img' => $u[0]->img,
                    ]);
                    return TRUE;
                }
                return FALSE;
            } else {
                throw new Exception($this->db->error()['message']);
            }
        } catch (Exception $e) {
            $this->global_model->saveErrorLogs($e);
            return FALSE;
        }
    }

    public function getAdminById($id) {
        $sql = 'SELECT * FROM ' . TBL_ADMIN_USER . ' au  WHERE au.id ="' . $id . '"';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_account($data, $uid) {
        $update_arr = [
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'designation' => $data['designation'],
            'email' => $data['email'],
        ];
        $photo = $this->util->fileUpload(ADMIN_PHOTO_PATH, 'photo', $data['name'], 'jpeg|jpg|png');
        if ($photo) {
            $update_arr['img'] = $photo;
            //unlink old photo
            $old_img_path = ADMIN_PHOTO_PATH . $data['old_photo'];
            if (file_exists($old_img_path))
                @unlink($old_img_path);
        }
        if ($this->db->update(TBL_ADMIN_USER, $update_arr, ['id' => $uid])) {
            //Update Session
            $sdata = $this->session->userdata(SESSION_ADMIN);
            $this->session->unset_userdata(SESSION_ADMIN);
            $this->session->set_userdata(SESSION_ADMIN, [
                'id' => $sdata['id'],
                'name' => $data['name'],
                'username' => $sdata['username'],
                'designation' => $data['designation'],
                'img' => ($photo) ? $photo : $data['old_photo'],
            ]);
            return TRUE;
        }
    }
    
    public function update_account_password($data, $id) {
        if ($data['old_password'] == $data['new_password']) {
            return ['sts' => STATUS_ERROR, 'msg' => 'New password can not be same as old password'];
        } else {
            $sql = 'SELECT u.name, AES_DECRYPT(u.pass,"' . HASH_MYSQL_KEY . '") as decrypt_password FROM ' . TBL_ADMIN_USER . ' u WHERE u.id = "' . $id . '" ';
            $query = $this->db->query($sql);
            $u = $query->result();
            if (empty($u)) {
                return ['sts' => STATUS_ERROR, 'msg' => 'No Account found.'];
            }
            if ($u[0]->decrypt_password == $this->util->hash_create('sha256', $data['old_password'], HASH_PASSWORD_KEY)) {
                $encrypt_pass = $this->util->hash_create('sha256', $data['new_password'], HASH_PASSWORD_KEY);
                $sql = 'UPDATE ' . TBL_ADMIN_USER . ' SET pass = AES_ENCRYPT("' . $encrypt_pass . '","' . HASH_MYSQL_KEY . '") WHERE id = "' . $id . '"';
                if ($this->db->query($sql)) {
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulations!', 'You have successfully changed your password.']);
                    return ['sts' => STATUS_SUCCESS, 'msg' => 'You have successfully changed your password.'];
                }
                return ['sts' => STATUS_ERROR, 'msg' => 'OK WE WILL CHNAGE PASSWORD'];
            } else {
                return ['sts' => STATUS_ERROR, 'msg' => 'Unable to change password, the old password is not correct.'];
            }
        }
    }

}
