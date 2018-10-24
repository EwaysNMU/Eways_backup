<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model', '', TRUE);
    }

    public function index() {
        
    }

    public function admin_home() {
        //$this->load->view('admin/admin_home');

        $this->load->model('Admin_model', '', TRUE);


        $data["home_count"] = $this->Student_model->count_home_visit();
        $data ['notes'] = $this->Admin_model->getNoRegisteredUser();
        $data ['completeTopic'] = $this->Admin_model->getNoCompleteTopic();
        $data ['completeCourse'] = $this->Admin_model->getNoCompleteCourse();
        $data ['activeUsers'] = $this->Student_model->count_active_users();
        
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/admin_home', $data);
        $this->load->view('layouts/admin_footer');
        
    }

    public function admin_tables() {
        //$this->load->view('admin/admin_tables');

        $this->load->model('Admin_model', '', TRUE);
        $data ['notes'] = $this->Admin_model->getRegisteredUser();
        if ($data ['notes'] == FALSE) {
            $this->load->view('layouts/admin_header');
            $this->load->view('admin/admin_home');
            $this->load->view('layouts/admin_footer');
        } else {
            $this->load->view('layouts/admin_header');
            $this->load->view('admin/admin_tables', $data);
            $this->load->view('layouts/admin_footer');
        }
    }

    public function admin_reg_user() {
        //$this->load->view('admin/admin_tables');

        $this->load->model('Admin_model', '', TRUE);
        $data ['notes'] = $this->Admin_model->getRegisteredUser();
        if ($data ['notes'] == FALSE) {
            $this->load->view('layouts/admin_header');
            $this->load->view('admin/admin_home');
            $this->load->view('layouts/admin_footer');
        } else {
            $this->load->view('layouts/admin_header');
            $this->load->view('admin/admin_reg_user', $data);
            $this->load->view('layouts/admin_footer');
        }
    }

    public function admin_charts() {

//        $this->load->model('Admin_model', '', TRUE);
//
//        $data ['ctopic1'] = $this->Admin_model->getCountTopic1();
//        $data ['ctopic2'] = $this->Admin_model->getCountTopic2();
//        $data ['ctopic3'] = $this->Admin_model->getCountTopic3();
//        $data ['ctopic4'] = $this->Admin_model->getCountTopic4();
//        $data ['ctopic5'] = $this->Admin_model->getCountTopic5();
//        $data ['ctopic6'] = $this->Admin_model->getCountTopic6();

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/admin_charts', $data);
        $this->load->view('layouts/admin_footer');
    }
    
    public function admin_charts_completed_topics() {

        $this->load->model('Admin_model', '', TRUE);

        $data ['ctopic1'] = $this->Admin_model->getCountTopic1();
        $data ['ctopic2'] = $this->Admin_model->getCountTopic2();
        $data ['ctopic3'] = $this->Admin_model->getCountTopic3();
        $data ['ctopic4'] = $this->Admin_model->getCountTopic4();
        $data ['ctopic5'] = $this->Admin_model->getCountTopic5();
        $data ['ctopic6'] = $this->Admin_model->getCountTopic6();

        $this->load->view('layouts/admin_header');
        $this->load->view('admin/admin_charts_completed_topics', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_events() {
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/admin_events');
        $this->load->view('layouts/admin_footer');
    }

    public function admin_course_management() {
        $this->load->view('admin/admin_course_management');
    }

    public function admin_resources() {
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/admin_resources');
        $this->load->view('layouts/admin_footer');
    }

    public function add_resources() {

        if (isset($_POST['upload'])) {
            $imgFile = $_FILES['file']['name'];
            $tmp_dir = $_FILES['file']['tmp_name'];
            $imgSize = $_FILES['file']['size'];
            $upload = '';
            if ($imgFile) {
                $upload_dir = 'uploads/files/'; // upload directory		
                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
                $upload = rand(1000, 1000000) . "." . $imgExt;
                if (in_array($imgExt, $valid_extensions)) {
                    if ($imgSize < 5000000) {
                        $upload_result = move_uploaded_file($tmp_dir, $upload_dir . $upload);
                    } else {
                        $this->session->set_flashdata('flash_error_large', 'error');
                        redirect('/admin_resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin_resources');
                }
            }
            if ($upload == NULL) {
                $upload = 'no_file';
            }
            $url = $this->input->post('web_url');
            if ($url == NULL) {
                $url = 'no_url';
            }
            $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'web_url' => $url,
                'file_name' => $upload,
            );
            if ($this->Admin_model->insert_resources($data)) {
                redirect('/admin_resources');
            } else {
                $this->admin_resources();
            }
        }
    }

}
