<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }


  public function index() {

  }

  public function admin_dashboard() {
    $this->load->view('admin/admin_dashboard');
  }

   public function admin_course_management() {
    $this->load->view('admin/admin_course_management');
  }
}
