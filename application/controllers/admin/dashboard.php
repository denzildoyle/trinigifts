<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		//__Display client name in title 
		//__if client not logedin display login
		if ($this->is_adminLogged_in() == TRUE){
			$data['title'] = 'Admin Dashboard';
			$data['mainContent'] = 'account/admin/dashboard_view';
			
			$userID = $this->session->userdata('userID');
			$this->load->model('Admin_model');

			if($query = $this->Admin_model->getAdmin($userID)){
				$data['records'] = $query;
			} else {
				$data['records'] = "";
			}
			$this->load->view('templates/adminTemplate',$data);
		} else {
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

	function addMerchant(){

	}
	//__ we miss you emal tell us y you have been aways
	//__send email for when a new tag has been added 
}