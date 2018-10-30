<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_resources extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function admin_resources() {
        $this->load->model('admin/Resources','resources');
        
        $data['get_resources'] = $this->resources->getResources();
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/resources/all_resources',$data);
        $this->load->view('layouts/admin_footer');
    }
    public function add_resources_view() {
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/resources/admin_resources');
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



















