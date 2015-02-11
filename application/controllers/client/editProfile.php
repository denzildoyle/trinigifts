<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditProfile extends CI_Controller {

	public function index(){
		
		if ($this->is_clientLogged_in() == TRUE){
			$data['title'] = 'Edit Profile';

			$data['mainContent'] = 'account/client/editProfile_view';

			$userID = $this->session->userdata('userID');

			$userID = $this->session->userdata('userID');
			$this->load->model('Client_model');
			if($query = $this->Client_model->getClient($userID)){
				$data['records'] = $query;
			}

			$this->load->view('templates/baseTemplate', $data);

		} else{
			echo "You dont not have permission to enter this page!";
		}

	}

	function saveChanges(){
	 	//$this->load->library('ValidNumber');
	 	$this->form_validation->set_rules('username','username','trim|required|alpha_numeric|min_length[6]|max_length[24]');
		$this->form_validation->set_rules('fName','first name','trim|required|max_lenght[56]');	
		$this->form_validation->set_rules('lName','last name','trim|required|max_lenght[56]');
		//$this->form_validation->set_rules('email','email','trim|required|valid_email|callback_emailExist');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('dob','date Of birth','trim|required|callback_checkDateFormat');
		$this->form_validation->set_rules('mobileNum', 'mobile Number', 'trim|callback_checkPhoneNumberFormat');
		$this->form_validation->set_rules('smsUpdate', 'sms', 'trim');

		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s minimum length must be at least six(6) characters');
		$this->form_validation->set_message('alpha_numeric', '%s most only contain letters and numbers');
		$this->form_validation->set_message('valid_email', 'Not a valid email');
		$this->form_validation->set_message('checkDateFormat', 'Please enter dd/mm/yyyy');
		$this->form_validation->set_message('checkPhoneNumberFormat', 'Invalid Phone. (868) 789-2312');
		$this->form_validation->set_message('emailExist', 'this email already exist');

	    if ($this->form_validation->run() == TRUE){
				
			$today = mktime(0,0,0,date("m"),date("d"),date("Y"));

			//Form has be validated without errors
			$data = array(
			   'username' => strtolower($_POST['username']),
			   'fName' => $_POST['fName'],
			   'lName' => $_POST['lName'],
			   'email' => strtolower($_POST['email']),
			   'bday' => date("d/m/Y", strtotime($_POST['dob'])),
			   'mobileNum' => $_POST['mobileNum'],
			   'smsUpdate' => (isset($_POST['sms']))?1:0, 
			   'creationDate' => date("d/m/Y", $today) 
			);

			$this->load->model('Client_model');
			$this->Client_model->registerClient($data);

		} else{
			$this->index();
		}	
	}
    
    function saveImg(){
		$config['upload_path'] = './profileImgs/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->index();
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			$data = $data['file_name'];
       		$userID = $this->session->userdata('userID');
       		$this->load->model('Client_model');
			$statusCheck = $this->Client_model->updateInfo($userID, $data);
			editStatusCheck($statusCheck);
			$this->load->view('editProfile_view');
		}
    }
	
	function saveUsername(){
		$data = array(
			'username' => $_POST['username']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);	
		$this->index();
	}
    
    function saveFname(){
    	$data = array(
    		'fName' => $_POST['fName']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }
    
    function saveLname(){
    	$data = array(
    		'lName' => $_POST['lName']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }
    
    function saveEmail(){
    	$data = array(
    		'email' => $_POST['email']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }
    
    function saveDob(){
    	$data = array(
    		'bday' => $_POST['dob']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }
    
    function saveMobileNum(){
    	$data = array(
    		'mobileNum' => $_POST['mobileNum']
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }

    function saveSms(){
    	$data = array(
    		'smsUpdate' => (isset($_POST['sms']))?1:0
		);
		$userID = $this->session->userdata('userID');
		$this->load->model('Client_model');
		$this->Client_model->updateInfo($userID, $data);
		$this->index();
    }

    function changePassword(){

    }

    function editStatusCheck($statusCheck){
    	if($statusCheck){
            $status = "success";
            $msg = "File successfully uploaded";
        }
        else{
            $status = "error";
            $msg = "Something went wrong when saving the file, please try again.";
        }
    }

	function is_clientLogged_in(){
		$is_clientLogged_in = $this->session->userdata('is_clientLogged_in');
		if(!isset($is_clientLogged_in) || $is_clientLogged_in != TRUE){
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
