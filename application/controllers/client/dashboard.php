<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index(){
		if ($this->is_clientLogged_in() == TRUE){
			$data['title'] = 'Client Dashboard';
			$data['mainContent'] = 'account/client/dashboard_view';
			
			$userID = $this->session->userdata('userID');
			$this->load->model('Client_model');

			if($query = $this->Client_model->getClient($userID)){
				$data['records'] = $query;
			}
			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo 'You don\'t have permission to access this page.';
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

	function editClient(){
		$data['userID'] = $this->uri->segment(4);
		redirect('client/editProfile', $data);
	}
}