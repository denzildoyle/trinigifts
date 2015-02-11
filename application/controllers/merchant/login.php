<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$data['title'] = 'Merchant Login';
		$data['mainContent'] = 'account/merchant/login_view';
		$this->load->view('templates/baseTemplate',$data);
	}

	function validateMerchant(){
		//Set validation rules
		$this->form_validation->set_rules('email','email','trim|valid_email|required');	
		$this->form_validation->set_rules('password','password','trim|required');
		
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('valid_email', 'Not a valid email');

		//Check for validation errors 
		if ($this->form_validation->run() == TRUE){
			$data = array(
			   'email' => strtolower($_POST['email']),
			   'password' => md5($_POST['password']),
			);
			
			$this->load->model('Merchant_model');
			$userID = $this->Merchant_model->loginMerchant($data);
			
			if($userID > 0){
				$accessLevel = array('userID' => $userID,
									'accessLevel' => "Merchant"
									);

				$accessGranted = FALSE;
				$accessGranted = $this->Merchant_model->isMerchant($accessLevel);

				if (isset($accessGranted) && $accessGranted == TRUE) {
					
					$data = array('active' => 1,
								  'email' => strtolower($_POST['email'])
								 );

					$active = $this->Merchant_model->isActive($data);

					if (isset($active) && $active == TRUE) {
						$data = array(
							'is_merchantLogged_in' => TRUE
						);
						$this->session->set_userdata($data);	
						redirect('merchant/dashboard');

					} else {
						$this->index();
						//__Your account has not yet been activated 
					}

				} else{
					$this->index();
					//__Your do not have permisiion to enter this page -flashmaeeage
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
}
