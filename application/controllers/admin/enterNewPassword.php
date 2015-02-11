<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EnterNewPassword extends CI_Controller {

	public function index(){
		if ($this->is_adminLogged_in() == TRUE){
			$data['title'] = 'New Password';
			$data['mainContent'] = 'account/admin/newPassword_view';
			$this->load->view('templates/adminTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
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