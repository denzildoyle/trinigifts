<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddCard extends CI_Controller {

	public function index(){
		if ($this->is_merchantLogged_in() == TRUE){
			$data['title'] = 'Add User';
			$data['mainContent'] = 'account/merchant/addCard_view';
			$this->load->view('templates/baseTemplate',$data);
		} else{
			echo "You dont not have permission to enter this page!";
		}
	}
	
	function processGiftCard(){
      	//__no giftcard amount is assiociated with this giftcard
      	$this->form_validation->set_rules('cardName','Card name','trim|required|alpha_numeric|min_length[6]|max_length[50]');
      	$this->form_validation->set_rules('amtScheme','Amount scheme','trim|required');
      	$this->form_validation->set_rules('minimumAmt','Minimum amount','trim|required');
      	$this->form_validation->set_rules('maximumAmt','Maximum amount','trim|required');
      	$this->form_validation->set_rules('descrition','Descritione','trim|required|alpha_numeric|min_length[20]|max_length[300]');
      	$this->form_validation->set_rules('expiryDate','Expiry date','trim|required');
      	$this->form_validation->set_rules('expiryTime','Expiry time','trim|required');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');

		if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//form has be validated without errors
			$data = array(
				//__Dont know why we need a card type if its already in the loyalty card table
			   'gCardType' => 'GIFTCARD',
			   'userID' => $this->session->userdata('is_merchantLogged_in'),
			   'cardName' => $_POST['cardName'],
			   'amtScheme' => $_POST['amtScheme'],
			   'minimumAmt' => $_POST['minimumAmt'],
			   'maximumAmt'  => $_POST['maximumAmt'],
			   'descrition' => $_POST['descrition'],
			   'expiryDate' => $_POST['expiryDate'],
			   'achive' => (isset($_POST['achive']))?1:0, 
			   'expiryTime' => $_POST['expiryTime'],
			   'rechargeable' => 0,
			   'creationDate' => date("d/m/Y", $today) 
			);
			
			$this->load->model('Merchant_model');
			$this->Merchant_model->addGiftCard($data);

		} else{
	 		$this->index();
		}	
	}
	
	function processLoyaltyCard(){
		
		$this->form_validation->set_rules('cardName','Card name','trim|required|alpha_numeric|min_length[6]|max_length[50]');
      	$this->form_validation->set_rules('pointsScheme','Points scheme','trim|required');
      	$this->form_validation->set_rules('startPoints','Start point','trim|required');
      	$this->form_validation->set_rules('descrition','Descritione','trim|required|alpha_numeric|min_length[20]|max_length[300]');
      	$this->form_validation->set_rules('expiryDate','Expiry date','trim|required');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');

		if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//form has be validated without errors
			$data = array(
				//__Dont know why we need a card type if its already in the loyalty card table
			   'gCardType' => 'LOYALTYCARD',
			   'userID' => $this->session->userdata('is_merchantLogged_in'),
			   'cardName' => $_POST['cardName'],
			   'pointsScheme' => $_POST['amtScheme'],
			   'startPoints' => $_POST['minimumAmt'],
			   'descrition' => $_POST['descrition'],
			   'expiryDate' => $_POST['expiryDate'],
			   'achive' => (isset($_POST['achive']))?1:0, 
			   'creationDate' => date("d/m/Y", $today) 
			);
			
			$this->load->model('Merchant_model');
			$this->Merchant_model->addLoyaltyCard($data);

		} else{
	 		$this->index();
		}	
	}
	
	function processRechargeableCard(){
		//__not sure what I suppose to put here
      	$this->form_validation->set_rules('cardName','Card name','trim|required|alpha_numeric|min_length[6]|max_length[50]');
      	$this->form_validation->set_rules('amtScheme','Amount scheme','trim|required');
      	$this->form_validation->set_rules('minimumAmt','Minimum amount','trim|required');
      	$this->form_validation->set_rules('maximumAmt','Maximum amount','trim|required');
      	$this->form_validation->set_rules('descrition','Descritione','trim|required|alpha_numeric|min_length[20]|max_length[300]');
      	$this->form_validation->set_rules('expiryDate','Expiry date','trim|required');
      	$this->form_validation->set_rules('expiryTime','Expiry time','trim|required');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');

		if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//form has be validated without errors
			$data = array(
				//Dont know why we need a card type if its already in the loyalty card table
			   'gCardType' => 'GIFTCARD',
			   'userID' => $this->session->userdata('is_merchantLogged_in'),
			   'cardName' => $_POST['cardName'],
			   'amtScheme' => $_POST['amtScheme'],
			   'minimumAmt' => $_POST['minimumAmt'],
			   'maximumAmt'  => $_POST['maximumAmt'],
			   'descrition' => $_POST['descrition'],
			   'expiryDate' => $_POST['expiryDate'],
			   'achive' => (isset($_POST['achive']))?1:0,
			   'expiryTime' => $_POST['expiryTime'],
			   'rechargeable' => 0,
			   'creationDate' => date("d/m/Y", $today) 
			);
			
			$this->load->model('Merchant_model');
			$this->Merchant_model->addRechargeableCard($data);

		} else{
	 		$this->index();
		}	
	}

	function emailExist($email){
		if ($this->Merchant_model->checkEmailExist($email) == TRUE){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	function is_merchantLogged_in(){
		$is_merchantLogged_in = $this->session->userdata('is_merchantLogged_in');
		if(!isset($is_merchantLogged_in) || $is_merchantLogged_in != TRUE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}