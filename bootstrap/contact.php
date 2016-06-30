
	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-6">
            <div class="<!--boxed-grey-->">
			
				<?php 
				$attributes = array('id'=>'contact-form','name'=>'contact-form','method'=>'POST','action'=>'DONT kNOW');
				echo form_open('-ASSUME-',$attributes);
				?>
				
               <!-- <form id="contact-form" name="contact-form" method="POST" action= "<!--ASSUMPTION-->" -->  
				<!--<fieldset>
				<legend> Contact Us </legend>--> 
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="name" class="sr-only">
                                Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>

								<?php 
								$attribute = array('type'=>'text','class'=>'form-control col-xs-4','id'=>'name','placeholder'=>'Enter name','required'=>'required');
								echo form_input($attribute);
								?>
								
                                <!--<input type="text" class="form-control col-xs-4" id="name" placeholder="Enter name" required="required" />--></div>
                        </div>
						<!--
						<div class="form-group">
                            <label class="sr-only" for="name">
                                Name</label>
                             <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        	<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
						</div>
						-->
                         <div class="form-group">
                            <label for="email" class="sr-only">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
								<?php
								$attribut = array('type'=>'email','class'=>'form-control','id'=>'email','placeholder'=>'Enter email','required'=>'required');
								form_input($attribut);
								?>
                                <!--<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />--></div>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="sr-only">
                                Subject</label>
								<!--
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
							--><?php 
								$attribu = array('type'=>'text','class'=>'form-control','id'=>'subject','placeholder'=>'Subject','required'=>'required');
							echo form_input($attribu);
							?>
							<!--<input type="text" class="form-control" id="subject" placeholder="Subject" required />-->
                        </div>
                        <div class="form-group">
                            <label for="name" class="sr-only">
                                Message</label>
								<?php
								$attrib = array('name'=>'message','id'=>'message','class'=>'form-control','rows'=>'9','cols'=>'25','required'=>'required',
                                'placeholder'=>'Message');
								echo form_textarea($attrib);
								?>
                            <!--<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>-->
                        </div>
                    </div>
                    <div class="col-md-12">
					<?php
					$attri = array('type'=>'submit','class'=>'btn btn-skin pull-left','id'=>'btnContactUs','value'=>'Send Message');
					echo form_submit($attrib);
					?>
                        <!--<button type="submit" class="btn btn-skin pull-left" id="btnContactUs">
                            Send Message</button>-->
                    </div>
                </div>
				<!--</fieldset>-->
                </form>
            </div>
        </div>
		
		<div class="col-lg-6">
			<div class="widget-contact">
				<!--<br />
				  <h5>PropChunk CrowdInvesting</h5><br>-->
				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">hello@propchunk.com</a>
				</address>	
				<div id="googleMap" style="width:500px;height:347px;">
				</div>
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

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
			
