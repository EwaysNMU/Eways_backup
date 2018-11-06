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
        $this->db->where('deleted', $status);
        $data = $this->db->get();
        return $data;
    }
    public function insert_resources($data) {
        $this->db->insert('resources', $data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($resourceID) {
        $data = array('deleted' => "Yes");
        $this->db->where('resourceID', $resourceID);
        return $this->db->update('resources', $data);
    }

    public function update($resourceID,$title,$type,$file_web_url) {
        $data = array(
                'title' => $title,
                'type' => $type,
                'file_web_url' => $file_web_url,
            );
        $this->db->where('resourceID', $resourceID);
        return $this->db->update('resources', $data);
    }

}






