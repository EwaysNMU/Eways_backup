<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    public function getResources() {
        $status = "No";
        $this->db->select('*');
        $this->db->from('resources');
        $this->db->where('StaffID = 1');
        $this->db->where('deleted',$status);
        $data = $this->db->get();
        return $data;
    }
    public function delete($resourceID) {
       $data = array('deleted' => "Yes");
        $this->db->where('resourceID', $resourceID);
        return $this->db->update('resources', $data);
    }

    
}













