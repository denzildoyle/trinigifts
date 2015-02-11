<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function index(){
		$data['title'] = 'Ads';
		$data['mainContent'] = 'ads_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
