<?php
Class Auth_Model extends CI_Model {
	public function registration_insert($data) {
		// Query to insert data in database
		$this->db->insert('RegisteredUser', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		} else {
		return false;
		}
	}
	
	public function login_valid($EmailId,$Password) {
		$query = $this->db->where(['EmailId'=>$EmailId,'Password'=>$Password])->get('RegisteredUser');
		if ($query->num_rows()) {
			return $query->row()->FirstName;
		} else {
			return false;
		}
	}
	// Read data from database to show data in admin page
	public function read_user_information($EmailId) {
		$condition = "EmailId =" . "'" . $EmailId . "'";
		$this->db->select('*');
		$this->db->from('RegisteredUser');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->result();
		} else {
		return false;
		}
	}
}
?>