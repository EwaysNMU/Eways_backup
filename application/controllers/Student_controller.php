<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Student_model', '', TRUE);
    }

    public function index() {
        
    }

    public function student_profile() {
        $this->load->view('student_profile');
    }

    public function student_register_form() {
        $this->load->view('student/student_register_form');
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

    function generate_email($studentno) {

        return 's' . $studentno . '@mandela.ac.za';
    }

    public function add_new_student() {
        $this->form_validation->set_rules('studentno', 'Student Number', 'required|max_length[9]|min_length[9]|trim|callback_checkStudent');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('faculty', 'Faculty', 'required');
        $this->form_validation->set_rules('study_area', 'Department', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');
        $studentno = $this->input->post('studentno');


        if ($this->form_validation->run() == FALSE) {


//            print_r('form validation error');
//            exit();
            $this->student_register_form();
        } elseif
        ($this->Student_model->sendEmail($this->generate_email($studentno))) {

            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $studentno = $this->input->post('studentno');

            $data = array(
                'studentNo' => $this->input->post('studentno'),
                'firstName' => $this->input->post('firstname'),
                'lastName' => $this->input->post('lastname'),
                'studyArea' => $this->input->post('study_area'),
                'faculty' => $this->input->post('faculty'),
                'email' => $this->generate_email($studentno),
                'password' => $this->encrypt_password($password, $email),
            );
            if ($this->Student_model->_insert_new_student($data)) {
                $this->session->set_flashdata('flashSuccess', '<strong>Successful!</strong> Check your mailbox to confirm the email sent.');
                $this->load->view('login/login_student');
            } else {
                $this->student_register_form();
            }
        }
    }

    Public function checkStudent($requested_StudentNo) {
        // $studentNo = "s".$this->input->post('studentNo');
        // $this->load->model('StudentModel');

        $studentNo_available = $this->Student_model->checkUserExist($requested_StudentNo);

        if ($studentNo_available) {

            return TRUE;
        } else {
//         $this->form_validation->set_message('checkStudent', '<p style="color:red;">Student number exist. Please choose a new student number.</p>');
            return FALSE;
        }
    }

    function confirmEmail($hashcode) {
        if ($this->Student_model->verifyEmail($hashcode)) {
            $this->session->set_flashdata('verifySuccess', 'Email address is confirmed. Please login.');
            $this->load->view('login/login_student');
        } else {
            $this->session->set_flashdata('verifyfailed', 'Email address is not confirmed. Please check your mailbox to confirm.');
            $this->load->view('login/login_student');
        }
    }

    public function student_validation() {

        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('studentno', 'Student Number', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {

            $studentno = $this->generate_email($this->input->post('studentno'));
            $studentno1 = $this->input->post('studentno');
            //print_r($studentno);
            //exit();
            $user = $this->input->post('password');
            $dbpassword = $this->Student_model->get_student_pwd($studentno);

            if ($this->is_valid_password($this->input->post('password'), $dbpassword)) {
                //print_r('Login Successfully');
                //exit();
                $data['info'] = $this->Student_model->get_student_details($this->generate_email($this->input->post('studentno')));
                $session_data = array(
                    'lastname' => $data['info']['firstName'],
                    'firstname' => $data['info']['firstName'],
                );
                $this->session->set_userdata('_logged_in', $session_data);
                $this->load->view('home');
                
            } elseif ($this->Student_model->get_student_not_activated($studentno1)) {

                $this->session->set_flashdata('verifyfailed', 'Email address is not confirmed. Please check your mailbox to confirm.');
                $this->load->view('login/login_student');
            } else {
//                print_r('Login Unsuccessful');
//                exit();
                $this->session->set_flashdata('flashDanger', 'Wrong username or password.');
                $this->load->view('login/login_student');
            }
        }
    }

}
























