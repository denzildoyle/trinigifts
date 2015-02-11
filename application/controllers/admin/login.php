<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$data['title'] = 'Admin Login';
		$data['mainContent'] = 'account/admin/login_view';
		$this->load->view('templates/adminTemplate',$data);
	}

    function validateAdmin(){
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
			
			$this->load->model('Admin_model');
			$userID = $this->Admin_model->loginAdmin($data);
			
			if($userID > 0){
				$accessLevel = array('userID' => $userID,
									'accessLevel' => "Admin"
									);

				$accessGranted = FALSE;
				$accessGranted = $this->Admin_model->isAdmin($accessLevel);
				if (isset($accessGranted) && $accessGranted == TRUE) {
					$data = array(
						'is_adminLogged_in' => TRUE
					);
					$this->session->set_userdata($data);	
					redirect('admin/dashboard');
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

	// private function processNewPassword(){
	// 	$this->form_validation->set_rules('email','email','trim|required|valid_email');
	// 	$this->form_validation->set_rules('password1','password','trim|required|alpha_numeric|min_length[6]');
	// 	$this->form_validation->set_rules('password2','re-type password','trim|required|matches[password1]');

	// 	$this->form_validation->set_message('required', '%s required');
	// 	$this->form_validation->set_message('min_length', '%s minimum length must be 6 characters');
	// 	$this->form_validation->set_message('alpha_numeric', '%s fds');
	// 	$this->form_validation->set_message('valid_email', 'Not a valid email');
	// 	$this->form_validation->set_message('matches', 'Passwords do not match');

	// 	//Check for validation errors 
	// 	if ($this->form_validation->run() == TRUE){
			
	// 		passwordChangeEmail();
	// 		$this->load->model('Admin_model');
	// 		$this->Admin_model->addNewPassword();
			
	// 		//__call admin_model and add information to database
	// 		//__send message to default email addess that admin has changed default password
	// 		//__redurect user to login again with new credentials 

	// 		//Form has be validated without errors

	// 		//__set some session to conferm login	
	// 		//__redirect to admin page
	// 	} else{
	// 		redirect('newPassword');
	// 	}
	// }

	// private function passwordChangeEmail(){
	// 	// validation has passed. Now send the email

	// 	$this->load->model('Admin_model');
	// 	$username = $this->Admin_model->getUsernameByID();
	// 	$email = $this->Admin_model->getEmailByID();

	// 	$this->load->library('email', $config);
	// 	$this->email->set_newline("\r\n");

	// 	$this->email->from('email', 'Name');
	// 	$this->email->to($email);		
	// 	$this->email->subject('Subject');		
	// 	$this->email->message('Hi'. $username.'
	// 	You have compleated the first step of your password reset. 
	// 	Please click on the link below to enter a new password
        
 //        http://apsolute-tt.com/subscribe/verify.php?email='.$email.'&hash='.addhash($clientID).'');

	// 	if($this->email->send()){
	// 		$this->load->view('sentConfirmation_view');
	// 	}

	// 	else{
	// 		show_error($this->email->print_debugger());
	// 	}	
	// }

	// private function processNewAdmin(){
	// 	$this->form_validation->set_rules('username','Username','trim|required');	
	// 	$this->form_validation->set_rules('email','email','trim|required|valid_email');

	// 	$this->form_validation->set_message('required', '%s required');
	// 	$this->form_validation->set_message('valid_email', 'Not a valid email');
		
	// 	//__add password validations 

	// 	//Check for validation errors 
	// 	if ($this->form_validation->run() == TRUE){
	// 			if($_POST['sms'] == 'checked'){
	// 				$smsUpdate = '1';
	// 			}else{
	// 				$smsUpdate = '0';
	// 			}

	// 		//Form has be validated without errors
	// 		$data = array(
	// 		   'firstName' => $_POST['fName'], //__change to fName
	// 		   'lastName' => $_POST['lName'],//__change to lName
	// 		   'email' => strtolower($_POST['email']),//__change to passwordBlob 
	// 		   'bday' => date("d/m/Y", strtotime($_POST['dob'])),
	// 		   'password'  => md5($_POST['password1']),
	// 		   'mobileNum' => $_POST['mobileNum'],
	// 		   'smsUpdate' => (isset($_POST['sms']))?1:0 
	// 		);
			
	// 		$this->db->insert('tblclients', $data);
	// 		//__set some session to conferm login	
	// 		//__redirect to homepage
	// 		//redirect('login','sendVerificationEmail');
	// 		//$this->load->view('home_view', $data);

	// 	} else{
	// 		$data['title'] = 'username';
	// 		$data['mainContent'] = 'account/signup_view';
	// 		$this->load->view('templates/basetemplate',$data);
	// 	}	
	// }
}

