<?php
session_start();
include("admin/config/dbcon.php");
if (isset($_POST['submit'])) {
    $pfname = $_POST['txtpfname'];
    $plname = $_POST['txtplname'];
    $pemail = $_POST['txtpemail'];
    $ppass = $_POST['txtppass'];
    $pconpass = $_POST['txtpconpass'];
    $pdetails = $_POST['txtpdetails'];
    $pphno = $_POST['txtpphno'];
    $pdoj = $_POST['txtpdoj'];
    $paddress = $_POST['txtpaddress'];
    $pstate = $_POST['txtpstate1'];
    $pcity = $_POST['txtpcity1'];
    $pimage = $_FILES['pimage'];
    $filename = $_FILES['pimage']['name'];
    $temp = $_FILES['pimage']['tmp_name'];
    if ($filename != '') {
        move_uploaded_file($temp, 'image/' . $filename);
    }

    if ($ppass == $pconpass) {
        $qry = "select email from pandit where email='$pemail'";
        $result = $con->query($qry);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $_SESSION['message'] = "Email Already Exiist";
            echo "<script type='text/javascript'>window.top.location='panditregistration.php';</script>";
        } else {
            $qry1 = "INSERT INTO `pandit`( `fname`, `lname`, `email`, `password`, `conpassword`, `pdetails`, `phno`, `doj`, `address`, `state`, `city`, `pimage`,`status`) VALUES ('$pfname','$plname','$pemail','$ppass','$pconpass','$pdetails','$pphno','$pdoj','$paddress','$pstate','$pcity','$filename','pending')";
            $result1 = $con->query($qry1);

            if ($result1) {
                // echo "pass";
                $_SESSION['message'] = "Registration Successfully";
                echo "<script type='text/javascript'>window.top.location='login.php';</script>";
            } else {
                // echo "failed";
                $_SESSION['message'] = "Failed to register";
                echo "<script type='text/javascript'>window.top.location='panditregistration.php';</script>";
            }
        }
    } else {
        echo "Confirm Password and Password didn't Match";
    }
}
?>