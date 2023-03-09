<?php
include("config/dbcon.php");
if(isset($_POST['name'])){
    $id=$_POST['btn-id'];
    echo $id;
    $qry="delete from poojapandit where popaid='$id'";
    $result=$con->query($qry);
}   


?>