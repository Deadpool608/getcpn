
<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    include 'connect.php';
    $sql = mysqli_query($con, "SELECT * FROM users where email='$email'   and pswd='$pass'");
    $row  = mysqli_fetch_array($sql);

    if (is_array($row) > 0) {
        if ($row["acstatus"] == 1) {

            $_SESSION["role"] = $row["role"];
            $_SESSION["loggedin"] = true;
            $_SESSION["usrid"] = $row['usrid'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["name"] = $row['name'];

            header("Location: index.php");
        } else {
            header("Location: signup.php");
        }
    } else {
        header("Location: signup.php");
    }
}
?>