<?php

class Category_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_category() {
        $results = $this->db->select("*")
                        ->from("category")
                        ->order_by("sort_order","DESC")
                        ->get()->result();

        
        return $results;
    }

}
