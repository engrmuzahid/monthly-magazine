<?php

function render_view($data, $method) {
    $ci = &get_instance();
    $data['monthinfo'] = $ci->site_model->get_bookinfo();
    $data['notices'] = $ci->site_model->get_notices();
    $data['content_page'] = "site/" . $method;
    $template = 'site/template';

    $ci->load->view($template, $data);
}

function login_check() {
    $CI = &get_instance();
    if (!$CI->session->userdata('user_id')) {
        redirect(site_url('login'));
    }
}

function other_view($data, $method) {
    $ci = &get_instance();

    $data['monthinfo'] = $ci->site_model->get_bookinfo();
    $data['notices'] = $ci->site_model->get_notices();
    $content_page = "site/" . $method;
    $ci->load->view($content_page, $data);
}



function get_articles($catid) {
    $ci = &get_instance();
    $data = $ci->frontend_model->getArticle($catid);
    return $data;
}

function get_category_articles($category_id) {
    $ci = &get_instance();
    $data = $ci->frontend_model->get_category_monthly_articles($category_id);
    return $data;
}

function get_monthly_category_articles($month_id, $category_id) {
    $ci = &get_instance();
    $data = $ci->frontend_model->get_category_monthly_articles_new($month_id, $category_id);
    return $data;
}

function get_five_articles($catid){
    $ci = &get_instance();
    $data = $ci->frontend_model->getFiveArticle($catid);
    return $data;
}

function get_related_articles_by_category($catid){
    $ci = &get_instance();
    $data = $ci->frontend_model->get_related_articles_by_category($catid);
    return $data;
}

function convertdate($string) {
    $search_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ":", ",");
    $replace_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", ":", ",");
    $bn_number = str_replace($search_array, $replace_array, $string);
    return $bn_number;
}


function bn_date($str)
{
    $en = array(1,2,3,4,5,6,7,8,9,0);
   $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
   $str = str_replace($en, $bn, $str);
   $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
   $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
   $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
   $str = str_replace( $en, $bn, $str );
   $str = str_replace( $en_short, $bn, $str );
   $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
    $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
    $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
    $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
    $str = str_replace( $en, $bn, $str );
    $str = str_replace( $en_short, $bn_short, $str );
    $en = array( 'am', 'pm' );
   $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
   $str = str_replace( $en, $bn, $str );
    return $str;
}

if ( ! function_exists('shorten_string'))
{
   function shorten_string($string, $wordsreturned)
   {
       $retval = $string;
       $array = explode(" ", $string);
       if (count($array)<=$wordsreturned)
       {
           $retval = $string;
       }
       else
       {
           array_splice($array, $wordsreturned);
           $retval = implode(" ", $array)." ";
       }
       return $retval;
   }
}


