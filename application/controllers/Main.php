<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends FRONT_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $page_data = $this->global_model->page_data('home');
        $data = [
            'title' => $page_data->title,
            'meta_description' => $page_data->description,
            'meta_keywords' => $page_data->keywords,
            'breadcrumb' => [
                base_url() => 'Home',
            ],
            'heading' => $page_data->heading,
            'banners' => $this->setting_model->get_banners(['where' => ['status' => STATUS_ACTIVE]]),
            'content' => $page_data->page_content,
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    public function page($slug = NULL) {
        if (empty($slug)) {
            redirect(base_url());
        }
        $page_data = $this->global_model->page_data($slug);
        if (empty($page_data)) {
            redirect(base_url());
        }
        $data = [
            'title' => $page_data->title,
            'meta_description' => $page_data->description,
            'meta_keywords' => $page_data->keywords,
            'heading' => $page_data->heading,
            'banners' => $this->setting_model->get_banners(['where' => ['status' => STATUS_ACTIVE]]),
            'content' => $page_data->page_content,
            'slug' => $slug
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function apply_visa() {
        if (!$this->input->post('step1') == "") {
            if ($this->input->post('v_code') != $this->session->userdata('captcha')) {
                echo json_encode(['sts' => STATUS_ERROR, 'msg' => 'Please Enter Correct verification code']);
            } else {
                $application_id = $this->operation_model->app_step1();
                $this->session->set_userdata('application_id', $application_id);
                echo json_encode([
                    'sts' => STATUS_SUCCESS,
                    'title' => 'Congratulation!',
                    'msg' => 'Your e-Tourist Visa (eTV) Application submitted successfully.<br/>Your Application Id is : <b>' . $application_id . '</b><br/>Please complete Step2.',
                    'url' => base_url('visa_reg')
                ]);
            }
            exit();
        }
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'getCounrty' => $this->operation_model->getCounrty()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function visa_reg() {
        if (empty($this->session->userdata('application_id'))) {
            redirect(base_url('apply_visa'));
        }
        if (!$this->input->post('step1') == "") {
            $result = $this->operation_model->set_visa_reg();
            if ($result) {
                redirect(base_url('visa_step3'));
            }
        }
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'Complete Partially Filled Form',
            'apply_details' => $this->operation_model->get_application_details(),
            'getCounrty' => $this->operation_model->getCounrty()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function visa_step3() {
        if (!empty($this->session->userdata('application_id'))) {
            if (!$this->input->post('visa_step3') == "") {
                if ($this->operation_model->set_visareg3()) {
                    redirect(base_url('visa_step4'));
                }
            }
            if (!$this->input->post('visa_step3_exit') == "") {
                if ($this->operation_model->set_visareg3()) {
                    redirect(base_url());
                }
            }
            $data = [
                'title' => 'title',
                'meta_description' => 'description',
                'meta_keywords' => 'keywords',
                'heading' => 'e-Tourist Visa (eTV) Application',
                'getCounrty' => $this->operation_model->getCounrty(),
                'apply_details' => $this->operation_model->get_application_details()
            ];
            $this->load->view('templates/front.tpl', array_merge($this->data, $data));
        } else {
            redirect(base_url('apply_visa'));
        }
    }

    function visa_step4() {
        if (!$this->input->post('step4') == "") {
            $app_id = $this->session->userdata('application_id');

            $img = $this->util->fileUpload(APPLICATION_IMG, 'image', $app_id, 'jpeg|jpg|png');
            $result = $this->operation_model->app_step4($img);
            if ($result) {
                redirect(base_url('main/uploadPassport'));
            }
        }

        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details(),
            'getCounrty' => $this->operation_model->getCounrty()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    public function uploadPassport() {
        if (!$this->input->post('uploadpassport') == "") {
            $app_id = $this->session->userdata('application_id');
            $img = $this->util->fileUpload(PASSPORT_IMG, 'passport', $app_id, 'jpeg|jpg|png');
            $result = $this->operation_model->uploadpassport($img);
            if ($result) {
                redirect(base_url('main/reviewform'));
            }
        }
        $data = [
            'title' => 'title',
            'meta_description' => 'Upload PassPort',
            'meta_keywords' => 'E-visa',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    public function reviewform() {
        $data = [
            'title' => 'title',
            'meta_description' => 'Upload PassPort',
            'meta_keywords' => 'E-visa',
            'heading' => 'Conform Details',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function payment() {
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function payment_success() {
        $this->operation_model->payment_status(1);
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function payment_faild() {
        $this->operation_model->payment_status(0);
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    function serach_app() {
        if (!$this->input->post('search') == "") {
            if ($this->input->post('v_code') != $this->session->userdata('captcha')) {
                echo json_encode(['sts' => STATUS_ERROR, 'msg' => 'Please Enter Correct verification code']);
            } else {
                $application_data = $this->operation_model->search_app();
                if (empty($application_data)) {
                    echo json_encode([
                        'sts' => STATUS_ERROR,
                        'msg' => 'Please enter correcty Temporary Application ID.',
                    ]);
                } else {
                    $this->session->set_userdata('application_id', $application_data[0]->app_id);
                    echo json_encode([
                        'sts' => STATUS_SUCCESS,
                        'title' => 'Congratulation!',
                        'msg' => 'Please complete Step2.',
                        'url' => base_url('visa_reg')
                    ]);
                }
            }
            exit();
        }
        $data = [
            'title' => 'title',
            'meta_description' => 'description',
            'meta_keywords' => 'keywords',
            'heading' => 'e-Tourist Visa (eTV) Application',
            'apply_details' => $this->operation_model->get_application_details()
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

}
