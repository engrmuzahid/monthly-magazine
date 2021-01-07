<?php

class Contacts extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function load() {
        
    }

    function index() {
        $this->data['title'] = "Admin Profile";
        // $this->data['page_script'] = array(
        //     'assets/scripts/contacts.js'
        // );
        $this->data['page_styles'] = array();
        $this->data['content_page'] = 'contacts/index';
        $this->load->view('template', $this->data);
    }

    function listing() {
        $this->data['result'] = $this->common_model->get_data('contact');
        $this->data['magazine'] = $this->db->select('title')->where('id', $this->data['result']->current_magazine_id)->get('bookinfo')->row();
        $this->load->view("contacts/listing", $this->data);
    }

    function formview($id = null) {
        $this->db->select('id, title');
        $this->db->order_by('publish_date', 'desc');
        $this->data['magazine_list'] = $this->db->get('bookinfo')->result();
        $this->data['result'] = $this->common_model->get_data('contact');
        $this->data['current_magazine_id'] = $this->data['result']->current_magazine_id;
        $this->load->view("contacts/edit", $this->data);
    }

    function addformdb($id = null) {
        $this->form_validation->set_error_delimiters('<div class="alert alert-sm alert-border-left alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="fa fa-info pr10"></i>', '</div>');

        $this->form_validation->set_rules('Contact[email]', 'Email', 'required');
        $this->form_validation->set_rules('Contact[address]', 'Address', 'required');
        if ($this->form_validation->run()) {

            //////.....For Image........///////////
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
            if ($this->upload->do_upload('img')) {
                $image_data = $this->upload->data();
                $newname = 'logo_' . time() . $image_data['file_ext'];
                rename($image_data['full_path'], $image_data['file_path'] . $newname);
                $_POST['Contact']['logo'] = $newname;
            }

            $config['upload_path'] = './assets/site/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1024;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('h_bg_image')) {
                $image_data = $this->upload->data();
                $newname = 'header_img_' . time() . $image_data['file_ext'];
                rename($image_data['full_path'], $image_data['file_path'] . $newname);
                $_POST['Contact']['h_bg_image'] = $newname;
            }
            
            /////......For Image....///////////////

            if ($id) {
                if (isset($newname)) {
                    $result = $this->common_model->get_data_for_contact('contact', '*', ['id' => $id]);
                    if ($result->logo != null) {
                        $path = "./assets/site/images/" . $result->logo;
                        @unlink($path);
                    }
                }
                $data = $_POST["Contact"];
                $this->common_model->update("contact", $data, ['id' => $id]);
                echo "DONE";
            }
        } else {
            echo validation_errors();
        }
    }


    public function delete($id) {
        $this->common_model->delete("category", ["id" => $id]);
    }

}
