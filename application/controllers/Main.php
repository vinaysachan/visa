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
            'banners' => $this->setting_model->get_banners(['where' => ['status' => STATUS_ACTIVE]]),
            'page_data' => $this->global_model->page_data('home')
        ];
        $this->load->view('templates/front.tpl', array_merge($this->data, $data));
    }

     
 
	function apply_visa(){
		if(!$this->input->post('step1')=="")
		{
		$application_id=$this->operation_model->app_step1();
            $this->session->set_userdata('application_id', $application_id);
            redirect(base_url('main/visa_reg'));
		}
		$data['getCounrty']=$this->operation_model->getCounrty();
		$this->load->view('html/common/header');
		$this->load->view('html/form1',$data);
		$this->load->view('html/common/footer');
	}
	function visa_reg(){
        if(!empty($this->session->userdata('application_id'))) 
        {   
            if(!$this->input->post('step1')=="")
            {
                $result=$this->operation_model->set_visa_reg();	
                if($result==0) {
                    redirect(base_url('main/visa_step3'));
                }
            }
            $data['apply_details']=$this->operation_model->get_application_details();
            $data['getCounrty']=$this->operation_model->getCounrty();
            $this->load->view('html/common/header');
            $this->load->view('html/application_step2',$data);
            $this->load->view('html/common/footer');
        }else {
            redirect(base_url('main/apply_visa'));
        }
	}
	function visa_step3()
	{
        if(!empty($this->session->userdata('application_id'))) 
        { 
            if(!$this->input->post('visa_step3')=="")
            {
                print_r($_POST);
                $this->operation_model->set_visareg3();
            }
            $data['apply_details']=$this->operation_model->get_application_details();
            $data['getCounrty']=$this->operation_model->getCounrty();
            $this->load->view('html/common/header');
            $this->load->view('html/visa_step3',$data);
            $this->load->view('html/common/footer');
        }else {
            redirect(base_url('main/apply_visa'));
        }
	}


	 

    

     

}
