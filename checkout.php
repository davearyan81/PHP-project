<?php
// session_start();
include("includes/header.php");
include("includes/navbar.php");
include("admin/config/dbcon.php");
$total = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $total += $value['quantity'] * $value['price'];
    }
}
?>

<body class="bg-light">

    <div class="container mt-3 mb-3"
        style="background-color: whitesmoke; border-radius: 10px; box-shadow:5px 10px 18px">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-3" src="image\poojacom_new_logo-removebg-preview.png" alt="" width="400"
                height="300">
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <?php if (isset($_SESSION['cart'])): ?>
                        <span class="badge badge-secondary badge-pill">
                            <?= count($_SESSION['cart']); ?>
                        </span>
                    <?php endif; ?>
                </h4>
                <ul class="list-group mb-3">
                    <?php if (isset($_SESSION['cart'])):
                        foreach ($_SESSION['cart'] as $key => $value):

                            ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?= 'image/' . $value['image'] ?>" alt="" height="50px" width="50px">
                                    </div>
                                    <div class="col-7">
                                        <h6 class="ml-0">
                                            <?= $value['name']; ?>
                                        </h6>
                                    </div>
                                </div>
                                <span class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                        viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                                    </svg>
                                    <?= $value['price'] * $value['quantity'] ?>
                                </span>
                            </li>

                            <?php
                        endforeach;
                    endif; ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong> <span class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="15px"
                                    height="15px"
                                    viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                                </svg>
                                <?= $total ?></strong>
                    </li>
                </ul>


            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="" method="post">
                    <div class="row">
                        <div class="mb-3">
                            <label for="username">Order ID</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="<?= uniqid('ORD_ID', false) ?>"
                                    id="orderid" placeholder="Username" readonly>

                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control firstname" id="firstName" placeholder="" value=""
                                required="">
                            <span id="firstnames" class="text-danger">

                            </span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control lastname" id="lastName" placeholder="" value=""
                                required="">
                            <span id="lastnames" class="text-danger">
                            </span>
                        </div>
                    </div>
                    <?php

                    if (isset($_SESSION['cart'])) {
                        $total=0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $total+=$value['price']*$value['quantity'];
                        }
                    }
                    ?>
                    <input type="hidden" value="<?= $total ?>" id="price" name="txtprice">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control username" id="username" placeholder="Username"
                                required="">
                            </div>
                            <span id="usernames" class="text-danger">
                            </span>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control email" id="email" placeholder="you@example.com"
                            required="">
                        <span id="emails" class="text-danger">
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control address" id="address" placeholder="1234 Main St"
                            required="">
                        <span id="addresss" class="text-danger">
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2</label>
                        <input type="text" class="form-control address2" id="address2" placeholder="Apartment or suite">
                        <span id="addresss2" class="text-danger">
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control phone" id="phone" placeholder="Phone no.">
                        <span id="phones" class="text-danger">
                        </span>
                    </div>
                    <?php
                    $qry = "select * from states";
                    $result = $con->query($qry);
                    ?>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100 states" id="states" required="">
                                <option value="">Choose...</option>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                            <span id="statess" class="text-danger">
                            </span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="city1">City</label>
                            <select class="custom-select d-block w-100 city" id="city" required="">
                                <option value="">Choose...</option>

                            </select>
                            <span id="citys" class="text-danger">
                            </span>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control zip" id="zip" placeholder="" required="">
                            <span id="zips" class="text-danger">
                            </span>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <button class="btn btn-primary btn-danger btn-block rzp-button" id="rzp-button1"
                        type="submit">Continue to
                        checkout</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="assest/js/checkout.js"></script>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>