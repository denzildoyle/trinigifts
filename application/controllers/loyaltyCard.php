<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loyaltyCard extends CI_Controller {

	public function index(){
		$data['title'] = 'loyalty Card';
		$data['mainContent'] = 'loyaltyCard_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}