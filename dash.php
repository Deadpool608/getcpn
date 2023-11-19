<?php
session_start();
include("adheader.php");
include("connect.php");

?>
<section class="bg-promotion-product">
	<div class="container">
    <div class="row" style="width: 100%;">
			<div class="promotion-product-warp" >
				<div class="promotion-product-item" style="width: 929px;">
					<div class="promotion-product-item-inner" style="width: 921px;">
						<h4 class="text-cap">
							<?php echo "Welcome $_SESSION[name]"; ?>
						
						</h4>
						
					</div>
				</div>
			</div>
		</div>
        <br>
		<div class="row">
			<div class="promotion-product-warp">
				<div class="promotion-product-item">
					<div class="promotion-product-item-inner">
						<h4 class="text-cap">
							Your Coupons 
						</h4>
						<p class="text-cap" style='font-size:20px'><b>
							<?php

                            $i=0;
                            $sql = "SELECT * FROM product where byadd=$_SESSION[usrid]";
                            if($result = mysqli_query($con, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $i++;
                                    }
                                }
                            };

                            echo $i;
                            ?>
						</b></p>
					</div>
				</div>

				<div class="promotion-product-item">
					<div class="promotion-product-item-inner">
						<h4 class="text-cap">
							Coupons Sold
						</h4>
						<p style='font-size:20px'><b>
                        <?php

$i=0;
if ($_SESSION['role'] == 0) {
	$sql = "SELECT * FROM product";
}else{
	$sql = "SELECT * FROM product where byadd=$_SESSION[usrid] and status='0'";
}

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $i++;
        }
    }
};

echo $i;
?>
						</b></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include("adfooter.php");
?>