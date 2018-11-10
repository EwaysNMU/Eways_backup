<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Get
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }


    public function get_from_table($params, $table_name)
    {
        /**
         * Get all where deleted is 'No'
         */
        $this->CI->db->select();
        $this->CI->db->where($params);
        $this->CI->db->order_by("created", "desc");
        $query = $this->CI->db->get($table_name);
        $results = $query->result_array();
        return $results;
    }

    public function get_from_table_path($params, $table_name)
    {
        /**
         * Get all where deleted is 'No'
         */
        $this->CI->db->select('path');
        $this->CI->db->where($params);
        $query = $this->CI->db->get($table_name,20);
        $results = $query->result_array();
        return $results;
    }
    

    public function get_from_table_by_id($params, $table_name)
    {
        /**
         * Get all where deleted is 'No' and id is id
         */
        $this->CI->db->select();
        $this->CI->db->where($params);
        $query = $this->CI->db->get($table_name);
        $results = $query->row();
        return $results;

    }

    public function get_from_table_by_details($params, $table_name)
    {
        /**
         * Get all where details provided
         */
        $this->CI->db->select();
        $this->CI->db->where($params);
        $query = $this->CI->db->get($table_name);
        $results = $query->row();
        return $results;

    }

    public function get_from_table_by_username($username, $table_name)
    {
        /**
         * Get all where details provided
         */
        $this->CI->db->select('password');
        $this->CI->db->where('username',$username);
        $this->CI->db->where('email', $username);
        $query = $this->CI->db->get($table_name);
        $results = $query->row_array()['password'];
        return $results;

    }
}