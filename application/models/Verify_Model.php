<?php

/*

Editor :Gouri Javed Mehboob Ali
status:-pending 
*/

Class Verify_Model extends CI_Model {

	//function to check the hash for verifyication of emailid and upadte teh active level
	public function checkhash($email,$hash){
		$query = $this->db->where(['EmailId'=>$email,
			'HashKey'=>$hash])->get('RegisteredUser');
		if($query->num_rows() == 1){
			$data = array('ActiveLevel' => 1, );
			$this->db->where('EmailId',$email);
			$this->db->where('HashKey',$hash);
			$this->db->update('RegisteredUser',$data);
			return true;
		}else{

			return false;

		}
	}//end of check hash function

	public function checkhash1($email,$hash){
		$query = $this->db->where(['EmailId'=>$email,
			'HashKey'=>$hash])->get('RegisteredUser');
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}

	//function to check the EmailId  is exist or not
	public function checkuser($email){

		$query = $this->db->where('EmailId',$email)->get('RegisteredUser');
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}//end of checkuser


	public function updatehash($u_email,$u_hash){

		$this->db->where('EmailId', $u_email);
		$query=$this->db->update('RegisteredUser',['HashKey'=>$u_hash]);
	}//end of update hash

}//end of class verify_model
?>