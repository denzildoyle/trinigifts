<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index(){
		$data['title'] = 'Merchant Signup';
		$data['mainContent'] = 'account/merchant/signup_view';
		$this->load->view('templates/baseTemplate',$data);
	}


	public function process() {
	    //$this->load->library('ValidNumber');
	    $this->form_validation->set_rules('username','username','trim|required|alpha_numeric|min_length[6]|max_length[24]');
		$this->form_validation->set_rules('fName','first name','trim|required|max_lenght[56]');	
		$this->form_validation->set_rules('lName','last name','trim|required|max_lenght[56]');
		$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_emailExist');
		$this->form_validation->set_rules('password1','password','trim|required|alpha_numeric|min_length[6]');
		$this->form_validation->set_rules('password2','re-type password','trim|required|matches[password1]');
		$this->form_validation->set_rules('mobileNum', 'mobile Number', 'trim|callback_checkPhoneNumberFormat');

		
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('valid_email', 'Not a valid email');
		$this->form_validation->set_message('matches', 'Passwords do not match');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');
		$this->form_validation->set_message('checkPhoneNumberFormat', 'Invalid Phone.');
		$this->form_validation->set_message('emailExist', 'this email already exist');

		if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//form has be validated without errors
			$merchantDetails = array(
			   'username' => strtolower($_POST['username']),
			   'fName' => $_POST['fName'],
			   'lName' => $_POST['lName'],
			   'email' => strtolower($_POST['email']),
			   'password'  => md5($_POST['password1']),
			   'active' => 0,
			   'creationDate' => date("d/m/Y", $today) 
			);

			$merchantDetails = array(
			   'storeName' => strtolower($_POST['storeName']),
			   'street1' => $_POST['street1'],
			   'street2' => $_POST['street2'],
			   'town' => $_POST['town'],
			   'storeEmail'  => $_POST['storeEmail'],
			   'storePhone' => $_POST['storePhone'], 
			   'storeKeywords' => $_POST['storeKeywords'], 
			   'latitude' => $_POST['latitude'], 
			   'longitude' => $_POST['longitude'] 
			);
			
			$this->load->model('Merchant_model');
			$this->Merchant_model->registerMerchant($merchantDetails);
			$this->Merchant_model->registerStore($data);

		} else{
			$data['title'] = 'username';
			$data['mainContent'] = 'merchant/signup_view';
			$this->load->view('templates/basetemplate',$data);
		}	
	}

	//__still not working as it should
	function checkDateFormat($date) {
   		$ddmmyyy='(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)[0-9]{2}';
		if(preg_match("$ddmmyyy", $date)) {
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
	    	return false;
	    }
	}

	function emailExist($email){
		if ($this->Client_model->emailExist($email) == TRUE){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
}