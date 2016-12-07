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
        if (!empty($this->input->post('submit'))) {
            $post = $this->input->post();
            $img = $this->util->fileUpload(BANNER_PATH, 'img', SITE_NAME, 'jpeg|jpg|png', $resize = ['h' => 300]);
            if ($post['submit'] == 'add') {
                unset($post['submit']);
                if (!empty($img))
                    $post['img'] = $img;
                if ($this->setting_model->save_banner($post)) {
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Banner Save successfully']);
                    redirect('admin/setting/banner');
                }
            } elseif ($post['submit'] == 'update') {
               $post['status'] = ($post['status'] == STATUS_ACTIVE) ? STATUS_ACTIVE : STATUS_IN_ACTIVE ;
                unset($post['submit']);
                if ($img) {
                    $post['img'] = $img;
                    //Remove the old Image
                    $old_img = $post['old_img'];
                    $old_img_path = BANNER_PATH . $old_img;
                    if (file_exists($old_img_path)) {
                        @unlink($old_img_path);
                    }
                }
                unset($post['old_img']);
                if ($this->setting_model->update_banner($post, $b_id)) {
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Banner Update successfully']);
                    redirect('admin/setting/banner');
                }
            }
        }
        if (!empty($b_id)) {
            $heading = 'Update Banner';
            $banner = $this->setting_model->get_banners(['where' => ['id' => $b_id]]);
        } else {
            $heading = 'Add New Banner';
            $banner = '';
        }
        $data = [
            'heading' => $heading,
            'sub_heading' => '',
            'breadcrumb' => [
                base_url('admin') => '<i class="fa fa-dashboard"></i> Home',
                base_url('admin/setting/banner') => 'Banners',
                $heading
            ],
            'banner' => $banner
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function del_banner($b_id = NULL) {
        if (empty($b_id)) {
            $this->session->set_flashdata(WARNING_MSG, ['Warning!', 'Bad URL']);
            redirect('admin/setting/banner');
        }
        $banner = $this->setting_model->get_banners(['where' => ['id' => $b_id]]);
        if (empty($banner)) {
            $this->session->set_flashdata(WARNING_MSG, ['Warning!', 'Previous URL was Bad.']);
            redirect('admin/setting/banner');
        }
        if ($this->setting_model->delete_banner($b_id)) {
            if ($banner[0]->img) {
                //Remove the old Image
                $old_img_path = BANNER_PATH . $banner[0]->img;
                if (file_exists($old_img_path)) {
                    @unlink($old_img_path);
                }
            }
            $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Banner Deleted successfully']);
            redirect('admin/setting/banner');
        }
    }

}
