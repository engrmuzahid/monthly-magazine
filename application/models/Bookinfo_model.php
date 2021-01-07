<?php



class Bookinfo_Model extends CI_Model {



    var $CI;



    public function __construct() {

        parent::__construct();



        $this->CI = &get_instance();

    }



     function get_all_bookinfo() {

        $results = $this->db->select("bookinfo.*")

                        ->from("bookinfo as bookinfo")->order_by('id', 'DESC')->get()->result();





        return $results;

    }



}

