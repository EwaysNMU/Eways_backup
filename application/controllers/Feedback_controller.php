<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }


  public function index() {

  }
  public function get_all_feedbacks() {

    $data['feedback_list']=$this->Feedback_model->get_all_feedbacks();
    $data['message']='LIST OF FEEDBACK';
    $this->load->view('admin/admin_feedback_management',$data);
  }
}
