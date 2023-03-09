
<?php

$con = mysqli_connect("localhost", "root", "", "dbproject");

if (!$con) {

    header("Location: ../errors/db.php");
    die();
} else {
}

?>