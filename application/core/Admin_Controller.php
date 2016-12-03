<?php

/**
 * Description of Admin_Controller
 *
 * @author Vinay Sachan
 */
class Admin_Controller extends CORE_Controller {

    public $data;

    public function __construct() {
        parent::__construct();
        //Check for Login 
        if ($this->checkLogin()) {
            redirect(base_url('admin/login'));
            exit();
        }
    }

    protected function checkLogin() {
        return ((!in_array($this->router->fetch_method(), ['login', 'logout'])) && (empty($this->session->userdata(SESSION_ADMIN))));
    }
    
    

}
