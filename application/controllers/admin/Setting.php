<?php

class setting extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data = [
            'heading' => 'Setting',
            'sub_heading' => '',
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Dashborad'],
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }
    
    
}
