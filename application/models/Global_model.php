<?php

class Global_model extends CORE_Model {

    public function __construct() {
        parent::__construct();
    }

    public function save_enq($data) {
        if ($this->db->insert(TBL_ENQUIRY, $data))
            return TRUE;
        return FALSE;
    }

    public function getEnqs($offset = NULL, $limit = NULL, $count = NULL, $status = STATUS_IN_ACTIVE) {
        $this->db->select();
        $this->db->from(TBL_ENQUIRY);
        $this->db->where('status', $status);
        if (!empty($count)) {
            return $this->db->get()->num_rows();
        } else {
            $this->db->order_by('date_created', 'DESC');
            $this->db->limit($limit, $offset);
            return $this->db->get()->result();
        }
    }

    public function change_status($status, $id) {
        if ($this->db->update(TBL_ENQUIRY, ['status' => $status], ['id' => $id]))
            return TRUE;
        return FALSE;
    }

    public function page_data($slug) {
        $sql = 'SELECT * FROM pages WHERE slug = "' . $slug . '"';
        if ($query = $this->db->query($sql))
            return $query->row();
        return FALSE;
    }

    public function all_saved_page() {
        $sql = 'SELECT GROUP_CONCAT(slug) as all_slugs FROM pages WHERE is_active = "' . STATUS_ACTIVE . '"';
        if ($query = $this->db->query($sql)) {
            return $query->result();
        }
        return FALSE;
    }

    /* public function update_banner($data, $b_id) {
      if ($this->db->update(TBL_BANNERS, $data, ['id' => $b_id]))
      return TRUE;
      return FALSE;
      }

      public function delete_banner($b_id) {
      if ($this->db->delete(TBL_BANNERS,['id' => $b_id]))
      return TRUE;
      return FALSE;
      }

      public function get_banners($data = NULL) {
      $this->db->select();
      $this->db->from(TBL_BANNERS . ' as b');

      if (!empty($data['where']['id'])) {
      $this->db->where('id', $data['where']['id']);
      }
      if (!empty($data['where']['status'])) {
      $this->db->where('status', $data['where']['status']);
      }


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
     * 
     * 
     */
}
