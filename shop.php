<?php
include("header.php");
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Shop</title>
</head>

<body>
	<br>
	<br>
	<br>

	<section class="no-padding-tb">
		<div class="container">
			<div class="row">
				<div class="header-shop-banner hsb-1" style="background-image: url(images/custom/back.png)">
				</div>
			</div>
		</div>
	</section>
	<!-- End Header Shop Banner -->

	<Section class="">
		<div class="container">
			<div class="row">
				<div class="main-shop content-area">
					<main id="main" class="site-main padding-top-50">

						<div class="row">
							<div class="products">


								<?php

								$sql = "SELECT * FROM product where status = 1";
								if ($result = mysqli_query($con, $sql)) {


									while ($row = mysqli_fetch_array($result)) {
										echo "
											<div class='col-md-4'>
											<div class='product-item'>
											<a href='shop_single.php?id=" . $row["id"] . "' class='products-warp'>
											<img width='340px' height='390px' src='images/imguploads/" . $row['img'] . "'>
											<div class='product-info'>
											Name: <span>" . $row['name'] . "</span> <br>
											Price: <span>" . $row['price'] . "</span>
											</a>
										";
										if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
											print "<a href='shop_single.php?id=" . $row["id"] . ",price=" . $row["price"] . "' class='ot-btn btn-block btn-main-color'>Buy Now</a>";
										} else {
											print "<a href='signup.php' class='ot-btn btn-block btn-main-color'>Buy Now</a> ";
										}
										echo " 
											</div>
											</div>
											</div>
										";
									}
								}
								?>

							</div><!-- End Products -->
						</div><!-- End Row -->
					</main><!-- End Main -->
				</div>
			</div><!-- End Row -->
		</div><!-- End container -->
	</Section><!--End List Product -->


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