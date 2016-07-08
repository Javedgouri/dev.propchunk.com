	<head>
	<link href="<?php echo base_url('/assets/css/tablecss.css');?>" rel="stylesheet"/>
	
	<style>
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
    top: 0;
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

	.h-pad{
		margin:10px 0px; ;
	}
	.change-color{
		color:white !important;

	.home-section{
		padding-bottom:0px !important;
	}
	}
	
	.section-heading h2{
		
		font-size:24px;
	}
	tspan {
    font-weight: 700;
    margin: 0 0 30px;
    text-transform: uppercase;
    font-family: Montserrat,sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    font-size: 14px;
}
.mdiv{
	padding-top: 30px;
}

.pd-bot{
	padding-bottom:34px;	
}
span#name{
  font-weight: 700;
padding-top: 5px;
text-transform: uppercase;
}
.m-pad{
	margin-bottom:5px;
}
span#number{
  /*font-family: Georgia, Serif;*/
     font-size: 13px;
     font-weight: 500;
}
#section-colors-left {
    position: fixed;
	width : 8.7em;	
    /* width: 10em;
	height: 0px; */
    top: 5em;
    background: #f9f9f9;
    color: #565555;
    border: 1px solid #ccc;
    border-radius: 2px;
    z-index: 10021;
    transition: all 0.2s;
}

.color-panel-left .color-wrap-left {
    overflow: hidden;
    margin: auto;
    margin-top: 0.5em;
    width: 90%;
}


<?php 
$bigimg="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->BigImageUrl;
echo".intro {
	width:100%;
	position:relative;
	
	/*background: url(/dev.propchunk.com/images/banner.jpg) no-repeat top center;*/
	padding: 12em 0 10em 0 ;
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.30), rgba(0,0,0,0.15)), url($bigimg) !Important;
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.30), rgba(0,0,0,0.15)), url($bigimg) !Important;
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.30), rgba(0,0,0,0.15)), url($bigimg) !Important;
		background-image: linear-gradient(top, rgba(0,0,0,0.30), rgba(0,0,0,0.15)), url($bigimg) !Important;
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		text-align: center;
}";?>

	</style>

	
	</head>
	<section id="section-colors-left" class="color-panel-left panel-open-left center" style="opacity: .8;">
			<div class="color-wrap-left">
				<p style="color:#000;"><b><span id="numberofpeople" style="color: #000000">7</span></b> People are viewing this offer right now!</p>
			</div>
		</section>




<section id="intro" class="intro"  >
						<div class="inner change-color">
					<h2 class="title-h6"><?= $r[0]->PropertyName;?></h2><!-- PROPERTY NAME HERE-->
	                <p class="title-h6" style="margin:0px;">The funds are being raised for the purchase of a property at <?= $r[0]->PropertyName;?>,<?= $r[0]->Locality;?> .</p><!-- PROPERTY DESC -->	</div>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" style="background:inherit;">
<br />
<br />
<br />
<a class="btn btn-skin">PROPERTY TYPE:<?= $r[0]->PropertyTypeCode;?></a>&nbsp;
<br />
<br />
<br />

</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" style="background-color:whitesmoke; padding:0px;">
<div class="row col-lg-12" style="color:black;">
<div class="progress" style="border-radius:0px;height:34px;">

    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" <?php $a=$r[0]->FundsRaisedTillDate;$b=$r[0]->CampaignGoalAmount; $x=($a/$b)*100; echo"aria-valuenow=".$x."  "?> style="width:<?php echo $x."%"; ?>;background-color:#ed4933;padding-top:6px;">
      <span style="color:#ed49333;font-size:17px;font-weight:bold;padding-top:1em;"><?php echo intval($x)."%"; ?>&nbsp;&nbsp;Complete</span>
    </div>
  </div>

</div>	
<div class="row col-lg-12" style="color:black;padding:0 10px;">
<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
	<i class="fa fa-pie-chart" style="font-size:36px;" ></i><br/>
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>-->
	<span><?php $a=$r[0]->FundsRaisedTillDate;$b=$r[0]->CampaignGoalAmount;$c=$b-$a; if($c<10000000){ $d=$c/100000; echo $d." Lacs";} else{$d=$c/100000;echo $d." Cr.";} ?> </span><br/>
	
<span id="name">Amount Left</span>
</div >
<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
	<i class="fa fa-ticket" style="font-size:36px;"></i><br/>
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>--><span><?php $a=$r[0]->MinInvestmentAmount; if($a<10000000){ $b=$a/100000; echo $b." Lacs";} else{ $b=$a/10000000; echo $b." Cr.";} ?></span><br/>
	

	<span id="name">Minimum Investment</span>

</div >
<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
	<i class="fa fa-inr" style="font-size:36px;"></i><br/>
	<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>--><span><?php $a=$r[0]->ActualPropertyCost; if($a<10000000){$b=$a/100000; echo $b." Lacs";} else{$b=$a/10000000; echo $b." Cr.";} ?></span><br/>
	

	<span id="name">Total Investment</span>

</div >
<hr/>
<div class="row col-lg-12" style="color:black;">
<div class="row col-lg-4 col-md-4 col-sm-5 col-xs-5" style="padding-bottom:20px;">
	<i class="fa fa-calendar" aria-hidden="true" style="font-size:36px;" ></i><br/>
	<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>-->	<span><?= $r[0]->TargetedHoldPeriodInMonths;?>Months</span><br/>
	

<span id="name" ><!--<i class="fa fa-info trcorner" data-toggle="tooltip" title="Hold Period is awesome!"></i>-->Hold Period</span>

</div >
<div class="row col-lg-4 col-md-4 col-sm-3 col-xs-3" style="padding-bottom:20px;">
	<i class="fa fa-clock-o" aria-hidden="true" style="font-size:36px;"></i><br/>
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>--><span><?php $first_date = new DateTime( date("Y-m-d"));
$second_date = new DateTime($r[0]->CampaignEndDate); $difference = $first_date->diff($second_date);
echo $difference->days;
 ?>Days</span><br/>
	<span id="name">Days Remaining</span>
</div >
<div class="row col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom:20px;">
<i class="fa fa-line-chart" aria-hidden="true" style="font-size:36px;"></i><br/>
	
		<span data-tooltip="Minimum investment."style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;"><a style="color:black;font-weight:700;border-bottom:1px dotted black;">?</a></span>
	<!--<span class="glyphicon glyphicon-info-sign trcorner" style="font-size:100%;color:#000000;top: 0 !important;right: 0 !important;position: absolute !important;" data-toggle="tooltip" title="Min Investment!"></span>-->
	<span><?= $r[0]->ExpectedIRRPercentage; ?>%</span><br/>
	<span id="name">Projected Returns</span>
</div >
<hr/>
</div>
</div>	
<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:black; background:#ed4933;">
<a href="#" class="btn btn-default col-lg-12" style="color:#fff; background:#ed4933;  border:transparent;">Invest Now</a>
	</div>


	
</div>


						</section>


						
						<section  id="offerparams" class="text-center team boxed-grey" >
			<div class="container">
			<div class="row " >
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				    <div class="inner">
					<!--<i class="fa fa-clock-o" aria-hidden="true" style="font-size:36px;"></i><br/>-->
					<h4 class="h-pad">
					<?= $s[0]->CurrentRentalStatus; ?></h4>
					
					<h4 class="h-pad">Rental Status
					</h4>
                    </div>
               </div>
				
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				    <div class="inner">
					<!--<i class="fa fa-inr" aria-hidden="true" style="font-size:36px;"></i><br/>-->
					<h4 class="h-pad">
					<i class="fa fa-inr"></i><?php $c=$s[0]->DepositAmountPaid; if($c<10000000){ $d=$c/100000; echo $d." Lacs";} else{$d=$c/100000;echo $d." Cr.";} ?></h4>
					<h4 class="h-pad">
					DepositAmountPaid</h4>
                    </div>
                </div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				    <div class="inner">
					<!--<i class="fa fa-clock-o" aria-hidden="true" style="font-size:36px;"></i><br/>-->
					<h4 class="h-pad">
					<i class="fa fa-inr"></i><?php $c=$s[0]->MonthlyRentalAmount;if($c<10000000){ $d=$c/100000; echo $d." Lacs";} else{$d=$c/100000;echo $d." Cr.";} ?></h4>
					<h4 class="h-pad">
					MonthlyRentalAmount</h4>
                    </div>
                </div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				   <div class="inner">
					<!--<i class="fa fa-line-chart" aria-hidden="true" style="font-size:36px;"></i><br/>-->
					<h4 class="h-pad">
					<?= $s[0]->AppreciationPercentage; ?>&nbsp;%</h4>
					<h4 class="h-pad">AnnualRentalYield</h4>
                    </div>
                </div>
				
			</div>
			</div>
			</section>
								

