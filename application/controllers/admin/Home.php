<?php

class Home extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [
            'heading' => 'Dashboard',
            'sub_heading' => '',
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Dashborad'],
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function login() {
        if (!empty($this->session->userdata(SESSION_ADMIN))) {
            redirect(base_url('admin'));
            exit();
        }
        if (!empty($this->input->post('submit')) && ($this->input->post('submit') == 'login')) {
            $post = $this->input->post();
            unset($post['submit']);
            if ($this->operation_model->do_login($post)) {
                $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton! Login successfull', 'Congratulaton! Login successfull']);
                echo json_encode(['sts' => STATUS_SUCCESS, 'msg' => 'Congratulaton Login successfull.', 'url' => base_url('admin')]);
            } else {
                echo json_encode(['sts' => STATUS_ERROR, 'msg' => 'Password and username not match']);
            }
            exit();
        }
        $this->append_jc([
            'js' => ['public/js/admin/home/login.js'],
            'css' => ['public/css/admin/login.css']]);

        $data = [
            'title' => 'Admin Login',
            'heading' => 'Please sign in',
        ];
        $this->load->view('admin/admin_login_view', array_merge($this->data, $data));
    }

    public function logout() {
        $this->session->unset_userdata(SESSION_ADMIN);
        redirect(base_url('admin/login'));
        exit();
    }

}
