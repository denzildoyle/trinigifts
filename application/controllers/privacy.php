<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacy extends CI_Controller {

	public function index(){
		$data['title'] = 'Privacy';
		$data['mainContent'] = 'privacy_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
