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

    public function reset_password_form($seg1,$seg2) {
        $studentno = array(
            'seg1' => $seg1,
            'seg2' => $seg2,
        );
        $this->load->view('login/reset_password',$studentno);
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
//            $random = rand(4000,8000);
            $hash = $this->bcrypt->hash_password($receiver);
            $message = "Dear User,\nPlease click on the link below to reset your password \n"
                    . "http://sict-iis.nmmu.ac.za/eways/index.php/reset_password_/".$studentno."/". $hash . "\n\n Thanks";

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
                $this->session->set_flashdata('flashSuccess', 'A password reset link was sent to your email.');
//                $this->load->view('login/login_student');
                redirect('login/login_student');
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
            $email_get = $this->input->post('email');
            $stud_no = $this->input->post('studentno');
        $this->reset_password_form($email_get, $stud_no);
        } elseif ($this->form_validation->run() == TRUE) 
            {
            $password = $this->input->post('password');
            $studentno = $this->input->post('studentno');
            $email = $this->generate_email($studentno);
            $email2 = $this->input->post('email');
            $data =  $this->encrypt_password($password, $email);

            if ($this->Student_model->reset_password($email2,$email, $data, $studentno)) {
                $this->session->set_flashdata('flashSuccess', 'Your password was reset.');
                redirect('login/login_student');
            } else {
                $this->session->set_flashdata('verifyfailed', 'Your password did not reset');
                redirect('login/reset_password');
            }
        }
    }

}
