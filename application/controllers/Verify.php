<?php

Class Verify extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('Verify_Model');
		$this->load->helper('form');
	}

	public function email_verify($email,$hash){

		
		
		$response=$this->Verify_Model->checkhash($email,$hash);
		if($response==true){
			echo $response;
			//return redirect('Home/');	
		}else{
			echo $response;
			//return redirect('');
		}
	}

	public function forget_password($email,$hash){
		
		$response=$this->Verify_Model->checkhash1($email,$hash);
		if($response==true){
			$fpdata['var'] = $email;
		$this->load->view('header');
		$this->load->view('changepass',$fpdata);
		$this->load->view('footer');	
		
		}else{
			echo "404 error page not found";
		}
	}


	public function checkuser(){
		$email=$this->input->post('EmailId');
		$check = $this->Verify_Model->checkuser($email);
		if($check == true){

			echo "false";
		}else{

			echo "true";
		}
	}





}



?>