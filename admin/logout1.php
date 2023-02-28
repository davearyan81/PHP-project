<?php
session_start();
$_SESSION = [];
unset($_SESSION['auth1']);
unset($_SESSION['auth_user1']);
session_destroy();
header("location: ../login.php");

?>