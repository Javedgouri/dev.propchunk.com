	<?php
	$flocality = $_POST['locality'];
	$fterm = $_POST['MinInvestmentAmount'];
	
	if($fterm == '1to3')
	{
		$fmin = 100000;
		$fmax = 300000;
	}
	else if($fterm == '3to5')
	{
		$fmin = 300001;
		$fmax = 500000;
	}
	else if($fterm == '5to7')
	{
		$fmin = 500001;
		$fmax = 700000;
	}
	else if($fterm == '7to10')
	{
		$fmin = 700001;
		$fmax = 1000000;
	}
	else
	{
		$fmin = 1000001;
		$fmax = 100000000;
	}
	
	$fyield = $_POST['yield'];
	
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
	
	
	 $fkeyword = $_POST['keyword'];
	$flag=0;


  $jsondata = file_get_contents('./json_file/campaigndata.json');
  $data = json_decode($jsondata, true);
  foreach ($data as $property) {
	  if( $property['Locality'] == $flocality && ($property['MinInvestmentAmount'] > $fmin &&  $property['MinInvestmentAmount'] < $fmax ) && ( $property['ActualIRRPercentage'] > $fymin && $property['ActualIRRPercentage'] < $fymax) )
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
  
	
?>