<div class="slider" align="center" >
                      
<?php
$x=0;
$abc = count($i);


for($x=0;$x<=$abc-1;$x++)
{
	$a=$i[$x]->SmallImageUrl;
$name="http://localhost/admin.propchunk.com/assests/uploads/".$a;
	echo '<div class="box col-md-3 col-lg-3">
                        <img src="'.$name.'"  width="338" height="179" />
                </div>' ;
 }
         ?>
   			
        </div>				

					
<!--offer details -->	
<!--				
						<section  id="offerdetails" class="home-section text-center">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>OFFER DETAILS</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
						</div>
				
	
									<div class="container">

						<div class="row">

							
							<h5>Understand the cost split-up, how you investments will be utilized, how investor protection is ensured, and how appreciations are calculated.</h5>
							

							<p>The Product Disclosure Statement (PDS) sets out the expected cost of the flat and how the Development costs will be funded. Construction and Development cost estimations have been provided by the Development manager based upon their previous experience and available information, apart from mentioning any and every detail about the property, deal flow, SPV structures, documentation, investor protection, etc.</p>
							
									
									<ul style="list-style:none;">
									<li>										 
           <a class="btn btn-skin" href="https://propchunk.typeform.com/to/qrPfn4" data-mode="1" target="_blank">Express Interest Now</a>
		   <br />
		   
		   <!-- SCRIPT FOR TYPEFORM -->
<!--		 
		 <script>
		   (function(){
			   var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'main.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()
		   </script>
			
			<!-- -->
<!--			<p style="font-size: 100%">
			You will get a copy of Product Disclosure Statement (PDS)/Offer Document, our official document enlisting all details about this Fractional Ownership campaign.

		   <br/><br/>* Note: this is a <i>No Obligation Expression of interest</i>, you get to review the document before making any decisions
		    </p>
									</li>
									</ul>
									
									
									</div>
									</div>
									</section>
	-->
	
						<section id="locanddemo" class="home-section">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2>LOCATION AND DEMOGRAPHY</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
							   <div class="container">

								<div class="row text-center" >
	
								<h5>A representation of LOCATION and DEMOGRAPHY of the property</h5>
								</div>
								</div>
											   <div class="container" >
										<div class="row" style="display:flex;">
										
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="flex:1;" >
						<!--<div width="100%" height="260px" id="googleMap"></div>		
						<script src="http://maps.googleapis.com/maps/api/js"> </script>
							<script>
							var myCenter=new google.maps.LatLng(19.110433,72.888191);
							function initialize()
							{
							var mapProp = {
							  center:myCenter,
							  zoom:18,
							  mapTypeId:google.maps.MapTypeId.ROADMAP
							  };

							var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

							var marker=new google.maps.Marker({
							  position:myCenter,
							  });

							marker.setMap(map);

							var infowindow = new google.maps.InfoWindow({
							  content:"PropChunk CrowdInvesting"
							  });

							infowindow.open(map,marker);
							}

							google.maps.event.addDomListener(window, 'load', initialize);
							
							</script>
							-->
							
						    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDiJ_tvkr37H6OJ1Thb7A6AZcEffkNxBjs'></script><div style=''><div id='gmap_canvas' style='height:580px;width:100%;'></div>
							<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
							<script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(<?= $r[0]->MapLatitude; ?>,<?= $r[0]->MapLongitude; ?>),mapTypeId: google.maps.MapTypeId.ROADMAP,scrollwheel:false};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?= $r[0]->MapLatitude; ?>,<?= $r[0]->MapLongitude; ?>)});infowindow = new google.maps.InfoWindow({content:'<strong>PropChunk CrowdInvesting</strong><br>Sakinaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="display:flex;">
							<div id="desc">
							<p>
							<b>LOCALITY NAME :</b><br/><?= $r[0]->Locality; ?><br/><br/>
							<b>LOCALITY DESCRIPTION :</b><br/><?= $r[0]->LocalityDescription; ?><br/><br/>
							<b>LOCALITY POPULATION :</b><br/><?= $r[0]->LocalityPopulation; ?><br/><br/>
							<b>LOCALITY TRANSPORTATION :</b><br/><?= $r[0]->LocalityTransportation; ?><br/><br/>
							<b>LOCALITY SCHOOL/COLLEGE :</b><br/><?= $r[0]->LocalitySchoolCollege; ?><br/><br/>
							<b>LOCALITY NEARBY EATERIES :</b><br/><?= $r[0]->LocalityNearbyEateries; ?><br/><br/>
							<b>LOCALITY NEARBY LEISURE SPOTS :</b><br/><?= $r[0]->LocalityNearbyLeisureSpot; ?><br/><br/>
							</p>
							</div>
							</div>
											
						<!--
								<p>
						For a town its size, Palghar is surprisingly cosmopolitan. Being a border town between Gujarat and Maharashtra and being close to Mumbai, it has a good percentage of population of people from other parts of country besides Maharashtra and Gujarat like Rajasthan, Kerala and North India.
						The site is well within the prestigious St. John’s Engineering College which ranks as one of the best Engineering colleges in Mumbai outskirts. VBHC’s Palghar project and surrounding properties have been known to fetch a significant premium among investors due to its desirable location. Palghar also got converted into a district recently and it is a connecting district between Mumbai and Gujarat.</p>

						<img src="img/geography2.png" width="100%" height="100%">

						<p>The site is close to two railway stations and is surrounded by various parks.
						Most of the rich landlords of Palghar made their money trading grass to the dairies in Mumbai. Grass trading is a major occupation of many families in Palghar. The town is also close to an industrial complex, located at Boisar and India's first nuclear power plant, located at Tarapur.
						Industrialization is gradually changing the face of Palghar. The town is getting a make-over of sorts due to Industrialization. Palghar's youth is getting employment in the small scale and medium scale industries coming up in and around the area. In the olden days agriculture was one of the main source of livelihood, but industrialization has opened up new avenues for them. With space and infrastructure constraints in Mumbai proper, Vasai, Boisar - Palghar proves to be the leading avenue in Western suburbs for setting up new industry / expansion purposes. 
						</p>
						-->
					     

						 </div>
						 </div>
								</section>

			
			
				<section id="appreciationchart" class="home-section">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2>APPRECIATION CHART</h2>
					
					<!--<i class="fa fa-2x fa-angle-down"></i>-->

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
							<div class="container">

								<div class="row">
								<div id="chartContainer" style="height: 360px; width: 100%;"></div>
							<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
								<script>
							//Creating a multi-series line graph from 2 sets of data. Namely dps1 and dps2.


var dps1 = [
<?php 
$abc = count($w);
//echo  $abc;
//echo $w[0]->MonthYear;
//echo $w[0]->PrevalantUnitRateInMonthYear;
$i=0;
$x=1;
for($i=0;$i<$abc-1;$i++,$x++)
{	
echo '{
	x:' .$x.',
	y: '.$w[$i]->PrevalantUnitRateInMonthYear.',
	label:"'.$w[$i]->MonthYear.'" 
  	},';
}
echo '{
	x:'.$x .',
	y: '.$w[$i]->PrevalantUnitRateInMonthYear.',
	label:"'.$w[$i]->MonthYear.'" 
  	
}';?>

/*
{
  x: 1,
  y: 4000,
  label: "JAN -MAR 2016"
}, {
  x: 2,
  y: 5000,
  label: "APR - JUN 2016"
}, {
  x: 3,
  y: 4500,
  label: "JULY - SEP 2016"
}, {
  x: 4,
  y: 4800,
  label: "OCT - DEC 2016"
}, {
  x: 5,
  y: 5000,
  label: "JAN -MAR 2017"
}]; //dataPoints – line 1
/*var dps2 = [{
  x: 1,
  y: 15
}, {
  x: 2,
  y: 28
}, {
  x: 3,
  y: 42
}
*/
];
//dataPoints. – line 2

