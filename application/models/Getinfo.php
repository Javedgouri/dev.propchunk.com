<?php
Class Getinfo extends CI_Model {
	
	public 	function filljson(){

		$query = $this->db->get('PropertyCampaign');
		if($query->num_rows()){

			return $query->result();
		}else {
			return false;
		}
	}
}
?>