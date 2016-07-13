	<?php
	$x =0;
	/*$property['Locality'] == $flocality || ($property['MinInvestmentAmount'] > $fmin &&  $property['MinInvestmentAmount'] < $fmax ) || ( $property['ActualIRRPercentage'] > $fymin && $property['ActualIRRPercentage'] < $fymax)*/
	$flocality = $_POST['locality'];
	$frange = $_POST['MinInvestmentAmount'];
	$fyield = $_POST['yield'];
	$flag=0;
	$query=' ';
	$fmin=0;
	$fmax = 0;
	$fymin = 0;
	$fymax= 0;
	
	if($flocality!='0')
	{
	$query = '$property["Locality"] == $flocality';
	}
		//echo $query ; 
	if($frange!='0')
	{
		
	if($frange == '1to3')
	{
		$fmin = 100000;
		$fmax = 300000;
	}
	else if($frange == '3to5')
	{
		$fmin = 300001;
		$fmax = 500000;
	}
	else if($frange == '5to7')
	{
		$fmin = 500001;
		$fmax = 700000;
	}
	else if($frange == '7to10')
	{
		$fmin = 700001;
		$fmax = 1000000;
	}
	else
	{
		$fmin = 1000001;
		$fmax = 100000000;
	}
	if($flocality != '0' )
	$query = $query.'&& ($property["MinInvestmentAmount"] > $fmin &&  $property["MinInvestmentAmount"] < $fmax )';
	else
	$query = $query.'($property["MinInvestmentAmount"] > $fmin &&  $property["MinInvestmentAmount"] < $fmax )';		
		
	}
		//echo $query;	
	if($fyield!='-1')
	{
	if($fyield == 0)
	{
		$fymin = 0;
		$fymax = 100;
	}
	else if($fyield == 4)
	{
		$fymin = 0;
		$fymax = 4;
		
	}
	else if($fyield == 8)
	{
		$fymin = 4.1;
		$fymax = 8;
	}
	else{
	$fymin = 8.1;
	$fymax = 100;	
	}
	
	if($flocality=='0' && $frange=='0') 
	$query = '( $property["ActualIRRPercentage"] > $fymin && $property["ActualIRRPercentage"] < $fymax)';
	else
	$query = $query.'&& ( $property["ActualIRRPercentage"] > $fymin && $property["ActualIRRPercentage"] < $fymax)';
	
	}

	if($flocality=='0' && $frange=='0' && $fyield=='-1')
	{
		$query = true;
	}	
	echo $query;
	
	$jsondata = file_get_contents('./json_file/campaigndata.json');
    $data = json_decode($jsondata, true);

	foreach ($data as $property)
	{
     
	if($query)
	{	  
	
	$property_slug = $property['PropertySlug'];
	$property_name = $property['PropertyName'];
	$property_locality = $property['Locality'];
	$property_expectedIRR = $property['ExpectedIRRPercentage'];
	$property_mininvestment = $property['MinInvestmentAmount'];
	$property_area = $property['BuiltUpArea'];
	$property_type = $property['PropertyTypeCode'];
	$property_unitcode = $property['AreaMeasurementUnitCode'];
	$property_city = $property['City'];
	$property_state = $property['State'];
	$a=$property['FundsRaisedTillDate'];
	if($a<10000000){ 
	$astr=$a/100000; 
	$astr = $astr." Lacs";
	} 
	else{
	$astr=$a/100000;
	$astr = $astr." Cr.";
	}
	
	$b=$property['CampaignGoalAmount']; 
	if($b<10000000){ 
	$bstr=$b/100000; 
	$bstr = $bstr." Lacs";
	} 
	else{
	$bstr=$b/100000;
	$bstr = $bstr." Cr.";
	}
	
	
	if($property_mininvestment<10000000){ 
	$pmstr=$property_mininvestment/100000; 
	$pmstr = $pmstr." Lacs";
	} 
	else{
	$pmstr=$property_mininvestment/100000;
	$pmstr = $pmstr." Cr.";
	}
	
	
	$x=($a/$b)*100;
	
	$c=$b-$a; 
	if($c<10000000){ 
	$d=$c/100000; 
	$dstr = $d." Lacs";
	} 
	else{
	$d=$c/100000;
	$dstr = $d." Cr.";
	} 

	$first_date = new DateTime( date("Y-m-d"));
	$second_date = new DateTime($property['CampaignEndDate']); 
	$difference = $first_date->diff($second_date);
	//echo $difference->days;	
    echo '<div class="col-md-4 col-sm-6 ">
	<article class="aa-properties-item">
	<div class="caption">
	<a class="aa-properties-item-img caption__media"><img src="'.base_url('/item/1.jpg').'" alt="img"></a>
	<div class="caption__overlay" >
            <p class="caption__overlay__content text-center">
				<a href="http://localhost/dev.propchunk.com/Campaign/getcampaigndata/'.$property_slug.'" class="btn btn-skin">VIEW MORE</a>
            </p>
        </div>
	</div>
	<div class="progress" style="border-radius:0px;margin-bottom:0px;">
    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow=" '.$x.' " style="width: '.$x.'%;background-color:#ed4933;">
      <span style="color:#ed49333;font-size:17px;font-weight:bold;">' .intval($x).'%</span>
    </div>
	</div>
	
	<div class="aa-tag for-sale">'.$property_type.'</div>
	<div class="aa-properties-item-content">
		<div class="aa-properties-about text-center">
	<h3 style="margin:0px;"><a href="http://localhost/dev.propchunk.com/Campaign/getcampaigndata/'.$property_slug.'">'.$property_name.'</a></h3>
	<hr>
	</div>
	<div class="aa-properties-info">
	<!-- ICON BOX-->
	<div class="row col-lg-12" style="color:black;padding:0 10px;">
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-pie-chart ficonsize" style="font-size:36px;" ></i><br/>
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<span>'.$astr.'</span><br/>
	
	<span id="name">Funds Raised</span>
	</div >
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-inr ficonsize" style="font-size:36px;"></i><br/>
	<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<span>'.$bstr.'</span><br/>
	

	<span id="name">Goal Amount</span>

	</div >

	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-ticket ficonsize" style="font-size:36px;"></i><br/>
	<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<span>'.$pmstr.'</span><br/>
	<span id="name">Ticket Size</span>

	</div >
	<hr/>
	<div class="row col-lg-12" style="color:black;">
	<div class="row col-lg-4 col-md-4 col-sm-5 col-xs-5 text-center" style="padding-bottom:20px;">
		<i class="fa fa-line-chart ficonsize" aria-hidden="true" style="font-size:36px;" ></i><br/>
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
		<span>'.$property_expectedIRR.'%</span><br/>
		

	<span id="name" >Expected IRR%</span>

	</div >
	<div class="row col-lg-4 col-md-4 col-sm-3 col-xs-3 text-center" style="padding-bottom:20px;">
		<i class="fa fa-clock-o ficonsize" aria-hidden="true" style="font-size:36px;"></i><br/>
			<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
		<span>'.$difference->days.'</span><br/>
		<span id="name">Days Left</span>
	</div >
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-home ficonsize" aria-hidden="true" style="font-size:36px;"></i><br/>
		
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
		<span>'.$property_locality.'</span><br/>
		<span id="name">Locality</span>
		</div >
		
		</div>
		</div>	

			</div>
	
	<!--
	<div class="aa-properties-detial">
	<span>'.$property_city.','.$property_state.'</span>
	<span>'.$property_area.' '.$property_unitcode.'</span>
	</div>
	-->
	</div>
		</article>
	</div>';
	$flag = 1;
	}
	}
	if($flag==0)
	{
		echo '<h3 class="text-center">No Properties to display</h3>';
	}
	
	


	/*
  foreach ($data as $property) {
	  if( $property['Locality'] == $flocality || ($property['MinInvestmentAmount'] > $fmin &&  $property['MinInvestmentAmount'] < $fmax ) || ( $property['ActualIRRPercentage'] > $fymin && $property['ActualIRRPercentage'] < $fymax) )
	  {
	   $property_price = $property['PropertyName'];
	$property_rooms = $property['City'];
	$property_beds = $property['State'];
	$property_description = $property['ConstructionStatus'];
	$property_apartment = $property['SPVStructureCode'];
	$property_area = $property['FullAddress'];
	$property_type = $property['PropertyDescription'];
	
    echo '<div class="col-md-4"> <article class="aa-properties-item"> <a href="#" class="aa-properties-item-img"><img src="'.base_url('/item/1.jpg').'" alt="img"></a><div class="aa-tag for-sale">'.$property_type.'</div><div class="aa-properties-item-content"><div class="aa-properties-info"><span>'.$property_rooms.' ROOMS </span><span>'.$property_beds.' BEDS</span><span>'.$property_area.' SQ. FT</span></div><div class="aa-properties-about"><h3><a href="#">'.$property_apartment. '</a></h3><p>'.$property_description.'</p>s</div><div class="aa-properties-detial"><span class="aa-price"><i class= "fa fa-inr"></i>'.$property_price.'</span><a href="#" class="aa-secondary-btn">View Details</a></div></div></article></div>';;
	  $flag = 1;
	}
  }
	if($flag==0)
	{
		echo '<h3 class="text-center">No Properties to display</h3>';
	}
  */
	
?>
