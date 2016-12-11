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

    public function enquiry($status = STATUS_IN_ACTIVE, $page = NULL) {
        if ($status == STATUS_IN_ACTIVE) {
            $heading = '<i class="fa fa-envelope-o mr10"></i> New Enquiries';
        } else {
            $status == STATUS_ACTIVE;
            $heading = '<i class="fa fa-envelope-open-o mr10"></i> Closed Enquiries';
        }
        $this->load->library('paginator');
        $this->paginator->initialize([
            'base_url' => base_url('admin/home/enquiry/' . $status),
            'total_items' => (int) $this->global_model->getEnqs(NULL, NULL, 'count', $status),
            'current_page' => $page
        ]);
        $limit = $this->paginator->limit_end;
        $offset = $this->paginator->limit_start;
        $data = [
            'heading' => $heading,
            'sub_heading' => '',
            'page' => $offset,
            'status' => $status,
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Enquiry'],
            'enqs' => $this->global_model->getEnqs($offset, $limit, NULL, $status)
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function change_sts() {
        if ($this->global_model->change_status($this->input->post('sts'), $this->input->post('id'))) {
            $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Your Enquiry status changre successfully.']);
            echo json_encode(['sts' => STATUS_SUCCESS, 'msg' => 'Your Enquiry status changre successfully.']);
        } else {
            echo json_encode(['sts' => STATUS_ERROR, 'msg' => 'Unable to change Enquiry status.']);
        }
        exit();
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
