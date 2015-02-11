<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteMap extends CI_Controller {

	public function index(){
		$data['title'] = 'Site Map';
		$data['mainContent'] = 'siteMap_view';
		$this->load->view('templates/baseTemplate',$data);
	}
}
