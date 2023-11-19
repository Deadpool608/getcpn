<?php

include('header.php');
?>


<section>
					<div class="sub-header sub-header-1 sub-header-contact fake-position" style="background-image: url(images/custom/d2.png);">
						<div class="sub-header-content">
							<h2 class="text-cap white-text">Contact Us</h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li class="active">Contact Us</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->
				<!-- Section form contact -->
			    <section class="padding">
			    	<div class="container">
			    		<div class="row">
			    			<div class="contact-warp">
			    				<div class="col-md-6 ">
			    					<div class="left-contact">
			    						<h3 class="text-cap"> Send Us a Message</h3>
			          					<form class="form-inline form-contact-arc" name="contact" method="post" action="send_form_email.php">
			            					<div class="row">
			        							  <div class="form-group col-sm-12 ">
			        							    <input type="text" class="form-control" name="yourName" id="yourName" placeholder="Your Name">
			        							  </div>
			        							  <div class="form-group col-sm-12">
			        							    <input type="email" class="form-control" name="yourEmail" id="yourEmail" placeholder="Your Email" >
			        							  </div>
			        							  <div class="form-group col-sm-12">
			        							    <input type="text" class="form-control" name="yourPhone" id="phoneNumber" placeholder="Phone Number" >
			        							  </div>
			      						    </div>
			      						    <div class="input-content">
			        						  	<div class="form-group form-textarea">
			        					  			<textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
			        						  	</div>
			        						  </div>
			                      			<button  class="ot-btn btn-main-color btn-long text-cap btn-submit" type="submit" >Send Mail</button>
			      					 	</form> <!-- End Form -->
			    					</div> <!-- End col -->
			    				</div>
			    				<div class="col-md-6 ">
			    					<div class="right-contact">
				    				<h3 class="text-cap">Contact Info</h3>
				    				<p>
				    					we are always happy to help. contact us and we will wave back to you as fast as possible
				    				</p>
				    				<ul class="address">
				    					<li><p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; 108,trinity signus,udhna magdalla road,surat</p></li>
				    					<li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; (+91) 96716 56879</p></li>
				    					<li><p><i class="fa fa-fax" aria-hidden="true"></i> &nbsp;(+91) 96716 56879</p></li>
				    					<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; help@getcoupoun.com</p></li>
				    					<li><p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Mon-Fri 09:00 - 17:00</p></li>
				    				</ul>
				    				</div>
			    				</div> <!-- End col -->
			    			</div>
			    		</div>
			    	</div>
			    </section>
			    <!-- End Section -->
				<?php

include('footer.php');
?>