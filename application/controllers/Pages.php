<?php

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function load() {
        
    }

    function index() {
        $this->data['title'] = "Admin Profile";
        // $this->data['page_script'] = array(
        //     'assets/scripts/page.js'
        // );
        $this->data['page_styles'] = array();
        $this->data['content_page'] = 'pages/index';
        $this->load->view('template', $this->data);
    }

    function listing() {
        $this->data['results'] = $this->common_model->get_all_data('page');
        $this->load->view("pages/listing", $this->data);
    }

    function formview($id = null) {
        $this->data = [];
        if ($id) {
            $this->data['result'] = $this->common_model->get_data_for_menu('page', '*', array('id' => $id));
            $this->load->view("pages/edit", $this->data);
        } else {
            $this->load->view("pages/add", $this->data);
        }
    }

    function addformdb($id = null) {
        $this->form_validation->set_error_delimiters('<div class="alert alert-sm alert-border-left alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa fa-info pr10"></i>', '</div>');
  if ($id) {
        $this->form_validation->set_rules('Page[title]', 'Title', 'trim');
} else {
            $this->form_validation->set_rules('Page[title]', 'Title', 'required');
        }
        $this->form_validation->set_rules('Page[title]', 'Title', 'required');

        if ($this->form_validation->run()) {

            /////......For Slug.....//////////
            // if (isset($_POST['Page']['title'])) {
            //     $title = trim($_POST['Page']['title']);
            //     $tmp = explode(" ", $title);
            //     $_POST['Page']['slug'] = implode("-", $tmp);
            // }
            /////......For Slug.....//////////

            if ($id) {
                $data = $_POST["Page"];
                $this->common_model->update("page", $data, ['id' => $id]);
                echo "DONE";
            } else {
                $data = $_POST["Page"];
                $this->common_model->insert("page", $data);
                echo "DONE";
            }
        } else {
            echo validation_errors();
        }
    }

    public function delete($id) {
        $this->common_model->delete("page", ["id" => $id]);
    }

    function check_slug() {
        // $tmp = array();
        // $title = trim($this->input->post('title'));
        // $tmp = explode(" ", $title);
        // $title = implode("-", $tmp);
        // $result = $this->common_model->get_num_rows('page', '*', ['slug' => "'$title'"]);

        // if ($result > 0) {
        //     echo "Title Name Exist";
        // } else {
            
        // }
    }

}
