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

        $this->form_validation->set_rules('studentno', 'Student Number', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('study_area', 'Study Area', 'required');
        $this->form_validation->set_rules('faculty', 'Faculty', 'required');
        /*        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
          $this->form_validation->set_rules('confirm_email', 'Confirmation Email', 'required|matches[email]'); */
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {


            print_r('form validation error');
            exit();
            $this->student_register_form();
        } else {

            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $studentno = $this->input->post('studentno');

            $data = array(
                'studentNo' => $this->input->post('studentno'),
                'lastname' => $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'studyArea' => $this->input->post('study_area'),
                'faculty' => $this->input->post('faculty'),
                'email' => $this->generate_email($studentno),
                'password' => $this->encrypt_password($password, $email),
            );
            if ($this->Student_model->_insert_new_student($data)) {
                $this->load->view('login/login_student');
            } else {
                $this->student_register_form();
            }
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
            // print_r($studentno);
            //    exit();
            $user = $this->input->post('password');
            $dbpassword = $this->Student_model->get_student_pwd($studentno);

            if ($this->is_valid_password($this->input->post('password'), $dbpassword)) {

                $data['info'] = $this->Student_model->get_student_details($this->generate_email($this->input->post('studentno')));
                $session_data = array(
                    'lastname' => $data['info']['firstName'],
                    'firstname' => $data['info']['firstName'],
                );
                $this->session->set_userdata('_logged_in', $session_data);
                // $this->load->view('login/login_student');
                print_r('Login Successfully');
                exit();
            } else {
                
            }
        }
    }

}
