<?php

/**
 * 
 * @param type $dob
 * @param type $input_format default 'd/m/Y'
 * @param type $output_format default 'Y-m-d'
 * @return type
 */
function get_date($dob = NULL, $input_format = 'd/m/Y', $output_format = 'Y-m-d') {
    if ((validateDate($dob, $input_format)) && (!empty($dob))) {
        $date = DateTime::createFromFormat($input_format, $dob);
        return $date->format($output_format);
    }
    return NULL;
}

function validateDate($date, $format = 'd/m/Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function country_name($code=NULL,$id=NULL) {
    if (!empty($code)) {
        $clist = [];
        $CI = & get_instance();
        $country = $CI->setting_model->get_country_cache();
        foreach ($country as $c) {
            $clist[$c->code] = $c->name;
        }
        return (!empty($clist[$code])) ? $clist[$code] : '';
    }
    if (!empty($id)) {
        $clist = [];
        $CI = & get_instance();
        $country = $CI->setting_model->get_country_cache();
        foreach ($country as $c) {
            $clist[$c->id] = $c->name;
        }
        return (!empty($clist[$id])) ? $clist[$id] : '';
    }
}

function apptype($type = 'up', $get = 'text') {
    $CI = & get_instance();
    $application_type = $CI->setting_model->get_meta_value('app_type');
    if (!empty($application_type->mata_value)) {
        $m = json_decode($application_type->mata_value);
        return $m->$type->$get;
    }
}

function port_name($p_id) {
    $clist          =   [];
    $CI             =   & get_instance();
    $ap             =   $CI->setting_model->get_arrival_port_cache();
    foreach ($ap as $p) {
        $clist[$p->id] = $p->name;
    }
    return (!empty($clist[$p_id])) ? $clist[$p_id] : '';
}

?>