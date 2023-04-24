<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>

<head>
    <meta charset="utf-8">


    <title>shop cart - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <!--  -->
    <style type="text/css">
        body {
            margin-top: 20px;
        }

        select.form-control:not([size]):not([multiple]) {
            height: 44px;
        }

        select.form-control {
            padding-right: 38px;
            background-position: center right 17px;
            background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNv…9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
            background-repeat: no-repeat;
            background-size: 9px 9px;
        }

        .form-control:not(textarea) {
            height: 44px;
        }

        .form-control {
            padding: 0 18px 3px;
            border: 1px solid #dbe2e8;
            border-radius: 22px;
            background-color: #fff;
            color: #606975;
            font-family: "Maven Pro", Helvetica, Arial, sans-serif;
            font-size: 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .shopping-cart,
        .wishlist-table,
        .order-table {
            margin-bottom: 20px
        }

        .shopping-cart .table,
        .wishlist-table .table,
        .order-table .table {
            margin-bottom: 0
        }

        .shopping-cart .btn,
        .wishlist-table .btn,
        .order-table .btn {
            margin: 0
        }

        .shopping-cart>table>thead>tr>th,
        .shopping-cart>table>thead>tr>td,
        .shopping-cart>table>tbody>tr>th,
        .shopping-cart>table>tbody>tr>td,
        .wishlist-table>table>thead>tr>th,
        .wishlist-table>table>thead>tr>td,
        .wishlist-table>table>tbody>tr>th,
        .wishlist-table>table>tbody>tr>td,
        .order-table>table>thead>tr>th,
        .order-table>table>thead>tr>td,
        .order-table>table>tbody>tr>th,
        .order-table>table>tbody>tr>td {
            vertical-align: middle !important
        }

        .shopping-cart>table thead th,
        .wishlist-table>table thead th,
        .order-table>table thead th {
            padding-top: 17px;
            padding-bottom: 17px;
            border-width: 1px
        }

        .shopping-cart .remove-from-cart,
        .wishlist-table .remove-from-cart,
        .order-table .remove-from-cart {
            display: inline-block;
            color: #ff5252;
            font-size: 18px;
            line-height: 1;
            text-decoration: none
        }

        .shopping-cart .count-input,
        .wishlist-table .count-input,
        .order-table .count-input {
            display: inline-block;
            width: 100%;
            width: 86px
        }

        .shopping-cart .product-item,
        .wishlist-table .product-item,
        .order-table .product-item {
            display: table;
            width: 100%;
            min-width: 150px;
            margin-top: 5px;
            margin-bottom: 3px
        }

        .shopping-cart .product-item .product-thumb,
        .shopping-cart .product-item .product-info,
        .wishlist-table .product-item .product-thumb,
        .wishlist-table .product-item .product-info,
        .order-table .product-item .product-thumb,
        .order-table .product-item .product-info {
            display: table-cell;
            vertical-align: top
        }

        .shopping-cart .product-item .product-thumb,
        .wishlist-table .product-item .product-thumb,
        .order-table .product-item .product-thumb {
            width: 130px;
            padding-right: 20px
        }

        .shopping-cart .product-item .product-thumb>img,
        .wishlist-table .product-item .product-thumb>img,
        .order-table .product-item .product-thumb>img {
            display: block;
            width: 100%
        }

        @media screen and (max-width: 860px) {

            .shopping-cart .product-item .product-thumb,
            .wishlist-table .product-item .product-thumb,
            .order-table .product-item .product-thumb {
                display: none
            }
        }

        .shopping-cart .product-item .product-info span,
        .wishlist-table .product-item .product-info span,
        .order-table .product-item .product-info span {
            display: block;
            font-size: 13px
        }

        .shopping-cart .product-item .product-info span>em,
        .wishlist-table .product-item .product-info span>em,
        .order-table .product-item .product-info span>em {
            font-weight: 500;
            font-style: normal
        }

        .shopping-cart .product-item .product-title,
        .wishlist-table .product-item .product-title,
        .order-table .product-item .product-title {
            margin-bottom: 6px;
            padding-top: 5px;
            font-size: 16px;
            font-weight: 500
        }

        .shopping-cart .product-item .product-title>a,
        .wishlist-table .product-item .product-title>a,
        .order-table .product-item .product-title>a {
            transition: color .3s;
            color: #374250;
            line-height: 1.5;
            text-decoration: none
        }

        .shopping-cart .product-item .product-title>a:hover,
        .wishlist-table .product-item .product-title>a:hover,
        .order-table .product-item .product-title>a:hover {
            color: #0da9ef
        }

        .shopping-cart .product-item .product-title small,
        .wishlist-table .product-item .product-title small,
        .order-table .product-item .product-title small {
            display: inline;
            margin-left: 6px;
            font-weight: 500
        }

        .wishlist-table .product-item .product-thumb {
            display: table-cell !important
        }

        @media screen and (max-width: 576px) {
            .wishlist-table .product-item .product-thumb {
                display: none !important
            }
        }

        .shopping-cart-footer {
            display: table;
            width: 100%;
            padding: 10px 0;
            border-top: 1px solid #e1e7ec
        }

        .shopping-cart-footer>.column {
            display: table-cell;
            padding: 5px 0;
            vertical-align: middle
        }

        .shopping-cart-footer>.column:last-child {
            text-align: right
        }

        .shopping-cart-footer>.column:last-child .btn {
            margin-right: 0;
            margin-left: 15px
        }

        @media (max-width: 768px) {
            .shopping-cart-footer>.column {
                display: block;
                width: 100%
            }

            .shopping-cart-footer>.column:last-child {
                text-align: center
            }

            .shopping-cart-footer>.column .btn {
                width: 100%;
                margin: 12px 0 !important
            }
        }

        #input {
            width: 86px;
            border-color: #dbe2e8;
            border-radius: 20px;
            padding: 12px 12px;
            /* margin: 8px 0; */
        }

        .coupon-form .form-control {
            display: inline-block;
            width: 100%;
            max-width: 235px;
            margin-right: 12px;
        }

        .form-control-sm:not(textarea) {
            height: 36px;
        }
    </style>

