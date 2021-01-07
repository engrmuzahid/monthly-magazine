<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Writer extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('writer_model', '', TRUE);
    }

    function load_data() {
        login_check();

        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'writer/index';
        //$data['categories'] = $this->common_model->get_all_data("category");
        $data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $this->load->view('template', $data);
    }

    /**
     * Load bookinfo list
     * @param type $offset 
     */
    function writer_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->writer_model->get_all_writer("writer");
        $this->load->view('writer/writer_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_writer() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Writer[writer_name]', 'Name', 'required');


        if ($this->input->post('Writer')) {
            if ($this->form_validation->run()) {

                if (!is_dir(getcwd() . '/assets/site/images/')) {
                    mkdir(getcwd() . '/assets/site/images/', 0777, true);
                    chmod(getcwd() . '/assets/site/images/', 0777);
                }

                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('writer_photo')) {
                    $image_data = $this->upload->data();
                    $newname = 'writer_photo_' .time(). $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Writer']['photo'] = $newname;
                }

                $writer_id = $this->common_model->add_data("writer", $_POST['Writer']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_writer($id) {

        $this->data = $this->load_data();
        //$this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $condition = array("id" => $id);
        $this->data['writer'] = $this->common_model->get_data_by_id("writer", $condition);

        $this->load->view("writer/writer_edit", $this->data);
    }

    public function int_edit_writer($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Writer[writer_name]', 'Name', 'required');

        if ($this->input->post('Writer')) {
            if ($this->form_validation->run()) {


                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('writer_photo_edit')) {
                    $image_data = $this->upload->data();
                    $newname = 'writer_photo_' .time(). $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Writer']['photo'] = $newname;
                }


                $condition = array("id" => $id);
                $this->common_model->update_data("writer", $_POST['Writer'], $condition);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_writer($id) {
        $data = $this->load_data();
        $this->db->delete("writer", array("id" => $id));
    }

}
