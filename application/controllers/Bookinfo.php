<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bookinfo extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('bookinfo_model', '', TRUE);
    }

    function load_data() {
        login_check();

        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'bookinfo/index';
        $data['categories'] = $this->common_model->get_all_data("category");
        $data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $this->load->view('template', $data);
    }

    /**
     * Load bookinfo list
     * @param type $offset 
     */
    function bookinfo_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->bookinfo_model->get_all_bookinfo("bookinfo");
        $this->load->view('bookinfo/bookinfo_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_bookinfo() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Bookinfo[title]', 'Title', 'required');


        if ($this->input->post('Bookinfo')) {
            if ($this->form_validation->run()) {
                // $_POST['Bookinfo']['publish_date'] = date("Y-m-01", strtotime($_POST['Bookinfo']['publish_date']));

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

                if ($this->upload->do_upload('cover_photo')) {
                    $image_data = $this->upload->data();
                    $newname = 'cover_photo_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Bookinfo']['cover_photo'] = $newname;
                }
                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('header_background')) {
                    $image_data = $this->upload->data();
                    $header_background = 'header_background_' .time(). $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $header_background);
                    $_POST['Bookinfo']['header_background'] = $header_background;
                }


//                $config2['upload_path'] = './assets/site/pdf/';
//                $config2['allowed_types'] = 'pdf';
//                $config2['max_size'] = 10240;
//                $config2['overwrite'] = TRUE;
//
//                $this->load->library('upload', $config2);
//                $this->upload->initialize($config2);
//
//                if ($this->upload->do_upload('pdf_url')) {
//                    $image_data = $this->upload->data();
//                    $newname1 = 'pdf_' . date("Y_m_01", strtotime($_POST['Bookinfo']['publish_date'])) . $image_data['file_ext'];
//                    rename($image_data['full_path'], $image_data['file_path'] . $newname1);
//
//                    $_POST['Bookinfo']['pdf_url'] = $newname1;
//                }

                $bookinfo_id = $this->common_model->add_data("bookinfo", $_POST['Bookinfo']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_bookinfo($id) {

        $this->data = $this->load_data();

        $this->data['categories'] = $this->common_model->get_all_data("category");
        $this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $condition = array("id" => $id);
        $this->data['bookinfo'] = $this->common_model->get_data_by_id("bookinfo", $condition);

        $this->load->view("bookinfo/bookinfo_edit", $this->data);
    }

    public function int_edit_bookinfo($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Bookinfo[title]', 'Title', 'required');

        if ($this->input->post('Bookinfo')) {
            if ($this->form_validation->run()) {


                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('cover_photo_edit')) {
                    $image_data = $this->upload->data();
                    $newname = 'cover_photo_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Bookinfo']['cover_photo'] = $newname;
                }


                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('header_background_edit')) {
                    $image_data = $this->upload->data();
                    $header_background = 'header_background_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $header_background);
                    $_POST['Bookinfo']['header_background'] = $header_background;
                }

                $condition = array("id" => $id);
                $this->common_model->update_data("bookinfo", $_POST['Bookinfo'], $condition);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_bookinfo($id) {
        $data = $this->load_data();
        $this->db->delete("bookinfo", array("id" => $id));
    }

}
