<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_resources extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Resources','resources');
    }

    public function index() {
        
    }

    public function admin_resources() {
        
        
        $data['get_resources'] = $this->resources->getResources();
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/resources/all_resources',$data);
        $this->load->view('layouts/admin_footer');
    }
    public function add_resources_view() {
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/resources/add_resources');
        $this->load->view('layouts/admin_footer');
    }
    public function edit_resources_view($meg1,$meg2,$meg3) {
         $edit = array(
            'meg1' => $meg1,
            'meg2' => $meg2,
             'meg3' => $meg3,
        );
        $this->load->view('layouts/admin_header');
        $this->load->view('admin/resources/edit_resources',$edit);
        $this->load->view('layouts/admin_footer');
    }
    public function delete() {
         $resourceID = $this->uri->segment(3);
            $this->resources->delete($resourceID);
            $resources="Resources deleted";
        $this->session->set_flashdata('flash_Success', $resources);
        redirect("/admin/resources");
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
                        redirect('/admin/resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin/resources');
                }
            }
            
            if($this->input->post('type') == "Web Url"){
                
            $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'file/web_url' => $this->input->post('web_url'),
            );
            }
            else{
                $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'file/web_url' => $upload,
            );
            }
            if ($this->resources->insert_resources($data)) {
                  $resources="Resources added";
        $this->session->set_flashdata('flash_Success', $resources);
                redirect('/admin/resources');
            } else {
                $this->admin_resources();
            }
        }
    }
    public function edit_resources() {

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
                        redirect('/admin/resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin/resources');
                }
            }
            if ($upload == NULL) {
                $upload = $this->input->post('db_file');
            }
            $url = $this->input->post('web_url');
            if ($url == NULL) {
                $url = $this->input->post('db_url');
            }
                $title = $this->input->post('title');
                $type = $this->input->post('type');
                $web_url = $url;
                $file_name = $upload;
            $id = $this->input->post('id');
            if ($this->resources->update($id,$title,$type,$web_url,$file_name)) {
                  $resources="Resources updated";
        $this->session->set_flashdata('flash_Success', $resources);
                redirect('/admin/resources');
            } else {
                $this->edit_resources();
            }
        }
    }

}



















































































