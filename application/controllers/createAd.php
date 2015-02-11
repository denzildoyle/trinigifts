<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreateAd extends CI_Controller {

	public function index(){
		$data['title'] = 'Create Ad';
		$data['mainContent'] = 'CreateAd_view';
		$this->load->view('templates/baseTemplate',$data);
	}

	function upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
}