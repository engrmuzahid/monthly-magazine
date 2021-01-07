<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('page_model', '', TRUE);
    }

    function load_data() {
        login_check();
        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'page/index';
        $data['bookinfo'] = $this->common_model->get_all_data("page");
        $this->load->view('template', $data);
    }

    /**
     * Load page list
     * @param type $offset 
     */
    function page_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->page_model->get_all_page("page");
        $this->load->view('page/page_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_page() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Page[page_title]', 'Title', 'required');
        $this->form_validation->set_rules('Page[description]', 'Description', 'trim');

        if ($this->input->post('Page')) {
            if ($this->form_validation->run()) {

                $page_id = $this->common_model->add_data("page", $_POST['Page']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_page($id) {

        $this->data = $this->load_data();

        $this->data['categories'] = $this->common_model->get_all_data("page");
        $this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $condition = array("id" => $id);
        $this->data['page'] = $this->common_model->get_data_by_id("page", $condition);

        $this->load->view("page/page_edit", $this->data);
    }

    public function int_edit_page($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Page[page_title]', 'Title', 'required');
        $this->form_validation->set_rules('Page[description]', 'Description', 'trim');
        if ($this->input->post('Page')) {
            if ($this->form_validation->run()) {
                $condition = array("id" => $id);
                $this->common_model->update_data("page", $_POST['Page'], $condition);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_page($id) {
        $data = $this->load_data();
        $this->db->delete("page", array("id" => $id));
    }

}
