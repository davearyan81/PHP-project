<?php
session_start();
$_SESSION = [];
unset($_SESSION['auth']);
unset($_SESSION['auth_id']);
unset($_SESSION['auth_user']);
session_destroy();
header("location: login.php");

?>