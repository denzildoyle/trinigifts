<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index(){
		$data['title'] = 'Search';
		$data['mainContent'] = 'Search_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
