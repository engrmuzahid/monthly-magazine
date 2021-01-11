<?php



class Site_Model extends CI_Model {



    var $CI;



    public function __construct() {

        parent::__construct();



        $this->CI = &get_instance();

    }



//[P~H113t50r2

    function get_data_by_id($id) {

        $this->db->select("article.*,category.name,category.id as category_id,bookinfo.publish_date as publish_date")

                ->from("article as article")

                ->join("category as category", "category.id = article.category_id")                

                ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")

                ->where("article.id", $id);



        return $this->db->get()->row();

    }



    function get_data_by_category($id, $book_id = null) {

        $this->db->select("article.*,category.name,category.id as category_id,bookinfo.title as book_title")

                ->from("article as article")

                ->join("category as category", "category.id = article.category_id")

                ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id", "right")

                ->where("article.category_id", $id);

        if ($book_id) {

            $this->db->where("article.bookinfo_id", $book_id);

        }

        $this->db->limit(40, 0);

        return $this->db->get();

    }



    function get_bookinfo($book_id = null) {



        $results = $this->db->select("*")

                        ->from("bookinfo")

                        ->order_by("publish_date", "DESC")

                        ->get()->result();



        return $results;

    }



    function get_bookinfo_by_month($month) {



        $results = $this->db->select("*")

                        ->from("bookinfo")

                        ->where("publish_date", date("Y-m-01", strtotime($month)))

                        ->get()->row();



        return $results;

    }



    function get_current_bookinfo() {

        $today = date("Y-m-01", strtotime("NOW"));

        $results = $this->db->select("*")

                        ->from("bookinfo")

                        ->where("publish_date", $today)

                        ->get()->row();



        return $results;

    }



    function get_notices($book_id = null) {



        $results = $this->db->select("*")

                        ->from("notice")

                        ->order_by("sort_order", "ASC")

                        ->get()->result();



        return $results;

    }



    function get_categories($book_id = null) {

        $today = date("Y-m-01", strtotime("NOW"));



        if ($book_id) {

            $results = $this->db->select("category.id,category.name,bookinfo.id as book_id,bookinfo.title as book_title")

                            ->from("article as article")

                            ->join("category as category", "category.id = article.category_id")

                            ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")

                            ->where("article.bookinfo_id", $book_id)

                            ->order_by("category.sort_order", "DESC")

                            ->group_by("category.id")

                            ->get()->result();

        } else {

            $results = $this->db->select("category.id,category.name,bookinfo.id as book_id,bookinfo.title as book_title")
                            ->from("article as article")
                            ->join("category as category", "category.id = article.category_id")
                            ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")
                            ->where("bookinfo.publish_date <>", $today)
                            ->where("category.is_homepage", 1)
                            ->order_by("category.sort_order", "DESC")
                            ->group_by("category.id")
                            ->get()->result();

        }



        return $results;

    }



    function get_data_for_mainindex($book_id = null) {

        $today = date("Y-m-01", strtotime("NOW"));
        $this->db->select("category.name,category.id")
                ->from("article as article")
                ->join("category as category", "category.id = article.category_id")
                ->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")->where("category.is_homepage", 1)
                ->order_by("category.sort_order", "DESC");
        if ($book_id) {
            $this->db->where("article.bookinfo_id", $book_id);
        } else {
            $this->db->where("bookinfo.publish_date", $today);
        }



        $categories = $this->db->get()->result();

        $results = array();

        foreach ($categories as $category) {
            $results[$category->id]['name'] = $category->name;
            $this->db->select("article.*")->from("article as article")
                    ->where("article.category_id", $category->id)->order_by("article.sort_order", "ASC");
            if ($book_id) {
                $this->db->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")->where("article.bookinfo_id", $book_id);
            } else {
                $this->db->join("bookinfo as bookinfo", "bookinfo.id = article.bookinfo_id")->where("bookinfo.publish_date", $today);
            }
            $results[$category->id]['article'] = $this->db->limit(7, 0)->get()->result();
        }

        return $results;

    }



    function get_user_comments($id) {



        $results = $this->db->select("*")

                        ->from("user_comments")

                        ->where("comment_status", 1)

                        ->where("article_id", $id)

                        ->order_by("sort_order", "DESC")

                        ->order_by("id", "DESC")

                        ->get()->result();



        return $results;

    }



    function load_cover_image($book_id = null) {

        $today = date("Y-m-01", strtotime("NOW"));



        if ($book_id) {

            $results = $this->db->select("*")

                            ->from("bookinfo")

                            ->where("id", $book_id)

                            ->get()->row();

        } else {

            $results = $this->db->select("*")

                            ->from("bookinfo")

                            ->where("bookinfo.publish_date <>", $today)

                            ->get()->row();

        }



        return $results;

    }



    function load_header_image($book_id = null) {

        $today = date("Y-m-01", strtotime("NOW"));



        if ($book_id) {

            $results = $this->db->select("header_background")

                            ->from("bookinfo")

                            ->where("id", $book_id)

                            ->get()->row();

        } else {

            $results = $this->db->select("header_background")

                            ->from("bookinfo")

                            ->where("bookinfo.publish_date <>", $today)

                            ->get()->row();

        }



        return $results->header_background;

    }



}

