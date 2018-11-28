<?php

function load_ci() {
    return $CI =& get_instance();
}

if( ! function_exists('flashdata') ) {
    function flashdata ($key) {
        return load_ci()->session->flashdata($key);
    }
}

?>