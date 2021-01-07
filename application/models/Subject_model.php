<?php

class Subject_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_subject() {
        $results = $this->db->select("*")
                        ->from("subject")
                        ->order_by("sort_order","DESC")
                        ->get()->result();

        
        return $results;
    }

}
