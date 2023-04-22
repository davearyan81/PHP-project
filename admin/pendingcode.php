<?php
include("config/dbcon.php");
if(isset($_POST['txtaccept']))
{   
    $id=$_POST['txtid'];
    $qry="UPDATE `pandit` SET `status`='accept' WHERE pid='$id'";
    $result=$con->query($qry);
    if($result)
    {
        header("location:accept.php");
    }
    else{
        echo "failed";
    }
}
if(isset($_POST['txtreject']))
{   
    $id=$_POST['txtid'];
    $qry="UPDATE `pandit` SET `status`='reject' WHERE pid='$id'";
    $result=$con->query($qry);
    if($result)
    {
        header("location:reject.php");
    }
    else{
        echo "failed";
    }
}
?>