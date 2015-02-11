<?php
class Merchant_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    //__incompleat
    function getAllMerchants(){
 		$this->db->select('');
 		$this->db->from('');
		$this->db->join('', 'tablename.something = tablename.something', 'left');
 		$this->db->group_by('tablename.something');
 		return $this->db->get();
    }

    function getAllStores(){
		$query =  $this->db->get('tblstoredirectory');
		return $query->result();
    }

    function getMerchant($userID){
    	$array = array('userID' => $userID);
		$this->db->where($array);
		$query = $this->db->get('tbluser');
    	return $query->result();
    }

	function loginMerchant($data){
		//Form validated without errors
		$this->db->where($data);
		$query = $this->db->get('tbluser');
		if($query->num_rows() == 1){
			return $query->row(0)->userID;
		} else{
			return false;
		}
    }

    function registerMerchant($data){	
		$this->db->insert('tbluser', $data);
		$accessLevel = array(
			'accesslevel' => 'Merchant'
		);
		$this->db->set('tbluseraccess', $accesslevel);
		redirect('merchant/login');
	}

	function forgetPassword(){
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('valid_email', 'Not a valid email');

		if ($this->form_validation->run() == TRUE){
			
			if (checkEmailExist($_POST['email']) != false){
			    $userID = checkEmailExist($_POST['email']);
				passwordChangeEmail($userID,$_POST['email']);
				
			} else{

				$data['message'] = 'The email addess you entered does not exist';
				$data['title'] = 'Forgot Password';
				$data['mainContent'] = 'faq_view';
				$this->load->view('account/forgotPass_view',$data);
			}
		
		} else{

			$data['message'] = '';
			$data['title'] = 'Forgot Password';
			$data['mainContent'] = 'faq_view';
			$this->load->view('account/forgotPass_view',$data);
			
		}
	}

	function verifypasswordChangeLink(){
		if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
		
			// Verify data
			$email = mysql_escape_string($_GET['email']); // Set email variable
			$hash = mysql_escape_string($_GET['hash']); // Set hash variable
			
			$array = array('email' => $email, 'hash' => $hash);
			$this->db->where($array);
			$query = $this->db->get('tbluser');
			if($query->num_rows() == 1){
				redirect('account/merchant/newPassword');
				//__ add this to session $query->row(0)->userIDID;
			} else{
				return false;
			}
		}		
	}

	//__move this function to controller 
	function passwordChangeEmail($userID,$email){
			// validation has passed. Now send the email
			$name = getUsernameByID($userID);
			$email = $_POST['email'];
			$hash = addhash($usertID);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			$this->email->from('email', 'Name');
			$this->email->to($email);		
			$this->email->subject('Subject');		
			$this->email->message('Hi'. $name .'Has just change has password');

			if($this->email->send()){
				$this->load->view('sentConfirmation_view');
			}

			else{
				show_error($this->email->print_debugger());
			}			
	}

	function checkUsernameExist($username){
		$this->db->where('userName', $username);
		$query = $this->db->get('tbluser');
		if($query->num_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function checkEmailExist($email){
		$this->db->where('email', $email);
		$query = $this->db->get('tbluser');
		if($query->num_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function checkValidPassword($data){
		$this->db->where($data);
		$query = $this->db->get('tbluser');
		if($query->num_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function getUsernameByID($userID){
		$this->db->where('userID', $userID);
		$query = $this->db->get('tbluser');
		return $query->row(0)->username;
	}

	function addhash($userID){
		$data = array('hash' => $hash = md5(rand(0,1000)));
		$this->db->where('userID', $userID);
		$this->db->update('tbluser', $data);
		return $hash;
	}
	
	function getAccessLevelByID($userID){
		$this->db->where('userID', $userID);
		$query = $this->db->get('tbluseraccess');
		return $query->row(0)->accessLevel;
	}

	function updateInfo($userID, $data){
		$this->db->where('userID', $userID);
		$this->db->update('tbluser', $data);
		
		return TRUE;
	}

	function isMerchant($accessLevel){
    	$this->db->where($accessLevel);
    	$query = $this->db->get('tbluseraccess');
    	if($query->num_rows() == 1){
			return TRUE;
		} else{
			return FALSE;
		}
    }

    function isActive($data){
    	$this->db->where($data);
    	$query = $this->db->get('tbluser');
    	if($query->num_rows() == 1){
			return TRUE;
		} else{
			return FALSE;
		}
    }

    function addMerchantUser(){

    }

    function updateMerchantUser(){

    }

    function deleteMerchantUser(){

    }
}