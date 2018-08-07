<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
		$this->load->view('home');
	}

	public function login_form()
	{
		$this->load->view('login');
	}

	public function login_admin()
	{
		$this->load->view('login/login_admin');
	}

	public function login_student()
	{
		$this->load->view('login/login_student');
	}

}
