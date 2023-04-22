<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST["btn"])) {

    $username = $_POST["user"];
    $password = $_POST["pass"];
    $qry = "SELECT * FROM admin Where name='$username' and password='$password'";
    $result = $con->query($qry);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = true;
        header("location:admin/index.php");
    } else {
        echo "failed";
    }
}
?>