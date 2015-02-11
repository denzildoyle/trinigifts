<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$data['title'] = 'Login';
		$data['mainContent'] = 'account/client/login_view';
		$this->load->view('templates/baseTemplate',$data);
		
	}
	
	function validateClient(){
		//Set validation rules
		$this->form_validation->set_rules('email','email','trim|valid_email|required');	
		$this->form_validation->set_rules('password','password','trim|required');
		
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('valid_email', 'Not a valid email');

		//Check for validation errors 
		if ($this->form_validation->run() == TRUE){
			$data = array(
			   'email' => strtolower($_POST['email']),
			   'password' => md5($_POST['password'])
			);
			
			$this->load->model('Client_model');
			$userID = $this->Client_model->loginClient($data);
			
			if($userID > 0){

				$accessLevel = array('userID' => $userID,
									'accessLevel' => "Clients"
									);

				$accessGranted = FALSE;
				$accessGranted = $this->Client_model->isClient($accessLevel);
				if (isset($accessGranted) && $accessGranted == TRUE) {
					$data = array(
						'userID' => $userID,
						'is_clientLogged_in' => TRUE
					);
					$this->session->set_userdata($data);	
					redirect('client/dashboard');
				} else{
					$this->index();
					//__You do not have permisiion to enter this page -flashmaeeage
				}

			} else {
				$this->index();
				//__The usernamer and password you entered is not valied
			}
		} else{
			//Validation Errors
			$this->index();
		}
	}

	// function getClientPro(){
	// 	$data['client'] = $this->client_model->getClient();
	// 	$data['title'] = 'Account';
	// 	$this->load->view('home', $data);
	// }

	// function signup(){
	// 	$this->load->model('Client_model');
	// 	$this->Client_model->registerClient();
	// }

	// function sendVerificationEmail(){
	// }

	// function newPassword(){
	// 	$data['title'] = 'New Password';
	// 	$data['mainContent'] = 'account/newPassword_view';
	// 	$this->load->view('templates/basetemplate',$data);
	// }

	function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}