<head>
<style>
.ficonsize{
	font-size : 24px !important;
}

.caption {
    position: relative;
    overflow: hidden;

    /* Only the -webkit- prefix is required these days */
    -webkit-transform: translateZ(0);
            transform: translateZ(0);
}

.caption::before {
    content: ' ';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: transparent;
    transition: background .35s ease-out;
}

.caption:hover::before {
    background: rgba(0, 0, 0, .5);
}

.caption__media {
    display: block;
    min-width: 100%;
    max-width: 100%;
    height: auto;
}

.caption__overlay {
    position: absolute;
    top: 45%;
	
    right: 0;
    bottom: 0;
    left: 0;
    padding: 10px;
    color: white;

    -webkit-transform: translateY(100%);
            transform: translateY(100%);

    transition: -webkit-transform .35s ease-out;
    transition:         transform .35s ease-out;
}

.caption:hover .caption__overlay {
    -webkit-transform: translateY(0);
            transform: translateY(0);
}

.caption__overlay__title {
    -webkit-transform: translateY( -webkit-calc(-100% - 10px) );
            transform: translateY( calc(-100% - 10px) );

    transition: -webkit-transform .35s ease-out;
    transition:         transform .35s ease-out;
}

.caption:hover .caption__overlay__title {
    -webkit-transform: translateY(0);
            transform: translateY(0);
}
</style>
</head>

	<section id="free-padding">
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	</section>
	
	
	<!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
    <!--<form method = "POST" name = "filter" >--> 
	 <div class="form" >
         <div class="aa-advance-search-top">
            <div class="row">
			<!--
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Keyword" name="keyword">
                </div>
              </div>
			  -->
              <div class="col-md-3">
                <div class="aa-single-advance-search">
                  <select name="locality" required id="locality">
                   <option value="0" selected>Locality</option>
                    <option value="Palghar">Palghar</option>
                    <option value="Virar">Virar</option>
                    <option value="Dahanu">Dahanu</option>
                    <option value="Thane">Thane</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="aa-single-advance-search">
                  <select name="MinInvestmentAmount" required id="MinInvestmentAmount">
                    <option value="0" selected>Min Investment Amount</option>
					<option value="1to3">1- 3 lakhs</option>
					<option value="3to5">3 -5 lakhs</option>
					<option value="5to7">5 - 7 lakhs</option>
				   <option value="7to10">7 - 10 lakhs</option>
				   <option value="10+">10+ lakhs</option>
			      </select>
              </div>
              </div>
			  
              <div class="col-md-3">
                 <div class="aa-single-advance-search">
                  <select name="yield" required id="yield">
						<option value="-1" selected>Yield</option>
						<option value="4">0-4 %</option>
						<option value="8">4 - 8%</option>
						<option value="9"> >8%</option>
				</select>
				</div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <button id="search" class="btn btn-skin btn-lg" name="search">SEARCH</button>
                             
                </div>
              </div>
            </div>
          </div>
		  <!--
         <div class="aa-advance-search-bottom">
           <div class="row">
		   <!--
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
				<!--
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>-->
				<!--<input id="ex1" data-slider-id='ex1Slider' type="range" data-slider-min="100000" data-slider-max="10000000" data-slider-step="50000" data-slider-value="5000000"/>				
              </div>
            </div>-->
			<!--
           <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                               
              </div>
            </div>
			-->
          </div>
			<!--</form>-->
         </div>
        </div>
      
  </section>
  <!-- / Advance Search -->
	
  <!-- Latest property -->	
	<!--REMOVED FROM THE JSON SCRIPT 
	<div class="aa-tag for-sale">'+arr[i].type +'</div>
	-->
  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2 class="text-center">Discover Properties</h2>
          <span></span>
          <p class="text-center">Current properties under construction / development.</p>         
		  <br />
        </div>
        <div class="aa-latest-properties-content" id="id01">

		  
	  <!-- ON INITIAL LOAD LOAD ALL CONTENTS(PROPERTY) --> 
	  
	<?php
  $jsondata = file_get_contents('./json_file/campaigndata.json');
  $data = json_decode($jsondata, true);
  foreach ($data as $property) {
	  
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
	<a class="aa-properties-item-img caption__media"><img src="http://localhost/admin.propchunk.com/assests/uploads/'.$property['DiscoverPageIconURL'].'" alt="img"></a>
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
	
	<span>'.$astr.'</span><br/>
	
	<span id="name"><b>Funds Raised</b></span>
	</div >
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-inr ficonsize" style="font-size:36px;"></i><br/>

	<span>'.$bstr.'</span><br/>
	

	<span id="name"><b>Goal Amount</b></span>

	</div >

	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:40px;">
	<i class="fa fa-ticket ficonsize" style="font-size:36px;"></i><br/>

	<span>'.$pmstr.'</span><br/>
	<span id="name"><b>Ticket Size</b></span>

	</div >
	<hr/>
	<div class="row col-lg-12" style="color:black;">
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
		<i class="fa fa-line-chart ficonsize" aria-hidden="true" style="font-size:36px;" ></i><br/>

		<span>'.$property_expectedIRR.'%</span><br/>
		

	<span id="name" ><b>Expected IRR</b></span>

	</div >
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
		<i class="fa fa-clock-o ficonsize" aria-hidden="true" style="font-size:36px;"></i><br/>

		<span>'.$difference->days.'</span><br/>
		<span id="name"><b>Days Left</b></span>
	</div >
	<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center" style="padding-bottom:20px;">
	<i class="fa fa-home ficonsize" aria-hidden="true" style="font-size:36px;"></i><br/>
		
		<span>'.$property_locality.'</span><br/>
		<span id="name"><b>Locality</b></span>
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
	if($flag==0)
	{
		echo '<h3 class="text-center">No Properties to display</h3>';
	}
	
	

?>

		  
<!--		  
		  <script>
var xmlhttp = new XMLHttpRequest();
var url = "campaigndata.json"; /*ADD URL OF JSON FILE ON SERVER THAT WILL BE FETCHED */

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        myFunction(myArr);
    }
};

xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        out += '<div class="col-md-4"> <article class="aa-properties-item"> <a href="#" class="aa-properties-item-img"><img src="'+ arr[i].PropertyName+ '" alt="img"></a><div class="aa-properties-item-content"><div class="aa-properties-about"><h3><a href="#">'+arr[i].PropertyDescription+ '</a></h3><p><h4>'+arr[i].City+'</h4></p><span><b>TERM :'+ arr[i].State+' </b></span><br /><span><b>YIELD :'+ arr[i].ActualIRRPercentage+'</b></span><br /><span><b>LOCALITY:'+arr[i].Locality+'</b></span></div><div class="aa-properties-detial"><span class="aa-price"><i class="fa fa-inr"></i>'+arr[i].MaxInvestmentAmount +'</span><a href="#" class="aa-secondary-btn">View Details</a></div></div></article></div>';
    }
    document.getElementById("id01").innerHTML = out;
}
</script>
-->
			</div>
          </div>
        </div>
      </div>
  
  </section>
  <!-- / Latest property -->
  <br />
  <br />
  <br />
  <br />

  <!-- AJAX SCRIPT FOR GETTING FILTERED DATA : CONTROL IS TRANSFERRED TO filter.php FOR PROCESSING -->
  
  <script>
$('#search').click(function() {
    var val1 = $('#locality').val();
    var val2 = $('#MinInvestmentAmount').val();
	var val3 = $('#yield').val();
	var val4 = $('#keyword').val();
	
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Home/filter');?>',
        data: { locality: val1, MinInvestmentAmount: val2 ,yield : val3,keyword : val4},
        success: function(response) {
            $('#id01').html(response);
        }
    });
});
</script>
  
