<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
        $data['content_page'] = 'user/index'; 
        $data['types'] = $this->common_model->get_all_data("user_types");
        $this->load->view('template', $data);
    }

    /**
     * Load user list
     * @param type $offset 
     */
    function user_listing($offset = 0) {

        $data = $this->load_data();
        $data['results'] = $this->common_model->get_all_data("users");
        $this->load->view('user/user_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_user() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<h4 style="color:red">', '</h4>');
        $this->form_validation->set_rules('User[first_name]', 'First Name', 'required');
        $this->form_validation->set_rules('User[email]', 'Email', 'required'); 
        $this->form_validation->set_rules('User[user_type_id]', 'User Type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'required|matches[password]');
        if ($this->input->post('User')) {
            if ($this->form_validation->run()) {
                if (!is_dir(getcwd() . '/assets/images/user/')) {
                    mkdir(getcwd() . '/assets/images/user/', 0777, true);
                    chmod(getcwd() . '/assets/images/user/', 0777);
                }

                $config['upload_path'] = './assets/images/user/';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['overwrite'] = TRUE;


                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('image_url')) {

                    $image_data = $this->upload->data();
                     $newname = time() . '_user' . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['User']['image_url'] = base_url() . '/assets/images/user/' . $newname;
                }
                $_POST['User']['password']= sha1($_POST['password']); 
                $this->common_model->add_data("users", $_POST['User']);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_user($id) {
        $data = $this->load_data();
        $this->db->delete("users", array("id" => $id));
    }

}
