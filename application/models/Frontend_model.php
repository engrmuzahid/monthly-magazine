<?php
class Frontend_Model extends CI_Model {

	public function get_menu_list(){
		$this->db->where('status', 1);
		$this->db->order_by('sort_order', 'ASC');
		$result = $this->db->get('menu')->result();
		return $result;
	}

	public function get_site_information(){
		$this->db->select('*');
		$result = $this->db->get('contact')->row();
		return $result;
	}

	public function get_latest_books(){
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$this->db->limit('3');
		$result = $this->db->get('bookinfo')->result();
		return $result;
	}

	public function get_book_details_by_id($id){
		$this->db->where('id', $id);
		$result = $this->db->get('bookinfo')->row();
		return $result;
	}

	public function get_featured_category_by_id($id){
		$this->db->where('bookinfo_id', $id);
		$this->db->where('is_featured', 1);
		$result = $this->db->get('category')->result();
		return $result;
	}

	public function get_all_service(){
		$this->db->select('*');
		$result = $this->db->get('services')->result();
		return $result;
	}

	public function get_all_faq(){
		$this->db->select('*');
		$result = $this->db->get('faqs')->result();
		return $result;
	}

	public function get_all_writers(){
		$this->db->select('*');
		$result = $this->db->get('writers')->result();
		return $result;
	}

	public function get_writer_details($id){
		$this->db->where('id', $id);
		$result = $this->db->get('writers')->row();
		return $result;
	}

	public function get_page_content($slug){
		$this->db->where('slug', $slug);
		$result = $this->db->get('page')->row();
		return $result;
	}

	public function get_chapter($id) {
        $result = $this->db->select("*")
                        ->from('category')
                        ->where('bookinfo_id', $id)
                        ->where('parent_id', "0")
                        ->order_by('sort_order', 'asc')
                        ->get()->result();
        return $result;
    }

    public function get_article_details($id){
        $this->db->where('id', $id);
        $result = $this->db->get('article')->row();
        return $result;
    }

    public function category_name_by_id($id){
    	$this->db->where('id', $id);
    	$result = $this->db->get('category')->row();
    	return $result;
    }

    public function get_service_details($id){
    	$this->db->where('id', $id);
    	$result = $this->db->get('services')->row();
    	return $result;
    }

    // tawhider dak function

    function getArticle($catid) {
        return $result = $this->db->select("*")
                        ->from('article')
                        ->where('category_id', $catid)
                        ->order_by('sort_order', 'asc')
                        ->get()->result();
    }

    public function get_category_by_month($id){
    	$this->db->where('bookinfo_id', $id);
    	$result = $this->db->get('category')->result();
    	return $result;
    }

  //   public function get_featured_articles($id,$limit=1,$offset=0){
  //   	$this->db->select('`article`.*,`category`.*,`article`.id AS article_id') 
		//  ->from('article')
		//  ->join('category', 'category.id = article.category_id')
		//  ->where('article.bookinfo_id', $id)
  //   	 //->where('article.is_featured', 1)
  //   	 ->order_by("article.sort_order","ASC")
  //   	 ->limit($limit,$offset); 
		// $query = $this->db->get()->result();
		// return $query;
  //   }

    public function get_article_by_category($id){
    	$this->db->where('category_id', $id);
    	$result = $this->db->get('article')->result();
    	return $result;
    }

