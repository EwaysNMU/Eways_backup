<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login_admin_form()
	{
		$this->load->view('login/login_admin');
	}


	function encrypt_password($password, $email){
		$rotations = 1;
		$salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($email));
		$hash = $salt . $password;
		for ( $i = 0; $i < $rotations; $i ++ ) {
			$hash = hash('sha256', $hash);
		}
		return $salt . $hash;
	}




	function is_valid_password($password,$dbpassword){
		$rotations = 1;
		$salt = substr($dbpassword, 0, 64);
		$hash = $salt . $password;

		for ( $i = 0; $i < $rotations; $i ++ ) {
			$hash = hash('sha256', $hash);
		}

		//Sleep a bit to prevent brute force
		time_nanosleep(0, 400000000);
		$hash = $salt . $hash;
		return $hash == $dbpassword;
	}


	public function user_validation() {

		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->library('user_agent');
			redirect($this->agent->referrer());
		}
		else{

			$email = $this->input->post('email');
			$user = $this->input->post('password');
			$dbpassword = $this->Login_model->get_user_pwd($email,$user);

			if($this->is_valid_password($this->input->post('password'),$dbpassword)){
				$user = $this->input->post('user');
				$data['info'] = $this->Loginmodel->get_user_details($email,$user);

				if($user=='student'){
					/*Setting Session data*/
					$session_data = array(
						'email' => $data['info']['email'],
						'firstName' => $data['info']['firstName'],
						'lastName' => $data['info']['lastName'],
						'cellphone' => $data['info']['cellphone'],
						'department' => $data['info']['departmentID'],
						'studyAreaID' => '',
						'user'=>$user,
						'extra'=>'NotSet',
						'studentID'=>$data['info']['studentID'],
						'profileHeaderMessage'=>$data['info']['profileHeaderMessage']
					);


				}else if($user=='staff'){
					/*Setting Session data*/
					$session_data = array(
						'email' => $data['info']['email'],
						'firstName' => $data['info']['firstName'],
						'lastName' => $data['info']['lastName'],
						'cellphone' => $data['info']['cellphone'],
						'studyArea' => $data['info']['field'],
						'user'=>$user,
						'extra'=>$data['myCourses'] = $this->Loginmodel->get_user_details($email,$user)
					);
				}




				$this->session->set_userdata($user.'_logged_in', $session_data);
				$title = 'Login successfull';
				$this->session->set_flashdata('title_id', $title);//message rendered

				$this->load->view('success/success_page',$data);
				$this->output->set_header('refresh:1; url='.site_url($user."/dashboard"));

			}else{


				$user = $this->input->post('user');
				$this->session->set_flashdata('title_id', 'Error!!');//message rendered
				$this->session->set_flashdata('message_id', 'We were not able to log you in using the details you entered. Please verify them and try again.');//message rendered

				$this->form_validation->set_error_delimiters('<div style class="error">', '</div>');

				$this->load->view('error/error_page');

				if($user=='student'){
					$this->output->set_header('refresh:1; url='.site_url("login/student_login"));
				}else if($user=='staff'){
					$this->output->set_header('refresh:1; url='.site_url("login/staff_login"));
				}


			}
		}
	}


}
