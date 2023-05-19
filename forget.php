<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST["btnsubmit"])) {
    $email=$_POST['txtemail'];
    $qry="select password from user where email='$email'";
    $qry1="select password from pandit where email='$email'";
    $result1=$con->query($qry1);
    $result=$con->query($qry);
    $row=$result->fetch_assoc();
    $row1=$result1->fetch_assoc();
    $count=mysqli_num_rows($result1);
    if($result){
        $to="harnilkadia99@gmail.com";
        $sub="Forget Password";
        $body="Your Password = $row[password]";
        $header = "From:harnilkadia99@gmail.com";
        if(mail($to,$sub,$body,$header)){
           
            $_SESSION['message']="Password send to register email id..";
                header("location:login.php");
           
           
        }
    }
    if($count>0){
        $to="harnilkadia99@gmail.com";
        $sub="Forget Password";
        $body="Your Password = $row1[password]";
        $header = "From:harnilkadia99@gmail.com";
        if(mail($to,$sub,$body,$header)){
            $_SESSION['message']="Password send to register email id..";
            header("location:login.php");
        }
    }
}
?>