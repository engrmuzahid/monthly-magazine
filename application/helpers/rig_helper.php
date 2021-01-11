<?php

function format_date($datetime) {
    return date('M,d Y H:i:s', strtotime($datetime));
}

function get_coverage_area($restaurant_id) {
    $CI = &get_instance();
    $CI->load->model('restaurant_model');
    return $CI->restaurant_model->get_coverage_area($restaurant_id);
}

function login_check() {
    $CI = &get_instance();
    if (!$CI->session->userdata('user_id')) {
        redirect(site_url('login'));
    }
}

