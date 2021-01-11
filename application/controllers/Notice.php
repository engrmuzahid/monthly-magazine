<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('notice_model', '', TRUE);
    }

    function load_data() {
        login_check();

        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index() {
        $data = $this->load_data();
        $data['content_page'] = 'notice/index';
        $data['notice'] = $this->common_model->get_all_data("notice");
        $this->load->view('template', $data);
    }

    /**
     * Load notice list
     * @param type $offset 
     */
    function notice_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->notice_model->get_all_notice("notice");
        $this->load->view('notice/notice_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_notice() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Notice[notice_title]', 'Title', 'required');
        $this->form_validation->set_rules('Notice[link_address]', 'Link address', 'required');


        if ($this->input->post('Notice')) {
            if ($this->form_validation->run()) {
                if (!is_dir(getcwd() . '/assets/site/notice/')) {
                    mkdir(getcwd() . '/assets/site/notice/', 0777, true);
                    chmod(getcwd() . '/assets/site/notice/', 0777);
                }

                $config['upload_path'] = './assets/site/notice/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image_url')) {
                    $image_data = $this->upload->data();
                    $newname = 'notice_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);

                    $_POST['Notice']['image_url'] = $newname;
                }


                $notice_id = $this->common_model->add_data("notice", $_POST['Notice']);

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_notice($id) {

        $this->data = $this->load_data();

        $condition = array("id" => $id);
        $this->data['notice'] = $this->common_model->get_data_by_id("notice", $condition);

        $this->load->view("notice/notice_edit", $this->data);
    }

    public function int_edit_notice($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Notice[notice_title]', 'Title', 'required');
        $this->form_validation->set_rules('Notice[link_address]', 'Link address', 'required');

        if ($this->input->post('Notice')) {
            if ($this->form_validation->run()) {

                if (!is_dir(getcwd() . '/assets/site/notice/')) {
                    mkdir(getcwd() . '/assets/site/notice/', 0777, true);
                    chmod(getcwd() . '/assets/site/notice/', 0777);
                }

                $config['upload_path'] = './assets/site/notice/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image_url')) {
                    $image_data = $this->upload->data();
                    $newname = 'notice_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);

                    $_POST['Notice']['image_url'] = $newname;
                }

                $condition = array("id" => $id);
//                if(){
                $this->common_model->update_data("notice", $_POST['Notice'], $condition);
                echo 'DONE';
//                }else{
//                    echo '<div class="alert alert-dismissable alert-danger"> Please try again !<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
//                }
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_notice($id) {
        $data = $this->load_data();
        $this->db->delete("notice", array("id" => $id));
    }

}
