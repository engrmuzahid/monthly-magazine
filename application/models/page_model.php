<?php

class Page_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_page() {
        $results = $this->db->select("*")
                        ->from("page")
                        ->order_by("sort_order","DESC")
                        ->get()->result();

        
        return $results;
    }

}