</head>


<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container padding-bottom-3x mb-1">

        <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span
                class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center"
                src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"
                width="18" height="18" alt="Medal icon">&nbsp;&nbsp;With this purchase you will earn
            <strong>290</strong> Reward Points.
        </div>

        <div class="table-responsive shopping-cart">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($_SESSION['cart'])): ?>
                        <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                            <form action="cart.php" method="post">
                                <tr>
                                    <td>
                                        <div class="product-item" style="1px solid red">
                                            <a class="product-thumb" href="#"><img clase="img1 "
                                                    src="<?= 'image/' . $value['image']; ?>" alt="Product"></a>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="#">
                                                        <?= $value['name']; ?>
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-input">
                                            <input type="number" id="input" name="txtqty" value="<?= $value['quantity']; ?>">
                                            <!-- <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select> -->
                                        </div>
                                    </td>
                                    <td class="text-center text-lg text-medium">
                                        <?= ($value['price'] * $value['quantity']); ?>
                                    </td>

                                    <td class="text-center">
                                        <input type="hidden" name="txtname" value="<?= $value['name']; ?>">
                                        <button class="btn btn-round btn-light mt-3" name="remove" type="submit"><i
                                                class="fa fa-trash fa-2x"></i></button>
                                    </td>
                                    <td class="text-center">

                                        <button class="btn btn-round btn-light mt-3" name="update" type="submit"><i
                                                class="fa fa-refresh fa-2x"></i></button>
                                    </td>
                                </tr>
                            </form>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="shopping-cart-footer">
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    $total += $value['quantity'] * $value['price'];
                }
            }
            ?>
            <div class="column text-lg">Subtotal: <span class="text-medium"><svg xmlns="http://www.w3.org/2000/svg"
                        width="15px" height="15px"
                        viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                    </svg>
                    <?= $total ?>
                </span></div>
        </div>
        <div class="shopping-cart-footer">
            <div class="column"><a class="btn btn-outline-secondary" href="categories.php"><i
                        class="icon-arrow-left"></i>&nbsp;Back
                    to Shopping</a></div>

            <div class="column">
                <form action="cart.php" method="post">
                    <button class="btn btn-round btn-outline-danger mt-3" name="clear" type="submit">clear cart</button>
                    <?php 
                        if(isset($_SESSION['auth'])):
                    ?>
                    <a class="btn btn-round btn-success mt-3 mr-2" href="checkout.php" role="button">Checkout</a>
                    <?php
                        else: echo"Pelase <a href='login.php' style='text-decoration:underline'>Login</a> To Checkout......";
                    ?>
                    <?php endif; ?>
                </form>
                <!-- <button class="" name="update" type="submit">Checkout</button> -->
                <!-- <a class="btn btn-success"
                    href="#">Checkout</a> -->
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> -->
    <footer class="text-center mt-auto text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a class="btn text-white btn-lg btn-floating" style="background-color: #d12e11;; p-1"
                    href="https://www.instagram.com/" role="button">
                    <i class="fab fa-instagram"></i>
                </a>

                <a class="btn text-white btn-lg btn-floating" style="background-color: #d12e11;; p-1"
                    href="https://twitter.com/?lang=en" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn text-white btn-lg btn-floating" style="background-color: #d12e11;; p-1"
                    href="https://www.facebook.com/campaign/landing.php?campaign_id=14884913640&extra_1=s%7Cc%7C550525804944%7Cb%7Cfacebook%20%27%7C&placement=&creative=550525804944&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D14884913640%26adgroupid%3D128696220912%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-327195741349%26loc_physical_ms%3D9050486%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiAgOefBhDgARIsAMhqXA4e2WMuIoXxvQ4VamMozKaagXezxjybGX8wsKe9FKE1Umf4N-B5SE0aAtMhEALw_wcB"
                    role="button">
                    <i class="fab fa-facebook"></i>
                </a>

                <a class="btn text-white btn-lg btn-floating" style="background-color: #d12e11;; p-1"
                    href="https://in.pinterest.com/" role="button">
                    <i class="fab fa-pinterest"></i>
                </a>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->

                        <img src="image\poojacom new logo.png" alt="Bootstrap" width="300" height="200">

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pooja Thali</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Murti</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pooja Temple</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pooja Decoration</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="" class="">Pooja.co@gmail.com</a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="index.php">Pooja.com</a>
        </div>
        <!-- MDB -->
    </footer>
    <!-- Footer -->
    <?php include("includes/scripts.php"); ?>
</body>

</html>