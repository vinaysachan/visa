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
//                'public/jquery-ui/jquery-ui.min.js',               
//                'public/plugins/jquery_validation/jquery.validate.min.js',
//                'public/plugins/jq-confirm/jquery-confirm.min.js',
//                'public/js/main.js',
//                'public/js/admin/admin.js',
//                'public/themes/ops-admin/js/script.js'
            ],
            'css' => [
                'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic',
                'public/css/main.css',
                'public/css/style.css',
            ]
        ]);
    }

}
