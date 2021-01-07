<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
    }

    function load_data() {
        login_check();

        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'comments/index';
        $this->load->view('template', $data);
    }

    /**
     * Load bookinfo list
     * @param type $offset 
     */
    function comment_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->frontend_model->get_all_comment();
        $this->load->view('comments/comment_list', $data);
    }

    public function approve_comment($id){
        $condition = array('id' => $id);
        $data = array('comment_status' => 1);
        $this->common_model->update_data('user_comments', $data, $condition);
        return redirect('/comments');
    }
    
    public function unapprove_comment($id){
        $condition = array('id' => $id);
        $data = array('comment_status' => 0);
        $this->common_model->update_data('user_comments', $data, $condition);
        return redirect('/comments');
    }


    function delete_comment($id) {
        $data = $this->load_data();
        $this->db->delete("user_comments", array("id" => $id));
        return redirect('/comments');
    }

}
