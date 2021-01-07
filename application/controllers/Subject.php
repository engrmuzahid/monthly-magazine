<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('subject_model', '', TRUE);
    }

    function load_data() {
        login_check();
        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'subject/index';
        $data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $this->load->view('template', $data);
    }

    /**
     * Load subject list
     * @param type $offset 
     */
    function subject_listing($offset = 0) {

        $data = $this->load_data();
        //   print_r($division_id);
        //  exit();
        $data['results'] = $this->subject_model->get_all_subject("subject");
        $this->load->view('subject/subject_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_subject() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Subject[subject_name]', 'Name', 'required');
        $this->form_validation->set_rules('Subject[subject_description]', 'Description', 'trim');

        if ($this->input->post('Subject')) {
            if ($this->form_validation->run()) {

                $subject_id = $this->common_model->add_data("subject", $_POST['Subject']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_subject($id) {

        $this->data = $this->load_data();

        $this->data['categories'] = $this->common_model->get_all_data("subject");
        $this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $condition = array("id" => $id);
        $this->data['subject'] = $this->common_model->get_data_by_id("subject", $condition);

        $this->load->view("subject/subject_edit", $this->data);
    }

    public function int_edit_subject($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Subject[subject_name]', 'Name', 'required');
        $this->form_validation->set_rules('Subject[subject_description]', 'Description', 'required');
        if ($this->input->post('Subject')) {
            if ($this->form_validation->run()) {
                $condition = array("id" => $id);
                $this->common_model->update_data("subject", $_POST['Subject'], $condition);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_subject($id) {
        $data = $this->load_data();
        $this->db->delete("subject", array("id" => $id));
    }

}
