<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * State Class
 *
 * @package		__
 * @depends		MongoDb Library and Mongo collection 
 * @subpackage          Libraries
 * @category            
 * @author		Vinay Sachan <vinay@onlinephpstudy.com>
 * @copyright           Copyright (c) 2011-2016, OPS, & Copyright (c) 2016, DEWIOnline.
 * @license             Code licensed MIT
 * @link		 
 * @todo		 
 */
class Pages {

    private $_path = APPPATH . "data";
    private $_file = APPPATH . "data/available_page.json";

    public function __construct() {
        if (!is_dir($this->_path)) {
            @mkdir($this->_path, 7777, true);
            @chmod($this->_path, 0777);
        }
    }

    public function savefile() {
        $this->CI = &get_instance();
        $p_data = [];
        $sql = 'SELECT slug,menu_location,`order` FROM pages WHERE is_active = "' . STATUS_ACTIVE . '" ORDER BY `order` ASC';
        if ($query = $this->CI->db->query($sql)) {
            $data = $query->result();
            foreach ($data as $p) {
                $p_data[] = [
                    'slug' => $p->slug,
                    'menu_location' => json_decode($p->menu_location),
                    'order' => $p->order
                ];
            }
        }
        file_put_contents($this->_file, json_encode($p_data));
        @chmod($this->_file, 0777);
    }

    public function get_data() {
        if (!file_exists($this->_file))
            $this->savefile();
        $str = @file_get_contents($this->_file);
        return json_decode($str, true);
    }

    public function filter() {
        return array_filter($this->get_data(), function($s) {
            return $s[$this->__field] == get_in_Small($this->__val);
        });
    }

//    public function get_state_name($state_code) {
//        if (!file_exists($this->_file))
//            $this->savefile();
//        $this->__val = $state_code;
//        $this->__field = 'state_code';
//        $this->__st = array_reduce($this->filter(), 'array_merge', []);
//        return (array_key_exists('name', $this->__st)) ? $this->__st['name'] : NULL;
//    }
//    public function get_state_list($select = NULL) {
//        $states = $this->get_data();
//        if ($select) {
//            foreach ($states as $st)
//                $state[strtolower($st['state_code'])] = ucfirst($st['name']);
//            return array_merge(['' => 'Select State'], $state);
//        }
//        return $states;
//    }

    public function __destruct() {
//	$this->__field;
//	$this->__val;
//	$this->__st;
    }

}
