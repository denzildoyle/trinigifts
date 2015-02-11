<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index(){
		$data['title'] = 'FAQ';
		$data['mainContent'] = 'faq_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
