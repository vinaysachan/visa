<?php

/**
 * 
 * @param type $dob
 * @param type $input_format default 'm/d/Y'
 * @param type $output_format default 'd/m/Y'
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

?>