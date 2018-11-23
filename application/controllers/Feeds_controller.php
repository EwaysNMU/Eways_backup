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
    public function add_feeds() {
        
       	$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('shortDescription', 'Province', 'required');
		$this->form_validation->set_rules('description', 'Description Province');
		$this->form_validation->set_rules('link', 'Link', 'required');
		if ($this->form_validation->run() == FALSE)
            
		{
			$data['url_back'] =  $this->agent->referrer();
			$data['message'] = 'There was an error processing your information. Please click on the link below to be redirect to the correct page.';
			$this->error_m->error_page($data);

			
		}
		else{
			$data = array(
				'title'  =>$this->input->post('title'),
				'shortDescription'  => $this->input->post('shortDescription'),
				'description' => $this->input->post('description'),
				'link'   => $this->input->post('link'));
				
				if ($this->M_patient->create_new_patient($data))
				{
					$data['url_back'] =  $this->agent->referrer();

					redirect(site_url("c_tables/t_patient"));

				}else{
				$data['url_back'] = $this->agent->referrer();
				$data['message'] = 'Sorry! could not create new patientTry again.';

				$this->error_m->error_page($data);
				}

			}
		}
   }


