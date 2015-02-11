<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buy extends CI_Controller {

	public function index(){
		$data['title'] = 'buy';
		$data['mainContent'] = 'buy_view';
		$this->load->view('templates/baseTemplate',$data);
	}

	public function paypal() {
		$this->load->library('paypal_class');
		$this->paypal_class->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
		//$this->paypal_class->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
		$this->paypal_class->add_field('currency_code', 'CHF');
		$this->paypal_class->add_field('business', $this->config->item('bussinessPayPalAccountTest'));
		//$this->paypal_class->add_field('business', $this->config->item('bussinessPayPalAccount'));
		$this->paypal_class->add_field('return', 'success'); // return url
		$this->paypal_class->add_field('cancel_return', '/step4'); // cancel url
		$this->paypal_class->add_field('notify_url', 'validatePaypal'); // notify url
		$totalPrice = $this->session->userdata('totalPrice');
		$this->paypal_class->add_field('item_name', 'Testing');
		$this->paypal_class->add_field('amount', $totalPrice);
		$this->paypal_class->add_field('custom', $this->session->userdata('orderId'));
		$this->paypal_class->submit_paypal_post(); // submit the fields to paypal
		//$p->dump_fields();      // for debugging, output a table of all the fields
		exit;
	}

	public function validatePaypal() {
		$this->load->library('paypal_class');
		$this->paypal_class->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
		//$this->paypal_class->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
		if ($this->paypal_class->validate_ipn()) {
			$orderId = trim($_POST['custom']);
			$itemName = trim($_POST['item_name']);
			// put your code here
		}
		break;
	}
}