<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }
   
    public function post_comment($data) {
        $this->db->insert('chat_comment', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
   }
   public function post_discussion($data) {
        $this->db->insert('chat', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
   }
   public function get_comments() {
        $this->db->select('*');
        $this->db->from('chat_comment');
        $data = $this->db->get();
        return $data;
            
    }
    
    public function get_chats() {
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->order_by('chatID','desc');
        $data = $this->db->get();
        return $data;
            
    }
    public function get_student() {
        $this->db->select('*');
        $this->db->from('students');
        $data = $this->db->get();
        return $data;
            
    }
}

















































































