<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test_view extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index() {
            $this->load->view('hnf/header');
            $this->load->view('testing/testing_view');
            $this->load->view('hnf/footer');

	}
        public function content() {
            $this->load->view('testing/test_content');

	}
	
}
