<?php

class Common_Model extends CI_Model {

    var $CI;

    public function __construct() {
        parent::__construct();

        $this->CI = &get_instance();
    }

    public function insert($table, $data, $condition = null) {

        if ($condition !== null) {
            $this->db->where($condition, null, false);
        }

        if (!$this->db->insert($table, $data)) {
            return $this->db->_error_message();
        }

        return $this->db->insert_id();
    }

    function get_all_data($table, $cond = array(), $limit = null, $offset = 0) {
        return $this->db->where($cond)->get($table, $limit, $offset)->result();
    }

    function get_all_writers() {
        return $this->db->order_by("writer_name")->get("writer")->result();
    }


    function get_data($table, $cond = array(), $limit = null, $offset = 0) {
        return $this->db->where($cond)->get($table, $limit, $offset)->row();
    }

    public function get_data_for_menu($table, $select = "*", $condition = null) {
        if ($condition !== null) {
            $this->db->where($condition, null, false);
        }
        $results = $this->db->select($select)->get($table)->row();
        return $results;
    }

    public function get_data_for_contact($table, $select = "*", $condition = null) {
        if ($condition !== null) {
            $this->db->where($condition, null, false);
        }
        $results = $this->db->select($select)->get($table)->row();
        return $results;
    }

    function get_data_by_id($table, $cond = array()) {
        return $this->db->where($cond)->get($table)->row();
    }
    function add_data($table, $data) {
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        return $id;
    }

    function update_data($table, $data, $cond) {
        $this->db->where($cond)->update($table, $data);
        return TRUE;
    }

    public function update($table, $data, $condition) {

        if (!$this->db->where($condition, null, false)
                        ->update($table, $data)) {
            return $this->db->_error_message();
        }

        return true;
    }

    public function delete($table, $condition) {
        if (!$this->db->where($condition, null, false)
                        ->delete($table)) {
            return $this->db->_error_message();
        }
        return true;
    }
    

    


}
