<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }


  public function index() {

  }

  public function admin_home() {
    $this->load->view('admin/admin_home');
  }

  public function admin_tables() {
    $this->load->view('admin/admin_tables');
  }

  public function admin_charts() {
    $this->load->view('admin/admin_charts');
  }

  public function admin_events() {
    $this->load->view('admin/admin_events');
  }

   public function admin_course_management() {
    $this->load->view('admin/admin_course_management');
  }
}
