<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('category_model', '', TRUE);
    }

    function load_data() {
        login_check();
        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'category/index';
        $data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $this->load->view('template', $data);
    }

    /**
     * Load category list
     * @param type $offset 
     */
    function category_listing($offset = 0) {

        $data = $this->load_data();
        //   print_r($division_id);
        //  exit();
        $data['results'] = $this->category_model->get_all_category("category");
        $this->load->view('category/category_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_category() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Category[name]', 'Name', 'required');

        if ($this->input->post('Category')) {
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

                if ($this->upload->do_upload('cat_image')) {
                    $image_data = $this->upload->data();
                    $newname = 'category_image_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Category']['cat_image'] = $newname;
                }

                $category_id = $this->common_model->add_data("category", $_POST['Category']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_category($id) {

        $this->data = $this->load_data();

        $this->data['categories'] = $this->common_model->get_all_data("category");
        $this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $condition = array("id" => $id);
        $this->data['category'] = $this->common_model->get_data_by_id("category", $condition);

        $this->load->view("category/category_edit", $this->data);
    }

    public function int_edit_category($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Category[name]', 'Name', 'required');
        if ($this->input->post('Category')) {
            if ($this->form_validation->run()) {
                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('cat_image')) {
                    $image_data = $this->upload->data();
                    $newname = 'category_image_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Category']['cat_image'] = $newname;
                }
                
                $condition = array("id" => $id);
                $this->common_model->update_data("category", $_POST['Category'], $condition);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_category($id) {
        $data = $this->load_data();
        $this->db->delete("category", array("id" => $id));
    }

}
