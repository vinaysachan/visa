<?php

/**
 * Description of Admin_Controller
 *
 * @author vinay
 */
class FRONT_Controller extends CORE_Controller {

    public $data;

    public function __construct() {
        parent::__construct();

        $this->append_jc(['js' => [
                'public/jquery-ui/jquery-ui.min.js', 
                'public/plugins/jquery_validation/jquery.validate.min.js',
                'public/plugins/jq-confirm/jquery-confirm.min.js',
                'public/js/main.js',
                'public/js/site.js'
            ],
            'css' => [
                'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic',
                'public/jquery-ui/jquery-ui.css',
                'public/jquery-ui/jquery-ui.theme.css',
                'public/plugins/jq-confirm/jquery-confirm.css',
                'public/css/main.css'
            ]
        ]);

        $this->load->library('pages');
        $this->data['page_list'] = $this->pages->get_data();
    }

}
