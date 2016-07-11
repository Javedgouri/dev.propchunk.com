  <section id="signup-login">
  
		<div class="heading-reset-password" class="home-section text-center">	
				
				 
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3 class="pull-left col-lg-12 " style="text-align:left;">Profile</h3>    		
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
                               				                    	<div class="form-group col-lg-6">
				                        	<label class="sr-only" for="form-password">Old Password</label>
				                        	<br />
											
											
											<?php
											$attribute1 = array('type'=>'text','name'=>'First Name','placeholder'=>'First Name','class'=>'form-control','id'=>'FirstName');
											echo form_password($attribute1);
											?>
											
											
										<!--	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
				                     
												<span>
										<?php //echo form_error('Password');?></span>
										</div>


				                    	<div class="form-group col-lg-6">
				                        	<label class="sr-only" for="form-password">New Password</label>
				                        	<br />
											
											
											<?php
											$attribute1 = array('type'=>'text','name'=>'LastName','placeholder'=>'Last Name','class'=>'form-control','id'=>'LastName');
											echo form_password($attribute1);
											?>
											
											
										<!--	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
				                     
												<span>
										<?php //echo form_error('Password');?></span>
										</div>
										
										
										
				                       
				                        <div class="form-group col-lg-12">
				                        	<label class="sr-only" for="form-confirmPassword">Phone No</label>
				                        	<br />
											
											
											<?php
											$attribute2 = array('type'=>'text','name'=>'PhoneNumber','placeholder'=>'Phone Number','class'=>'form-confirmPassword form-control','id'=>'ConfirmPassword');
											echo form_password($attribute2);
											?>
										
											
										<!-- <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
										<span>
										</span>
										</div>
										
										   <div class="form-group col-lg-12 pull-left">
				                        	<label class="sr-only" for="form-confirmPassword">Phone No</label>
				                        	<br />
										     <span class="pull-left form-group">Last Login:DATA</span>
										     <span></span>
											
										<!-- <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password"> -->
										<span>
										</span>
										</div>
									
										
										
										<br />
									   <div class="col-lg-3">
											<?php
											$attribute3 = array('type'=>'submit','name'=>'reset-pass','class'=>'btn pull-left ','value'=>'Update');
											echo form_submit($attribute3);
											?>
					                    </div>
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
