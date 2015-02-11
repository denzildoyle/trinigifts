<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms extends CI_Controller {

	public function index(){
		$data['title'] = 'Terms';
		$data['mainContent'] = 'terms_view';
		$this->load->view('templates/basetemplate',$data);
	}
}