<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_Courses_controller extends CI_Controller {

        
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

    public function list_of_courses() {
        $stud_id = $this->session->userdata('studentID');
        $data['info'] = $this->Feedback_model->get_all_feedbacks($stud_id);
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        
        
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/list_of_courses', $data);
        $this->load->view('layouts/footer');
    }

//    Time Management----------------------------------------
    public function time_management() {
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $this->load->view('layouts/header', $data);
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
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $this->load->view('layouts/header', $data);
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
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $this->load->view('layouts/header', $data);
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
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $this->load->view('layouts/header', $data);
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
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data['notes'] = $this->Student_model->get_notes($stud_id);
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/goals_setting');
        $this->load->view('layouts/footer_courses');
    }
    
     public function goals_setting_note() {
         $stud_id = $this->session->userdata('studentID');
         $topicID = "1";
         $desc = $this->input->post('description');
                    if ($this->Student_model->update_notes($stud_id,$topicID,$desc)) {
            echo json_encode(['comment_return'=>'Saved!']);
            } else {
            }
    }

    public function goals_setting_feedback() {
        $this->load->view('layouts/header_feedback');
        $this->load->view('feedback/goals_setting');
        $this->load->view('layouts/footer_courses');
    }

//    Tips For Exams And Tests--------------------------------------------

    public function tips_for_exams_and_tests() {
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $this->load->view('layouts/header', $data);
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
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data['info3'] = $this->Feedback_model->get_all_feedbacks_profile($stud_id);
        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/user_profile', $data);
        $this->load->view('layouts/footer');
    }

    public function delete_photo() {
        $stud_id = $this->session->userdata('studentID');
        $data["info"] = $this->Student_model->get_profile($stud_id);
        foreach ($data['info']->result() as $row) {
            $db_photo = $row->photo; //or whatever the query returns
        }
        $photo = "no_profile.jpeg";
        $this->Student_model->remove_photo($stud_id, $photo);
        unlink(FCPATH ."uploads/user_profiles/". $db_photo);
        redirect('user_profile_');
    }

    public function update_profile() {
        if (isset($_POST['upload'])) {
            $stud_no = $this->session->userdata('studentNo');
            $imgFile = $_FILES['userfile']['name'];
            $tmp_dir = $_FILES['userfile']['tmp_name'];
            $imgSize = $_FILES['userfile']['size'];
            $userpic = '';
            if ($imgFile) {
                $upload_dir = 'uploads/user_profiles/'; // upload directory		
                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $userpic = $stud_no . rand(1000, 1000000) . "." . $imgExt;

                if (in_array($imgExt, $valid_extensions)) {
                    if ($imgSize < 5000000) {
                        $upload_result = move_uploaded_file($tmp_dir, $upload_dir . $userpic);
                    } else {
                        $this->session->set_flashdata('flash_error_large', 'error');
                        redirect('user_profile_');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('user_profile_');
                }
            } else {
                
            }
            if ($userpic == NULL) {
                $userpic = $this->input->post('db_photo');
            }
            $stud_id = $this->session->userdata('studentID');
            $fname = $this->input->post('first_name');
            $lname = $this->input->post('last_name');
            if ($this->Student_model->update_student($stud_id, $fname, $lname, $userpic)) {
                $this->session->set_flashdata('flash_profile', 'success');
                redirect('user_profile_');
            } else {
                redirect('user_profile_');
            }
        }
    }

//      Resources--------------------------------------------------------
   
    public function get_resources() {
        $stud_id = $this->session->userdata('studentID');
        $data['info2'] = $this->Student_model->get_profile($stud_id);
        $data["info"] = $this->Student_model->get_resources();

        $this->load->view('layouts/header', $data);
        $this->load->view('course_views/resources', $data);
        $this->load->view('layouts/footer');
    }

}





























































