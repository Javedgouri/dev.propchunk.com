<?php 
Class Campaign extends CI_Controller{
	public function getcampaigndata($PropertySlug){
		$this->load->model('Getinfo');
		$result=$this->Getinfo->getpropertycampaigndata($PropertySlug);
		//foreach($result as $value)
          //    {
            //      $data['campdata'] = $value;
              //}
		$PropertyCampaignId=$result[0]->PropertyCampaignId;
		$imageresult=$this->Getinfo->getpropertycampaignimage($PropertyCampaignId);
		$Appreciationres=$this->Getinfo->getAppreciation($PropertyCampaignId);
		$SPVTenancyInformationres=$this->Getinfo->getSPVTenancyInformation($PropertyCampaignId);
		$this->load->view('header');
		$this->load->view('campaignpage',$result,$imageresult,$Appreciationres,$SPVTenancyInformationres);
		$this->load->view('footer');
		print_r($result);
		print_r($imageresult);
		print_r($Appreciationres);
		echo "<br>";
		print_r($SPVTenancyInformationres);

	}
}
?>