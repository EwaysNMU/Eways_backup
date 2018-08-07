<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentLogin_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('home');
    }

    public function login_student_form() {
        $this->load->view('login/login_student');
    }

}
