<?php

class Setting_model extends CORE_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save_banner($data) {
        if ($this->db->insert(TBL_BANNERS, $data))
            return TRUE;
        return FALSE;
    }

    public function get_banners($data = NULL) {
        $this->db->select();
        $this->db->from(TBL_BANNERS . ' as b');
        $this->db->order_by("order", "ASC");
        return $this->db->get()->result();
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

}
