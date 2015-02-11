<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChangePassword extends CI_Controller {

	public function index(){
		if ($this->is_clientLogged_in() == TRUE){
			$data['title'] = 'Change Password';
			$data['mainContent'] = 'account/client/changePassword_view';
			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}

	function process(){
		$this->form_validation->set_rules('oldPassword','password','trim|required|callback_validPassword');
		$this->form_validation->set_rules('newPassword1','password','trim|required|alpha_numeric|min_length[6]');
		$this->form_validation->set_rules('newPassword2','re-type password','trim|required|matches[newPassword1]');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('validPassword', 'The password you entered is invalid');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('matches', 'Passwords do not match');

		if ($this->form_validation->run() == FALSE){

			//form has be validated without errors
		    $this->load->model('Client_model');
		    $userID = $this->session->userdata('userID');
		    $data = array('password' => md5($_POST['newPassword1']));

			$this->Client_model->updateInfo($userID, $data);
			redirect('client/dashboard');
		
		} else{
			$data['title'] = 'Change Password';
			$data['mainContent'] = 'account/client/changePassword_view';
			$this->load->view('templates/basetemplate',$data);
		}	
	}

	function is_clientLogged_in(){
		$is_clientLogged_in = $this->session->userdata('is_clientLogged_in');
		if(!isset($is_clientLogged_in) || $is_clientLogged_in != TRUE){
			return FALSE;
		} else{
			return TRUE;
		}
	}
	
	function validPassword($password){
		$data = array('userID' => $this->session->userdata('userID'),
		    	      'password' => md5($_POST['oldPassword'])
		    	);
		$this->load->model('Client_model');
		if ($this->Client_model->checkValidPassword($data) == FALSE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}