<?php
session_start();
include("connect.php");
require("adheader.php");

echo "<div style='background-color:#EBCD1E;margin-bottom: 10px;border:solid black 1px;border-radius:5px;font-weight:700';width='100%'><center><font color='#000000'><a href='insert.php'>Add New Coupon</a></font></center></div>";
if($_SESSION["role"]==0){
    $sql = "SELECT * FROM product";
}else{
    $sql = "SELECT * FROM product where byadd=$_SESSION[usrid]";
}
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table  border='solid black 1px' width='100%'>";
                    echo "<tr style='background-color:#EBCD1E'>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Image</th>";
                        echo "<th>Price</th>";
                        echo "<th>Description</th>";
                        echo "<th>Status</th>";
                        echo "<th>Update</th>";
                        echo "<th>Delete</th>";
                        echo "<th>Added By</th>";
                        
                    echo "</tr>";
                    
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td><img width='100px' height='100px' src=images/imguploads/" . $row['img'] . "></td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['des'] . "</td>";
                        if($row['status']=0){
                            echo "<td>Sold</td>";
                        }else{
                            echo "<td>on sell</td>";
                        }
                        echo "<td><a href='update.php?id=".  $row["id"]. "'>Update</a></td>";
                        echo "<td><a href='delete.php?id=".  $row["id"]. "'>Delete</a></td>";
                        $d =  $row['byadd'] ;
                        $add = "select name from `users` where usrid= $d ";
                        $adusr = mysqli_query($con,$add);
                        while ($row1 = mysqli_fetch_array($adusr)) {
                        echo "<td>" . $row1["name"] . "</td>";
                        }
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "<center>You have't Added any coupons yet</center>";
            }
        }

include("adfooter.php");
?>