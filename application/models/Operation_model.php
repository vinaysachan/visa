<?php

class Operation_model extends CORE_Model {

    public function __construct() {
        parent::__construct();
    }

    public function do_Login($data) {
        try {
            $encrypt_pass = $this->util->hash_create('sha256', $data['password'], HASH_PASSWORD_KEY);
            $key = HASH_MYSQL_KEY;
            $sql = 'SELECT u.id,u.name,u.username,u.designation,u.img,u.date_created, r.name as role_name, GROUP_CONCAT(m.`key`) as access, GROUP_CONCAT(a.module_id) as module_ids FROM ' . TBL_OPS_USER . ' u LEFT JOIN ' . TBL_OPS_ROLES . ' r ON u.role_id = r.id LEFT JOIN ' . TBL_OPS_USER_ACCESS . ' a ON a.user_id = u.id LEFT JOIN ' . TBL_OPS_MODULES . ' m ON m.id=a.module_id WHERE u.username = "' . $data['username'] . '" AND u.password = AES_ENCRYPT("' . $encrypt_pass . '","' . $key . '") GROUP BY u.id';
            if ($query = $this->db->query($sql)) {
                if (!empty($u = $query->result())) {
                    $this->session->set_userdata(SESSION_ADMIN, [
                        'id' => $u[0]->id,
                        'name' => $u[0]->name,
                        'role' => ROLE_SADMIN,
                        'designation' => $u[0]->designation,
                        'img' => $u[0]->img,
                        'access' => (empty($u[0]->access)) ? [] : $u[0]->access,
                        'date_approved' => get_date($u[0]->date_created, 'Y-m-d H:i:s', 'M, Y')
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
        $sql = 'SELECT u.username,u.email,u.name,u.role_id,u.mobile,u.designation,u.img,r.name as role FROM ' . TBL_OPS_USER . ' u LEFT JOIN ' . TBL_OPS_ROLES . ' r ON r.id = u.role_id';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_account($data, $uid) {
        $update_arr = [
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'designation' => $data['designation'],
        ];
        if ($data['old_email'] != $data['email']) {
            $update_arr['email'] = $data['email'];
            //Send Email to new Email Id :- 
        }
        $photo = $this->util->fileUpload(OPERATION_PHOTO_PATH, 'photo', $data['name'], 'jpeg|jpg|png');
        if ($photo) {
            $update_arr['img'] = $photo;
            //unlink old photo
            $old_img_path = OPERATION_PHOTO_PATH . $data['old_photo'];
            if (file_exists($old_img_path))
                @unlink($old_img_path);
        }
        if ($this->db->update(TBL_OPS_USER, $update_arr, ['id' => $uid])) {
            //Update Session
            $sdata = $this->session->userdata(SESSION_ADMIN);
            $this->session->unset_userdata(SESSION_ADMIN);
            $this->session->set_userdata(SESSION_ADMIN, [
                'id' => $sdata['id'],
                'name' => $data['name'],
                'role' => ROLE_SADMIN,
                'designation' => $data['designation'],
                'img' => ($photo) ? $photo : $data['old_photo'],
                'access' => (empty($sdata['access'])) ? [] : $sdata['access'],
                'date_approved' => $sdata['date_approved']
            ]);
            return TRUE;
        }
    }

    public function update_account_password($data, $id) {
        if ($data['old_password'] == $data['new_password']) {
            return ['sts' => STATUS_ERROR, 'msg' => 'New password can not be same as old password'];
        } else {
            $sql = 'SELECT u.name,AES_DECRYPT(u.password,"' . HASH_MYSQL_KEY . '") as decrypt_password FROM ' . TBL_OPS_USER . ' u WHERE u.id = "' . $id . '" ';
            $query = $this->db->query($sql);
            $u = $query->result();
            if (empty($u)) {
                return ['sts' => STATUS_ERROR, 'msg' => 'No Account found.'];
            }
            if ($u[0]->decrypt_password == $this->util->hash_create('sha256', $data['old_password'], HASH_PASSWORD_KEY)) {
                $encrypt_pass = $this->util->hash_create('sha256', $data['new_password'], HASH_PASSWORD_KEY);
                $sql = 'UPDATE ' . TBL_OPS_USER . ' SET password = AES_ENCRYPT("' . $encrypt_pass . '","' . HASH_MYSQL_KEY . '") WHERE id = "' . $id . '"';
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

    public function saveErrorLogs($e) {
        $error = json_encode(['error' => [
                'msg' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]], JSON_UNESCAPED_SLASHES);
        $this->db->insert(TBL_LOG_ERR, ['error' => $error]);
    }

}
