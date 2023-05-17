<?php
include("admin/config/dbcon.php");
if (isset($_POST['orderid'])) {
    $orderid = $_POST['orderid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $qry="INSERT INTO `checkout`(`order_id`,`payment_id`, `firstname`, `lastname`, `username`, `email`, `address`, `address2`, `phone`, `state`, `city`, `zip`,`status`) VALUES ('$orderid','','$firstname','$lastname','$username','$email','$address','$address2','$phone','$state','$city','$zip','pending')";
    $result=$con->query($qry);
    
    
} 
if(isset($_POST['payment_id']) && isset($_POST['orderid']))
{
    $status=$_POST['status'];
    $payment_id=$_POST['payment_id'];
    $orderid=$_POST['orderid'];
    $qry3="UPDATE `checkout` SET `payment_id`='$payment_id',`status`='$status' WHERE order_id='$orderid'";
    $result3=$con->query($qry3);
}
?>