<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Student_model', '', TRUE);
    }

    public function index() {
        
    }
     public function login_() {
        $this->load->view('login/login_student');
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
        $this->form_validation->set_rules('studyYear', 'Year of Study', 'required');
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
                'studyYear'=> $this->input->post('studyYear'),
                'email' => $this->generate_email($studentno),
                'password' => $this->encrypt_password($password, $email),
            );
            if ($this->Student_model->_insert_new_student($data)) {
                $this->session->set_flashdata('flashSuccess', '<strong>Successful!</strong> Check your mailbox to confirm the email sent.');
                redirect('student/login');
            } else {
                $this->student_register_form();
            }
        }
    }

    Public function checkStudent($requested_StudentNo) {
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
            redirect('student/login');
        } else {
            $this->session->set_flashdata('verifyfailed', 'Email address is not confirmed. Please check your mailbox to confirm.');
            redirect('student/login');
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
                $data['info'] = $this->Student_model->get_student_details($this->generate_email($this->input->post('studentno')));
                  $home_count = "H";
                  
                foreach ($data['info']->result() as $row) {
                    $studentID = $row->studentID; //or whatever the query returns
                    $studentNo = $row->studentNo; //or whatever the query returns
                    $f_name = $row->firstName; //or whatever the query returns
                    $l_name = $row->lastName; //or whatever the query returns
                    $studyArea = $row->studyArea; //or whatever the query returns
                    $faculty = $row->faculty; //or whatever the query returns
                    $photo = $row->photo; //or whatever the query returns
                }
                $this->session->set_userdata(
                        array('studentID' => $studentID,
                            'studentNo' => $studentNo,
                            'firstname' => $f_name,
                            'lastname' => $l_name,
                            'studyArea' => $studyArea,
                            'faculty' => $faculty,
                            'photo' => $photo
                ));
                $stud_no = $this->session->userdata('studentID');
                 $data = array(
                'studentID' => $stud_no,
                'counter' => $home_count,
            );
                $this->Student_model->insert_count_home($data);
                redirect('/all_courses',$data2);
                
            } elseif ($this->Student_model->get_student_not_activated($studentno1)) {

                $this->session->set_flashdata('verifyfailed', 'Email address is not confirmed. Please check your mailbox to confirm.');
                redirect('student/login');
            } else {
                $this->session->set_flashdata('flashDanger', 'Wrong username or password.');
                redirect('student/login');
            }
        }
        
    }
    
    public function logout() {
        $this->session->unset_userdata('firstname','lastname','studentID','studentNo','studyArea','faculty');
        $this->session->sess_destroy();
        redirect('/student/login');
    }

}




























































































