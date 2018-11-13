<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class test_controller extends CI_Controller {

        
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('firstname', 'lastname', 'studentID', 'studentNo', 'studyArea', 'faculty')) {
            $allowed = array(
                    // All allowed function names for not logged in users ( i keep it empty usually)
            );
            if (!in_array($this->router->fetch_method(), $allowed)) {
                redirect('/student/login');
            }
        }
    }

    public function index() {
        
    }

    public function chat_view() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/chat_room', $data);
        $this->load->view('layouts/footer');
    }
    public function chat_question_list() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/chat_question_list', $data);
        $this->load->view('layouts/footer');
    }
    public function chat_question_details() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data['get_chat'] = $this->Chat_model->get_comments();
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/chat_question_detail', $data);
    }
    public function post_comment() {
              $data = array(
                'chatID' => "1",
                'studentID' => $this->session->userdata('studentID'),
                'comment' => $this->input->post('comment')
            );
                    if ($this->Chat_model->post_comment($data)) {
            echo json_encode(['comment_return'=>'Sent!']);
            } else {
            }
        }
        public function chat_table() {
            $data['get_chat'] = $this->Chat_model->get_comments();
        $this->load->view('course_views/chat_table',$data);
    }
    }
   






















































































