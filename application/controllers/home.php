<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['title'] = 'Home';
		$data['mainContent'] = 'home_view';
		$this->load->view('templates/basetemplate',$data);
	}
}
