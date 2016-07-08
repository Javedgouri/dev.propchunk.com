<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/*
		Documented and edited by Javed Gouri 

	*/



	public function __construct(){
			parent::__construct();

			$this->load->helper('date');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->library('session');
			

	}

	//function to load index page
	public function index(){
		$this->output->cache(1);
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function auth(){
		$this->load->library('facebook');
		if($this->session->userdata('authdata')){
			return redirect('Home/'); 
		}

			
		 else {
	
			$link['link'] = $this->facebook->login_url();		
			$this->load->view('header');
			$this->load->view('signup',$link);
			$this->load->view('footer');
		}
	}

	//function to load contact page
	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	//function to load discover page
	public function discover(){
		$this->load->view('header');
		$this->load->view('discover');
		$this->load->view('footer');
	}
	//function to store the contact data from contact page 
	public function contact_savedata(){

      $this->load->library('email');
      $this->email->set_newline("\r\n");
      $this->email->from('contact@propchunk.com'); // change it to yours
      $this->email->to('contact@propchunk.com');// change it to yours
      //$this->email->subject('contact deails');
      
//$this->load->library('email', $config);
			
		$date = date('Y-m-d H:i:s');
		$data = array(
			
			'Name' => $this->input->post('Name') ,
			'EmailId'  => $this->input->post('EmailId') ,
			'PhoneNumber'  => $this->input->post('PhoneNumber') ,
			'Subject'	=>$this->input->post('Subject'),
			'Message'  => $this->input->post('Message') ,
			'CreateUserId' => $this->input->post('EmailId'),
			'CreateDate' => $date
			);
		$data1=array(
			'EmailId'=>$this->input->post('EmailId'),
			'CreateUserId' => $this->input->post('EmailId'),
			'CreateDate' => $date
			);

		$message = "Name:".$data['Name']."<br>EmailId:".$data['EmailId']."<br>Message:".$data['Message'];
		$this->email->subject($data['Subject']);
		$this->email->message($message);

		$query =$this->db->insert('ContactUs',$data);
		$this->db->insert('Subscriber',$data1);
		
		if($query){
				$display= '<div class="alert alert-success"><p>Your Query has been Send</p></div>';
				$this->session->set_flashdata('contact_message',$display);
				
				$this->email->send();						
    			  
        		
		}
		else{
			$data = '<div class="alert alert-danger"><p></p>There is some error please send it again</div>';
				$this->session->set_flashdata('contact_message',$display);	
		}
		
		redirect("Home/contact");
	}
	//function to load Faq page 
	public function faq(){
		$this->load->view('header');
		$this->load->view('faq');
		$this->load->view('footer');
	}


	//function to load the aboutus page
	public function about_us(){
		$this->load->view('header');
		$this->load->view('about-us');
		$this->load->view('footer');
	}
	public function gallery(){
	
		$this->load->view('gallery');
	
		}
		//function to load discover page 
	public function discoverpage(){
		$this->load->model('Getinfo');
		$this->load->helper('file');
		$result=$this->Getinfo->filljson();
		$fp = fopen('./json_file/campaigndata.json', 'w+');
		fwrite($fp, json_encode($result,JSON_PRETTY_PRINT));
		//print_r($result);
		$this->load->view('header');
		$this->load->view('discover');
		$this->load->view('footer');
	}
	//function to load filter.php
	public function filter(){
		$this->load->view('filter');
	}
	public function how_it_works(){
		$this->load->view('header');
		$this->load->view('how-it-works');
		$this->load->view('footer');
	}
	
	public function investor_protection(){
		$this->load->view('header');
		$this->load->view('investor-protection');
		$this->load->view('footer');
	}
		public function privacy_policy(){
		$this->load->view('header');
		$this->load->view('privacypolicy');
		$this->load->view('footer');
	}
		public function terms(){
		$this->load->view('header');
		$this->load->view('termsofservice');
		$this->load->view('footer');
	}
}
	
