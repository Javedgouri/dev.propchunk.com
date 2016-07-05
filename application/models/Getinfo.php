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


	public function getpropertycampaigndata($PropertySlug){
		$query = $this->db->where('PropertySlug',$PropertySlug)->get('PropertyCampaign');
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getpropertycampaignimage($PropertyCampaignId){
		$query = $this->db->select('ImageId,SmallImageUrl')->where('PropertyCampaignId',$PropertyCampaignId)->get('ImagePropertyAssociation');
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	public function getAppreciation($PropertyCampaignId){
		$query = $this->db->select('AppreciationId,MonthYear,PrevalantUnitRateInMonthYear')->where('PropertyCampaignId',$PropertyCampaignId)->get('Appreciation');
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	public function getSPVTenancyInformation($PropertyCampaignId){
		$query = $this->db->select('SPVTenancyInformationId,CurrentRentalStatus,TenantName,TenantStartDate,TenantEndDate,TenancyAgreementDocument,AgreementDate,LeasePeriodInMonth,AppreciationFrequencyCode,AppreciationPercentage,LockInPeriodInMonth,MonthlyRentalAmount,DepositAmountPaid,DepositAmountReturned,MiscellaneousComment')->where('PropertyCampaignId',$PropertyCampaignId)->get('SPVTenancyInformation');
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	//check for data from api
	public function getin($EmailId,$Password){
			$query = $this->db->where(['EmailId'=>$EmailId,'Password'=>$Password])->get('RegisteredUser');
		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}


}
?>