var chart = new CanvasJS.Chart("chartContainer", {
  title: {
    text: "APPRECIATION OVER PAST FEW YEARS",
	padding:10
  },
  axisX: {
    title: "YEARS",
	minimum:0,
	interval:1,
	padding:5,
	valueFormatString : "####"
  },
  axisY: {
    title: "COST PER SQ.FT",
	gridColor:"#EEEEEE",
	minimum:3000,
	interval:1000,
	valueFormatString : "₹##,##,###"
  },

  // begin data for 2 line graphs. Note dps1 and dps2 are
  //defined above as a json object. See http://www.w3schools.com/json/
  data: [{
      type: "line",
      dataPoints: dps1
    } /*, {
      type: "line",
      dataPoints: dps2
    }*/
	]
    // end of data for 2 line graphs

}); // End of new chart variable

chart.render();

							</script>
							
						</div>
						<div class="container">
								<div class="row">
								<div class="">
								<br/>
								<br />
								<p><b>In the last two years,the commercial properties of the locality has been appreciating at the rate of <?= $r[0]->LocalityAppreciation; ?> %</b></p>
								
								</div>
								</div>
								</div>
								
						</section>
			
						<section>
                         							<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 align="center">Construction Status</h2>
					
				</div>
					</div>
				</div>
			</div>
			</div>
						</div>


								<div class="container">
									<div class="row">
															
										                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
										                                      
                                                             <?php 
                                                              $a=  $r[0]->IsUnderConstruction;
                                                              if($a=='N')
                                                             {
                                                              echo'												             
																				<h4>
                                                                                The Property was constructed in May,2016.
																				</h4>;
                                                            
		
															';												}
                                                             else{
                                                             	echo'
                                                             
                                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-pad">
																	<span id="name" >Construction Status:</span>'.$r[0]->ConstructionStatus.'.
                                                             </div>
                                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-pad">
																	<span id="name" >Construction Contractor:</span> '.$r[0]->ConstructionContractorName.'.
                                                             </div>
                                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-pad" >
																	<span id="name" >Construction Specification:</span> '.$r[0]->ConstructionSpecification,'. 
                                                             </div>
                                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-pad" >
																	<span id="name" >Builder Lender:</span> '.$r[0]->BuilderLender.'.
                                                             </div>
                                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-pad" >
																	<span id="name" >Expected Possesion Date:</span>'. $r[0]->ExpectedPossessionMonthYear.'. 
                                                             </div>
                                                             ';
		                                                       
                                                             }


		                                                    ?>
												         </div>
                                                </div>
                     </div>
             
</section>			




						<section>
                         							<div class="heading-about">
									<div class="container">
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											<div class="wow bounceInDown" data-wow-delay="0.4s">
											<div class="section-heading">
											<h2 align="center">Investment Highlights</h2>
											
										</div>
											</div>
										</div>
									</div>
									</div>
												</div>


								<div class="container">
									<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-11" id="headingups">
										                                      
										                                      </div>
										                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-11" id="data">
										                                      
										                                      </div>
             </div>
         </div>
		 
		 
						<?php 
						$reg=$r[0]->RegistrationCharge;
						$le=$r[0]->LegalCharges;
						$spv=$r[0]->SPVCreationCost;
						$va=$r[0]->VAT;
						$st=$r[0]->ServiceTax;
						$sd=$r[0]->StampDuty; 
						$pm=$r[0]->PropertyManagementFee;
						$ta=$r[0]->BuiltUpArea;
						$pps=$r[0]->PricePerSqFt;
						$bp=$ta*$pps;
						$tbp = ($ta*$pps);
						 $spvexp = $le + $spv;
						 $tad = $va + $st + $sd + $reg;
						 //$atc = $tbp + $spvexp + $tad ; 
                         $total=$reg+$le+$spv+$va+$st+$sd+$pm+$bp;
                         $reg=($reg/$total)*100;
                         $le=($le/$total)*100;
                         $spv=($spv/$total)*100;
                         $va=($va/$total)*100;
                         $st=($st/$total)*100;
                         $sd=($sd/$total)*100;
                         $pm=($pm/$total)*100;
                         $bp=($bp/$total)*100;
						 
			
                         
						?>
			<div class="container">
			<div class="row">
			<br />
			<div class="col-xs-12 col-sm-6 col-md-6">
				    <div class="inner">
						<!--<h5>TABLE</h5>-->
						 <div class="box secondary">
                            <div class="box-content">
                                <table class="table price-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th colspan="2"><h5 style="margin:0px">COST COMPONENTS</h5></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
										<tr>
										<td><a href="#" class="toggler" data-prod-cat="3">(+)</a></td>
										<td><b>BASE PRICE</b></td>
										<td id="baseprice"><span style="white-space:pre;"><i class="fa fa-inr"><?= $tbp ?></i></span></td>
										</tr>
										<tr class="cat3" style="display:none">
                                            <td></td>
                                            <td>Total Area</td>
                                            <td><span style="white-space:pre;"><?= $r[0]->BuiltUpArea ?></span ></td>
                                        </tr>
                                        <tr  class="cat3" style="display:none">
                                            <td></td>
                                            <td>PRICE PER SQ.FT</td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->PricePerSqFt ?></span></td>

                                        </tr>
                                       
										<tr>
                                            <td></td>
                                            <td><b>PROPERTY MGMT FEE</b></td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i>2,00,000</span></td>
                                        </tr>
										
										<tr>
										<td><a href="#" class="toggler" data-prod-cat="1">(+)</a></td>
										<td><b>SPV EXPENSES</b></td>
										<td id="spvtotal"><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $spvexp ?></span ></td>
										</tr>
										
										<tr class="cat1" style="display:none">
                                            <td></td>
                                            <td>LEGAL CHARGES</td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->LegalCharges ?></span ></td>
                                        </tr>
										<tr class="cat1" style="display:none">
                                            <td></td>
                                            <td>SPV CREATION </td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->SPVCreationCost ?></span ></td>
                                        </tr>
										<tr>
										<td><a href="#" class="toggler" data-prod-cat="2">(+)</a></td>
										<td><b>TAXES AND DUTIES</b></td>
										<td id="taxtotal"><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $tad ?></span ></td>
										</tr>
										<tr class="cat2" style="display:none">
                                            <td></td>
                                            <td>VAT</td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->VAT ?></span ></td>
                                        </tr>
										<tr class="cat2" style="display:none">
                                            <td></td>
                                            <td>SERVICE TAX</td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->ServiceTax ?></span ></td>
                                        </tr>
										<tr class="cat2" style="display:none">
                                            <td></td>
                                            <td> STAMP DUTY </td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->StampDuty ?></span ></td>
                                        </tr>
										<tr class="cat2" style="display:none">
                                            <td></td>
                                            <td>REGISTRATION</td>
                                            <td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->RegistrationCharge ?></span ></td>
                                        </tr>									
										<tr>
										<td><a href="#" class="toggler" data-prod-cat="4">(+)</a></td>
										<td><b>TOTAL COST</b></td>
										<td><span style="white-space:pre;"><i class="fa fa-inr"></i><?= $r[0]->CampaignGoalAmount ?></span ></td>
										</tr>
										<tr class="cat4" style="display:none">
                                            <td></td>
                                            <td>ACTUAL PROPERTYCOST</td>
                                            <td><span style="white-space:pre;" ><i class="fa fa-inr"></i><?php  $c=$r[0]->ActualPropertyCost;echo $c; ?></span ></td>
                                        </tr>
										<tr class="cat4" style="display:none">
                                            <td></td>
                                            <td>ROUNDING UP/DOWN</td>
                                            <td id="roundup"><span style="white-space:pre;"><i class="fa fa-inr"></i><?php $a=$r[0]->CampaignGoalAmount; $b=$r[0]->ActualPropertyCost;$c=$a-$b;echo abs($c);?></span ></td>
                                        </tr>
																			
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                     
                    </div>
                </div>
				
				<div class="col-xs-12 col-sm-6 col-md-6">
				    <div class ="inner" >
						<!--<h5>COST SPLIT-UP</h5>-->
                        <p class="subtitle"></p>
                        <!--<div class="avatar"><img src="/dev.propchunk.com/img/r1.png" alt="" class="img-responsive " /></div>-->
										
						<div id="container" style=""></div>

						<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
						<script src="http://code.highcharts.com/highcharts.js"></script>
						<script src="http://code.highcharts.com/modules/exporting.js"></script>

						<div id="container" style=""></div>
						<!--<input type="button" id="btnPieChart" value="Pie Chart"/>-->

						<script>
						 $(document).ready(function () {    
								   
									RenderPieChart('container', [
											  ['Legal Charges', <?php echo $le;?>],
											  ['SPV Creation', <?php echo $spv;?>],
											  ['Property MGMT Fee',<?php echo $pm;?>],                         
											  ['VAT',<?php echo $va;?>],
											  ['SERVICE TAX',<?php echo $st;?>],
											  ['STAMP DUTY', <?php echo $sd;?>],
											  ['REGISTRATION', <?php echo $reg;?>],
											  ['BASE PRICE', <?php echo $bp;?>]
										  ]);     
							 
							 /*
							 $('#btnPieChart').live('click', function(){ 
								 var data = [
											  ['Firefox', 42.0],
											  ['IE', 26.8],
											  {
												  name: 'Chrome',
												  y: 14.8,
												  sliced: true,
												  selected: true
											  },
											  ['Safari', 6.5],
											  ['Opera', 8.2],
											  ['Others', 0.7]
										  ];
									 
									RenderPieChart('container', data);
							 });
							 */
							 
									function RenderPieChart(elementId, dataList) {
										new Highcharts.Chart({
											chart: {
												renderTo: elementId,
												plotBackgroundColor: null,
												plotBorderWidth: null,
												plotShadow: false
											}, title: {
												text: 'COST SPLIT UP '
											},
											tooltip: {
												
												formatter: function () {
													
													return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage,2) + ' %';
												}
											},
											plotOptions: {
												pie: {
													allowPointSelect: true,
													cursor: 'pointer',
													dataLabels: {
														enabled: true,
														color: '#000000',
														connectorColor: '#000000',
														formatter: function () {
														   /* return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';*/
														}
													}
												}
											},
											series: [{
												type: 'pie',
												name: 'Browser share',
												data: dataList
											}]
										});
									};
								});
						</script>

				    </div>
                </div>
            </div>
			<div class="row">
			<!--<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="">
                <div class="row">-->
                    
                       		
						<div  class="col-lg-12 col-sm-12 col-xs-12 text-center">			
									
								<h5 align="left">OWN THIS PROPERTY FRACTIONALLY </h5>
					
									<span id="in">PLEASE SELECT SOME INVESTMENT AMOUNT.<br /></span>
									
									<br />
									
									<br />
									<input id ="slider1" type="range" min="100000" max="1900000" value="0" step="50000" onchange="inWords(this.value) "  style="cursor:e-resize"/>
									<br >
									<br >
									
									<span id="out"></span>
									<br>
									<br >
									
									<p><b><span id="in1"></span><span id="out1"></span> </b></p>
									</div>
									<!-- SCRIPT FOR SLIDER -->
				
									<script type="text/javascript">
										
									var a = ['0','1','2','3','4','5','6','7','8','9','10', '11', '12', '13', '14', '15', '16', '17', '18', '19'];
									var b = ['','', '2','3','4','5','6','7','8','9'];

									function inWords (num) {
										if ((num = num.toString()).length > 9) return 'overflow';
										n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
										if (!n) return; var str = '';
										str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] +  a[n[1][1]]) + ' Cr.' : '';
										str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] +  a[n[2][1]]) + ' Lacs ' : '';
										str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]]  + a[n[3][1]]) + ' Thousand ' : '';
										str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + a[n[4][1]]) + 'hundred ' : '';
										str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
										
										document.getElementById("in1").innerHTML= 'YOU INVEST <i class="fa fa-inr"></i>'+ str ;
										document.getElementById("in").innerHTML= 'Amount Invested :' + str ;
										var maxValue = document.getElementById("slider1").getAttribute("max");
										
										var oldValue = num;
										
										num =  (num*100)/maxValue;
										
										num = num.toPrecision(4);
										
									    document.getElementById("out1").innerHTML= ", YOU OWN " + num + "% .";
										document.getElementById("out").innerHTML= "Percentage Ownership: " + num + "%";
									}	
	
	
								</script>
						</div>
					</div>
					
			</div>
			
		 </section>

				
								
						<section id="builderinfo" class="home-section">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2>BUILDER INFO</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
							<div class="container">

								<div class="row">
								<div class="col-xs-12 col-lg-4 col-md-4 col-sm-4"><?php $logoimg="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->BuilderCompanyLogo; ?>
							<h5><img src="<?php echo $logoimg ; ?>"></h5>
							
						</div>
						<div class="col-xs-12 col-lg-8 col-md-6 col-sm-8">
							<h4>     <?=  $r[0]->BuilderName;?>
         ,   <?= $r[0]->BuilderCity;?>,<?= $r[0]->BuilderState;?>
							<br/>
							No Of Years In Business:  <?= $r[0]->BuilderYrsInBusiness;?></h4>
							<p><b>BuilderDescriptionCompany:</b><br /> <?= $r[0]->BuilderDescriptionCompany;?><br /><br />
							<b>Promoter :</b><br/><?= $r[0]->BuilderDescriptionPromoter;?><br /><br />
							<b>Past Project :</b><br/><?= $r[0]->BuilderDescriptionPastProject;?><br /><br />
							 
							</p>
						</div>
						</div>
						<!--
						<div class="container">
								<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
								
							
								</div>
								</div>
								</div>
						-->		
						</section>
		


			<!--
			<section id="dealprocess" class="home-section text-center">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>DEAL PROCESS</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
							<div class="container">

								<div class="row">
							<h5>A simplified representation of how this deal will work out.</h5>
							<p>A Special Purpose Vehicle (SPV) will be established by the Chunk Technologies Pvt. Ltd. to undertake the cost of Development in a Phase 3 of VBHC in Palghar East. The SPV has the rights to purchase and sell the land.</p>
						<img src="img/process.png" width="100%" height="100%">
						</p>
						
					

									
						</div>
						</div>
						</section>
							
				-->
				<!--
				<section id="invprocess" class="home-section text-center">
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>INVESTMENT PROCESS</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
		
									<div class="container">
									<div class="row">
		
								<h5>A simplified representation of how much stake you can have</h5>
		<p>In return of investment the net profits or net proceeds of a Special Purpose Vehicle will be distributed to the Purchaser in accordance to the amount invested. For example If you invest Rs. 10L in a property worth Rs. 1 Cr., you are entitled to receiving the 10% share of the net income the property makes in the duration of the your investment.Select a value and know your share !							
		<br />							
		
		
									<div align ="center">			

									<span id="in"> <br /></span>
									<br />
									<input id ="slider1" type="range" min="100000" max="1900000" value="0" step="50000" onchange="inWords(this.value) "  style="cursor:e-resize"/>
									<br >
									<br >
									<span id="out">Select Some Investment Amount</span>
									<br>
									</div>
									<!-- SCRIPT FOR SLIDER -->
