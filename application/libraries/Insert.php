<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function insert_into_table($params, $table_name)
    {
        $this->CI->db->insert($table_name, $params);
        return  $this->CI->db->insert_id();
    }

}