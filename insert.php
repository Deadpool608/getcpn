<?php
session_start();
include("connect.php");
include("adheader.php");


$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $code = $_REQUEST['code'];
    $des = $_REQUEST['des'];
    $byadd = $_SESSION['usrid'];

 
// Get the uploaded file information
$image = $_FILES['file'];

// Validate the file
if (!isset($image) || $image['error'] !== UPLOAD_ERR_OK) {
    die('Invalid image file.');
}

// Get the file extension
$file_extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

// Validate the file extension
if (!in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
    die('Invalid image file extension.');
}

// Generate a unique filename
$filename = uniqid() . '.' . $file_extension;

// Upload the file to the server
move_uploaded_file($image['tmp_name'], 'images/imguploads/' . $filename);


        $ins_query = "INSERT INTO `product`(`name`, `img`,`code`, `price`, `des`,`status`,`byadd`) VALUES ('$name','$filename','$code','$price','$des','1','$byadd')";

        mysqli_query($con, $ins_query)
            or die(mysqli_error($con));
        $status = "New Record Inserted Successfully.
    </br></br><a href='coupons.php'>View Inserted Record</a>";
  
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Insert New Record</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p>
            <a href="coupons.php">View Records</a>

        <div>
            <h1>Insert New Record</h1>
            <form name="form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="new" value="1" />
                <p><input type="text" name="name" placeholder="Enter Name" required /></p>
                <p><input type="text" name="code" placeholder="Enter coupon code" required /></p>
  
                Select image to upload:
                <input type="file" name="file" >
                <p><input type="text" name="price" placeholder="Enter Price" required /></p>
                <p><input type="text" name="des" placeholder="Enter Description" required /></p>

                <p><input name="submit" type="submit" value="Submit" /></p>
            </form>
            <p style="color:#FF0000;"><?php echo $status; ?></p>
        </div>
    </div>

    <?php
    include("adfooter.php");
    ?>
</body>

</html>