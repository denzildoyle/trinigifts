<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StoreProfile extends CI_Controller {

	public function index(){
		$data['title'] = 'Store Profile';
		$data['mainContent'] = 'storeProfile_view';

		$userID = $this->uri->segment(3);

		$this->load->model('Client_model');
		$this->Client_model->();
		
		$this->load->view('templates/baseTemplate',$data);
	}
}
