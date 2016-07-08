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
                      $attribute = array('type'=>'email','name'=>'EmailId1','class'=>'form-control form-email','id'=>'EmailId1','placeholder'=>'Get in touch','required'=>'valid_email');
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
<div class="row col-lg-2 col-md-3 col-sm-6 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Company</h5>
                      <ul class="list-group text-left">
                            <li class="list-group-item le text-left" id="le" ><a href="<?= site_url("about-us")?>" >About Us</a></li>
                             <li class="list-group-item le text-left" id="le" ><a href="<?= site_url("contact")?>" >Contact Us</a></li>
                                                 </ul>   
                </address>                  

 </div>


        
<div class=" row col-lg-2 col-md-3 col-sm-6 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Invest</h5>
                        <ul class="list-group le text-left" >
                            <li class="list-group-item le text-left" id="le"><a href="<?= site_url("discover")?>" >Browse Project</a></li>
                            <li class="list-group-item le text-left" id="le"><a href="<?= site_url("investor-protection")?>">Investor Protection</a></li>
                             
                                                 </ul>   
                </address>                  

 </div>

<div class="row col-lg-2 col-md-3 col-sm-5 col-xs-12">
    <address class="text-left;">
                  <h5 id="text-left1">Learn</h5>
                        <ul class="list-group le text-left">
                            <li class="list-group-item le text-left" id="le"><a href="<?= site_url("how-it-works")?>">How it works</a></li>
                            <li class="list-group-item le text-left" id="le"><a href="<?= site_url("faq")?>" >FAQ's</a></li>
                             <li class="list-group-item le text-left" id="le"><a href="http://blog.propchunk.com" target="_blank">Blog</a></li>
                                                 </ul>   
                </address>                  

 </div>

  <div class="row col-lg-2 col-sm-1 ">
   &nbsp;   
 </div>

    <div class="row col-lg-4 col-md-3 col-sm-5 col-xs-12">
            <div class="widget-contact">
       
               <h5>Main Office</h5>
                <address>
                  D/9, Ansa Estate,<br>
                  Opp. Kotak Bank & Vodafone Gallery,<br>
                  Saki Naka, Andheri (E), Mumbai.<br>
                 
             
                    </address>
  </div>
</div>

<div class="col-lg-12">
  &nbsp;
</div>
<div class="row col-lg-12">
 <div class="row col-lg-2 col-md-3 col-sm-3 col-xs-12">
   <img src="<?php echo base_url('/images/pclogo3.png');?>" style="height:inherit;" class="img-responsive"/>
 </div> 
