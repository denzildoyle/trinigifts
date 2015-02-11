<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RechargeableCard extends CI_Controller {

	public function index(){
		$data['title'] = 'Rechargeable Card';
		$data['mainContent'] = 'rechargeableCard_view';
		$this->load->view('templates/baseTemplate',$data);
	}

	//buy reloadablecard
	//email reloadableCard 
	//text reloadableCard
	//send reloadable Card in app
	//subtact from reloadable card 
	//add to reloadable card 
}