	<!-- Section: contact -->
    <section id="contact" class="home-section">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<!--<i class="fa fa-2x fa-angle-down"></i>-->

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<!--<hr class="marginbot-50">-->
			</div>
		</div>
    <div class="row">
        <div class="col-lg-6">
            <div class="<!--boxed-grey-->">
                
			
				<?php 
				$attributes = array('id'=>'Contact','name'=>'Contact','method'=>'POST');
				echo form_open('Home/contact_savedata',$attributes);
				?>
				
               <!-- <form id="contact-form" name="contact-form" method="POST" action= "--><!--ASSUMPTION--> 
				<!--<fieldset>
				<legend> Contact Us </legend>--> 
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <span>  <?php 
                                    if($this->session->flashdata('contact_message')){
                                        echo $this->session->flashdata('contact_message');
                                    }
                                ?>
                            </span>
                            <label for="name" class="sr-only">
                                Name</label>
                            <div class="input-group">
                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-user "></span>
                                </span>

								<?php 
								$attribute = array('type'=>'text','name'=>'Name','class'=>'form-control col-xs-4','id'=>'Name','placeholder'=>'Enter name');
								echo form_input($attribute);
								?>
								
                                <!--<input type="text" class="form-control col-xs-4" id="name" placeholder="Enter name" required="required" />--></div>
                        </div>
						<!--
						<div class="form-group">
                            <label class="sr-only" for="name">
                                Name</label>
                             <div class="input-group">
                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-envelope "></span>
                        	<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
						</div>
						-->
                         <div class="form-group">
                            <label for="email" class="sr-only">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-envelope "></span>
                                </span>
								<?php
								$attribut = array('type'=>'text','name'=>'EmailId','class'=>'form-control','id'=>'EmailId','placeholder'=>'Enter email');
								echo form_input($attribut);
								?>
                                <!--<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />--></div>
                        </div>
                        
                        <div class="form-group">

                            <label for="phone" class="sr-only">

                                Phone</label>

                            <div class="input-group">

                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-earphone"></span>

                                </span>

 

                       <?php

                    $attribute = array('type'=>'text','class'=>'form-control col-xs-4','name'=>'PhoneNumber','id'=>'PhoneNumber','placeholder'=>'Enter phone number');

                    echo form_input($attribute);

                        ?>

                                                                                                                               

                                <!--<input type="text" class="form-control col-xs-4" id="phone" placeholder="Phone" required="required" />--></div>

                        </div>

 

                        <div class="form-group">

                            <label for="subject" class="sr-only">

                                Subject</label>

                                                                                                                                <div class="input-group">

                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-pencil"></span>

                                </span>

 
							<!--

                            <select id="subject" name="subject" class="form-control" required="required">

                                <option value="na" selected="">Choose One:</option>

                                <option value="service">General Customer Service</option>

                                <option value="suggestions">Suggestions</option>

                                <option value="product">Product Support</option>

                            </select>-->

                              <?php
                                    $attribu = array('type'=>'text','class'=>'form-control','name'=>'Subject','id'=>'Subject','placeholder'=>'Subject');                                             
                                    echo form_input($attribu);

                             ?>

                                                                                                                <!--<input type="text" class="form-control" id="subject" placeholder="Subject" required />-->

                        </div>

                                                                                                </div>
                        
                        
                                                <div class="form-group">
                            <label for="name" class="sr-only">
                                Message</label>
								<?php
								$attrib = array('name'=>'Message','id'=>'Message','class'=>'form-control','rows'=>'9','cols'=>'25',
                                'placeholder'=>'Message');
								echo form_textarea($attrib);
								?>
                            <!--<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>-->
                        </div>
                    </div>
                    <div class="col-md-12">
					<?php
					$attrib = array('type'=>'submit','class'=>'btn btn-skin pull-left','id'=>'btnContactUs','value'=>'Send Message');
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
                <div style=''><div id='gmap_canvas' style="height:375px !important;width:100%;"></div>
							<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                	</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDiJ_tvkr37H6OJ1Thb7A6AZcEffkNxBjs'></script>
							<script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(19.110433,72.888191),mapTypeId: google.maps.MapTypeId.ROADMAP,scrollwheel:false};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.110433,72.888191)});infowindow = new google.maps.InfoWindow({content:'<strong>PropChunk CrowdInvesting</strong><br>Sakinaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<!--	
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
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>  
      <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
      
<script type="text/javascript">




$.validator.setDefaults({
 
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
            
        }
    },
                submitHandler: function() {
                       console.log('submited');
                        form.submit();
                }
        });


 $.validator.addMethod("EMAIL", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
            }, "Email Address is invalid: Please enter a valid email address.");

                 
                // validate contact form on keyup and submit
                 $('#Contact').validate({
                        rules: {
                                Name:"required",
                                EmailId: {
                                        required: true,
                                        email: true,
                                        EMAIL:true

                                },
                                PhoneNumber:{
                                        required: true,
                                        number: true,
                                        minlength:7,
                                        maxlength:10
                                },
                                Subject: 
                                        "required",
                                Message: 
                                        "required"
                                
                        },
                        messages: {
                                Name: {
                                    required:"Please enter your Name"
                                },
                                EmailId: {
                                    required:"Please enter your valid email."  
                                },
                                PhoneNumber:{
                                    required:"Please enter a valid PhoneNumber"},
                                Subject: {
                                        required: "Please enter a Subject"
                                    },
                                Message: {
                                        required: "Please enter a message"                                
                                }
                            }
                });
</script>

