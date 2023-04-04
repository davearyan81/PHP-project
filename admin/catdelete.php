<?php
include("config/dbcon.php");
if(isset($_POST['name'])){
    $id=$_POST['btn-id'];
    $qry="delete from category where cat_id='$id'";
    $result=$con->query($qry);
}
?>