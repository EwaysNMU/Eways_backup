<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function forgot_password_form() {
        $this->load->view('login/forgot_password');
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
        $studentno = array(
            'seg1' => $seg1,
            'seg2' => $seg2,
        );
        $data['info'] = $this->Student_model->get_stamp($seg1);
        foreach ($data['info']->result() as $row) {
            $time_stamp = $row->time_stamp; //or whatever the query returns
            $data = $row->studentNo; //or whatever the query returns
        }
        $stamp = date('Y-m-d H:i:s');
        if ($seg1 != $data) {
            $data['message1'] = "Oops!";
            $data['message2'] = "The page does not exist.";
            $this->load->view('error_page', $data);
        } elseif ($time_stamp >= $stamp) {
            $this->load->view('login/reset_password', $studentno);
        } elseif($time_stamp < $stamp) {
            $this->forgot_password_error();
        }
        else{
            $this->forgot_password_url_change();
        }
    }

    function generate_email($studentno) {

        return 's' . $studentno . '@mandela.ac.za';
    }

    public function send_reset_link() {
        $this->form_validation->set_rules('studentno', 'Student Number', 'required|max_length[9]|min_length[9]|trim|callback_checkStudent_exist');
        $studentno = $this->input->post('studentno');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/forgot_password');
        } elseif ($this->form_validation->run() == TRUE) {

            $studentno = $this->input->post('studentno');
            $from = "s213444844@mandela.ac.za";    //senders email address
            $subject = "EWAYS password reset";  //email subject
            $receiver = $this->generate_email($studentno);
            $random = md5(rand(1000000, 8000000));
//            $hash = $this->bcrypt->hash_password($receiver);
            $message = "Dear User,\nPlease click on the link below to reset your password and keep in mind that this link expires in 5 hours.\n"
                    . "http://sict-iis.nmmu.ac.za/eways/index.php/reset_password_/" . $studentno . "/" . $random . "\n\nRegards\nAdmin.";

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
            if ($this->email->send() && $this->Student_model->update_reset_token($random, $studentno)) {
                $this->session->set_flashdata('flashSuccess', 'A password reset link was sent to your email.');
//                $this->load->view('login/login_student');
                redirect('/student/login');
            } else {
                $this->session->set_flashdata('flashFailed', 'Something When wrong.');
                redirect('login/forgot_password');
            }
        }
    }

    Public function checkStudent_exist($requested_StudentNo) {
        $studentNo_available = $this->Student_model->checkUserExist($requested_StudentNo);
        if ($studentNo_available) {
            return false;
        } else {
            return true;
        }
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

    Public function update_password() {
        $this->form_validation->set_rules('studentno', 'Student Number', 'required|max_length[9]|min_length[9]|trim|callback_checkStudent_exist');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
//            $email_get = $this->input->post('email');
//            $stud_no = $this->input->post('studentno');
//            $this->reset_password_form($email_get, $stud_no);
        } elseif ($this->form_validation->run() == TRUE) {
            $studentno = $this->input->post('studentno');
            $reset_token = $this->input->post('reset_token');
            $password = $this->input->post('password');
            $email = $this->generate_email($studentno);
            $password_1 = $this->encrypt_password($password, $email);
            $data['info'] = $this->Student_model->get_stamp($studentno);
            foreach ($data['info']->result() as $row) {
                $time_stamp = $row->time_stamp; //or whatever the query returns
                $token = $row->reset_token;
                $student_num = $row->studentNo;
//                echo $time_stamp;
            }
            $stamp = date('Y-m-d H:i:s');
            if ($time_stamp >= $stamp && $token == $reset_token && $student_num == $studentno && ($this->Student_model->reset_password($reset_token, $password_1, $studentno))) {
                redirect('student/login');
            } else {
                $this->forgot_password_url_change();
            }
        }
    }

}
