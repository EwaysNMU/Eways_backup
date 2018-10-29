<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
    public function getResources() {
        $this->db->select('*');
        $this->db->from('resources');
        $data = $this->db->get();
        return $data;
    }

    
}



