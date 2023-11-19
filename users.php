<?php

session_start();
include("connect.php");
include("adheader.php");

$sql = "SELECT * FROM users where role=1";
if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table  border='solid black 1px' width='100%'>
                        <tr style='background-color:#EBCD1E'>
                        <th>Srno</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Block</th>
                        <th>Unblock</th>
                        </tr>
                    ";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr  style='border:solid black 1px'>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            if ($row['acstatus'] == 0) {
                echo "<td> Blocked </td>";
            } else {
                echo "<td> Live </td>";
            }
            echo "<td><a href='block.php?usrid=" .  $row["usrid"] . "'>Block</a></td>";
            echo "<td><a href='unblock.php?usrid=" .  $row["usrid"] . "'>Unblock</a></td>";

            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
}

include("adfooter.php");
