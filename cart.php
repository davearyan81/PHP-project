<?php
session_start();
// session_destroy();
if (isset($_POST['submit'])) {
    if (isset($_SESSION['cart'])) {
        $match = array_column($_SESSION['cart'], 'name');
        if (in_array($_POST['txtname'], $match)) {
            echo "<script>alert('Item is already in cart');</script>";
        } else {
            $_SESSION['cart'][] = array(
                'name' => $_POST['txtname'],
                'price' => (int) $_POST['txtprice'],
                'quantity' => (int) $_POST['txtqty'],
                'image' => $_POST['txtimg']
            );
            header("location:addtocart.php");

        }
    } else {
        $_SESSION['cart'][] = array(
            'name' => $_POST['txtname'],
            'price' => (int) $_POST['txtprice'],
            'quantity' => (int) $_POST['txtqty'],
            'image' => $_POST['txtimg']
        );
        header("location:addtocart.php");
    }
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
}
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['txtname']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header("location:addtocart.php");
        }
    }
}
if (isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['txtname']) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['txtqty'];
            // echo $_SESSION['cart'][$key]['quantity'];
            header("location:addtocart.php");
        }
    }
}
if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);
    header("location:addtocart.php");
}
?>