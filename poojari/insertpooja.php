<?php
include("config/dbcon.php");
if(isset($_POST['btnsubmit']))
{
    $pid=$_POST['txthid'];
    $sel=$_POST['txtsel'];
    $price=$_POST['txtprice'];
    $qry="INSERT INTO `poojapandit`(`poojaid`, `pid`, `price`) VALUES ('$sel','$pid','$price')";
   $result=$con->query($qry);
    if($result)
    {echo "success";
        $_SESSION['message']="Pooja Added successfully";
        header("location:addpooja.php");
    }
    else {
        $_SESSION['message']="Pooja Failed to Add";
        header("location:addpooja.php");
    }
} 
?>