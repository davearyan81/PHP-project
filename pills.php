<html>

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>


<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card" style="height:100%;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg"
                                        width="250" /> </div>
                                <div class="thumbnail text-center"> <img onclick="change_image(this)"
                                        src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img
                                        onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">

                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase">Men's slim fit t-shirt</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span
                                            class="act-price">$20</span>
                                        <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday
                                    use, you could pair it with a stylish pair of jeans or trousers complete the look.
                                </p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                            name="size" value="S" checked> <span>S</span> </label> <label class="radio">
                                        <input type="radio" name="size" value="M"> <span>M</span> </label> <label
                                        class="radio"> <input type="radio" name="size" value="L"> <span>L</span>
                                    </label> <label class="radio"> <input type="radio" name="size" value="XL">
                                        <span>XL</span> </label> <label class="radio"> <input type="radio" name="size"
                                            value="XXL"> <span>XXL</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i
                                        class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Pills navs -->
                        <ul class="nav nav-pills ml-4 mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1"
                                    role="tab" aria-controls="ex1-pills-1" aria-selected="true">Tab 1</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab"
                                    aria-controls="ex1-pills-2" aria-selected="false">Tab 2</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab"
                                    aria-controls="ex1-pills-3" aria-selected="false">Tab 3</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content ml-5" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                                aria-labelledby="ex1-tab-1">
                                Tab 1 content
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                Tab 2 content
                            </div>
                            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                Tab 3 content
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>