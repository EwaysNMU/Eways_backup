<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Home/header');
        $this->load->view('Home/home');
        $this->load->view('Home/footer');
    }

    public function contact() {
        $this->load->view('Home/header');
        $this->load->view('Home/contact');
        $this->load->view('Home/footer');
    }
    public function about() {
        $this->load->view('Home/header');
        $this->load->view('Home/about');
        $this->load->view('Home/footer');
    }

    public function sendMail() {
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Home/header');
            $this->load->view('Home/contact');
            $this->load->view('Home/footer');
        } else {

            $from = $this->input->post('email');    //senders email address
            $subject = $this->input->post('subject');  //email subject
            $name= $this->input->post('name');
            $phone = $this->input->post('phone');
            $message = $this->input->post('message')."\nContact Number: ". $phone."\n". "\n\nThis email was sent from your website by: ". $name;
//            Samuel Odoh is the reciever
            $receiver = "samuelodohministries@outlook.com"; 
//           $password='$am&holy$pirit';
            //config email settings
            $config = array(
                "smtp_crypto" => "tls",
                "protocol" => "smtp",
                "smtp_host" => "smtp-mail.outlook.com",
                "smtp_port" => "587",
                "smtp_user" => $receiver,
                "smtp_pass" => "",
                "CharSet" => "UTF-8",
                //set authentication to true
//                "SMTPAuth" => "true",
                "mailtype" => "html"
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            //send email
            $this->email->from($from);
            $this->email->to($receiver);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()) {
            $this->session->set_flashdata('flashSuccess', '<strong>Successful!</strong> Your email was sent.');
            redirect('home/contact');
        } else {
            $this->session->set_flashdata('flashFailed', '<strong>Failed!</strong> Your message was not sent.');
            redirect('home/contact');
        }
            
        
        }
    }

}
