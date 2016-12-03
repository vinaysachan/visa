<?php

class Home extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'vinay sachan';
    }

    public function login() {
        if (!empty($this->session->userdata(SESSION_ADMIN))) {
            redirect(base_url('admin'));
            exit();
        }
//        if (!empty($this->input->post('submit')) && ($this->input->post('submit') == 'login')) {
//            $post = $this->input->post();
//            unset($post['submit']);
//            if ($this->operation_model->do_login($post)) {
//                $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton! Login successfull', 'Congratulaton! Login successfull']);
//                echo json_encode(['sts' => STATUS_SUCCESS, 'msg' => 'Congratulaton Login successfull.', 'url' => base_url('ops-admin')]);
//            } else {
//                echo json_encode(['sts' => STATUS_ERROR, 'msg' => 'Password and username not match']);
//            }
//            exit();
//        }
        $this->append_jc([
            'js' => ['public/js/admin/home/login.js'],
            'css' => ['public/css/admin/login.css']]);

        $data = [
            'title' => 'Admin Login',
            'heading' => 'Please sign in',
        ];
        $this->load->view('admin/admin_login_view', array_merge($this->data, $data));
    }

}
