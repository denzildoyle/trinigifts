<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StoreDirectory extends CI_Controller {

	public function index(){
		$data['title'] = 'Store Directory';
		$data['mainContent'] = 'storeDirectory_view';

		$this->load->model('Merchant_model');
		if($query = $this->Merchant_model->getAllStores()){
			$data['records'] = $query;
		}
		$this->load->view('templates/baseTemplate',$data);
	}
}
