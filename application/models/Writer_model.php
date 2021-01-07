<?php

class Writer_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_writer() {
        $results = $this->db->select("*")
                        ->from("writer")
                        ->order_by("sort_order","DESC")
                        ->get()->result();

        
        return $results;
    }

}
