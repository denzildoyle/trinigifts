<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChangePassword extends CI_Controller {

	public function index(){
		if ($this->is_merchantLogged_in() == TRUE){
			$data['title'] = 'Change Password';
			$data['mainContent'] = 'account/merchant/changePassword_view';
			$this->load->view('templates/adminTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}

	function process(){
		$this->form_validation->set_rules('oldPassword','password','trim|required');
		$this->form_validation->set_rules('newPassword1','password','trim|required|alpha_numeric|min_length[6]');
		$this->form_validation->set_rules('newPassword2','re-type password','trim|required|matches[newPassword1]');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('matches', 'Passwords do not match');
	}
}