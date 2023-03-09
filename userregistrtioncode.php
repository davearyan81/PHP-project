<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST['submit'])) {
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $dob = $_POST['txtdate'];
    $gen = $_POST['txtgen'];
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpass'];
    $conpass = $_POST['txtconpass'];
    $address = $_POST['txtaddress'];
    $state = $_POST['txtstate'];
    $city = $_POST['txtcity'];
    $phno = $_POST['txtphone'];
    if ($pass == $conpass) {
        $qry1 = "select email from user where email='$email'";
        $result = $con->query($qry1);

        if (mysqli_num_rows($result)) {
            $_SESSION['message'] = "Email Already Exiist";
            echo "<script type='text/javascript'>window.top.location='userregistration.php';</script>";
        } else {
            $qry = "INSERT INTO `user`(`fname`, `lname`, `dob`, `gender`,`email`, `password`, `conpassword`, `address`, `states`, `city`,`phnum`,`status`) VALUES ('$fname','$lname','$dob','$gen','$email','$pass','$conpass','$address','$state','$city','$phno','pending')";
            $result1 = $con->query($qry);
            if ($result) {
                $_SESSION['message'] = "Register Successfully";
                echo "<script type='text/javascript'>window.top.location='login.php';</script>";
                // echo "added susscessfully ";
            } else {
                $_SESSION['message'] = "Failed To Register";
                echo "<script type='text/javascript'>window.top.location='userregistration.php';</script>";
            }
        }
    } else {
        $_SESSION['message'] = "Confirm Password and Password didn't Match";
        // echo "<script type='text/javascript'>window.top.location='userregistration.php';</script>";
    }

}
?>