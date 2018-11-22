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
    public function get_comments2($chatID) {
        $this->db->select('*');
        $this->db->from('chat_comment');
        $this->db->where('chatID',$chatID);
        $this->db->order_by('commentID','desc');
        $data = $this->db->get();
        return $data;
            
    }
    
    public function get_chats() {
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('delete',"No");
        $this->db->order_by('chatID','desc');
        $data = $this->db->get();
        return $data;
            
    }
    public function get_chats_user() {
        $user = $this->session->userdata('studentID');
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('studentID',$user);
        $this->db->where('delete',"No");
        $this->db->order_by('chatID','desc');
        $data = $this->db->get();
        return $data;
            
    }
    public function get_chats_user_edit($chatID) {
        $user = $this->session->userdata('studentID');
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('studentID',$user);
        $this->db->where('delete',"No");
        $this->db->where('chatID',$chatID);
        $data = $this->db->get();
       return $data->result_array();
            
    }
    public function get_student() {
        $this->db->select('*');
        $this->db->from('students');
        $data = $this->db->get();
        return $data;
            
    }
    public function delete_post($chatID) {
       $data = array('delete' => "Yes");
        $this->db->where('chatID', $chatID);
        return $this->db->update('chat', $data); 
            
    }
    public function update_post($chatID,$title,$status,$desc) {
        $data = array('title' => $title,'status' => $status,'description' => $desc);
        $this->db->where('chatID', $chatID);
        return $this->db->update('chat', $data); 
            
    }
    public function update_post_count_views($chatID,$views) {
        $data = array('No_views' => $views);
        $this->db->where('chatID', $chatID);
        return $this->db->update('chat', $data); 
            
    }
}





































































































