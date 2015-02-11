<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GiftCard extends CI_Controller {

	public function index(){
		$data['title'] = 'Gift Card';
		$data['mainContent'] = 'giftCard_view';
		$this->load->view('templates/baseTemplate',$data);
	}

		//buy giftcard
	//email giftCard 
	//text giftCard
	//giftCard in app
	//subtact from giftcard 
}