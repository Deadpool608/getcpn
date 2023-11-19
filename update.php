<?php
session_start();
include("connect.php");
include("adheader.php");

$id=$_REQUEST['id'];
$query = "SELECT * from product where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $name =$_REQUEST['name'];
    $price = $_REQUEST['price'];
    $des = $_REQUEST['des'];

    // Get the uploaded file information
$image = $_FILES['file'];

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

    $ins_query="UPDATE `product` SET `name`='$name',`img`='$filename',`price`='$price',`des`='$des' WHERE `id`='$id'";
    mysqli_query($con,$ins_query)
    or die(mysqli_error($con));
    $status = "Record Updated Successfully.
    </br></br><a href='coupons.php'>View Inserted Record</a>";
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>
 <a href="coupons.php">View Records</a> 
<div>
<h1>Update Record</h1>
<form name="form" method="post"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>

Select image to upload:
                <input type="file" name="file" >
<p><input type="text" name="price" placeholder="Enter Price" required value="<?php echo $row['price'];?>" /></p>
<p><input type="text" name="des" placeholder="Enter Description" required value="<?php echo $row['des'];?>" /></p>

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