<!--					
					<script type="text/javascript">
										
									var a = ['0','1','2','3','4','5','6','7','8','9','10', '11', '12', '13', '14', '15', '16', '17', '18', '19'];
									var b = ['','', '2','3','4','5','6','7','8','9'];

									function inWords (num) {
										if ((num = num.toString()).length > 9) return 'overflow';
										n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
										if (!n) return; var str = '';
										str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] +  a[n[1][1]]) + ' Cr.' : '';
										str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] +  a[n[2][1]]) + ' Lacs ' : '';
										str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]]  + a[n[3][1]]) + ' Thousand ' : '';
										str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + a[n[4][1]]) + 'hundred ' : '';
										str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
										
										document.getElementById("in").innerHTML= "<br /> Amount Invested : " + str + "<br />";
										
										var maxValue = document.getElementById("slider1").getAttribute("max");
										
										var oldValue = num;
										
										num =  (num*100)/maxValue;
										
										num = num.toPrecision(4);
										
									    document.getElementById("out").innerHTML= "Percentage Ownership : " + num + "%";

									}	
	
	
								</script>



							</div>
							</div>
							</div>
							
						</section>
						
		-->		

				<!-- Call To Action -->
			<!--	
					<section id="cta" class="home-section text-center" style="
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(/dev.propchunk.com/images/banner.jpg) !Important;
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(/dev.propchunk.com/images/banner.jpg) !Important;
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(/dev.propchunk.com/images/banner.jpg) !Important;
		background-image: linear-gradient(top, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(/dev.propchunk.com/images/banner.jpg) !Important;
		background-attachment: fixed;
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
					" 
					>
							<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 class="title-h6">WHAT ARE YOU WAITING FOR ?</h2>
					
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
							
							<div class="container">
							<div class="row">
							<p class="title-h6"><i>You don't become rich by saving, you become rich by investing.</i> With our curated deals in growing geographies, you can be a property owner too. </p>
							<ul class="" style="list-style:none;">
							<li>
							<br/>					 
						<a class="btn btn-skin" href="https://propchunk.youcanbook.me/?skipHeaderFooter=true" data-mode="1" target="_blank">Express Interest</a>
										
						<!-- SCRIPT -->				
					<!--	<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'main.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>
						<!-- -->
						<!--
						<p style="font-size: 75%">

						</li>

						<li><a class="btn btn-skin " href="https://propchunk.youcanbook.me/?skipHeaderFooter=true" data-mode="1" target="_blank">Fix a Meet Now</a>
						<!-- SCRIPT -->
					<!--	<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'main.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>
						<!-- -->		
					   <!-- </li>
                        
						</ul>
						</div>
						</div>
					</section>
				-->
<!--
						<section class="">
						
							<div class="container">
						    <div class="row " style="font-size: 90%">

								<h4>Terms and Conditions</h4>
								<ol>
									<li>We accept investments on first come first serve basis</li> 
									<li>Investments in this Palghar project will close on August 31, 2016.</li> 
									<li>If you want to reserve your slot, get in touch and express your interest on or before July 31, 2016.</li>
									<li>Risk Disclosure: Should the Project incur cost overruns, not be completed, and generally fall into disrepair, the Construction Lender will be entitled to sell the Land as mortgagee in possession to recover its debt. Should this occur some or all of funds invested under this investment may be lost. </li>
									<li>The Project may fail to be completed on time and within budget. The builder appointed to the Project may default in which case a new builder will be required to complete the Project, incurring additional costs. The Developer will undertake development of the Project and as such will be required to comply with a number of statutory authorities including council approvals and consents, taxation issues, building contracts, project managers, Construction Lenders and the like. There is a risk that the end value of the flat may be less than current market value and the projected profits as shown in this Offering may not be achieved in part or in full.</li>
									<li>There is no established secondary market (e.g. stock exchange) for these Interests. You should treat your investment as illiquid and being in place for the full term.</li>
								</ol>
								</div>
								</div>
								</section>
-->
								
						
						<!-- SHRINATHS  WORK -->
		<section>
						
						<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-12 " >
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 align="center">SPECIFICATIONS</h2>
					

					</div>
					</div>
				</div>
			</div>
			</div>
						</div>

								<div class="container">
									<div class="row">
									<!--
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
                                       
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
										-->
										
										<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
  
															
															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
					                                       <img src="<?php echo base_url('images/Carpet.png');?>" style="height:32px;"/><br/>
									                             <span  id="number" class="numberstyle"><?= $r[0]->CarpetArea ?>&nbsp;<?= $r[0]->AreaMeasurementUnitCode ?></span> <br/>
												                <span id="name">Area</span><br/>
												           
												             </div>

															<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">
						                                    <img src="<?php echo base_url('images/Flooring.png');?>" style="height:32px;"/><br/>
									                             <span  id="number" class="numberstyle"><?= $r[0]->FlooringType ?></span> <br/>
												                <span id="name">Flooring Type</span><br/>
												              
												             </div>
                                                          <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
														     <i class="fa fa-tint" aria-hidden="true" style="font-size:32px;"></i> <br/>
                                                               <span  id="number" class="numberstyle"> <?php $a=$r[0]->Has24HrsWater;if($a=='Y'){echo"24 Hrs";
                                                               } else{ echo"Timely";}?></span> <br/>
												                <span id="name">Water</span><br/>
												             </div>
												             
    															<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">		
    															<i class="fa fa-bolt" aria-hidden="true" style="font-size:32px;"></i><br/>
                                                               <span  id="number" class="numberstyle"><?php $a=$r[0]->Has24HrsElectricity;if($a=='Y'){echo"24 Hrs";
                                                               } else{ echo"Timely";}?></span> <br/>
												                <span id="name">Electricity</span><br/>
					
												             </div>


															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
				                                              <img src="<?php echo base_url('images/Floors.png');?>" style="height:32px;"/><br/>
									                             <span  id="number" class="numberstyle"><?= $r[0]->FloorCount ?></span> <br/>
												                <span id="name">Floors</span><br/>
												            
												             </div>

												
												             
												
										<!--	
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
										-->
										
										<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="Y/N">-->
													        <?php 
                                                              $assumption=$r[0]->HasLift;
                                                              if($assumption=='Y')
                                                             {
                                                              echo'												             
															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
																				
                                                            <img src="'. base_url('images/Elevator.png').'" style="height:32px;" /><br/>
									                             <span  id="number" class="numberstyle">Available</span> <br/>
												                <span id="name">Lift</span><br/>
												              </div>
		
															';												}
		                                                    ?>
												             <?php 
                                                              $assumption=$r[0]->HasCCTV;
                                                              if($assumption=='Y')
                                                             {
                                                              echo'												             
															<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">
																					
                                                            <img src=" '.base_url('images/Cctv.png').'" style="height:32px;" /><br/>
									                             <span  id="number" class="numberstyle">Available</span> <br/>
												                <span id="name">CCTV</span><br/>

												             </div>
		
															';												}
		                                                    ?>
												            <?php 
                                                              $assumption=$r[0]->HasParking;
                                                              if($assumption=='Y')
                                                             {
                                                              echo'												             
															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
																				
                                                                 <img src="'.base_url('images/Parking.png').'" style="height:32px;" /><br/>
									                             <span  id="number" class="numberstyle">Available</span> <br/>
												                <span id="name">Parking</span><br/>
												             </div>
		
															';												}
		                                                    ?>
												            <?php 
                                                              $assumption=$r[0]->HasGym;
                                                              if($assumption=='Y')
                                                             {
                                                              echo'												             
															<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">
																				
                                                             	
                                                                 <img src="'. base_url('images/Gym.png').'" style="height:32px;" /><br/>
									                             <span  id="number" class="numberstyle">Available</span> <br/>
												                <span id="name">Gym</span><br/>
												                </div>
		
															';												}
		                                                    ?>
												            <?php 
                                                              $assumption=$r[0]->MiscellaneousFacility;
                                                              if($assumption=='Y')
                                                             {
                                                              echo'												             
															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
																				
                                                             
                                                                 <img src="'. base_url('images/Miscellaneous.png').'" style="height:32px;" /><br/>
									                             <span  id="number" class="numberstyle">Available</span> <br/>
												                <span id="name">Other Facilties</span><br/></div>
		
															';												}
		                                                    ?>
												            
												             </div>
                                                     		
										<!--					
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
										-->	
									          
									</section>	
                         <section>
                                         							<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 align="center">Frequently Asked Questions</h2>
					
				</div>
					</div>
				</div>
			</div>
			</div>
						</div>


								<div class="container">
									<div class="row">
										
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															
										                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-11">
										                                      <a id="faq" class="rc-offering-anchor">&nbsp;</a>

<p class="rc-header-subtext">Below are some of the most frequently asked questions about this offering.</p>
<ul>

<li  data-toggle="collapse" data-target="#collapse_questions_1">

<div class="rc-fill">
How do I confirm the Fund is using my capital to make loans?
</div>
</li>

<div id="collapse_questions_1" class="collapse">
<div >
<p id="alignment">We will provide you with loan recording numbers for each loan in the portfolio. You can use those loan recording numbers to confirm via county websites that the Fund is the holder of the first deed of trust for that specific loan.</p>
</div>
</div>



<li data-toggle="collapse"  data-target="#collapse_questions_2">
<div class="rc-fill">
Are there concentration limits set for the Fund?
</div>
</li>
<div id="collapse_questions_2" class="collapse">
<div  >
<p id="alignment">Yes. The maximum single loan amount shall not exceed $1,000,000 so long as the assets of the Company are less than $10,000,000. Once the assets of the Company exceed $10,000,000, the maximum single loan amount shall increase to an amount equal to ten percent of the assets of the Company. The maximum aggregate loan amount to any one Borrower shall not exceed $1,500,000 so long as the assets of the Company are less than $10,000,000. Once the assets of the Company exceed $10,000,000, the maximum aggregate loan to any one Borrower shall not exceed fifteen percent of the assets of the Company.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_3">
<div class="rc-fill">
Do you require personal guarantees from borrowers?
</div>
</li>
<div id="collapse_questions_3" class=" collapse">
<div>
<p id="alignment">Yes.</p>
</div>
</div>
<li  data-toggle="collapse" data-target="#collapse_questions_5">
<div class="rc-fill">
Is this your only Fund?
</div>
</li>
<div id="collapse_questions_5" class="collapse">
<div>
<p id="alignment">No, this is our second fund. It is identical to our first fund, PBRELF I, which is focused on the Pacific Northwest. PBRELF I has over $162M in assets under management and a four year audited history of annualized returns in excess of 11% assuming reinvestment.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_6">
<div class="rc-fill">
Have there been any defaults or losses since inception?
</div>
</li>
<div id="collapse_questions_6" class="collapse">
<div>
<p id="alignment">BRELF II has had 2 defaults since inception and has incurred no losses.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_7">
<div class="rc-fill">
The Fund charges borrowers 18% - 20% annualized. Why don’t your borrowers just go to a bank?
</div>
</li>
<div id="collapse_questions_7" class="collapse">
<div>
<p id="alignment">Since the real estate meltdown and credit crisis in the late 2000s, many banks have either failed or been acquired. It is not profitable for large banks to write the size of loans we do. The smaller, regional banks that still exist tend to lend based on cash-flow. As our borrowers are typically builders or developers, they have inconsistent cash flow and therefore fail those underwriting tests. As an asset backed lender however, we put a much greater emphasis on the value of the collateral.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_8">
<div class="rc-fill">
Does RealCrowd charge a fee to invest?
</div>
</li>
<div id="collapse_questions_8" class="collapse">
<div>
<p id="alignment">RealCrowd is free for investors. RealCrowd charges a technology access fee to the operating partner for our services. We do not charge investors any upfront fees, ongoing asset management fees or promote/carried interest in the investments.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_9">
<div class="rc-fill">
Who can invest in a RealCrowd offering?
</div>
</li>
<div id="collapse_questions_9" class="collapse">
<div >
<p id="alignment">RealCrowd offerings are open to US-based accredited investors. RealCrowd does not recommend or advise on any offering on our platform. While we have minimum history and experience threshold for Operators who post on our platform, if you are unable to perform your own due diligence, please consult with an attorney or financial advisor prior to making an investment.</p>
</div>
</div>
<li data-toggle="collapse"  data-target="#collapse_questions_10">
<div class="rc-fill">
Is RealCrowd an equity investor in the offerings?
</div>
</li>
<div id="collapse_questions_10" class="collapse">
<div >
<p id="alignment">RealCrowd is a marketplace that connects investors with qualified operators. We strive for transparency and impartiality. For this reason, we do not participate in any offerings on our site.</p>
</div>
</div>
<ul>
										                                      </div>
                                                </div>
                     </div>
					 </div>
             
</section>





                         <section>                         							<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<span style="white-space:pre;"><h2 align="center">DOWNLOADS</h2></span>
					
				</div>
					</div>
				</div>
			</div>
			</div>
						</div>

								<div class="container">
									
									<!-- IF SESSION LOGGED IN THEN ACTIVATE CLASSES ELSE NOTHING -->
									
									<article class="caption">

									<div class="row pd-bot caption__media">
                                    <!--
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
                                       
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
									-->
									
					                 <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
									        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">
													<i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:32px;"></i><br/>
							                            <a href="<?php $a="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->DueDiligenceReportURL ;echo $a; ?>" target="_blank" download><span id="name">Due Diligence Report</span></a>
									 			             </div>
												             
															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
							                                 	<i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:32px;"></i><br/>
														          <a href="<?php $a="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->ProductDiscloreStatementURL ;echo $a; ?>" target="_blank" download><span id="name">Product Disclosure Statement</span></a>
									 			        						
												             </div>

															<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
                                                             	<i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:32px;"></i><br/>
														         <a href="<?php $a="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->CertificatesURL ;echo $a; ?>" target="_blank" download><span id="name">Building Certificates</span></a>
									 			        													
												             </div>
 
							   								<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 pd-bot" align="center">
																				<i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:32px;"></i><br/>
								                                         <a href="<?php $a="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->PropertyBrochureURL ;echo $a; ?>" target="_blank" download><span id="name">Brochure</span></a>
									 			        
												             </div>
												             
															<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pd-bot" align="center">
							                                    	<i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size:32px;"></i><br/>
														            <a href="<?php $a="http://localhost/admin.propchunk.com/assests/uploads/".$r[0]->MiscellaneousDocumentsURL ;echo $a; ?>" target="_blank" download><span id="name">Miscellaneous Documents</span></a>
									 			        						
												             </div>
															 
                                             </div>
											 
                                           <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
                                       
									    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                                                   &nbsp;
							            </div>
										
												
										--> 
										<div class="caption__overlay" style="padding-bottom:50px;">
            <p class="caption__overlay__content text-center">
				<a class="btn btn-skin">LOGIN TO SEE</a>
            </p>
        </div>
										</article>
										
                                             </div>
	<div class="container">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN/SIGNUP</h4>
      </div>

					  <div class="modal-body">
					  
					  
					  
					  
					  	<div class="login-box" id="redirect">
			
		<!--						
		<div class="social-login">
      
	  <a href="#" class="form-link">
        <i class="fa fa-facebook fa-2x"></i>
        Login in with facebook
      </a>

      <a href="#" class="form-link">
        <i class="fa fa-google-plus fa-2x"></i>
        log in with Google
      </a>
	  -->
	  <div class="form-top">	                        	
								<div class="social-login">
	                        	<div class="social-login-buttons text-center">
		                        	<a class="btn btn-default btn-link-1-facebook center-block blue " href="#">
		                        		<i class="fa fa-facebook pull-left ip-top"></i> Facebook
		                        	</a>
									<!--
		                        	<a class="btn btn-default btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
									-->
									<br />
		                        	<a class="btn btn-default btn-link-1-google-plus center-block red " href="#">
		                        		<i class="fa fa-google-plus pull-left ip-top"></i> Google
		                        	</a>
	                        	</div>
								<br />
								<br />
								<h3 class="text-center">OR </h3>	
	                            </div>
								</div>
	                            <?php 
	                            	if($this->session->flashdata('message')){
	                            		echo $this->session->flashdata('message');
	                        		}
								?>

    </div>
      
	  <!--
	  <div class="u-form-group">
        <!--<span><i class="fa fa-envelope-o"> </i></span>--><!--<input type="email" name="EmailId" placeholder="Email" id="EmailID"required/>
      <!--
	  </div>
      <div class="u-form-group">
        <!--<span><i class="fa fa-lock"> </i></span>--><!--<input type="password" placeholder="Password" id="Password" name="Password" required/>
      <!--
	  </div>
      <div class="u-form-group">
        <input type="submit">Log in</input>
      </div>
	  -->
	  		                   <?php 
								$attributes = array('id'=>'login','name'=>'login','method'=>'POST','role'=>'form');
								echo form_open('Auth/user_login_process',$attributes);
								?>
								     <!--<form role="form" action="" method="POST" class="login-form" id="login-form" name="login-form">-->
				                    	
										<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
											<?php 
											$attribute1 = array('type'=>'email','name'=>'EmailId1','class'=>'form-control form-email','id'=>'EmailId1','placeholder'=>'Email');
											echo form_input($attribute1);
											?>
				                        	<!--<input type="text" name="form-email" placeholder="Email" class="form-email form-control" id="form-email">-->
				                        	<span>
											<?php echo form_error('EmailId');?>
											</span>
										</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<?php
											$attribute = array('type'=>'password','name'=>'password1','placeholder'=>'Password','class'=>'form-password form-control','id'=>'password1');
											echo form_password($attribute);
											?>
											<!--<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">-->
				                        <span><?php echo form_error('Password');?></span></div>
				                        <span><?php 
	                            	if($this->session->flashdata('login_failed')){
	                            		echo $this->session->flashdata('login_failed');
	                        		}
								       ?></span>
									   
										<?php
										$attribute = array('type'=>'submit','name'=>'submit','class'=>'btn btn-skin','value'=>'SIGN IN','id'=>'submit');
										echo form_submit($attribute);
										?>
								
      <div class="u-form-group">
        <p><a href="#redirect" class="forgot-password form-link" id="reset-password">Forgot password?</a></p>
      </div>
	  <p>Don't have an account? <a href="#redirect" id="signup-box-link" class="form-link">Sign Up</a></p>
     	</form>
	
      
	  
	  <!--
	  <div class="u-form-group">
        <!--<span class="uspan" ><i class="fa fa-user"> </i></span>--><!--<input  id ="FirstName" type="text" placeholder="First Name" style="width:14em;float:left; margin-left:34px;margin-bottom:10px;" name="FirstName" required /><input id="LastName" type="text" placeholder="Last Name" name="LastName" style="width:14em;float:right;margin-right:34px;margin-bottom:10px;"  />
      <!--
	  <br />
	  </div>
      <div class="u-form-group">
        <!--<span class="uspan"><i class="fa fa-phone"> </i></span>--><!--<input id="PhoneNumber" type="text" placeholder="Phone" name="PhoneNumber"/>
      <!--
	  </div>
      <div class="u-form-group">
        <!--<span class="uspan"><i class="fa fa-envelope-o"> </i></span>--><!--<input type="email" placeholder="Email" id="EmailId" name="EmailId" required/>
      <!--
	  </div>
	  <div class="u-form-group">
       <!--<span class="uspan"><i class="fa fa-lock"> </i></span>--><!--<input type="password" placeholder="Password"  id="Password" name="Password" required />
      <!--
	  </div>
      <div class="u-form-group">
        <span id='message' style=""></span><input type="password" placeholder="Confirm Password" id="ConfirmPassword" name="ConfirmPassword" required/>
      </div>
	  -->
	  <?php 
								$attrib = array('id'=>'register1','name'=>'register1','method'=>'POST','role'=>'form');
								echo form_open('Auth/new_user_registration',$attrib);
								?>
				                    <!--<form role="form" action="" method="post" class="registration-form" id="registration-form" >-->
				                    	<div class="row">
										<div class="col-lg-6 col-sm-6">
										<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<?php 
											$attri = array('type'=>'text','name'=>'FirstName','class'=>'form-control form-first-name','id'=>'FirstName','placeholder'=>'First Name');
											echo form_input($attri);
											?>
											<!--<input type="text" name="form-first-name" placeholder="First Name" class="form-first-name form-control" id="form-first-name">-->
											<span></span>
				                        </div>
										</div>
										<div class="col-lg-6 col-sm-6">
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<?php 
											$attr = array('type'=>'text','name'=>'LastName','class'=>'form-control form-last-name','id'=>'LastName','placeholder'=>'Last Name');
											echo form_input($attr);
											?>
											<!--<input type="text" name="form-last-name" placeholder="Last Name" class="form-last-name form-control" id="form-last-name">-->
				                        <span></span></div>
										</div>
										</div>
										<div class="row">
										<div class="col-lg-12">
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<?php 
											$att = array('type'=>'text','name'=>'EmailId','class'=>'form-control form-email','id'=>'EmailId','placeholder'=>'Email');
											echo form_input($att);
											?>
											<!--<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">-->
				                        <span></span></div>
										</div>
										</div>
										<div class="row">
										<div class="col-lg-12">
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-phone">Phone</label>
											<?php
											$at = array('type'=>'text','name'=>'PhoneNumber','placeholder'=>'Phone','class'=>'form-phone form-control','id'=>'PhoneNumber');
											echo form_input($at);
											?>
				                        	<!--<input type="text" name="form-phone" placeholder="Phone" class="form-phone form-control" id="form-phone"></input>-->
				                        <span></span>
										</div>
										</div>
										</div>
										<div class="row">
										
										<div class="col-lg-6 col-sm-6">
										<div class="form-group">
				                    		<label class="sr-only" for="form-password">Password</label>
				                        	<?php
											$a = array('type'=>'password','name'=>'password','placeholder'=>'Password','class'=>'form-password form-control','id'=>'password');
											echo form_password($a);
											?>
											<!--<input type="text" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">-->
				                           <span></span>
										   </div>
										   </div>
										   <div class="col-lg-6 col-sm-6">
											<div class="form-group">
				                    		<label class="sr-only" for="form-confirmPassword">Confirm Password</label>
				                        	<?php
											$b = array('type'=>'password','name'=>'ConfirmPassword','placeholder'=>'Confirm Password','class'=>'form-confirmpassword form-control','id'=>'Confirmpassword');
											echo form_password($b);
											?>
											<!--<input type="text" name="form-confirmPassword" placeholder="Confirm Password" class="form-password form-control" id="form-confirmPassword">-->
				                           <span></span></div>
										   </div>
										   </div>
										   <div class="row">
										   <div class="col-lg-12">
										    <p class="form-para">By Signing In, I accept the Terms & Privacy Policy,</p>
     
											<?php
										$c = array('type'=>'submit','name'=>'signup','class'=>'btn btn-skin','value'=>'SIGN UP');
										echo form_submit($c);
										?>
				                        <!--<button type="submit" class="btn">SIGN UP</button>-->
										</div>
										</div>
	  <!--
	   <p class="form-para">By Signing In, I accept the Terms & Privacy Policy,</p>
     
	  <div class="u-form-group">
        <input type="submit">Sign Up</input>
      </div>
	  -->
	  <div class="row">
	  <div class="col-lg-12">
	  <p class="form-para">Already a PropChunk Member? <a href="#redirect" class="active form-link" id="login-box-link">Login</a>
     </p>
	 </div>
	 </div>
    </form>
	
	<form class="email-reset" id="Reset" action="--ASSUMPTION--" >
	
	<p>Enter the email address associated with your account and we'll email you a link to reset your password</p>
   <!-- 
	<div class="u-form-group">
        <input type="email" placeholder="Email Address" id="EmailID" name="EmailId" required/><span><i class="fa fa-enevelope-o"> </i></span>
      </div>
      <div class="u-form-group">
        <input type="submit">Reset Password</input>
      </div>
	  -->
											<div class="form-group">
				                    		<label class="sr-only" for="EmailId">Email</label>

				                    		<?php
				                    		$attribute12 = array('type'=>'email','name'=>'EmailId','placeholder'=>'EmailId','class'=>'form-email form-control','id'=>'EmailId');
				                    		echo form_input($attribute12);
				                    		?>
				                        	<!--<input type="email" name="EmailId" placeholder="Email" class="form-email form-control" id="EmailId">-->
				                        <div id="sp3"></div>
										</div>
										<?php
										$attribute13 = array('type'=>'submit','class'=>'btn btn-skin','name'=>'resetbtn','value'=>'Reset Button');
										echo form_submit($attribute13);
										?>
				                        <!--<button type="submit" class="btn" name="resetbtn" >Reset Password</button>-->
					


			                    <div class="u-form-group">
        <p>Know the password? <a href="#redirect" class="" id="back-to-login">Sign In Now</a></p>
      </div>
	  <div class="u-form-group">
	  <p>Don't have an account? <a href="#redirect" id="back-to-signup" class="form-link">Sign Up</a></p>
     	</div>
		<!--
	  <div class="u-form-group">
        <a href="#redirect" id="back-to-login" class="btn btn-skin">BACK</a>
      </div>
	  -->
      </div>
    </form>
	
					  
					  
					
  <!-- ADDED THE CUT CODE -->
   <!--
	    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
-->
			</div>
		</div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?php echo base_url('/assets/js/index_jjain.js');?>"></script>
	<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
	
    
											 
											 <div class="row text-center" id="escroll">
											<svg id="animated" viewbox="0 0 100 100" width="12%">
  <circle cx="50" cy="50" r="45"   fill="#ccc"/>
  <path id="progress" stroke-linecap="round" stroke-width="5" stroke="red" fill="none"
        d="M50 10
           a 40 40 0 0 1 0 80
           a 40 40 0 0 1 0 -80">
  </path>
  <text id="count" x="50" y="50" text-anchor="middle" dy="7" font-size="20">100%</text>
</svg>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js'></script>


        <script src="<?php echo base_url('/assets/js/rfc.js');?>")></script>
		
										    
											 </div>
                                             </div>
                                         </section>
										 				 
		     <?php  $investmentdata=$r[0]->PropertyUSP;?>
         								 <script>

    var str = "<?php echo $investmentdata; ?>";
    var str1= str.split("!");
    var x=str1[1];
	document.getElementById('headingups').innerHTML= '<h5 style="padding-left:30px;margin-bottom:10px;">HEADING FOR UPS </h5><br />';

var i=1;
for(i=0;i<x;i++)
{

   var res1=str.split(".?",x)
    var res2=res1[i].split(":",x);

var mdiv = document.createElement('div');
mdiv.setAttribute('class', 'col-lg-12 ');
mdiv.id = 'block'+i;


var div = document.createElement('div');
div.setAttribute('class', 'col-lg-12 m-pad');
div.id = 'block'+i;
div.innerHTML='<span id="name" style:"font-weight:700 !important;">'+res2[0]+":"+'</span>'+" "+res2[1]+".";


document.getElementById("data").appendChild(mdiv);  
document.getElementById(mdiv.id).appendChild(div);

}

</script>
			<script>
							$('.count').each(function () {
				    $(this).prop('Counter',0).animate({
				        Counter: $(this).text()
				    }, {
				        duration: 4000,
				        easing: 'swing',
				        step: function (now) {
				            $(this).text(Math.ceil(now));
				        }
				    });
				});



		$(function () {
		var d = new Date();
		var n = d.getHours();
		if(n>=6){
			var y = (Math.floor(Math.random() * 15) + 5);
			$('#numberofpeople').html(y);
			window.setInterval(function(){
				$('#section-colors-left').removeClass('panel-close-left');
				$('#section-colors-left').addClass('panel-open-left');
				var y = (Math.floor(Math.random() * 15) + 5);
				$('#numberofpeople').html(y);
				// document.getElementById("numberofpeople").innerHTML = y;
			},60000);
		}else{
			$('#section-colors-left').toggleClass('panel-open-left panel-close-left');
		}
		var mq = window.matchMedia("(min-width: 1140px)");
		if(mq.matches){
		}else{
			$('#section-colors').addClass('hide');
			$('#section-colors-left').addClass('hide');
			$('#containernav').removeClass('container');
			$('#containernav').addClass('container-fluid');
		}
	});
			</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
										
<script src="<?php base_url('dev.propchunk.com/assets/js/index.js');?>"></script>										
										 
<script type='text/javascript'>//<![CDATA[

$(document).ready(function(){
    $(".toggler").click(function(e){
        e.preventDefault();
        $('.cat'+$(this).attr('data-prod-cat')).toggle(800);
		if($(this).text()=="(+)")
		$(this).text("(-)");
		else
	    $(this).text("(+)");
    });
});
//]]> 
</script>
<!--	
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
-->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
      <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>


<!--script for registartion-->
<script type="text/javascript">

$.validator.setDefaults({
                submitHandler: function() {
                       console.log('submited');
                        form.submit();
                }
        });


jQuery.validator.addMethod("laxEmail", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test( value );
}, 'Please enter your valid email.');



 $('form').each(function () {
       			 
                // validate signup form on keyup and submit
                 $('#register1').validate({
                        rules: {
                                FirstName: "required",
                                LastName: "required",
                                EmailId: {
                                        required: true,
                                        email: true,
                                        laxEmail:true,
                                        remote: {
											        url: "<?php echo site_url('Verify/checkuser');?>",
											        type: "post",
											        data: {
											          EmailId: function() {
											            return $('#register :input[name="EmailId"]').val();
											        	}
											        }
											    }
                                },
                                PhoneNumber:{
                                        required: true,
                                        number: true
                                },
                                password: {
                                        required: true,
                                        minlength: 5
                                },
                                ConfirmPassword: {
                                        required: true,
                                        minlength: 5,
                                        equalTo: "#password"
                                }
                                
                        },
                        messages: {
                                FirstName: "Please enter your firstname",
                                LastName: "Please enter your lastname",
                                EmailId: {
                                	required:"Please enter your valid email.",
    								remote: jQuery.validator.format(" {0} is already registered.")  
                                },
                                PhoneNumber:"Please enter a valid PhoneNumber",
                                password: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long"
                                },
                                ConfirmPassword: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long",
                                        equalTo: "Please enter the same password as above"                                
                                }
                            }
                });

       
                // validate signup form on keyup and submit
                
                 $('#login').validate({
                        rules: {
                                EmailId1:{required: true,
                                	laxEmail:true
                                },
                                password1: {required: true}
                                
                        },
                        messages: {
                                
                                EmailId1: {required: "Please provide a Email Id"},
                                password1: {required: "Please provide a password"}                                
                               
                            }
                });

});
</script>