<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_Courses_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ( ! $this->session->userdata('firstname','lastname','studentID','studentNo','studyArea','faculty'))
    {
        $allowed = array(
             // All allowed function names for not logged in users ( i keep it empty usually)
        );
        if ( ! in_array($this->router->fetch_method(), $allowed))
        {
            redirect('/login_login');
        }
    }
    }

    public function index() {
        
    }

    public function list_of_courses() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $this->load->view('layouts/header');
        $this->load->view('course_views/list_of_courses',$data);
        $this->load->view('layouts/footer');
    }
//    Time Management----------------------------------------
    public function time_management() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/time_management');
        $this->load->view('layouts/footer_courses');
    }
    public function time_management_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/time_management');
        $this->load->view('layouts/footer_courses');
    }
//    Stress Management----------------------------------------
    public function stress_management() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/stress_management');
        $this->load->view('layouts/footer_courses');
    }
    public function stress_management_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/stress_management');
        $this->load->view('layouts/footer_courses');
    }
//    Motivation--------------------------------------------------
    public function motivation() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/motivation');
        $this->load->view('layouts/footer_courses');
    }
    public function motivation_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/motivation');
        $this->load->view('layouts/footer_courses');
    }
//    Study Strategy-------------------------------------------------
    
    public function study_strategy() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/study_strategy');
        $this->load->view('layouts/footer_courses');
    }
    public function study_strategy_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/study_strategy');
        $this->load->view('layouts/footer_courses');
    }
//    Goals Setting----------------------------------------------------
    public function goals_setting() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/goals_setting');
        $this->load->view('layouts/footer_courses');
    }
    public function goals_setting_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/goals_setting');
        $this->load->view('layouts/footer_courses');
    }
//    Tips For Exams And Tests--------------------------------------------
   
    public function tips_for_exams_and_tests() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/tips_for_exams_and_tests');
        $this->load->view('layouts/footer_courses');
    }
    public function tips_for_exams_and_tests_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/tips_for_exams_and_tests');
        $this->load->view('layouts/footer_courses');
    }
//      User Profile--------------------------------------------------------
    public function user_profile() {
        $this->load->view('layouts/header');
        $this->load->view('course_views/user_profile');
        $this->load->view('layouts/footer');
    }
    
}


























