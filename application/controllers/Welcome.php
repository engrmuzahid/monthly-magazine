<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
   
    function __construct() {
        parent::__construct();
        $this->load->model('common_model', '', TRUE);
        $this->load->model('bookinfo_model', '', TRUE);
    }

	public function index(){
	    $magazine = $this->db->select('current_magazine_id')->get('contact')->row();
	    $id = $magazine->current_magazine_id;
	    $data['meta_desc'] = "";
		$data['page_type'] = 'home_page';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] = $data['site_info']->web_title;
		$data['menus'] = $this->frontend_model->get_menu_list();
        $data['categories'] = $this->frontend_model->get_all_category();
        $data['homepage_categories'] = $this->frontend_model->get_all_homepage_category();
        $data['notices'] = $this->frontend_model->get_all_notice_list();
        $data['sidebar_categories'] = '';
        $data['latest_articles'] = $this->frontend_model->get_latest_articles();
        $data['important_articles'] = $this->frontend_model->get_important_articles();
        $data['old_items'] = $this->frontend_model->old_items();
        $condition = array("id" => $id);
        $data['bookinfo'] = $this->common_model->get_data_by_id("bookinfo", $condition);
        $data['editor_article'] = $this->frontend_model->get_monthly_articles($id,3,0);
        // $data['featured_articles'] = $this->frontend_model->get_featured_articles($id,4,3);
        $data['monthly_articles'] = $this->frontend_model->get_monthly_articles($id,100,3);
        $data['breadcumb_section'] = '';
        //$data['month_name'] = $this->load->view('frontend/month_name', $data, TRUE);
        $data['main_content'] = $this->load->view('frontend/index', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar', $data, TRUE);
		$data['home_category_post'] = $this->load->view('frontend/home_category_post', $data, TRUE);
		$this->load->view('frontend/master', $data);

	}
	
	public function qapage(){
	    $magazine = $this->db->select('current_magazine_id')->get('contact')->row();
	    $id = $magazine->current_magazine_id;
	    
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
                $comment_data = array(
        		'address' => $sender_address,
                'full_name' =>$sender_name,
                'email' => $sender_email
            );

           $reader_id = $this->common_model->add_data('readers', $comment_data);
                  $qa_data = array(
        		'reader_id' => $reader_id,
                'qa_text' =>$text
            );
            $this->common_model->add_data('qa', $qa_data);
            
                $message = "FROM: At=tahrrek question & answer section <br>";
                $message .= "SENDER NAME : $sender_name</br>
                                SENDER EMAIL : $sender_email</br>
                                  SENDER ADDRESS : $sender_address</br><br>

                    $text
                    ";
                $this->load->library('email');
                $this->email->mailtype = 'html';
                $email = $this->email->from(trim($_POST['QA']['sender_email']), $_POST['QA']['sender_name'])
                        ->to("tahreek@ymail.com", "At Tahreek Desk")
                       // ->to("muzahid.ginilab@gmail.com", "At Tahreek Desk")
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
	    
	    $data['meta_desc'] = "Monthly At-Tahreek, Which is running from Rajshahi is an extra-ordinary Islamic Research Journal</br>
of Bangladesh is directed to Salafi Path, based on pure Tawheed and Saheeh Sunnah.";
		$data['page_type'] = 'home_page';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] = $data['site_info']->web_title;
		$data['menus'] = $this->frontend_model->get_menu_list();
        $data['categories'] = $this->frontend_model->get_all_category();
       // $data['homepage_categories'] = $this->frontend_model->get_all_homepage_category();
        $data['notices'] = $this->frontend_model->get_all_notice_list();
        $data['sidebar_categories'] = '';
        $data['latest_articles'] = $this->frontend_model->get_latest_articles();
        $data['important_articles'] = $this->frontend_model->get_important_articles();
        $data['old_items'] = $this->frontend_model->old_items();
        $condition = array("id" => $id);
        $data['bookinfo'] = $this->common_model->get_data_by_id("bookinfo", $condition);
        $data['editor_article'] = $this->frontend_model->get_monthly_articles($id,3,0); 
        $data['monthly_articles'] = $this->frontend_model->get_monthly_articles($id,100,3);
        $data['breadcumb_section'] = ''; 
        $data['main_content'] = $this->load->view('frontend/qapage', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar', $data, TRUE);
		$data['home_category_post'] = $this->load->view('frontend/home_category_post', $data, TRUE);
		$this->load->view('frontend/master', $data);
	}
	

	public function view_article_details($id){
		//update view count
		$current_view = $this->frontend_model->get_article_by_id($id); 
		if($current_view){
    		$update_view_count = array(
            	'view_count' => $current_view->view_count + 1,
            );
            $this->common_model->update('article', $update_view_count, array('id' => $id));
    
    		$data['page_type'] = 'single_page';
    		$data['site_info'] = $this->frontend_model->get_site_information();
    		$bookinfo = $this->common_model->get_data_by_id("article",array("id"=>$id));
    		$data['category_info'] = $this->common_model->get_data_by_id("category",array("id"=>$bookinfo->category_id));
    		$data['notices'] = $this->frontend_model->get_all_notice_list();
    		$data['sidebar_categories'] = $this->frontend_model->get_all_category();
    		$data['latest_articles'] = $this->frontend_model->get_latest_articles();
    		$data['important_articles'] = $this->frontend_model->get_important_articles();
            $data['old_items'] = $this->frontend_model->old_items();
            $condition = array("id" =>$bookinfo->bookinfo_id);
            $data['bookinfo'] = $this->common_model->get_data_by_id("bookinfo", $condition);
    		$data['menus'] = $this->frontend_model->get_menu_list();
            $data['article_details'] = $this->frontend_model->get_article_by_id($id); 
          //  print_r($data['article_details']);exit();
            $data['meta_desc'] = $data['article_details']->description;
            $data['comment_list'] = $this->frontend_model->get_approve_comment_list($id);
    
            $data['breadcumb_title'] = new stdClass();
            $data['breadcumb_title']->name =  $data['article_details']->title;
    		$data['breadcumb_month_name'] =  $data['bookinfo']->title;
    		$data['breadcumb_cat_name'] =  $data['category_info']->name;
    		$data['breadcumb_writer_name'] = $data['article_details']->writer_id >1 ? $data['article_details']->writer_name: $data['article_details']->writer;
    		$data['publish_date'] = $data['article_details']->date;
    		$data['s_view_count'] = $data['article_details']->view_count;
    		$data['title'] = $data['article_details']->title.','.$data['bookinfo']->title.' - '.$data['site_info']->web_title;
            $data['breadcumb_section'] = $this->load->view('frontend/styled_breadcumb', $data, TRUE); 
    		$data['main_content'] = $this->load->view('frontend/article_details', $data, TRUE);
    		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
    		$this->load->view('frontend/master', $data);
		}else{
		    redirect(site_url());
		}
	
	}
	public function page_content($slug){
	    $data['meta_desc'] = "";
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['menus'] = $this->frontend_model->get_menu_list();
        $data['page_content'] = $this->frontend_model->get_page_content($slug);
        $data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = $data['page_content']->title;
        $data['breadcumb_section'] =  $this->load->view('frontend/breadcumb', $data, TRUE);
        $data['title'] = $data['page_content']->title.' - '.$data['site_info']->web_title;
		$data['main_content'] = $this->load->view('frontend/page', $data, TRUE);
		$data['right_sidebar'] = '';
		$this->load->view('frontend/master', $data);
	}

	public function monthly_archive($id){
	    $data['meta_desc'] = "";
		$data['page_type'] = 'monthly_archive';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['menus'] = $this->frontend_model->get_menu_list();
        $data['sidebar_categories'] = $this->frontend_model->get_all_category();
        $data['notices'] = '';
        $data['month_id'] = $id;
        $data['latest_articles'] = $this->frontend_model->get_latest_articles();
        $data['important_articles'] = $this->frontend_model->get_important_articles();
        $data['old_items'] = $this->frontend_model->old_items();
        $condition = array("id" => $id);
        $data['show_pdf_btn'] = TRUE;
        $data['bookinfo'] = $this->common_model->get_data_by_id("bookinfo", $condition);
        $data['pdf_download_link'] = $data['bookinfo']->pdf_url;
        $data['editor_article'] = $this->frontend_model->get_monthly_articles($id,3,0);
        // $data['featured_articles'] = $this->frontend_model->get_featured_articles($id,4,3);
        $data['monthly_articles'] = $this->frontend_model->get_monthly_articles($id,100,3);
        //$data['month_name'] = $this->load->view('frontend/month_name', $data, TRUE);
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name =  $data['bookinfo']->title;
		$data['title'] = $data['bookinfo']->title.' - '.$data['site_info']->web_title;
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/monthly_archive', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
		$this->load->view('frontend/master', $data);
	}

	public function all_monthly_archive(){
	    $data['meta_desc'] = "";
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] = $data['site_info']->web_title." - "."সকল সংখ্যা";
		$data['menus'] = $this->frontend_model->get_menu_list();
        $data['old_items'] = $this->frontend_model->all_old_items();
        $data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = 'সকল সংখ্যা';
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/all_monthly_archive', $data, TRUE);
		$data['right_sidebar'] = '';
		$this->load->view('frontend/master', $data);
	}

	public function get_all_article_by_category($id){
	    $data['meta_desc'] = "";
		$data['page_type'] = 'category_archive';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$condition = array("id" => $id);
        $data['category_info'] = $this->common_model->get_data_by_id("category",$condition);
		$data['sidebar_categories'] = $this->frontend_model->get_all_category();
		$data['latest_articles'] = $this->frontend_model->get_latest_articles();
		$data['important_articles'] = $this->frontend_model->get_important_articles();
		$data['notices'] = '';
		$data['show_pdf_btn'] = FALSE;
        $data['old_items'] = $this->frontend_model->old_items();
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['category_articles'] = $this->frontend_model->getArticle($id);
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name =  $data['category_info']->name;
		$data['title'] =  $data['category_info']->name.' - '.$data['site_info']->web_title;
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/all_article', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
		$this->load->view('frontend/master', $data);
	}

	public function get_all_article_by_subject($id){
	    $data['meta_desc'] = "";
		$data['page_type'] = 'subject_archive';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$condition = array("id" => $id);
        $data['subject_info'] = $this->common_model->get_data_by_id("subject",$condition);
		$data['sidebar_subjects'] = $this->frontend_model->get_all_subject();
		$data['latest_articles'] = $this->frontend_model->get_latest_articles();
		$data['important_articles'] = $this->frontend_model->get_important_articles();
		$data['notices'] = '';
		$data['show_pdf_btn'] = FALSE;
        $data['old_items'] = $this->frontend_model->old_items();
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['subject_articles'] = $this->frontend_model->getArticleBySubject($id);
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name =  $data['subject_info']->subject_name;
		$data['title'] = $data['subject_info']->subject_name.' - '.$data['site_info']->web_title;
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/subject_archive', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
		$this->load->view('frontend/master', $data);
	}

	public function get_all_article_by_writer($id){
	    $data['meta_desc'] = "";
		$data['page_type'] = 'writer_archive';
		$data['detect_page_type'] = '';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$condition = array("id" => $id);
        $writer_info = $this->common_model->get_data_by_id("writer",$condition);
		$data['sidebar_categories'] = $this->frontend_model->get_all_category();
		$data['latest_articles'] = $this->frontend_model->get_latest_articles();
		$data['important_articles'] = $this->frontend_model->get_important_articles();
		$data['notices'] = '';
		$data['show_pdf_btn'] = FALSE;
		$data['writer_list'] = $this->frontend_model->get_all_writer_list();
        $data['old_items'] = $this->frontend_model->old_items();
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['writer_articles'] = $this->frontend_model->get_article_by_writer_id($id);
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = $writer_info->writer_name;
		$data['title'] = $writer_info->writer_name.' - '.$data['site_info']->web_title;
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/writer_archive', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
		$this->load->view('frontend/master', $data);
	}

	public function search_in_website(){
	    $data['meta_desc'] = "";
		$data['page_type'] = '';
		$data['site_info'] = $this->frontend_model->get_site_information();
		$search_keyword = $this->input->get('search');
		$data['sidebar_categories'] = $this->frontend_model->get_all_category();
		$data['latest_articles'] = $this->frontend_model->get_latest_articles();
		$data['important_articles'] = $this->frontend_model->get_important_articles();
		$data['notices'] = '';
        $data['old_items'] = $this->frontend_model->old_items();
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['search_items'] = $this->frontend_model->get_search_result($search_keyword);
		$data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name =  $search_keyword;
		$data['title'] = $search_keyword.' - '.$data['site_info']->web_title;
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
		$data['main_content'] = $this->load->view('frontend/search_result', $data, TRUE);
		$data['right_sidebar'] = $this->load->view('frontend/right_sidebar',$data, TRUE);
		$this->load->view('frontend/master', $data);
	}
	
	public function search_post() {
		$data['site_info'] = $this->frontend_model->get_site_information();
		$search_keyword = $this->input->get('search');
		$data['sidebar_categories'] = $this->frontend_model->get_all_category();
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['title'] = $data['site_info']->web_title;
		$data['main_content'] = $this->load->view('frontend/search_post', $data, TRUE);
		$this->load->view('frontend/master', $data);
	}
	
	public function search_suggestion() {
	    $output = "";
	    $category_id = $this->input->post('category_id');
	    $query = $this->input->post('query');
	    $result = array();
	    
	    if(!empty($category_id) && !empty($query)) {
	        $result = $this->db
                //->like('title',$query)
                ->like('description',$query)
                ->where('category_id', $category_id)
                ->limit(10)
                ->select('id, title, category_id, description')
                ->order_by('id', 'DESC')
                ->get('article')->result();
	    } elseif(empty($category_id) && !empty($query)) {
	        $result = $this->db
                ->like('title',$query)
                ->or_like('description',$query)
                ->limit(10)
                ->select('id, title, category_id, description')
                ->order_by('id', 'DESC')
                ->get('article')->result();
	    } else {
	        echo $output; exit();
	    }
	    
	    if(count($result) > 0) {
            $output = "<ul>";
            foreach($result as $row) {
                $output .= '<li><a href="'.base_url('article_details/'.$row->id).'"><i class="fa fa-long-arrow-right"></i> '.$row->title.'</a></li>';
            }
            $output .= "</ul>";
            echo $output;
        } else {
            $output = "<ul>";
            $output .= "<li><a>দুঃখিত কোন কিছু পাওয়া যায়নি</a></li>";
            $output .= "</ul>";
            echo $output;
        }
	    
	}
	
	public function find_search_result() {
	    $category_id = $this->input->post('category_id');
	    $query = $this->input->post('query');
	    //echo $category_id.'-'.$query; exit();
	    
	    if(!empty($category_id) && !empty($query)) {
	        //echo $category_id.'-'.$query; exit();
	       // $data['result'] = $this->db
        //         //->like('title',$query)
        //         ->like('description',$query)
        //         ->where('category_id', $category_id)
        //         ->limit(15)
        //         ->select('id, title, category_id, description')
        //         ->order_by('id', 'DESC')
        //         ->get('article')->result();
                
                $this->db->select('article.*, category.name as category_name, bookinfo.title as book_name, writer.writer_name');
                $this->db->from('article');
                $this->db->join('category', 'category.id = article.category_id');
                $this->db->join('bookinfo', 'bookinfo.id = article.bookinfo_id');
                $this->db->join('writer', 'writer.id = article.writer_id');
                $this->db->like('article.description',$query);
                $this->db->where('article.category_id', $category_id);
                $this->db->limit(100);
                $this->db->order_by('article.id', 'DESC');
                $data['result'] = $this->db->get()->result();
            
	    } elseif(!empty($category_id) && empty($query)) {
	        //echo $category_id; exit();
	       // $data['result'] = $this->db
        //         ->where('category_id', $category_id)
        //         ->limit(15)
        //         ->select('id, title, category_id, description')
        //         ->order_by('id', 'DESC')
        //         ->get('article')->result();
        
                $this->db->select('article.*, category.name as category_name, bookinfo.title as book_name, writer.writer_name');
                $this->db->from('article');
                $this->db->join('category', 'category.id = article.category_id');
                $this->db->join('bookinfo', 'bookinfo.id = article.bookinfo_id');
                $this->db->join('writer', 'writer.id = article.writer_id');
                $this->db->where('article.category_id', $category_id);
                $this->db->limit(100);
                $this->db->order_by('article.id', 'DESC');
                $data['result'] = $this->db->get()->result();
	    } elseif(empty($category_id) && !empty($query)) {
	        //echo $query; exit();
	       // $data['result'] = $this->db
        //         ->like('title',$query)
        //         ->or_like('description',$query)
        //         ->limit(15)
        //         ->select('id, title, category_id, description')
        //         ->order_by('id', 'DESC')
        //         ->get('article')->result();
                
            $this->db->select('article.*, category.name as category_name, bookinfo.title as book_name, writer.writer_name');
            $this->db->from('article');
            $this->db->join('category', 'category.id = article.category_id');
            $this->db->join('bookinfo', 'bookinfo.id = article.bookinfo_id');
            $this->db->join('writer', 'writer.id = article.writer_id');
            $this->db->like('article.title',$query);
            $this->db->or_like('article.description',$query);
            $this->db->limit(100);
            $this->db->order_by('article.id', 'DESC');
            $data['result'] = $this->db->get()->result();
	    } else {
	        $data['result'] = array();
	    }
	    
	    $this->load->view('frontend/load_search_result', $data);
	}

	public function get_writer_list(){
	    $data['meta_desc'] = "";
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] = "লেখকগণ";' - '.$data['site_info']->web_title;	
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = 'লেখকগণ';
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
        $data['writer_list'] = $this->frontend_model->get_all_data_by_sorting('writer');
		$data['main_content'] = $this->load->view('frontend/writer_list', $data, TRUE);
		$data['right_sidebar'] = '';
		$this->load->view('frontend/master', $data);
	}

	public function get_category_list(){
	    $data['meta_desc'] = "";
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] =  "বিভাগসমূহ".' - '.$data['site_info']->web_title;
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = 'বিভাগসমূহ';
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
        $data['category_list'] = $this->frontend_model->get_all_data_by_sorting('category');
		$data['main_content'] = $this->load->view('frontend/category_list', $data, TRUE);
		$data['right_sidebar'] = '';
		$this->load->view('frontend/master', $data);
	}

	public function get_subject_list(){
	    $data['meta_desc'] = "";
		$data['site_info'] = $this->frontend_model->get_site_information();
		$data['title'] = "বিষয়সমূহ".' - '.$data['site_info']->web_title;
		$data['menus'] = $this->frontend_model->get_menu_list();
		$data['show_pdf_btn'] = FALSE;
        $data['breadcumb_title'] = new stdClass();
        $data['breadcumb_title']->name = 'বিষয়সমূহ';
        $data['breadcumb_section'] = $this->load->view('frontend/breadcumb', $data, TRUE);
        $data['subject_list'] = $this->frontend_model->get_all_data_by_sorting('subject');
		$data['main_content'] = $this->load->view('frontend/subject_list', $data, TRUE);
		$data['right_sidebar'] = '';
		$this->load->view('frontend/master', $data);
	}

	public function ___comment_store(){
		$this->form_validation->set_error_delimiters('<div class="alert alert-dismissable alert-danger">', '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>');
		$this->form_validation->set_rules('commenter_name', 'Name', 'required');
        $this->form_validation->set_rules('commenter_email', 'Email', 'required|valid_email');

        if ($this->form_validation->run()) {
        	$comment_data = array(
        		'article_id' => $this->input->post('article_id'),
        		'comment' => $this->input->post('comment', TRUE),
                'commenter_name' => $this->input->post('commenter_name', TRUE),
                'commenter_email' => $this->input->post('commenter_email', TRUE),
                'comment_status' =>1,
            );
            $this->common_model->add_data('user_comments', $comment_data);
        	echo "DONE";
        }else {
        	echo validation_errors();
        }
	}

	public function get_comment_list(){
		return $data['result'] = 'Abu bokkor';
	}
	
	
	public function sitemap(){
	       
		$data['menus'] = $this->frontend_model->get_menu_list(); 
		$this->load->view('sitemap', $data);

	}

}

?>