<?php
include("config/dbcon.php");
$mid = $_GET['id'];
$qry = "delete from pooja where poojaid='$mid'";
$result = $con->query($qry);
if ($result) {
    // echo "delete";
    echo "<script type='text/javascript'>window.top.location='pooja.php';</script>";
    exit;
} else {
    echo "<script>alert('Failed to delete');</script>";
}
?>