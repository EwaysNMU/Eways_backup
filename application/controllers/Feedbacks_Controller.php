<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feedbacks_controller extends CI_Controller {

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

//-------------------------------------------------GOALS------------------------------------------------------//
    public function goals_setting_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('myform');
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $c,
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
                $this->session->set_flashdata('flash_Success', 'Yes');
                redirect("/all_courses");
            } else {
                redirect('feedback/goals_setting');
            }
        }
    }

    //------------------------------------------STRESS MANAGEMENT------------------------------------------------------//
    
    public function stress_management_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            // print_r('form validation error');
            // exit();
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $this->input->post('comment'),
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
               $this->session->set_flashdata('flash_Success','Yes');
                redirect("/all_courses");
            } else {
                redirect('feedback/stress_management');
            }
        }
    }

    //------------------------------------------TIME MANAGEMENT------------------------------------------------------//
    public function time_management_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            // print_r('form validation error');
            // exit();
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $this->input->post('comment'),
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
               $this->session->set_flashdata('flash_Success','Yes');
                redirect("/all_courses");
            } else {
                redirect('feedback/time_management');
            }
        }
    }
    
    //------------------------------------------EXAM TIPS------------------------------------------------------//
    public function exam_tips_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            // print_r('form validation error');
            // exit();
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $this->input->post('comment'),
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
               $this->session->set_flashdata('flash_Success','Yes');
                redirect("/all_courses");
            } else {
                $this->load->view('feedback/tips_for_exams_and_tests');
            }
        }
    }
    
    //------------------------------------------MOTIVATION------------------------------------------------------//
 public function motivation_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            // print_r('form validation error');
            // exit();
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $this->input->post('comment'),
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
               $this->session->set_flashdata('flash_Success','Yes');
                redirect("/all_courses");
            } else {
                $this->load->view('feedback/motivation');
            }
        }
    }
    
    //------------------------------------------STUDY STRATEGY------------------------------------------------------//

    public function study_strategy_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            // print_r('form validation error');
            // exit();
        } else {
            $data = array(
                'studentID' => $this->input->post('student_id'),
                'topicID' => $this->input->post('topic_id'),
                'Q1' => $this->input->post('topic_helpful'),
                'Q2' => $this->input->post('rate_material'),
                'Q3' => $this->input->post('objectives'),
                'Q4' => $this->input->post('rate_confidence'),
                'Q5' => $this->input->post('activities'),
                'Q6' => $this->input->post('opportunity'),
                'comment' => $this->input->post('comment'),
                'completed' => "Yes",
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {
               $this->session->set_flashdata('flash_Success','Yes');
                redirect("/all_courses");
            } else {
                $this->load->view('feedback/study_strategy');
            }
        }
    }
}
