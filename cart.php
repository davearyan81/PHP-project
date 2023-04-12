<?php
session_start();
// session_destroy();
if(isset($_POST['submit']))
{
    if(isset($_SESSION['cart']))
    {
        $match=array_column($_SESSION['cart'],'name');
        if(in_array($_POST['txtname'],$match))
        {
            echo "<script>alert('Item is already in cart');</script>";
        }
        else
        {
            $_SESSION['cart'][]=array(
                'name' => $_POST['txtname'],
                'price'=> $_POST['txtprice'],
                'quantity' => $_POST['txtqty'],
                'image' => $_POST['txtimg']
            );
            header("location:addtocart.php");
           
        }
    }
    else
    {
        $_SESSION['cart'][]=array(
            'name' => $_POST['txtname'],
            'price'=> $_POST['txtprice'],
            'quantity' => $_POST['txtqty'],
            'image' => $_POST['txtimg']
        );
    }
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
}
if(isset($_POST['remove']))
{
    foreach($_SESSION['cart'] as $key => $value)
    {
        if($value['name']==$_POST['txtname'])
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header("location:addtocart.php");
        }
    }
}
?>