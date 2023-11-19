<?php
include("header.php");
?>

<br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

<?php

if ($_SESSION['loggedin'] != true) {
	header('location: index.php');
}
?>
	<script>
		function printDiv() {
			var divContents = document.getElementById("product_detail").innerHTML;
			var a = window.open('', '', 'height=800, width=750');
			a.document.write('<html>');
			a.document.write('<body> <center> <h1>GetCopupons Reciept<br>');
			a.document.write(divContents);
			a.document.write('</center></body></html>');
			a.document.close();
			a.print();
		}



		function paynow() {
			var x = document.getElementById('print');
			if (x.style.display == 'none') {
				x.style.display = 'block';
			}
			var x = document.getElementById('code');
			if (x.style.display == 'none') {
				x.style.display = 'block';
			}
		}
	</script>
	<section class="no-padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb breadcrumb-arc-2">
						<li><a href="index.html"> <i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						<li><a href="shop.aspx"> Shop</a></li>

					</ol>
				</div><!--  End col -->
			</div> <!-- End Row -->
		</div><!-- End container -->
	</section><!--  End Section -->

	<Section class="no-padding-tb">
		<div class="container">
			<div class="row">
				<div class="detail-product-warp" id='product_detail'>
					<?php
					$id = $_REQUEST['id'];
					include("connect.php");
					$sql = "SELECT * from product where id='" . $id . "'";
					if ($result = mysqli_query($con, $sql)) {


						while ($row = mysqli_fetch_array($result)) {
							echo "
										<div class='col-md-7' >
										<div class='product-detail-image'>
									
										<img width='340px' height='390px' src='images/imguploads/" . $row['img'] . "'>
										
										   
										</div>
									</div>
												
									<div class='col-md-5'>
		                            <div class='single-product-detail'>
			                                <h3 class='text-cap'><span>Coupon: " . $row['name'] . "</span></h3>
			                                <p class='price'>
											
											<span>Price: ₹ " . $row['price'] . "</span>
   
					                    	</p>
			                                <div class='divider-line'></div>
			                                
											<div style='display:none' id='code'><span>Your Redeem Code Is:<b><br>" . $row['code'] . "</br></span></div>

			                                <div class='accrodion-warp'>
			                              	<div class='panel-group accrodion-style-1' id='accordion' role='tablist' aria-multiselectable='true'>

													<div class='panel'>
														<div class='panel-heading' role='tab' id='headingOne'>
														<h4 class='panel-title'>
															<a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
																<i class='more-less glyphicon glyphicon-plus'></i>
																Description
															</a>
														</h4>
														</div>
														<div id='collapseOne' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOne'>
														<div class='panel-body'>
														<span>" . $row['des'] . "</span>
   
														</div>
														</div>
													</div>

														
												</div><!-- panel-group -->					
												
											
			                            </div>
		                            
                                         
	                        	</div>

                                   </div>
								  
                                
                   		 	</div><!-- End Product Warp -->
								<div class='product-data'>
			                                		                                		
			                                		
								<button type='button' id='pay' class='ot-btn btn-main-color ' onclick='paynow()'>Pay Now</button>
								<button type='button' id='print' class='btn btn-success' style='display:none' onclick='printDiv()'>Print</button>

							</div>
				   		</div><!-- End Row -->
				 	</div><!-- End container -->
				</Section> <!--End List Product -->
											
											
									";
						}
					}
					?>
<br><br>

					<section class="bg-promotion-product">
						<div class="container">
							<div class="row">
								<div class="promotion-product-warp">
									<div class="promotion-product-item">
										<div class="promotion-product-item-inner">
											<h4 class="text-cap">
												Money back
											</h4>
											<p class="text-cap">
												If you are not satisfied with your purchase
											</p>
										</div>
									</div>

									<div class="promotion-product-item">
										<div class="promotion-product-item-inner">
											<h4 class="text-cap">
												Discount
											</h4>
											<p class="text-cap">
												Get More discount with us
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- End Section Promotion Product -->


					<?php
					include("footer.php");
					?>
</body>

</html>