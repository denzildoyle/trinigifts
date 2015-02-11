<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DeactivateCard extends CI_Controller {

	public function index(){
		if ($this->is_merchantLogged_in() == TRUE){
			$data['title'] = 'Deactivate Card';
			$data['mainContent'] = 'account/merchant/deactivateCard_view';
			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
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