<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends CI_Controller {



	public function facebook(){
			$this->load->library('session');
			$this->load->model('Getinfo');
			$this->load->model('Auth_Model');
		$Password=hash('sha512',$this->input->post('id'));
		$fbdata=array(
			'FirstName'=>$this->input->post('name'),
			'LastName' =>$this->input->post('lastname'),
			'SignUpSourceCode'=>'facebook',
			'EmailId' =>$this->input->post('email'),
			'Password' => $Password
		);
		$source='facebook';
		$EmailId=$fbdata['EmailId'];
		$response=$this->Getinfo->getin($EmailId,$Password);
		if($response==true){
			$credential = $this->Auth_Model->login_valid($EmailId,$Password,$source);
			$this->session->set_userdata('authdata',$credential);
			echo true;
		}
		else{

		$query =$this->db->insert('RegisteredUser',$fbdata);
		$credential = $this->Auth_Model->login_valid($EmailId,$Password,$source);
		$this->session->set_userdata('authdata',$credential);
			echo true;
		}
		
		
	}


	public function google(){
			$this->load->library('session');
			$this->load->model('Getinfo');
			$this->load->model('Auth_Model');

		$Password=hash('sha512',$this->input->post('id'));
		$gdata=array(
			'FirstName'=>$this->input->post('name'),
			'LastName' =>$this->input->post('lastname'),
			'SignUpSourceCode'=>'google',
			'EmailId' =>$this->input->post('email'),
			'Password' => $Password
		);
		$source='google';
		$EmailId=$gdata['EmailId'];
		$response=$this->Getinfo->getin($EmailId,$Password);
		if($response==true){
			$credential = $this->Auth_Model->login_valid($EmailId,$Password,$source);
			$this->session->set_userdata('authdata',$credential);
			echo ok;
		}
		else{

		$query =$this->db->insert('RegisteredUser',$gdata);
			echo true;
			$credential = $this->Auth_Model->login_valid($EmailId,$Password,$source);
			$this->session->set_userdata('authdata',$credential);
			echo ok;
		}
		
	
		
	}



}//end of class