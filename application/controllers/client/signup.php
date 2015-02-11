<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index(){
		//__pass username here
		$this->load->model('Client_model');
		$data['title'] = 'Signup';
		$data['mainContent'] = 'account/client/signup_view';
		$this->load->view('templates/baseTemplate', $data);

	}

	public function process() {
	 	$this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|callback_usernameExist|min_length[6]|max_length[24]');
		$this->form_validation->set_rules('fName','first name','trim|required|max_lenght[56]');	
		$this->form_validation->set_rules('lName','last name','trim|required|max_lenght[56]');
		$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_emailExist');
		$this->form_validation->set_rules('dob','date Of birth','trim|required|callback_checkDateFormat');
		$this->form_validation->set_rules('password1','password','trim|required|alpha_numeric|min_length[6]');
		$this->form_validation->set_rules('password2','re-type password','trim|required|matches[password1]');
		//$this->form_validation->set_rules('mobileNum', 'mobile Number', 'trim|callback_checkPhoneNumberFormat');
		$this->form_validation->set_rules('smsUpdate', 'sms', 'trim');


		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('usernameExist', 'The username you entered already exist');
		$this->form_validation->set_message('max_lenght', '%s should not exceed 24 characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('valid_email', 'Not a valid email');
		$this->form_validation->set_message('matches', 'Passwords do not match');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');
		//$this->form_validation->set_message('checkPhoneNumberFormat', 'Invalid Phone. (868) 789-2312');
		$this->form_validation->set_message('emailExist', 'This email you entered already exist');

	    if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//Form has be validated without errors
			$data = array(
			   'username' => strtolower($_POST['username']),
			   'fName' => $_POST['fName'],
			   'lName' => $_POST['lName'],
			   'email' => strtolower($_POST['email']),
			   'bday' => date("d/m/Y", strtotime($_POST['dob'])),
			   'password'  => md5($_POST['password1']),
			   'mobileNum' => $_POST['mobileNum'],
			   'smsUpdate' => (isset($_POST['sms']))?1:0, 
			   'creationDate' => date("d/m/Y", $today) 
			);

			$this->load->model('Client_model');
			$this->Client_model->registerClient($data);

		} else{
			$data['title'] = 'Sign Up';
			$data['mainContent'] = 'account/client/signup_view';
			$this->load->view('templates/basetemplate',$data);
		}	
	}

	function checkDateFormat($date) {
	   $ddmmyyy='(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)[0-9]{2}';
	   if(preg_match("/$ddmmyyy$/", $date)) {
	      return TRUE;
	   } else {
	     return FALSE;
	   }
	} 

	function checkPhoneNumberFormat($number) {
		$number = trim($number);
		$match = '/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/';
		$replace = '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
		$return = '($1) $2-$3';
	    if (preg_match($match, $number)) {
	    	return preg_replace($replace, $return, $number);
	    } else {
			return FALSE;
	    }
	}

	function emailExist($email){
		$this->load->model('Client_model');
		if ($this->Client_model->checkEmailExist($email) == TRUE){
			return FALSE;
		} else{
			return TRUE;
		}
	}

	function usernameExist($username){
		$this->load->model('Client_model');
		if ($this->Client_model->checkUsernameExist($username) == TRUE){
			return FALSE;
		} else{
			return TRUE;
		}
	}
}