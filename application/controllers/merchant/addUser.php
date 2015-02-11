<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddUser extends CI_Controller {

	public function index(){
		if ($this->is_merchantLogged_in() == TRUE){
			$data['title'] = 'Add User';
			$data['mainContent'] = 'account/merchant/addUser_view';
			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}

	public function process() {
	    $this->form_validation->set_rules('username','username','trim|required|alpha_numeric|min_length[6]|max_length[24]');
		$this->form_validation->set_rules('fName','first name','trim|required|max_lenght[56]');	
		$this->form_validation->set_rules('lName','last name','trim|required|max_lenght[56]');
		$this->form_validation->set_rules('email','email','trim|valid_email|callback_emailExist|required');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('valid_email', 'Not a valid email');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');
		$this->form_validation->set_message('checkPhoneNumberFormat', 'Invalid Phone.');
		$this->form_validation->set_message('emailExist', 'This email already exist');

		if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//form has be validated without errors
			$merchantDetails = array(
			   'username' => strtolower($_POST['username']),
			   'fName' => $_POST['fName'],
			   'lName' => $_POST['lName'],
			   'password'  => md5('password'),
			   'active' => 0,
			   'creationDate' => date("d/m/Y", $today) 
			);
			
			$this->load->model('Merchant_model');
			$this->Merchant_model->addUser($merchantDetails);

		} else{
	 		$this->index();
		}	
	}

	function emailExist($email){
		if ($this->Merchant_model->checkEmailExist($email) == TRUE){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	function is_merchantLogged_in(){
		$is_merchantLogged_in = $this->session->userdata('is_merchantLogged_in');
		if(!isset($is_merchantLogged_in) || $is_merchantLogged_in != TRUE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}