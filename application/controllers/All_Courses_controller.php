<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_Courses_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ( ! $this->session->userdata('firstname','lastname'))
    {
        $allowed = array(
             // All allowed function names for not logged in users ( i keep it empty usually)
        );
        if ( ! in_array($this->router->fetch_method(), $allowed))
        {
            redirect('/login_login');
        }
    }
    
        $this->load->model('Feedback_model', '', TRUE);
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

    
}



















