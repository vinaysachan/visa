<?php

class setting extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->append_jc(['js' => [
                'public/js/admin/setting.js'
            ],
            'css' => []
        ]);
    }

    public function index() {
        $data = [
            'heading' => 'Setting',
            'sub_heading' => '',
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Dashborad'],
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function banner() {
        $data = [
            'heading' => 'Manage Front Page Banner',
            'sub_heading' => '',
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Banners'],
            'banners' => $this->setting_model->get_banners()
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function banner_ae($b_id = NULL) {

        //Array ( [title] => dfbdsj jgfasdfasdfasfasfaf [order] => 234 [status] => 1 [submit] => add ) 
        if (!empty($this->input->post('submit'))) {
            $post = $this->input->post();
            $img = $this->util->fileUpload(BANNER_PATH, 'img', SITE_NAME, 'jpeg|jpg|png', $resize = ['h' => 300]);
            if (!empty($img)) {
                $post['img'] = $img;
            }

            if ($post['submit'] == 'add') {
                unset($post['submit']);
                if ($this->setting_model->save_banner($post)) {
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Banner Save successfully']);
                    redirect('admin/setting/banner');
                }
            }
        }



        if (!empty($b_id)) {
            
        } else {
            $heading = 'Add New Banner';
        }


        $data = [
            'heading' => $heading,
            'sub_heading' => '',
            'breadcrumb' => [
                base_url('admin') => '<i class="fa fa-dashboard"></i> Home',
                base_url('admin/setting/banner') => 'Banners',
                $heading
            ],
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

}
