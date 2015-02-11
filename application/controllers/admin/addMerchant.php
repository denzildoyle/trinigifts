<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddMerchant extends CI_Controller {

	public function index(){
		if ($this->is_adminLogged_in() == TRUE){
			$data['title'] = 'Add Merchant';
			$data['mainContent'] = 'account/admin/addMerchant_view';
			$this->load->view('templates/basetemplate',$data);
		//__load merchant model
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}

	public function create() {
	    $this->load->library('ValidNumber');
	    $this->form_validation->set_rules('username','username','trim|required|alpha_numeric|min_length[6]|max_length[24]');
		$this->form_validation->set_rules('fName','first name','trim|required|max_lenght[56]');	
		$this->form_validation->set_rules('lName','last name','trim|required|max_lenght[56]');
		$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_emailExist');
		$this->form_validation->set_rules('mobileNum', 'mobile Number', 'trim|callback_checkPhoneNumberFormat');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s fds');
		$this->form_validation->set_message('valid_email', 'Not a valid email');
		$this->form_validation->set_message('checkPhoneNumberFormat', 'Invalid Phone.');
		$this->form_validation->set_message('emailExist', 'this email already exist');

		if ($this->form_validation->run() == TRUE){
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//Form has be validated without errors
			$data = array(
			   'username' => strtolower($_POST['username']),
			   'fName' => $_POST['fName'],
			   'lName' => $_POST['lName'],
			   'email' => strtolower($_POST['email']),
			   'password'  => md5('password'),
			   'mobileNum' => $_POST['mobileNum'],
			   'creationDate' => date("d/m/Y", $today) 
			);
			
			$this->Admin_model->addMerchant($data);

		} else{
			$this->index();
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
		if ($this->admin_model->checkEmailExist($email) == TRUE){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	function is_adminLogged_in(){
		$is_adminLogged_in = $this->session->userdata('is_adminLogged_in');
		if(!isset($is_adminLogged_in) || $is_adminLogged_in != TRUE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}