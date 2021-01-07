<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SiteNew extends CI_Controller {

    var $book_id;

    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('site_model', '', TRUE);
        $this->book_id = null;
    }

    public function index($book_id = null) {

        $data = "";
        $this->session->set_userdata("visit_month", date("MY", strtotime("NOW")));
        if ($book_id) {
            $this->book_id = $book_id;
            $data['book_id'] = $book_id;
        }

        //left sidebar content
        if ($this->input->post("bookID")) {
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;

            $data['categories'] = $this->site_model->get_categories($book_id);
        } else {
            $data['categories'] = $this->site_model->get_categories();
        }
        $data['leftsidebar_content'] = $this->load->view('site/leftnav', $data, TRUE);

        //post content
        if ($this->input->post("bookID")) {
            $this->session->set_userdata("visit_month", $this->input->post("bookID"));
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;
            $data['articles'] = $this->site_model->get_data_for_mainindex($book_id);
        } else {
            $this->session->set_userdata("visit_month", date("MY", strtotime("NOW")));
            $data['articles'] = $this->site_model->get_data_for_mainindex();
        }
        $data['post_content'] = $this->load->view('site/index', $data, TRUE);

        render_view($data, 'index');
    }

    public function archive($month = NULL) {
        $data = "";
        if (!$month)
            $month = date("MY", strtotime("NOW"));

        $this->session->set_userdata("visit_month", $month);
        render_view($data, 'index');
    }

    public function editor() {
        $data = "";
        other_view($data, 'editor');
    }

    public function contactus() {
        $data = "";
        other_view($data, 'contactus');
    }

    public function download() {
        $data = "";
        $data['bookinfo'] = $this->site_model->get_bookinfo_by_month($this->session->userdata("visit_month"));
        //  echo $this->db->last_query();
        //   echo $this->session->userdata("visit_month");
        //   print_r($data);
        //           exit();
        other_view($data, 'download');
    }

    public function banglaproblem() {
        $data = "";
        other_view($data, 'banglaproblem');
    }

    public function qapage() {
        $data = "";

        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $this->form_validation->set_rules('QA[sender_name]', 'Your Name', 'required');
        $this->form_validation->set_rules('QA[sender_email]', 'Your Email', 'required|valid_email');
        $this->form_validation->set_rules('QA[sender_address]', 'Your Address', 'required');
        $this->form_validation->set_rules('QA[question]', 'Your Question', 'required');

        if ($this->input->post('QA')) {
            if ($this->form_validation->run()) {
                $text = $_POST['QA']['question'];
                $sender_name = $_POST['QA']['sender_name'];
                $sender_email = $_POST['QA']['sender_email'];
                $sender_address = $_POST['QA']['sender_address'];
                $message = "FROM: Question&answer section www.at-tahreek.com.<br>";
                $message .= "SENDER NAME : $sender_name</br>
                                SENDER EMAIL : $sender_email</br>
                                  SENDER ADDRESS : $sender_address</br>
                             _____________________________________________<br><br>

                    $text
                    ";
                $this->load->library('email');
                $this->email->mailtype = 'html';
                $email = $this->email->from(trim($_POST['QA']['sender_email']), $_POST['QA']['sender_name'])
                        ->to("tahreek@ymail.com", "At Tahreek Desk")
                        ->reply_to(trim($_POST['QA']['sender_email']), $_POST['QA']['sender_name'])
                        ->subject("At-Tahreek Question")
                        ->message($message)
                        ->send();
                if ($email) {
                    $data['success'] = "Thank you! Your message has been sent.";
                } else {
                    $data['error'] = "There are some problem occer ! So  your message hasn't been sent.Please try again";
                }
            }
        }




        other_view($data, 'qapage');
    }

    public function leftmenu($book_id = null) {
        if ($this->input->post("bookID")) {
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;

            $data['categories'] = $this->site_model->get_categories($book_id);
        } else {
            $data['categories'] = $this->site_model->get_categories();
        }
        $this->load->view('site/leftnav', $data);
    }

    public function load_cover_image($book_id = null) {

        if ($this->input->post("bookID")) {
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;
            $data = $this->site_model->load_cover_image($book_id);
            $url = $data->cover_photo ? $data->cover_photo : "";
            $download_url = $data->pdf_url ? $data->pdf_url : "";
        } else {
            $$data = $this->site_model->load_cover_image();
            $url = $data->cover_photo ? $data->cover_photo : "";
            $download_url = $data->pdf_url ? $data->pdf_url : "";
        }
        echo '<img src="' . base_url() . 'assets/site/images/' . $url . '" alt="At-Tahreek" width="186" height="247" /> <br/> <br/> <p style="text-align:center;margin:0px;" ><a style="text-align:center;" target="_blank" href="http://' . $download_url . '"><img src="' . base_url() . 'assets/img/download_btn.png" alt="DOWNLOAD" /></a></p>';
    }

    public function load_header_image($book_id = null) {
        if ($this->input->post("bookID")) {
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;
            $url = $this->site_model->load_header_image($book_id);
        } else {
            $url = $this->site_model->load_header_image();
        }
        echo base_url() . 'assets/site/images/' . $url;
    }

    public function details() {

        $cat_id = $_GET["catID"];
        $pub_date = date("Y-m-01", strtotime($_GET["monthName"])); //date("Y-m-01", strtotime($this->session->userdata("visit_month") ? $this->session->userdata("visit_month") : date("MY", strtotime("NOW"))));
        $book = $this->db->select("id")->from("bookinfo")->where("publish_date", $pub_date)->get()->row();
   
        $book_id = $book->id;
        $this->session->set_userdata("visit_month", $_GET["monthName"]);
        $articles = $this->site_model->get_data_by_category($cat_id, $book_id);
         

        if ($articles->num_rows() > 0) {

            $data['articles'] = $articles->result();
            $data['content_page'] = "site/article_listing";
        } else {

            $data['content_page'] = "site/article_not_found";
        }
        $data['monthinfo'] = $this->site_model->get_bookinfo();
        $data['notices'] = $this->site_model->get_notices();
        $this->load->view('site/template_details', $data);
    }

    public function mainindex() {

        if ($this->input->post("bookID")) {
            $this->session->set_userdata("visit_month", $this->input->post("bookID"));
            $book = $this->db->select("id")->from("bookinfo")->where("publish_date", date("Y-m-01", strtotime($this->input->post("bookID"))))->get()->row();
            $book_id = $book->id;
            $data['articles'] = $this->site_model->get_data_for_mainindex($book_id);
        } else {
            $this->session->set_userdata("visit_month", date("MY", strtotime("NOW")));
            $data['articles'] = $this->site_model->get_data_for_mainindex();
        }
        $this->load->view('site/index', $data);
    }

    public function show($id) {
        $data['article'] = $this->site_model->get_data_by_id($id);
        $this->session->set_userdata("visit_month",date("MY",  strtotime($data['article']->publish_date)));
           
        other_view($data, 'details');
    }

    public function load_user_comments($id) {
        $data['user_comments'] = $this->site_model->get_user_comments($id);
        $this->load->view('site/comments', $data);
    }

    public function send_comments() {

        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $this->form_validation->set_rules('QA[commenter_name]', 'Name', 'required');
        $this->form_validation->set_rules('QA[commenter_email]', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('QA[comments]', 'Comments', 'required');

        if ($this->input->post('QA')) {
            if ($this->form_validation->run()) {
                $this->common_model->add_data("user_comments", $_POST['QA']);
                echo 'DONE';
            } else {
                echo validation_errors();
            }
        }
    }

}

//  ALTER TABLE `notice` ADD `min_height` VARCHAR( 50 ) NOT NULL DEFAULT '65px' AFTER `link_address` ;
