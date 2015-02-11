<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index(){
		$data['title'] = 'Contact US';
		$this->load->library('mathQuestion');

		$data['num1'] = $this->mathquestion->numOne();
		$data['num2'] = $this->mathquestion->numTwo();
		$answer = $data['num1'] + $data['num2'];
		
		$data['mainContent'] = 'contactUs_view';
		$this->load->view('templates/baseTemplate',$data);
	}

	//email to e-Animate with technical questions  
	function sendEmail(){

		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required','min_length[15]','min_length[200]');
		$this->form_validation->set_rules('mathQuestion', 'Math Question', 'trim|required|callback_mathQuestion');

		//__check if email alread exist in database if not prompt to add to newsletter/emailing list 
		$this->form_validation->set_message('math_question', 'Your answer is incorrect');
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}

		else{
			// validation has passed. Now send the email
			$name = $_POST['name'];
			$email = $_POST['email'];

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			//__determain the type of meain to be send in order to change email address
			$this->email->from('info@trinigifts.com', $name);
			$this->email->to('email');		
			$this->email->subject('Subject');		
			$this->email->message($email);

			if($this->email->send()){
				$this->load->view('sentConfirmation_view');
			}

			else{
				show_error($this->email->print_debugger());
			}			
		}
	}

	function mathQuestion(){
		$userAnswer = $_POST['answer'];
		if($userAnswer != $answer) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
