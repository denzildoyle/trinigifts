<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HowItWorks extends CI_Controller {

	public function index(){
		$data['title'] = 'How It Works';
		$data['mainContent'] = 'howItWorks_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
