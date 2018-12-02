<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feeds_controller extends CI_Controller {

public function __construct() {
    parent::__construct();
 $this->load->helper(array('form', 'url'));
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



public function do_upload() {

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('shortDescription', 'Province', 'required');
    $this->form_validation->set_rules('description', 'Description Province');
    $this->form_validation->set_rules('link', 'Link', 'required');

    if ($this->form_validation->run() == FALSE){

        $this->feeds_form();	
    }
    else{

        $config['upload_path'] = './tmp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 4000;
        $config['max_height'] = 4000;
       $this->upload->initialize($config);
        
         if (!$this->upload->do_upload('userfile')) {
            //exit();
             $error = array('error' => $this->upload->display_errors());
             $this->load->view('feeds/form_add_feed', $error);
             //$filename='No Picture';

        } else {
            $filename = $this->upload->data('file_name');
            $config2['image_library'] = 'gd2';
            $config2['source_image'] = './tmp/'. $filename;
            $config2['create_thumb'] = false;
            $config2['maintain_ratio'] = true;
            $config2['width'] = 400;
            $config2['height'] = 400;
            $config2['new_image']= './uploads/feeds';
            $this->image_lib->initialize($config2);
             
             /*Resize image uploaded*/
              if (!$this->image_lib->resize())
            {
              $error = array('error' => $this->image_lib->display_errors());
             $this->load->view('feeds/form_add_feed', $error);
            }
             
            /*Delete the temp picture uploaded*/
            if(file_exists('./tmp/'. $filename))
            {
               unlink('./tmp/'. $filename);
            }
          
             
            $data = array(
            'title'  =>$this->input->post('title'),
            'shortDescription'  => $this->input->post('shortDescription'),
            'description' => $this->input->post('description'),
            'link'   => $this->input->post('link'),
             'picture_path'=>$filename);

            if ($this->Feeds_model->add_feed($data))
            {
                redirect(site_url("allfeeds"));

            }else{
            $this->feeds_form();
            }

         }
        }
    }
}


