        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>

		<div class="container">
	      
   
      <div class="row col-lg-6">
    <div class="row col-lg-12" >
        <h5 class="pull-left">Subscribe to Our NewsLetter</h5>
        </div>
        
    <?php 
                $attributes = array('id'=>'login','name'=>'login','method'=>'post','role'=>'form');
                echo form_open('Auth/new_user_subscription');
                ?>
      
                        
						
    <div class="row col-lg-8 col-md-12 col-sm-12 col-xs-12 " >
                    <!--<form role="form" action="" method="POST" class="login-form" id="login-form" name="login-form">-->
                             
         <div class="input-group">
        
                                <span class="input-group-addon border-for-icon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                
                             <!--   <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />-->
                                 <?php 
                      $attribute = array('type'=>'email','name'=>'EmailId1','class'=>'form-control form-email','id'=>'EmailId1','placeholder'=>'Email','required'=>'valid_email');
                      echo form_input($attribute);
                      ?>
                                       


                              </div>
                        
        </div>
<div class="row col-lg-1 col-md-12 col-sm-12 col-xs-12">
  &nbsp;
</div>
    <div class="row col-lg-2 col-md-12 col-sm-12 col-xs-12"  >
                            <div class="pull-left">
            <!--
                        <button type="submit" class="btn btn-skin " id="btnContactUs" >
                            Subscribe</button>
              -->                <?php
                    $c = array('type'=>'submit','name'=>'signup','class'=>'btn btn-skin ','value'=>'Subscribe' ,'id'=>"btnContactUs");
                    echo form_submit($c);
                    ?>
                    </div>

</form>
                  </div>

 </div>

	   <div class="row col-lg-2 ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>


    	<div class="row col-lg-4 ">
			<div class="widget-contact">
	
                <address>
                  <h5>We're on social networks</h5>
                        <ul class="company-social">
                            <li class="social-facebook"><a href="http://facebook.com/PropChunk" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="http://twitter.com/PropChunk" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>   
                </address>                  
           

			</div>	
		</div>
 <div class="row col-lg-12">
&nbsp;
 </div>         
<div class="row col-lg-2 col-md-3 col-sm-4 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Company</h5>
                      <ul class="list-group text-left">
                            <li class="list-group-item le text-left" id="le" ><a href="#" target="_blank">About</a></li>
                                                 </ul>   
                </address>                  

 </div>


        
<div class=" row col-lg-2 col-md-3 col-sm-4 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Invest</h5>
                        <ul class="list-group le text-left" >
                            <li class="list-group-item le text-left" id="le"><a href="#" target="_blank">Browse Project</a></li>
                            <li class="list-group-item le text-left" id="le"><a href="#" target="_blank">Investor Protection</a></li>
                             
                                                 </ul>   
                </address>                  

 </div>

<div class="row col-lg-2 col-md-3 col-sm-4 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Learn</h5>
                        <ul class="list-group le text-left">
                            <li class="list-group-item le text-left" id="le"><a href="#" target="_blank">How it works</a></li>
                            <li class="list-group-item le text-left" id="le"><a href="#" target="_blank">FAQ's</a></li>
                             <li class="list-group-item le text-left" id="le"><a href="#" target="_blank">Blog</a></li>
                                                 </ul>   
                </address>                  

 </div>

       <div class="row col-lg-2 ">
&nbsp;    </div>

    <div class="row col-lg-4 col-md-3 col-sm-4 col-xs-12">
            <div class="widget-contact">
       
               <h5>Main Office</h5>
                <address>
                  D/9, Ansa Estate,<br>
                  Opp. Kotak Bank & Vodafone Gallery,<br>
                  Saki Naka, Andheri (E), Mumbai.<br>
                  <abbr>P:</abbr> +91 9699 796629

             
                    </address>

                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#"> hello@propchunk.com</a>
                </address>  
                <address>

  </div>        
    </div>
    </div>	
		 
        </div>

<div class="row">
	<div class="col-lg-2">
	 <img src="<?php echo base_url('/images/pclogo.png');?>" style="height:inherit;" class="img-responsive"/>
	</div>
	
	<div class="col-lg-4">
	                <address>
                  <strong>2016. All Rights Reserved.<br />
    
    Chunk Technologies Pvt. Ltd.</strong>
                 
                </address>      

    </div>	
    </div>



	</section>
	<!-- /Section: contact -->
	
	
	
	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/576b8e08b57c0500209a68fd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

        <!-- Core JavaScript Files -->
     <script src="<?php echo base_url('/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('/bootstrap/js/jquery.easing.min.js');?>"></script>	
	<script src="<?php echo base_url('/bootstrap/js/jquery.scrollTo.js');?>"></script>
	<script src="<?php echo base_url('/bootstrap/js/wow.min.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('/bootstrap/js/custom.js');?>"></script>
	<!-- PROGRESS BAR-->
    <script src="<?php echo base_url('/assets/js/progress-bar-js.js');?>"></script>
	<!-- SCRIPT FOR GIF ICOn -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

	<!-- --> 

<!--script for registartion-->
<!--
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



                // validate signup form on keyup and submit
                
                 $(form).validate({
                        rules: {
                                EmailId1:{required: true,
                                  laxEmail:true
                                }
                                
                        },
                        messages: {
                                
                                EmailId1: {required: "Please provide a Email Id"},
                              
                            }
                });

});
</script>

-->
	
	<!-- -->
   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo base_url('/assets/js/typed.js');?>" type="text/javascript"></script>
    <script>
    $(function(){

        $("#typed").typed({
            strings: ["FRACTIONAL OWNERSHIP OF REAL ESTATE.", "INVEST DIRECTLY AND SAFELY VIA SPV.", "100% TRANSPARENCY ALL LEGAL DOCUMENTS IN YOUR NAME.", "ONLY HIGH QUALITY REPUTED BUILDERS."],
         
            typeSpeed: 200 ,
            backDelay: 500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
           
        });

       

    });

    
    </script>
   <!-- -->
   <!--
   <script>
   $free = jQuery.noConflict(true);
   </script>
   -->
   
   <!--FOR INFINITY SLIDER  -->
	 <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.js"></script>
        <script>


 $(document).ready(function() {

    $('.slider').slick({
        dots: true,
        infinite: true,
        arrows:true,
        slidesToShow: 4,
        slidesToScroll: 1,
		autoplay: true,
        autoplaySpeed: 1000,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                // centerMode: true,
				autoplay: true,
                autoplaySpeed: 1000,

            }

        }, {
            breakpoint: 800,
            settings: {
				arrows:false,
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                infinite: true,
				autoplay: true,
                autoplaySpeed: 1000,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
				arrows:false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1000,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 1000,
            }
        }]
    });


});
        </script>

