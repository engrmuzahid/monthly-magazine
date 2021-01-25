<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    var $client_id;
    var $user_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('article_model', '', TRUE);
    }

    function load_data() {
        login_check();

        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');

        return $data;
    }

    public function index($book_id = null) {
        $data = $this->load_data();
        $data['content_page'] = 'article/index';
        $data['book_id'] = $book_id;
        $data['categories'] = $this->common_model->get_all_data("category");
        $data['subjects'] = $this->common_model->get_all_data("subject");
        $data['writers'] = $this->common_model->get_all_writers();
        $data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        $this->load->view('template', $data);
    }

    /**
     * Load article list
     * @param type $offset 
     */
    function article_listing($book_id = null) {

        $data = $this->load_data();
        if ($book_id) {
        $data['results'] = $this->article_model->get_article_by_id($book_id);
        } else {
            $data['results'] = $this->article_model->get_all_article();
        }

        $this->load->view('article/article_listing', $data);
    }

    /**
     * Add an attribute 
     */
    function add_article() {
        $data = $this->load_data();

        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Article[title]', 'Title', 'required');
        $this->form_validation->set_rules('Article[description]', 'Description', 'required');

        if ($this->input->post('Article')) {

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

                if ($this->upload->do_upload('article_image')) {
                    $image_data = $this->upload->data();
                    $newname = 'article_image_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Article']['article_photo'] = $newname;
                }

                $article_id = $this->common_model->add_data("article", $_POST['Article']);
 
                $subjects = $this->input->post('subjects');
                for ($i=0;$i<count($subjects);$i++){
                    $assign_subjects_id =  array('article_id' =>$article_id ,
                                        'subject_id'=>$subjects[$i]
                     );
                    $this->common_model->add_data("subject_relation",$assign_subjects_id);
                }
             //   print_r($subjects);exit();

                echo 'DONE';
                
            } else {
                echo validation_errors();
            }
        }
    }

    public function edit_article($id) {

        $this->data = $this->load_data();

        $this->data['categories'] = $this->common_model->get_all_data("category");
        $this->data['bookinfo'] = $this->common_model->get_all_data("bookinfo");
        
        $this->data['subjects'] = $this->common_model->get_all_data("subject");
        $this->data['writers'] = $this->common_model->get_all_writers();
      $condition = array("id" => $id);
        $this->data['article'] = $this->common_model->get_data_by_id("article", $condition);

        $this->load->view("article/article_edit", $this->data);
    }

    public function int_edit_article($id) {
        $this->data = $this->load_data();
        $this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
        $this->form_validation->set_rules('Article[title]', 'Title', 'required');
        $this->form_validation->set_rules('Article[description]', 'Description', 'required');

        if ($this->input->post('Article')) {
            if ($this->form_validation->run()) {
                $config['upload_path'] = './assets/site/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size'] = 1024;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('article_image')) {
                    $image_data = $this->upload->data();
                    $newname = 'article_image_' . time() . $image_data['file_ext'];
                    rename($image_data['full_path'], $image_data['file_path'] . $newname);
                    $_POST['Article']['article_photo'] = $newname;
                }

                $condition = array("id" => $id);
                $this->common_model->update_data("article", $_POST['Article'], $condition);

                $this->db->delete("subject_relation", array("article_id" => $id));
                $subjects = $this->input->post('subjects');
                for ($i=0;$i<count($subjects);$i++){
                    $assign_subjects_id=  array('article_id' =>$id ,
                                        'subject_id'=>$subjects[$i]
                     );
                    $this->common_model->add_data("subject_relation",$assign_subjects_id);
                }

                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

    function delete_article($id) {
        $data = $this->load_data();
        $this->db->delete("article", array("id" => $id));
        $this->db->delete("subject_relation", array("article_id" => $id));
    }

}
