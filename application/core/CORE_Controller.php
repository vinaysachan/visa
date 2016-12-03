<?php

class CORE_Controller extends CI_Controller {

    public $data;

    public function __construct() {
        parent::__construct();
        $this->load->library(['session', 'util']);
        $this->load->helper(['html', 'utility', 'url', 'form', 'inflector']);

        // Load CSS Files :-
        $this->data['css'] = [
            'public/plugins/bootstrap/css/bootstrap.min.css',
            'public/plugins/font-awesome/css/font-awesome.min.css'
        ];
        // Load JS Files :-
        $this->data['js'] = [
            'public/js/jquery.min.js',
            'public/plugins/bootstrap/js/bootstrap.min.js'
        ];

        $this->load->model(['operation_model']);
    }

    protected function append_jc($jc) {
        $this->data['js'] = (!empty($jc['js'])) ? array_merge($this->data['js'], $jc['js']) : $this->data['js'];
        $this->data['css'] = (!empty($jc['css'])) ? array_merge($this->data['css'], $jc['css']) : $this->data['css'];
    }

}
