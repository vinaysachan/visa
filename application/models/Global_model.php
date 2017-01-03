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

    public function close_status($app_id) {
        if ($this->db->update('applicatrion_details', ['application_status' => 3], ['app_id' => $app_id]))
            return TRUE;
        return FALSE;
    }

    public function page_data($slug) {
        $sql = 'SELECT * FROM pages WHERE slug = "' . $slug . '"';
        if ($query = $this->db->query($sql))
            return $query->row();
        return FALSE;
    }

    function getApplication($offset = NULL, $limit = NULL, $count = NULL) {
        $this->db->select();
        $this->db->from('applicatrion_details');
        if (!empty($count)) {
            return $this->db->get()->num_rows();
        } else {
            $this->db->order_by('date_created', 'DESC');
            $this->db->limit($limit, $offset);
            return $this->db->get()->result();
        }
    }

    function getAppDetails($app_id) {
        $sql = 'SELECT * FROM applicatrion_details where app_id= "' . $app_id . '"';
        if ($query = $this->db->query($sql)) {
            return $query->result();
        }
        return FALSE;
    }

    public function all_saved_page() {
        $sql = 'SELECT GROUP_CONCAT(slug) as all_slugs FROM pages WHERE is_active = "' . STATUS_ACTIVE . '"';
        if ($query = $this->db->query($sql)) {
            return $query->result();
        }
        return FALSE;
    }

}
