<?php
class Client_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function getAllClients(){
    	$query = $this->db->get('tbluser');
    	return $query->result();
    }

    function getClient($userID){
    	$array = array('userID' => $userID);
		$this->db->where($array);
		$query = $this->db->get('tbluser');
    	return $query->result();
    }

	function loginClient($data){
		//Form validated without errors
		$this->db->where($data);
		$query = $this->db->get('tbluser');
		if($query->num_rows() == 1){
			return $query->row(0)->userID;
		} else{
			return false;
		}
    }

	function getGCtrans($userID){
    	$array = array('userID' => $userID);
		$this->db->where($array);
		$query = $this->db->get('tblgctrans');
    	return $query->result();
	}

	function getLCtrans($userID){
		$array = array('userID' => $userID);
		$this->db->where($array);
		$query = $this->db->get('tbllctrans');
    	return $query->result();
	}

	function getRCtrans($userID){
		//there is no way to detetmin if the 
		$array = array('userID' => $userID,
						);
		$this->db->where($array);
		$query = $this->db->get('tblgctrans');
    	return $query->result();
	}

    
    function registerClient($data){	
		$this->db->insert('tbluser', $data);
		$accessLevel = array(
			'accesslevel' => 'Clients',
		);
		$this->db->set('tbluseraccess', $accesslevel);
		redirect('client/login');
	}

	function forgetPassword(){
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('valid_email', 'Not a valid email');

		if ($this->form_validation->run() == TRUE){
			
			if (checkEmailExist($_POST['email']) != false){
			    $clientID = checkEmailExist($_POST['email']);
				passwordChangeEmail($clientID,$_POST['email']);
				
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
			$query = $this->db->get('tblclients');
			if($query->num_rows() == 1){
				redirect('account/client/newPassword');
				//__ add this to session $query->row(0)->clientID;
			} else{
				return false;
			}
		}		
	}

	//__move this function to controller 
	function passwordChangeEmail($clientID,$email){
			// validation has passed. Now send the email
			$name = getUsernameByID($clientID);
			$email = $_POST['email'];
			$hash = addhash($clientID);

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

	function addhash($clientID){
		$data = array('hash' => $hash = md5(rand(0,1000)));
		$this->db->where('clientID', $clientID);
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

	function isClient($accessLevel){
    	$this->db->where($accessLevel);
    	$query = $this->db->get('tbluseraccess');
    	if($query->num_rows() == 1){
			return TRUE;
		} else{
			return FALSE;
		}
    }
}