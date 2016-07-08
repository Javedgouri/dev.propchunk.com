<?php 
Class CampaignController extends CI_Controller{
	public function campaigns($PropertySlug){
		$this->load->model('Getinfo');
		$result=$this->Getinfo->getpropertycampaigndata($PropertySlug);
		$cp['r']=$result;
		//foreach($result as $value)
          //    {
            //      $data['campdata'] = $value;
              //}
		$PropertyCampaignId=$result[0]->PropertyCampaignId;

		$imageresult=$this->Getinfo->getpropertycampaignimage($PropertyCampaignId);
		$cp['i']=$imageresult;
		$imgcount=count($imageresult);
		$cp['c']=$imgcount;
		$Appreciationres=$this->Getinfo->getAppreciation($PropertyCampaignId);
		$cp['a']=$Appreciationres;
		$SPVTenancyInformationres=$this->Getinfo->getSPVTenancyInformation($PropertyCampaignId);
		$cp['s']=$SPVTenancyInformationres;
		$this->load->view('header');
		$this->load->view('campaignpage',$cp);
		$this->load->view('footer');

	}
}
?>