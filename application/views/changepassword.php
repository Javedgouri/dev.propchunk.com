  <style>
  .error { color: red; }
  </style>
  
  <section id="signup-login">
  
		<div class="heading-reset-password" class="home-section text-center">	
				
				 
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3 class="pull-left">RESET YOUR PASSWORD </h3>    		
	                        		</div>

	                            <div class="form-bottom">

								<?php 
								$attributes = array('id'=>'forgot-form','name'=>'forgot-form','method'=>'POST','action'=>' ','role'=>'form');
								echo form_open('Auth/changepassword1',$attributes);
								?>
								<?php
								$var = array('name'=>'email','placeholder'=>'','class'=>'form-control','id'=>'email');
								echo form_hidden('EmailId', $var);
								?>				
								<!--<form role="form" action="" method="POST" class="forgot-form" id="forgot-form" name="forgot-form">-->
                               				                    	<div class="form-group">
				                        	<label class="sr-only" for="form-password">Old Password</label>
				                        	<br />
											
											
											<?php
											$attribute1 = array('type'=>'password','name'=>'password','placeholder'=>'Old Password','class'=>'form-password form-control','id'=>'OldPassword');
											echo form_password($attribute1);
											?>
											
											
										<!--	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
				                     
												<span>
										<?php //echo form_error('Password');?></span>
										</div>


				                    	<div class="form-group">
				                        	<label class="sr-only" for="form-password">New Password</label>
				                        	<br />
											
											
											<?php
											$attribute1 = array('type'=>'password','name'=>'password','placeholder'=>'New Password','class'=>'form-password form-control','id'=>'NewPassword');
											echo form_password($attribute1);
											?>
											
											
										<!--	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
				                     
												<span>
										<?php //echo form_error('Password');?></span>
										</div>
										
										
										
				                       
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-confirmPassword">Confirm Password</label>
				                        	<br />
											
											
											<?php
											$attribute2 = array('type'=>'password','name'=>'ConfirmPassword','placeholder'=>'Confirm Password','class'=>'form-confirmPassword form-control','id'=>'ConfirmPassword');
											echo form_password($attribute2);
											?>
										
											
										<!-- <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
										<span>
										</span>
										</div>
										
										
										
										<br />
									
										<?php
										$attribute3 = array('type'=>'submit','name'=>'reset-pass','class'=>'class= pull-left btn','value'=>'RESET PASSWORD');
										echo form_submit($attribute3);
										?>
				                        
										<!--<button type="submit" class="btn" value="RESET PASSWORD" name="reset-pass">RESET PASSWORD</button>-->
										
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                       
                        
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
</section>
				
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

       
                // validate signup form on keyup and submit
                $("#forgot-form").validate({
                        rules: {
                                OldPassword: {
                                        required: true,
                                        minlength: 5
                                },
                                NewPassword: {
                                        required: true,
                                        minlength: 5
                                },
                                ConfirmPassword: {
                                        required: true,
                                        minlength: 5,
                                        equalTo: "#NewPassword"
                                }
                                
                        },
                        messages: {
                                
                                OldPassword: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long"
                                },
                                NewPassword: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long"
                                },
                                Confirm_password: {
                                        required: "Please provide a password",
                                        minlength: "Your password must be at least 5 characters long",
                                        equalTo: "Please enter the same password as above"                                
                                }
                            }
                });


</script>
