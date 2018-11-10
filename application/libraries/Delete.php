<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function update_table($id,$params, $table_name)
    {
        $this->CI->db->where('id',$id);
        $this->CI->db->update($table_name, $params);
        return $this->CI->db->insert_id();
    }
    
}