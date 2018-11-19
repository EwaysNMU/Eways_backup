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
        $data['allChat'] = $this->Chat_model->get_chats();
        $data['student'] = $this->Chat_model->get_student();
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('chat/chat_room', $data);
        $this->load->view('layouts/footer');
    }
    public function chat_question_list() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('chat/chat_question_list', $data);
        $this->load->view('layouts/footer');
    }
    public function chat_question_details() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data['get_chat'] = $this->Chat_model->get_comments();
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('chat/chat_question_detail', $data);
    }
    public function post_comment() {
              $data = array(
                'chatID' => $this->input->post('chatID'),
                'studentID' => $this->session->userdata('studentID'),
                'comment' => $this->input->post('comment')
            );
                    if ($this->Chat_model->post_comment($data)) {
            echo json_encode(['comment_return'=>'Sent!']);
            } else {
            }
        }
         public function post_discussion() {
              $data = array(
                'title' => $this->input->post('title'),
                'studentID' => $this->session->userdata('studentID'),
                'description' => $this->input->post('description')
            );
                    if ($this->Chat_model->post_discussion($data)) {
            echo json_encode(['comment_return'=>'Published!']);
            } else {
                echo json_encode(['error'=>'Something went wrong!']);
            }
        }
        public function chat_table() {
            $data['get_chat'] = $this->Chat_model->get_comments();
        $this->load->view('chat/chat_table',$data);
    }
    public function chat_conversation() {
        $data_id = $this->uri->segment(3);
        print_r($data_id); 
        exit();
         $data['student'] = $this->Chat_model->get_student();
            $data['get_chat'] = $this->Chat_model->get_comments2($data_id);
        $this->load->view('chat/chat_conversation',$data);
    }
    public function discussion_detail($meg1,$meg2,$meg3,$meg4,$meg5) {
           $detail = array(
            'meg1' => $meg1,
            'meg2' => $meg2,
               'meg3' => $meg3,
               'meg4' => $meg4,
               'meg5' => $meg5,
        );
            $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data['get_chat'] = $this->Chat_model->get_comments2($meg1);
         $data['student'] = $this->Chat_model->get_student();
        
        
          $this->load->view('layouts/header', $data);
        $this->load->view('chat/chat_detail', $detail);
//        $this->load->view('layouts/footer');
    }
    }
    
   















































































































































