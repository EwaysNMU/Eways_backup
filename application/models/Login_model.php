<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

//  public function get_student_pwd($email)
//  {
//    $sql = "SELECT password
//            FROM student
//            WHERE email=?";
//    $query=$this->db->query($sql, array($email));
//
//    if ($query->row() > 0)
//    {
//      return $query->row();
//    }
//  }

    function checkEmail($email) {
        $this->db->where('email', $email);
        return $this->db->count_all_results('staff');
    }

    public function get_user_pwd($email, $user) {

        $sql = '';
        $query = '';

        if ($user == 'staff') {
            $sql = "SELECT password FROM staff WHERE email =? LIMIT 1";
        } else if ($user == 'student') {
            $sql = "SELECT password FROM student WHERE email =? LIMIT 1";
        }

        $query = $this->db->query($sql, array($email));
        $row = $query->row_array();

        if ($query->num_rows() > 0) {
            return $row['password'];
        } else {
            return false;
        }
    }

    public function get_user_details($email, $user) {
        $sql = '';
        $query = '';

        if ($user == 'staff') {
            $sql = "SELECT * FROM staff WHERE email =? LIMIT 1";
        } else if ($user == 'student') {
            $sql = "SELECT * FROM student WHERE email =? LIMIT 1";
        }

        $query = $this->db->query($sql, array($email));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

}
