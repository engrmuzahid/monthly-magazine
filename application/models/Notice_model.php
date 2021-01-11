<?php

class Notice_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_notice() {
        $results = $this->db->select("*")->from("notice")->order_by("sort_order")->get()->result();


        return $results;
    }

}
