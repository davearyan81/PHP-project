<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST['btnlogin'])) {
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $qry = "select * from user where email='$email' and password='$pass'";
    $qry1 = "select * from pandit where email='$email' and password='$pass'";

    $result = $con->query($qry);
    $count = mysqli_num_rows($result);
    $result1 = $con->query($qry1);
    $count1 = mysqli_num_rows($result1);
    echo "$count1";
    if ($count > 0) {
        while ($row = $result->fetch_assoc()) {
            $fname = $row['fname'];
            $lname = $row['lname'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = $fname . ' ' . $lname;

        echo "<script type='text/javascript'>window.top.location='index.php';</script>";

    } else if ($count1 > 0) {
        while ($row = $result1->fetch_assoc()) {
            $fname1 = $row['fname'];
            $lname1 = $row['lname'];
        }
        $_SESSION['auth1'] = true;
        $_SESSION['auth_user1'] = $fname1 . ' ' . $lname1;

        echo "<script type='text/javascript'>window.top.location='admin/index.php';</script>";
        // echo "pandit";
    } else {
        // $_SESSION["message"] = "Your Email or Password doesn't match.";
        // header("location:login.php");
        echo "failed";
    }
}
?>