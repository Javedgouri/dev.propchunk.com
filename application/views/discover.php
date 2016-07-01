
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
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Keyword" name="keyword">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="locality" required id="locality">
                   <option value="0" selected>Locality</option>
                    <option value="PALGHAR">Palghar</option>
                    <option value="VIRAR">Virar</option>
                    <option value="DAHANU">DAHANU</option>
                    <option value="THANE">THANE</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="MinInvestmentAmount" required id="MinInvestmentAmount">
                    <option value="0" selected>MinInvestmentAmount</option>
					<option value="1to3">1- 3 lakhs</option>
					<option value="3to5">3 -5 lakhs</option>
					<option value="5to7">5 - 7 lakhs</option>
				   <option value="7to10">7 - 10 lakhs</option>
				   <option value="10+">10+ lakhs</option>
			      </select>
              </div>
              </div>
			  
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="yield" required id="yield">
						<option value="0" selected>Yield</option>
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
	<br />
	<br />
	
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
        <div class="aa-latest-properties-content">

          <div class="row" id="id01">


		  
	  <!-- ON INITIAL LOAD LOAD ALL CONTENTS(PROPERTY) --> 
	  
	<?php
  $jsondata = file_get_contents('campaigndata.json');
  $data = json_decode($jsondata, true);
  foreach ($data as $property) {
	   $property_price = $property['PropertyName'];
	$property_rooms = $property['City'];
	$property_beds = $property['State'];
	$property_description = $property['ConstructionStatus'];
	$property_apartment = $property['SPVStructureCode'];
	$property_area = $property['FullAddress'];
	$property_type = $property['PropertyDescription'];
	
    echo '<div class="col-md-4"> <article class="aa-properties-item"> <a href="#" class="aa-properties-item-img"><img src="item/1.jpg" alt="img"></a><div class="aa-tag for-sale">'.$property_type.'</div><div class="aa-properties-item-content"><div class="aa-properties-info"><span>'.$property_rooms.' ROOMS </span><span>'.$property_beds.' BEDS</span><span>'.$property_area.' SQ. FT</span></div><div class="aa-properties-about"><h3><a href="#">'.$property_apartment. '</a></h3><p>'.$property_description.'</p>s</div><div class="aa-properties-detial"><span class="aa-price"><i class= "fa fa-inr"></i>'.$property_price.'</span><a href="#" class="aa-secondary-btn">View Details</a></div></div></article></div>';
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
        url: 'filter.php',
        data: { locality: val1, MinInvestmentAmount: val2 ,yield : val3,keyword : val4},
        success: function(response) {
            $('#id01').html(response);
        }
    });
});
</script>
  
