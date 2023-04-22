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
?>