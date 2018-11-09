<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function get_staff_pwd($username) {
        $sql = "SELECT password
    FROM admin
    WHERE username=?";
        $query = $this->db->query($sql, array($username));

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->password;
        }
    }
     public function get_user_details($username) {
        $sql = "SELECT *
    FROM admin
    WHERE username=?";
        return $this->db->query($sql, array($username));
    }

    

    public function sendEmail($receiver) {
        $from = "s213444844@mandela.ac.za";    //senders email address
        $subject = 'Verify email address';  //email subject
//        $receiver = $this->input->post('studentNo') . "@nmmu.ac.za";
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = "Dear User,\nPlease click on the below activation link to verify your email address \n"
                . "http://sict-iis.nmmu.ac.za/eways/index.php/confirmation/" . md5($receiver) . "\n\n Thanks";


        //config email settings
        $config = array("protocol" => "smtp",
            "smtp_host" => "email.nmmu.ac.za",
            "smtp_port" => "25",
            "smtp_user" => "$from",
            "smtp_pass" => "",
            "SMTPDebug" => "2",
            "CharSet" => "UTF-8",
            //set authentication to true
            "SMTPAuth" => "true"
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        //send email
        $this->email->from($from);
        $this->email->to($receiver);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            //for testing
            return true;
        } else {
            return false;
        }
    }

    

    function reset_password($reset_token, $password, $username) {
        $stamp = date('Y-m-d H:i:s');
        $data = array('password' => $password);
        $where = "reset_token='$reset_token' AND username='$username' AND time_stamp>='$stamp'";
        $this->db->where($where);
        return $this->db->update('admin', $data);
    }

    public function update_reset_token($random, $username) {
        $stamp = date("Y-m-d H:i:s", strtotime('+4 hours'));
        $data = array('reset_token' => $random, 'time_stamp' => $stamp);
        $this->db->where('username', $username);
        return $this->db->update('admin', $data);
    }

    public function get_stamp($username) {
        $this->db->select('time_stamp, reset_token, username');
        $this->db->from('admin');
        $this->db->where("username", $username);
        $data = $this->db->get();
        return $data;
            
    }
     public function checkUserExist($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
   
}


















































































