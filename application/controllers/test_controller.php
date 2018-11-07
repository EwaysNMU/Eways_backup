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
                redirect('/login_login');
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
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/chat_question_detail', $data);
    }
    public function post_comment() {
//        $data = array(
//'chatID' => "1",
//'studentID'=>$this->session->userdata('studentID'),
//            'comment'=>$this->input->post('comment')
//);
//        echo json_encode($data);
//        $this->form_validation->set_rules('comment', 'Comment', 'required');
//
//
//        if ($this->form_validation->run() == FALSE){
//            $errors = validation_errors();
//            echo json_encode(['error'=>$errors]);
//        }else{
//           echo json_encode(['success'=>'Record added successfully.']);
//        }
        
        
            $data = array(
                    'comment_return' => $this->input->post('comment')
                        );
	        echo json_encode($data);
    }
   
}


































































