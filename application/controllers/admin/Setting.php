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
                $post['status'] = ($post['status'] == STATUS_ACTIVE) ? STATUS_ACTIVE : STATUS_IN_ACTIVE;
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

    public function page($page = NULL) {
        $this->load->library('paginator');
        $this->paginator->initialize([
            'base_url' => base_url('admin/setting/page'),
            'total_items' => (int) $this->setting_model->getPages(NULL, NULL, 'count'),
            'current_page' => $page
        ]);
        $limit = $this->paginator->limit_end;
        $offset = $this->paginator->limit_start;
        $data = [
            'heading' => '<i class="fa fa-television"></i> Manage Page\'s Data',
            'sub_heading' => '',
            'page' => $offset,
            'breadcrumb' => [base_url('admin') => '<i class="fa fa-dashboard"></i> Home', 'Pages'],
            'pages' => $this->setting_model->getPages($offset, $limit, NULL)
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function page_ae($pid = NULL) {
        $this->append_jc(['js' => ['public/plugins/ckeditor/ckeditor.js']]);
        if (!empty($pid)) {
            $heading = '<i class="fa fa-television"></i> Update Page Detail';
            $page_data = $this->setting_model->page_data($pid);
        } else {
            $heading = '<i class="fa fa-television"></i> Add Page Detail';
            $page_data = '';
        }
         $this->load->library('pages');
        if (!empty($this->input->post('save_page'))) {
            $post = $this->input->post();
            $post['menu_location'] = json_encode($post['menu_location']);
            if ($post['save_page'] == 'add') {
                unset($post['save_page']);
                if ($this->setting_model->save_page($post)) {
                    $this->pages->savefile();
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Page Added Successfully']);
                    redirect('admin/setting/page');
                    exit();
                }
            } else if ($post['save_page'] == 'update') {
                unset($post['save_page']);
                if ($this->setting_model->update_page($post, $pid)) {
                    $this->pages->savefile();
                    $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Page Update Successfully']);
                    redirect('admin/setting/page');
                    exit();
                }
            }
        }
        $data = [
            'heading' => $heading,
            'sub_heading' => '',
            'breadcrumb' => [
                base_url('admin') => '<i class="fa fa-dashboard"></i> Home',
                $heading
            ],
            'pid' => $pid,
            'all_pages' => $this->setting_model->all_available_pages(),
            'all_saved_page' => $this->setting_model->all_saved_page(),
            'page_data' => $page_data
        ];
        $this->load->view('templates/admin.tpl', array_merge($this->data, $data));
    }

    public function trash_page($id = NULL) {
        if (empty($id)) {
            $this->session->set_flashdata(WARNING_MSG, ['Warning!', 'Bad URL']);
            redirect('admin/setting/page');
        }
        if ($this->setting_model->delete_page($id)) {
            $this->session->set_flashdata(SUCCESS_MSG, ['Congratulaton!', 'Page Deleted successfully']);
            redirect('admin/setting/page');
        }
    }

}
