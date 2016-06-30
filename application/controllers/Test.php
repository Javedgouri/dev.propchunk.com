<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


			public function dashboard(){
	
			$this->load->view('welcome_message');	

	}


	public function __construct(){
			parent::__construct();
			$this->load->library('session');
			if(!$this->session->userdata('id')){
			return redirect('Home/auth'); 
		}
	}
}
?>