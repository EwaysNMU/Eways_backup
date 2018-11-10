<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Event_model', '', TRUE);
         $this->load->model('Feeds_model', '', TRUE);
    }

    public function index() {
        $data['feeds_list']=$this->Feeds_model->get_all_feeds();
        $data['event_list']=$this->Event_model->get_all_events();
        $this->load->view('events/table_events',$data);
    }
    public function event_registration_form() {
       $this->load->view('events/event_registration_form');
   }

}
