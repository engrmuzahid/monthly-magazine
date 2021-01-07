<?php

class Menu extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function load() {
        
    }

    function index() {
        $this->data['title'] = "Admin Profile";
        // $this->data['page_script'] = array(
        //     'assets/scripts/menu.js'
        // );
        $this->data['page_styles'] = array();
        $this->data['content_page'] = 'menu/index';
        $this->load->view('template', $this->data);
    }

    function listing() {
        $menu_cat = array();
        $results = $this->common_model->get_all_data('menu');

        foreach ($results as $key => $result) {
            $menu_cat[$key]['name'] = $result->name;
            $menu_cat[$key]['id'] = $result->id;
            $menu_cat[$key]['status'] = $result->status;
            $menu_cat[$key]['sort_order'] = $result->sort_order;
            $menu_cat[$key]['is_custom'] = $result->is_custom;
            if ($result->parent_id == 0) {
                $menu_cat[$key]['parent_name'] = "";
            } else {
                foreach ($results as $parentChek) {
                    if ($result->parent_id == $parentChek->id) {
                        $menu_cat[$key]['parent_name'] = $parentChek->name;
                    }
                }
            }
        }
        $this->data['results'] = $menu_cat;
        $this->load->view("menu/listing", $this->data);
    }

    function formview($id = null) {
        $this->data['menus'] = $this->common_model->get_all_data('menu');
        if ($id) {
            $this->data['result'] = $this->common_model->get_data_for_menu('menu', '*', array('id' => $id));
            $this->load->view('menu/edit', $this->data);
        } else {
            $this->load->view("menu/add", $this->data);
        }
    }

    function addformdb($id = null) {
        $this->form_validation->set_error_delimiters('<div class="alert alert-sm alert-border-left alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa fa-info pr10"></i>', '</div>');

        $this->form_validation->set_rules('Menu[name]', 'Name', 'required');
        $this->form_validation->set_rules('Menu[menu_url]', 'Content type', 'required');

        if ($this->form_validation->run()) {
            if ($id) {
                $data = $_POST["Menu"];
                $this->common_model->update("menu", $data, ['id' => $id]);
                echo "DONE";
            } else {
                $data = $_POST["Menu"];
                $this->common_model->insert("menu", $data);
                echo "DONE";
            }
        } else {
            echo validation_errors();
        }
    }

    public function delete($id) {
        $this->common_model->delete("menu", ["id" => $id]);
    }

    function pagetype() {
        $type = $this->input->post('type');
        $this->data['type'] = $type;
        if ($type != 'custom') {
            if ($type == 'page') {
                $this->data['results'] = $this->common_model->get_all_data($type);
            } else {
                $this->data['results'] = array((object) array(
                        'slug' => $type,
                        'title' => ucfirst($type)
                ));
            }
        }
        $this->load->view('menu/pagetype', $this->data);
    }

}
