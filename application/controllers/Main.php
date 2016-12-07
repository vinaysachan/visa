<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends FRONT_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [
            'title' => 'Page title',
            'meta_description' => 'Meta Desc',
            'meta_keywords' => 'Meta Keyword',
            'breadcrumb' => [
                base_url() => 'Home',
            ],
            'heading' => 'Basic Intro & History of PHP',
            'banners' => $this->setting_model->get_banners(['where' => ['status' => STATUS_ACTIVE]])
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

    public function page() {

        $this->load->view('html/first_page');
    }

    function apply_visa() {
        if (!$this->input->post('form1') == "") {
            print_r($this->input->post());
        }
        $this->load->view('html/form1');
    }

    function test() {
        print_r($_post);
    }

    public function front() {
        $this->load->view('html/first_page');
    }

}
