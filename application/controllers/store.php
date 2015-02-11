<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {

	public function index(){
		$data['title'] = 'Store';
		$data['mainContent'] = 'store_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
