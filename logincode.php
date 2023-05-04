<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST['btnlogin'])) {
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $qry = "select * from user where email='$email' and password='$pass'";
    $qry1 = "select * from pandit where email='$email' and password='$pass' and status='accept'";
    $result = $con->query($qry);
    $count = mysqli_num_rows($result);
    $result1 = $con->query($qry1);
    $count1 = mysqli_num_rows($result1);

    if ($count > 0) {
        while ($row = $result->fetch_assoc()) {
            $uid=$row['uid'];
            $fname = $row['fname'];
            $lname = $row['lname'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_id'] = $uid;
        $_SESSION['auth_user'] = $fname . ' ' . $lname;
    } else {
        $_SESSION['message'] = "Email or Password not match";
        header("location:login.php");
    }
    

    if ($count > 0) {
        header("location:index.php");
    } 
    else {
        if ($count1 > 0) {
            while ($row = $result1->fetch_assoc()) {
                $id = $row['pid'];
                $fname1 = $row['fname'];
                $lname1 = $row['lname'];
            }
            $_SESSION['auth1'] = true;
            $_SESSION['auth_id1'] = $id;
            $_SESSION['auth_user1'] = $fname1 . ' ' . $lname1;
            header("location:poojari/index.php");
            // echo "<script type='text/javascript'>window.top.location='admin/index.php';</script>";
            // echo "pandit";
        } else {
            $_SESSION['message'] = "Your request has not been accepted by admin";
            header("location:login.php");
        }
    }
}
if (isset($_POST["btn"])) {

    $username = $_POST["user"];
    $password = $_POST["pass"];
    $qry3 = "SELECT * FROM admin Where name='$username' and password='$password'";
    $result3 = $con->query($qry3);
    if (mysqli_num_rows($result3) > 0) {
        $_SESSION['admin'] = true;
        header("location:admin/index.php");
    } else {
        echo "failed";
    }
}
?>