<?php

class Article_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

     function get_all_article() {
        $results = $this->db->select("article.*,category.name,bookinfo.title as book_title")
                        ->from("article as article")
                        ->join("category as category", "category.id = article.category_id")
                        ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")
                        ->order_by('article.id', 'DESC')
                        ->get()->result();


        return $results;
    }

    
    function get_article_by_id($id) {
        $results = $this->db->select("article.*,category.name,bookinfo.title as book_title")
                        ->from("article as article")
                        ->join("category as category", "category.id = article.category_id")
                        ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id") 
                        ->where("article.bookinfo_id",$id)
                        //->order_by('article.sort_order', 'ASC')
                        ->order_by('article.id', 'DESC')
                        ->get()->result();


        return $results;
    }
}
