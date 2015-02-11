<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyRechargeCards extends CI_Controller {

	public function index(){
		if ($this->is_clientLogged_in() == TRUE){
			$data['title'] = 'My Recharge Cards';
			$data['mainContent'] = 'account/client/myRechargeCards_view';
			
			$userID = $this->session->userdata('userID');
			
			$this->load->model('Client_model');
			if($query = $this->Client_model->getRCtrans($userID)){
				$data['rechargeCardsTrans'] = $query;
			}

			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}
	
	function is_clientLogged_in(){
		$is_clientLogged_in = $this->session->userdata('is_clientLogged_in');
		if(!isset($is_clientLogged_in) || $is_clientLogged_in != TRUE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}