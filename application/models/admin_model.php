<?php
class Admin_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }


    function getAdmin($userID){
    	$array = array('userID' => $userID);
		$this->db->where($array);
		$query = $this->db->get('tbluser');
    	return $query->result();
    }

    function defaultuser(){
    	$result == usernameExist($_POST['username']);
    	if ($result > 0 && md5($_POST['password']) == "5f4dcc3b5aa765d61d8327deb882cf99"){
    		return $result;
		} else{
			return false;
		}
	}	

	function usernameExist($username){
		$this->db->where('username', $username);
		$query = $this->db->get('tbladmin');
		if($query->num_rows() > 0){
			return $query->row(0)->adminID;;
		} else{
			return false;
		}
	}

	function loginAdmin($data){
		//Form validated without errors
		$this->db->where($data);
		$query = $this->db->get('tbluser');
		if($query->num_rows() == 1){
			return $query->row(0)->userID;
		} else{
			return FALSE;
		}
    }

	function isAdmin($accessLevel){
    	$this->db->where($accessLevel);
    	$query = $this->db->get('tbluseraccess');
    	if($query->num_rows() == 1){
			return TRUE;
		} else{
			return FALSE;
		}
    }
	
	function addNewPassword(){
		$this->db->where('adminID', $adminID);

		$data = array(
		   'email' => $_POST['email'],
		   'passwordBlob' => md5($_POST['password1']),
		);

		$this->db->insert('tbladmin', $data);
	}

	function getUsernameByID($adminID){
		$this->db->select('username');
	    $array = array('adminID' => $adminID);
		$this->db->where($array);
		return $this->db->get('tbladmin');
	}

	function getEmailByID($adminID){
		$this->db->select('email');
	    $array = array('adminID' => $adminID);
		$this->db->where($array);
		return $this->db->get('tbladmin');
	}

	function addNewAdmin(){
		$data = array(
			'username' => $_POST['fName'],
			'email' => strtolower($_POST['email']),
			'password'  => md5($_POST['password']),//__change to passwordBlob 
		);
			
		$this->db->insert('tbladmin', $data);
	}

	function addMerchant($data){
		$this->db->insert('tbluser', $data);
		$accessLevel = array(
			'accesslevel' => 'Merchant',
		);
		$this->db->insert('tbluseraccess', $accesslevel);
		redirect('client/login');
	}

	//__edit admin
	//__delete admin

	///////////////////////////////////////////	
	//Dashboard
	///////////////////////////////////////////

	function updateDefAdminEmail(){
		$id = 1;
		$data = array('appUpdates' => $_POST['appUpdatesEmail'],);
		$this->db->where('emailID', $id);
		$this->db->update('tblemail', $data); 
	}

	function updateDefTecSupportEmail(){
		$id = 1;
		$data = array('tecSupport' => $_POST['tecSupportEmail']);
		$this->db->where('emailID', $id);
		$this->db->update('tblemail', $data); 
	}

	function getDefAdminEmail(){
		$id = 1;
		$this->db->select('appUpdates');
	    $array = array('emailID' => $id);
		$this->db->where($array);
		return $this->db->get('tblemail');
	}

	function getDefTecSupportEmail(){
		$id = 1;
		$this->db->select('tecSupport');
	    $data = array('emailID' => $id);
		$this->db->where($data);
		return $this->db->get('tblemail');
	}

	function categoryExist($category){
		$this->db->where('category', $category);
		$query = $this->db->get('tblCategory');
		if($query->num_rows() > 0){
			return true;
		} else{
			return false;
		}
	}

	function addCategory($category){
		$data = array('category' => $category);
		$this->db->insert('tblCategory', $data); 
	}

	function linkCategory($categoryID, $merchantID){
		$data = array(
			'categoryID' => $categoryID,
			'merchantID' => $merchantID
			);
		$this->db->insert('tblStoreCategory', $data);
	}

	function getCategoryByName($category){
		$this->db->select('categoryID');
	    $data = array('category' => $category);
		$this->db->where($data);
		return $this->db->get('tblCategory');
	}
}