<div class="row col-lg-2 col-sm-3">
    &nbsp;
  </div>

 <div class="row col-lg-2 col-md-3 col-sm-6 col-xs-12">

                <address>
                <strong>  <abbr>Phone Number</abbr> </strong><br/>
                +91 9699 796629

                  </address>

                 </div> 

  <div class="row col-lg-2 ">
    &nbsp;
  </div>

  <div class="row col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#"> hello@propchunk.com</a>
                </address>  
                <address>
      
 </div>
  </div>        
    </div>
    </div>	
		 
        </div>




	</section>


      
  <?php 
   $uri=$_SERVER['REQUEST_URI']; 
      /*echo $uri;*/    
    if($uri=="/dev.propchunk.com/Home"||$uri=="/dev.propchunk.com/")
    {
      echo'
      <style>
      p.size{
        font-size:1.6em;
        margin:0px;
        padding:0px;
      }

      </style>
      <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
    <div class="container">

   <div  class="col-lg-12" style="list-style:none; font-size:.5em; padding:0px;">
  <div class="col-lg-6" style=" padding:0px;">
  <p class="size">*Important Disclosure:&nbsp;<a href="' .site_url("Home").'" target="_blank">PropChunk.com</a>&nbsp;is a website operated by CHUNK TECHNOLOGIES PVT. LTD. and by accessing the website and any pages thereof, you agree to be bound by its&nbsp;<a href="' .site_url("Home/terms").'" target="_blank">Terms of Service</a>&nbsp;and&nbsp;<a href="'. site_url("Home/privacy-policy").'" target="_blank">Privacy Policy</a>. CHUNK TECHNOLOGIES PVT. LTD. and its platform PropChunk operate in Maharashtra and are registered with the Registrar Of Companies, Maharashtra.</p>

  <p class="size">PropChunk.com is intended for all investors who are signed up online or offline with PropChunk and familiar with and willing to accept the risks associated with private investments. Securities sold through private placements are not publicly traded and are intended for investors who do not have a need for liquidity in their investment.</p>
  <!-- <p>&nbsp;</p> -->

  <p class="size">PropChunk does not make investment recommendations, and no communication through this website or in any other medium should be construed as such. Investment opportunities posted on this website are "private placements" of securities that are not publicly traded, are subject to holding period requirements, and are intended for investors who do not need a liquid investment. Private placement investments are NOT bank deposits (and thus NOT insured by the any state or central governmental agency), are NOT guaranteed by PropChunk or CHUNK TECHNOLOGIES PVT. LTD., and MAY lose value. Neither the SEBI nor any central or state securities commission or regulatory authority has recommended or approved any investment or the accuracy or completeness of any of the information or materials provided by or through the website. Investors must be able to afford the loss of their entire investment.</p>
  <!-- <p>&nbsp;</p> -->

  <p class="size">Testimonial statements are from existing PropChunk investors. These statements may not be representative of the experience of all clients, and are not a guarantee of future performance or success.</p>
  <!-- <p>&nbsp;</p> -->
</div>
<div  class="col-lg-6" style=" padding:0px;">
  <p class="size">Articles or information from third-party media outside of this domain may discuss PropChunk or relate to information contained herein, but PropChunk does not approve and is not responsible for such content. Hyperlinks to third-party sites, or reproduction of third-party articles, do not constitute an approval or endorsement by PropChunk of the linked or reproduced content.</p>
  <!-- <p>&nbsp;</p> -->

  <p class="size">The investor fees are specific to each investor. Other fees may be applicable to sponsors or borrowers.</p>
  <!-- <p><span>&nbsp;</span></p> -->

  <p class="size">Any financial projections or returns shown on the website are estimated predictions of performance only, are hypothetical, are not based on actual investment results and are not guarantees of future results. Estimated projections do not represent or guarantee the actual results of any transaction, and no representation is made that any transaction will, or is likely to, achieve results or profits similar to those shown. Any investment information contained herein has been secured from sources that PropChunk believes are reliable, but we make no representations or warranties as to the accuracy of such information and accept no liability therefore. Offers to sell, or the solicitations of offers to buy, any security can only be made through official offering documents that contain important information about risks, fees and expenses. Investors should conduct their own due diligence, not rely on the financial assumptions or estimates displayed on this website, and are encouraged to consult with a financial advisor, attorney, accountant, and any other professional that can help you to understand and assess the risks associated with any investment opportunity.</p>
  <!-- <p>&nbsp;</p> -->

  <p class="size">© 2016 CHUNK TECHNOLOGIES PVT. LTD., All Rights Reserved.</p>
  </div>
</div>

</div>
';
    }


  ?>
<div class="col-lg-12">
  &nbsp;
</div>
<div class="container">
<div class="col-lg-12" style="padding:0px">
  <address>
© 2016. All Rights Reserved.
    
    Chunk Technologies Pvt. Ltd.
          </address>      
</div>
<div class="col-lg-12" style="padding:0px">
<a href="<?= site_url("Home/terms") ?>" target="_blank" >Terms of Service</a>&nbsp;|&nbsp;<a href="<?= site_url("Home/privacy-policy") ?>" target="_blank">Privacy Policy</a>  
	<!-- /Section: contact -->
</div>
</div>	
	
<div class="col-lg-12">
  &nbsp;
</div>
<div class="col-lg-12">
  &nbsp;
</div>
	
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
