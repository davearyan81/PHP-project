<?php
include("config/dbcon.php");

    $id=$_GET['id'];
    echo $id;
    $qry="delete from poojapandit where popaid='$id'";
    $result=$con->query($qry);
    if($result)
    {
        header("location:pooja.php");
    }
    else{
        echo "failed";
    }


?>