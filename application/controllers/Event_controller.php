<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Event_model', '', TRUE);
    }

    public function index() {
         $this->load->view('events/table_events');
    }
  public function event_registration_form() {
         $this->load->view('events/event_registration_form');
    }

    // public function admin_home() {

    //     $data["home_count"] = $this->Student_model->count_home_visit();
    //     $data ['notes'] = $this->Admin_model->getNoRegisteredUser();
    //     $data ['completeTopic'] = $this->Admin_model->getNoCompleteTopic();
    //     $data ['completeCourse'] = $this->Admin_model->getNoCompleteCourse();
    //     $data ['activeUsers'] = $this->Student_model->count_active_users();

    //     $this->load->view('layouts/admin_header');
    //     $this->load->view('admin/admin_home', $data);
    //     $this->load->view('layouts/admin_footer');
    // }



}
