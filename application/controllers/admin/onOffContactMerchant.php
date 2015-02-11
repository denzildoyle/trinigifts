<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OnOffContactMerchant extends CI_Controller {

	public function index(){
		if ($this->is_adminLogged_in() == TRUE){
			$data['title'] = 'On/Off Contact Merchant';
			$data['mainContent'] = 'account/admin/onOffContactMerchant_view';
			$this->load->view('templates/baseTemplate',$data);
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