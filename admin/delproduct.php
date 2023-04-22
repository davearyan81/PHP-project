<?php
include("config/dbcon.php");
$mid = $_GET['id'];
$qry = "delete from product where pid='$mid'";
$result = $con->query($qry);
if ($result) {
    // echo "delete";
    echo "<script type='text/javascript'>window.top.location='product.php';</script>";
    exit;
} else {
    echo "<script>alert('Failed to delete');</script>";
}
?>