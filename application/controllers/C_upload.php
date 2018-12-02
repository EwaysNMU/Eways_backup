<?php
if (!defined('BASEPATH'))
    exit('No direct access');


class C_upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('error_m');
        $this->load->model('M_upload');

        
    }
    public function do_upload()
    {
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("c_login"));
        }
        $config['upload_path'] = './tmp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024;
        $config['max_width'] = 4000;
        $config['max_height'] = 4000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $data['url_back'] = $this->agent->referrer();
            $data['message'] = $this->upload->display_errors();
            $this->error_m->error_page($data);

        } else {
            $filename = $this->upload->data('file_name');

            $config2['image_library'] = 'gd2';
            $config2['source_image'] = './tmp/'.$filename;
            $config2['create_thumb'] = false;
            $config2['maintain_ratio'] = true;
            $config2['width'] = 480;
            $config2['height'] = 480;
            $config2['new_image']= './uploads/feeds';

            $this->load->library('image_lib', $config2);
            $this->image_lib->resize();
          
           
            $data= array('path'=>$filename);
            $id = $this->input->post('id');
            
            if ($this->M_upload->update_path($data, $id) == 0) {
                $data['url_back'] = $this->agent->referrer();
                redirect(site_url("c_search/s_patient_by/".$id));
            } else {
                $data['url_back'] = site_url("c_search/s_patient_by/" . $id);
                $data['message'] = 'Could not update Patient information.';
                $this->error_m->error_page($data);
            }

        
            
            // print_r($this->upload->data());
            // exit();
            // $data['message'] = $this->upload->data();

            // $this->error_m->error_page($data);
        }
    }

}


