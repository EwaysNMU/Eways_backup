<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('home');
    }
public function forgot_password_form() {
        $this->load->view('login/forgot_password_admin');
    }
    public function login_admin_form() {
        $this->load->view('login/login_admin');
    }

    function encrypt_password($password, $email) {
        $rotations = 1;
        $salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($email));
        $hash = $salt . $password;
        for ($i = 0; $i < $rotations; $i ++) {
            $hash = hash('sha256', $hash);
        }
        return $salt . $hash;
    }

    function is_valid_password($password, $dbpassword) {
        $rotations = 1;
        $salt = substr($dbpassword, 0, 64);
        $hash = $salt . $password;

        for ($i = 0; $i < $rotations; $i ++) {
            $hash = hash('sha256', $hash);
        }
        //Sleep a bit to prevent brute force
        time_nanosleep(0, 400000000);
        $hash = $salt . $hash;
        return $hash == $dbpassword;
    }

    function generate_email($username) {

        return $username . '@mandela.ac.za';
    }

    public function user_validation() {

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {

            $username = $this->generate_email($this->input->post('username'));
            $password = $this->input->post('password');
            $dbpassword = $this->Login_model->get_staff_pwd($username);
            
            if ($this->is_valid_password($password, $dbpassword)) {
                $data['info'] = $this->Login_model->get_user_details($this->generate_email($this->input->post('username')));
                foreach ($data['info']->result() as $row) {
                    $admin_ID = $row->admin_ID; //or whatever the query returns
                    $username = $row->username; //or whatever the query returns
                    $f_name = $row->first_name; //or whatever the query returns
                    $l_name = $row->last_name; //or whatever the query returns
                    $type = $row->type; //or whatever the query returns
                }
                $this->session->set_userdata(
                        array('admin_ID' => $admin_ID,
                            'username' => $username,
                            'firstname' => $f_name,
                            'lastname' => $l_name,
                            'type' => $type,
                ));
                redirect('/admin_home');
            } else {
                $this->session->set_flashdata('flashDanger', 'Wrong username or password.');
                redirect('admin/login');
            }
        }
    }
    public function forgot_password_url_change() {
        $data['message1'] = "Oops!";
        $data['message2'] = "The page does not exist.";
        $this->load->view('error_page', $data);
    }

    public function forgot_password_error() {
        $data['message1'] = "Oops!";
        $data['message2'] = "The password reset link is expired.";
        $this->load->view('error_page', $data);
    }

    public function reset_password_form($seg1, $seg2) {
        $username = array(
            'seg1' => $seg1,
            'seg2' => $seg2,
        );
        $data['info'] = $this->Login_model->get_stamp($seg1);
        foreach ($data['info']->result() as $row) {
            $time_stamp = $row->time_stamp; //or whatever the query returns
            $data = $row->username; //or whatever the query returns
        }
        $stamp = date('Y-m-d H:i:s');
        if ($seg1 != $data) {
            $data['message1'] = "Oops!";
            $data['message2'] = "The page does not exist.";
            $this->load->view('error_page', $data);
        } elseif ($time_stamp >= $stamp) {
            $this->load->view('login/reset_password_admin', $username);
        } elseif($time_stamp < $stamp) {
            $this->forgot_password_error();
        }
        else{
            $this->forgot_password_url_change();
        }
    }
    public function send_reset_link() {
        $this->form_validation->set_rules('username', 'Username', 'required|callback_checkUser_exist');
        $username = $this->generate_email($this->input->post('username'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/forgot_password_admin');
        } elseif ($this->form_validation->run() == TRUE) {

            $username = $this->generate_email($this->input->post('username'));
            $from = "s213444844@mandela.ac.za";    //senders email address
            $subject = "EWAYS password reset";  //email subject
//            $receiver = $this->generate_email($username); correct reciever
            $receiver = "s213444844@mandela.ac.za";
            $random = md5(rand(1000000, 8000000));
//            $hash = $this->bcrypt->hash_password($receiver);
            $message = "Dear User,\nPlease click on the link below to reset your password and keep in mind that this link expires in 5 hours.\n"
                    . "http://sict-iis.nmmu.ac.za/eways/index.php/admin/reset_password_/" . $username . "/" . $random . "\n\nRegards\nAdmin.";

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
//            
            if ($this->email->send() && $this->Login_model->update_reset_token($random, $username)) {
                $this->session->set_flashdata('flashSuccess', 'A password reset link was sent to your email.');
                redirect('/admin/login');
            } else {
                $this->session->set_flashdata('flashFailed', 'Something When wrong.');
                redirect('login/forgot_password_admin');
            }
        }
    }

    Public function checkUser_exist() {
        $requested_User = $this->generate_email($this->input->post('username'));
        $user_available = $this->Login_model->checkUserExist($requested_User);
        if ($user_available) {
            return false;
        } else {
            return true;
        }
    }
    Public function update_password() {
        
            $username = $this->input->post('username');
            $reset_token = $this->input->post('reset_token');
            $password = $this->input->post('password');
            $password_1 = $this->encrypt_password($password, $username);
            $data['info'] = $this->Login_model->get_stamp($username);
            foreach ($data['info']->result() as $row) {
                $time_stamp = $row->time_stamp; //or whatever the query returns
                $token = $row->reset_token;
                $db_username = $row->username;
            }
            $stamp = date('Y-m-d H:i:s');
            if ($time_stamp >= $stamp && $token == $reset_token && $db_username == $username && ($this->Login_model->reset_password($reset_token, $password_1, $username))) {
                $this->session->set_flashdata('flashSuccess', 'Please login with your new password.');
                redirect('admin/login');
            } else {
                $this->forgot_password_url_change();
            }
       
    }
    public function logout() {
        $this->session->unset_userdata('firstname','lastname','admin_ID','username','type');
        $this->session->sess_destroy();
        redirect('/admin/login');
    }

}
