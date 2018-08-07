<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Course_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function list_of_courses() {
        $this->load->view('list_of_courses');
    }

    public function home_new() {
        $this->load->view('home_new');
    }

//-------------------------------------------------GOALS------------------------------------------------------//
    public function goals_settings() {
        $this->load->view('courses/goals_setting/goals_setting');
    }

    public function goals_setting_feedback_form() {
        $this->load->view('courses/goals_setting/goals_setting_feedback_form');
    }

    public function goals_settings_p2() {
        $this->load->view('courses/goals_setting/goals_settings_p2');
    }

    public function goals_setting_feedback_answer() {

        $this->form_validation->set_rules('topic_helpful', 'Question 1', 'required'); //1
        $this->form_validation->set_rules('rate_material', 'Question 2', 'required'); //2
        $this->form_validation->set_rules('objectives', 'Question 3', 'required'); //3
        $this->form_validation->set_rules('rate_confidence', 'Question 4', 'required'); //4
        $this->form_validation->set_rules('activities', 'Question 5', 'required'); //5

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('myform');
        } else {
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                $this->load->view('courses/goals_setting/goals_setting_feedback');
            }
        }
    }

    //------------------------------------------STRESS MANAGEMENT------------------------------------------------------//
    public function stress_management() {
        $this->load->view('courses/stress_management/stress_management');
    }

    public function stress_management_p2() {
        $this->load->view('courses/stress_management/stress_management_p2');
    }

    public function stress_management_feedback_form() {
        $this->load->view('courses/stress_management/stress_management_feedback');
    }

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
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                // print_r('error input');
                // exit();

                $this->load->view('courses/stress_management/stress_management_feedback');
            }
        }
    }

    //------------------------------------------TIME MANAGEMENT------------------------------------------------------//
    public function time_management() {
        $this->load->view('courses/time_management/time_management');
    }

    public function time_management_p2() {
        $this->load->view('courses/time_management/time_management_p2');
    }

    public function time_management_feedback_form() {
        $this->load->view('courses/time_management/time_management_feedback');
    }

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
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                // print_r('error input');
                // exit();

                $this->load->view('courses/time_management/time_management_feedback');
            }
        }
    }
    
    //------------------------------------------EXAM TIPS------------------------------------------------------//
    public function exam_tips() {
        $this->load->view('courses/exam_tips/exam_tips');
    }

    public function exam_tips_p2() {
        $this->load->view('courses/exam_tips/exam_tips_p2');
    }

    public function exam_tips_feedback_form() {
        $this->load->view('courses/exam_tips/exam_tips_feedback');
    }

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
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                // print_r('error input');
                // exit();

                $this->load->view('courses/exam_tips/exam_tips_feedback');
            }
        }
    }
    
    //------------------------------------------MOTIVATION------------------------------------------------------//
    public function motivation() {
        $this->load->view('courses/motivation/motivation');
    }

    public function motivation_p2() {
        $this->load->view('courses/motivation/motivation_p2');
    }

    public function motivation_feedback_form() {
        $this->load->view('courses/motivation/motivation_feedback');
    }

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
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                // print_r('error input');
                // exit();

                $this->load->view('courses/motivation/motivation_feedback');
            }
        }
    }
    
    //------------------------------------------STUDY STRATEGY------------------------------------------------------//
    public function study_strategy() {
        $this->load->view('courses/study_strategy/study_strategy');
    }

    public function study_strategy_p2() {
        $this->load->view('courses/study_strategy/study_strategy_p2');
    }

    public function study_strategy_feedback_form() {
        $this->load->view('courses/study_strategy/study_strategy_feedback');
    }

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
            $student_id = $this->input->post('student_id');
            $topic_id = $this->input->post('topic_id');

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
                'date' => date('Y-m-d', strtotime(date('Y-m-d'))),
            );
            if ($this->Feedback_model->_insert_feedback_answer($data)) {

                $data['message'] = 'Your feedback was saved successfully.';
                $this->list_of_courses();
            } else {
                // print_r('error input');
                // exit();

                $this->load->view('courses/study_strategy/study_strategy_feedback');
            }
        }
    }
}
