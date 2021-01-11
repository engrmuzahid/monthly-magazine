<?php

class Information_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

    function get_informations($id) {
        $results = $this->db->select("information.*,services.service_name,thana.thana_name")
                        ->from("information as information")
                        ->join("services as services", "information.service_id = services.id")
                        ->join("thana as thana", "information.thana_id = thana.id")
                        ->where("thana.district_id", $id)
                        ->get()->result();


        return $results;
    }

}