    public function get_article_by_id($id){
        $this->db->select('`article`.*,`category.cat_image`,`writer`.writer_name,`writer`.id AS writer_id') 
         ->from('article')
         ->join('writer', 'writer.id = article.writer_id')
         ->join('category', 'category.id = article.category_id')
         ->where('article.id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function old_items(){
    	$this->db->limit(4);
    	$this->db->order_by("publish_date","DESC");
    	$result = $this->db->get('bookinfo')->result();
    	return $result;
    }

    public function all_old_items(){
    	$this->db->select("*");
    	$this->db->order_by("publish_date", "DESC");
    	$result = $this->db->get('bookinfo')->result();
    	return $result;
    }

    public function get_all_category(){
    	$this->db->select('*');
    	$result = $this->db->order_by("category.sort_order", "DESC")->get('category')->result();
    	return $result;
    }
    
    
    public function get_all_homepage_category(){
    	$this->db->select('*');
    	$result = $this->db->where("category.is_homepage", 1)->order_by("category.sort_order", "DESC")->get('category')->result();
    	return $result;
    }

    public function get_monthly_articles($id,$limit=1,$offset=0){
    	$this->db->select('`article`.*,`category`.*,`writer`.*,`article`.id AS article_id') 
		 ->from('article')
		 ->join('category', 'category.id = article.category_id')
		 ->join('writer', 'writer.id = article.writer_id')
		 ->where('article.bookinfo_id', $id)
         ->limit($limit,$offset)
    	 ->order_by("article.bookinfo_id","DESC");
		$query = $this->db->get()->result();
		return $query;
    }
    
    public function get_category_monthly_articles($category_id) {
        $magazine = $this->db->select('current_magazine_id')->get('contact')->row();
	    $book_id = $magazine->current_magazine_id;
	    
	    $this->db->select('`article`.*,`writer`.id,writer.writer_name,`article`.id AS article_id') 
		 ->from('article')
		 ->join('writer', 'writer.id = article.writer_id')
		 ->where(array('article.bookinfo_id' => $book_id, 'article.category_id' => $category_id))
    	 ->order_by("article.sort_order","ASC");
		$query = $this->db->get()->result();
		return $query;
    }
    
    public function get_category_monthly_articles_new($month_id, $category_id) {
	    $this->db->select('`article`.*,`writer`.*,`article`.id AS article_id') 
		 ->from('article')
		 ->join('writer', 'writer.id = article.writer_id')
		 ->where(array('article.bookinfo_id' => $month_id, 'article.category_id' => $category_id))
    	 ->order_by("article.sort_order","ASC");
		$query = $this->db->get()->result();
		return $query;
    }

    public function getFiveArticle($catid){
    	$this->db->select('*');
    	$this->db->where('category_id', $catid)->order_by('rand()');
    	$this->db->limit(6);
    	$result = $this->db->get('article')->result();
    	return $result;
    }

    public function get_all_notice_list(){
    	$this->db->select('*');
    	$result = $this->db->get('notice')->result();
    	return $result;
    }

    public function get_all_writer_list(){
    	$this->db->select('*');
    	$result = $this->db->get('writer')->result();
    	return $result;
    }

    public function get_article_by_writer_id($id){
    	$this->db->select('*');
    	$this->db->where('writer_id', $id);
    	$result = $this->db->get('article')->result();
    	return $result;
    }

    public function get_search_result($keyword){
    	$this->db->select('*');
		$this->db->like('title', $keyword, 'both');
        $this->db->or_like('description', $keyword);
		$result = $this->db->get('article')->result();
		return $result;
    }

    public function get_latest_articles(){
        $this->db->select('*');
        $this->db->order_by('id', 'DESC');
        $this->db->where('category_id', 2);
        $this->db->limit(10);
        $result = $this->db->get('article')->result();
        return $result;
    }
    public function get_important_articles(){
        $this->db->select('*');
        $this->db->order_by('view_count', 'DESC'); 
        $this->db->where('category_id', 2);
        $this->db->limit(10);
        $result = $this->db->get('article')->result();
        return $result;
    }

    public function get_related_articles_by_category($catid){
        $this->db->select('`article`.*,`category`.*,`writer`.*,`article`.id AS article_id') 
         ->from('article')
         ->join('category', 'category.id = article.category_id')
         ->join('writer', 'writer.id = article.writer_id')
         ->order_by('rand()')
         ->where('article.category_id', $catid)
         ->limit(12);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_all_subject(){
        $this->db->select('*');
        $result = $this->db->get('subject')->result();
        return $result;
    }

    public function getArticleBySubject($id){
        $this->db->select('article.*');
        $this->db->from('article');
        $this->db->join('subject_relation', 'subject_relation.article_id = article.id');
        $this->db->where('subject_relation.subject_id', $id)
    	 ->order_by("article.bookinfo_id","DESC");
        $subjects = $this->db->get()->result();
        return $subjects;
    }

    public function get_all_data_by_sorting($table){
        $this->db->order_by('sort_order', 'DESC');
        $result = $this->db->get($table)->result();
        return $result;
    }

    public function get_all_comment(){
        $this->db->order_by('comment_time', 'DESC');
        return $this->db->get('user_comments')->result();
    }

    public function get_approve_comment_list($id){
        $this->db->where('comment_status', 1);
        $this->db->where('article_id', $id);
        $this->db->order_by('comment_time', 'DESC');
        return $this->db->get('user_comments')->result();
    }


	

}

?>