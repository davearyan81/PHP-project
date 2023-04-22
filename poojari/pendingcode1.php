<?php
include("../admin/config/dbcon.php");
if(isset($_POST['txtaccept']))
{
    $id=$_POST['txtid'];
    
    $qry="UPDATE `booking` SET `status`='accept' WHERE bid='$id'";
    $result=$con->query($qry);
    if($result)
    {
        header("location:pending.php");
    }
}
if(isset($_POST['txtreject']))
{
    $id=$_POST['txtid'];
    $qry1="UPDATE `booking` SET `status`='reject' WHERE bid='$id'";
    $result1=$con->query($qry1);
    if($result1)
    {
        header("location:pending.php");
    }
}
?>