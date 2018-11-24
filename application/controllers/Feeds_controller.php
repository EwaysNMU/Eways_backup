<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feeds_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('Event_model', '', TRUE);
//         $this->load->model('Feeds_model', '', TRUE);
    }

    public function index() {
        $data['feeds_list']=$this->Feeds_model->get_all_feeds();
        $data['event_list']=$this->Event_model->get_all_events();
        $this->load->view('layouts/main_header');
        $this->load->view('events/table_events',$data);
    }
    public function feeds_form() {
       $this->load->view('feeds/form_add_feed');
   }
    
    public function feeds_table() {
       $data['feeds_list']=$this->Feeds_model->get_all_feeds();
       $this->load->view('feeds/feeds_table',$data);
   }
    
        
        
    public function add_feeds() {
        
       	$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('shortDescription', 'Province', 'required');
		$this->form_validation->set_rules('description', 'Description Province');
		$this->form_validation->set_rules('link', 'Link', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->feeds_form();	
		}
		else{
			$data = array(
				'title'  =>$this->input->post('title'),
				'shortDescription'  => $this->input->post('shortDescription'),
				'description' => $this->input->post('description'),
				'link'   => $this->input->post('link'));
				
				if ($this->Feeds_model->add_feed($data))
				{
					redirect(site_url("allfeeds"));

				}else{
				$this->feeds_form();
				}

			}
		}
   }


