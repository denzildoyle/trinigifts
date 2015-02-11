<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutUs extends CI_Controller {

	public function index(){
		$data['title'] = 'About US';
		$data['mainContent'] = 'aboutUs_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}