<?php

class Users_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

 
    function user_login() {
        $user = $_POST['USER'];
        $this->db->where(array('email'=> $user['username'],'password'=>  md5($user['password'])));

        $_user = $this->db->get('users');
       
//        print_r($_POST['USER']);
//        print_r($this->db->last_query());
//        print_r($_user->row());
//        exit();
//        
        if ($_user->num_rows() > 0) {
            $user = $_user->row();

            //Set the session for the logged in user
            $user_array = array(
                'user_name' => "$user->full_name",
                'user_id' => $user->id,
                'user_email' => $user->email
            );

            $this->session->set_userdata($user_array);
            return true;
        }
        return false;
    }

  

 
    function SendEmail($from, $from_name, $to, $subject, $message, $mailtype = 'text', $attach = null) {
        $this->load->library('email');
        $this->email->to($to);
        $this->email->from($from, $from_name);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->mailtype = $mailtype;
        $this->email->send();
    }

}
