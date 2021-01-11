<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('common_model', '', TRUE);
        $this->load->model('users_model', '', TRUE);
    }

    function load_data() {
        login_check();
        $data['user_id'] = $this->user_id = $this->session->userdata('user_id');
        return $data;
    }

    public function index() {
        //$data = $this->load_data();

        $this->form_validation->set_error_delimiters('<h4 style="color:red">', '</h4>');
        $this->form_validation->set_rules('USER[username]', "Username", 'required');
        $this->form_validation->set_rules('USER[password]', "Password", 'required');

        $data['msg'] = '';
        if ($this->input->post('USER')) {
            if ($this->form_validation->run()) {
                if ($this->users_model->user_login()) {
                    redirect(site_url('home'));
                } else {
                    $data['msg'] = '<h4 style="color:red">Login failed! <br/>Your login information does not match!</h4>';
                }
            } else {
                $data['msg'] = validation_errors();
            }
        }
        $this->load->view('login', $data);
    }

    function user_logout() {

        $this->session->sess_destroy();
        $this->index();
    }


 
   
   
    
    public function import_data($b_id = 9) {
        //$user_id = @$_REQUEST['user_id'];
        
        
       // $book_id =array($b_id);
 
        $rdata = array('error' => 'Error occured while logging in', 'result' => null);

        $rdata['error'] = "";

        if ($rdata['error'] != "") {
            echo json_encode($rdata);
            exit();
        }
 


        $link = mysqli_connect("localhost", $this->db->username, $this->db->password);
        mysqli_select_db($link, $this->db->database);
        mysqli_query($link, "SET NAMES `utf8` COLLATE `utf8_general_ci`"); // Unicode

        $_bookinfo = $this->db->where('publish_date', date("Y-m-01",strtotime("NOW")))->get('bookinfo')->row();

          $book_id =array($_bookinfo->id);
        
        $tables = array('bookinfo','article','category');
        

        $rdata['result'] = array();

        foreach ($tables as $table) {



            $need_data = true;

            $condition = "";
 

        
            if ($table == 'bookinfo') {
                if ($book_id)
                    $condition = " WHERE `bookinfo`.`id` IN(" . implode(",", $book_id) . ")";
                
                $result = mysqli_query($link, "SELECT `bookinfo`.`id`,`bookinfo`.`title`,`bookinfo`.`sub_title`,`bookinfo`.`publication_by`,`bookinfo`.`publish_date` FROM `{$table}` {$condition}");

            if ($result) {


                $num_rows = mysqli_num_rows($result);

                if ($num_rows > 0) {

                    $new_insert = true;

                    $vals = array();
                    $z = 0;
                    $rdata['result'][] = "DELETE FROM `{$table}`";
                    for ($i = 0; $i < $num_rows; $i++) {
                        $items = mysqli_fetch_row($result);
                        $vals[$z] = "INSERT OR IGNORE INTO `{$table}` VALUES (";
                        for ($j = 0; $j < count($items); $j++) {
                            if (isset($items[$j])) {
                                $vals[$z].= "'" . strip_tags(str_replace("'", "''", $items[$j])) . "'";
                            } else {
                                $vals[$z].= "NULL";
                            }
                            if ($j < (count($items) - 1)) {
                                $vals[$z].= ",";
                            }
                        }
                        $vals[$z].= ")";

                        $rdata['result'][] = $vals[$z];

                        $z++;
                    }
                }
            }
                
                    
            }
            
            if ($table == 'article') {
                if ($book_id)
                    $condition = " WHERE `article`.`bookinfo_id` IN(" . implode(",", $book_id) . ")";
                
                 $result = mysqli_query($link, "SELECT `article`.`id`,`article`.`category_id`,`article`.`bookinfo_id`,`article`.`title`,`article`.`description`,`article`.`reference`,`article`.`writer`,`article`.`date`,`article`.`sort_order` FROM `{$table}` {$condition}");

            if ($result) {


                $num_rows = mysqli_num_rows($result);

                if ($num_rows > 0) {

                    $new_insert = true;

                    $vals = array();
                    $z = 0;
                    $rdata['result'][] = "DELETE FROM `{$table}`";
                    for ($i = 0; $i < $num_rows; $i++) {
                        $items = mysqli_fetch_row($result);
                        $vals[$z] = "INSERT OR IGNORE INTO `{$table}` VALUES (";
                        for ($j = 0; $j < count($items); $j++) {
                            if (isset($items[$j])) {
                                $vals[$z].= "'" . strip_tags(str_replace("'", "''", $items[$j])) . "'";
                            } else {
                                $vals[$z].= "NULL";
                            }
                            if ($j < (count($items) - 1)) {
                                $vals[$z].= ",";
                            }
                        }
                        $vals[$z].= ")";

                        $rdata['result'][] = $vals[$z];

                        $z++;
                    }

                  /*
                    $fp = fopen('dbfile.json', 'w');
                    fwrite($fp, json_encode($rdata));
                    fclose($fp);
                    */
                }
            }
            }

           
            if ($table == 'category') {
                
                $result = mysqli_query($link, "SELECT `category`.`id`,`category`.`parent_id`,`category`.`name`,`category`.`desc`,`category`.`type` FROM `{$table}` {$condition}");

            if ($result) {


                $num_rows = mysqli_num_rows($result);

                if ($num_rows > 0) {

                    $new_insert = true;

                    $vals = array();
                    $z = 0;
                    $rdata['result'][] = "DELETE FROM `{$table}`";
                    for ($i = 0; $i < $num_rows; $i++) {
                        $items = mysqli_fetch_row($result);
                        $vals[$z] = "INSERT OR IGNORE INTO `{$table}` VALUES (";
                        for ($j = 0; $j < count($items); $j++) {
                            if (isset($items[$j])) {
                                $vals[$z].= "'" . strip_tags(str_replace("'", "''", $items[$j])) . "'";
                            } else {
                                $vals[$z].= "NULL";
                            }
                            if ($j < (count($items) - 1)) {
                                $vals[$z].= ",";
                            }
                        }
                        $vals[$z].= ")";

                        $rdata['result'][] = $vals[$z];

                        $z++;
                    }
                }
            }
                
                    
            }
         
        }

        echo json_encode($rdata);
    }



}
