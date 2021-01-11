<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
    }


    function load_data() {
        login_check();
        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');
        return $data;

    }



    public function index() {
        $data = $this->load_data();
        $this->load->view('dashboard', $data);
    }

   public function error_404() {
        $data = $this->load_data();
        $this->load->view('error_404', $data);
    }

}

