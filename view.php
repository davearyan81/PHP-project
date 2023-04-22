<?php
include("admin/config/dbcon.php");

if (isset($_POST['pid'])) {
    $id = $_POST['pid'];
    $output = '';
    $qry = "SELECT * FROM `sub_img` INNER JOIN `product`
    ON sub_img.pid = product.pid
    WHERE sub_img.pid='$id'";
    $result = $con->query($qry);
    $row = $result->fetch_assoc();
    $output .= '
           <!-- jQuery 1.8 or later, 33 KB -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Fotorama from CDNJS, 19 KB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

    <div class="row">
    <div class="col-lg-6">
        <!-- Add images to <div class="fotorama"></div> -->
        <div class="fotorama" data-nav="thumbs" data-autoplay="3000">
            <img src="image/' . $row["pimg"] . '">
            <img src="image/' . $row["s_img"] . '">
        </div>
    </div>
    <div class="col-lg-6">
        <h2><strong>' . $row["pname"] . '</strong></h2>
        <span>
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="15px"
                    height="15px"
                    viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                </svg>
                <span><strong>' . $row['pprice'] . '</strong></span>
            </strong>
        </span>

        <div class="mt-3 mb-2x">

            <h5><span><svg xmlns="http://www.w3.org/2000/svg"
                        width="15px" height="15px"
                        viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>
                </span><strong> Bank Offer</strong> 5% Instant
                Discount on Visa Cards for First 3 Online Payments. <a
                    href="">T&C</a></h5>

            <div class="accordion accordion-flush"
                id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed"
                            type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            <strong>Description</strong>
                        </button>
                    </h2>
                    <div id="flush-collapseOne"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-headingOne"
                        data-mdb-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           ' . $row["pdesc"] . '
                        </div>
                    </div>

                </div>

            </div>

        </div>
        
        <form action="cart.php" method="post">
        <div class="m-2">
            <div class="form-outline" style="width: 22rem;">
            <div class="col">
            Qty:<input type="text" value="1" name="txtqty" placeholder="Qty" >
          </div>
            </div>
        </div>
        <input type="hidden" name="txtname" value="'.$row["pname"].'">
        <input type="hidden" name="txtprice" value="'.$row["pprice"].'">
        <input type="hidden" name="txtimg" value="'.$row["pimg"].'">
        <button type="button" class="btn btn-outline-danger"
            data-mdb-dismiss="modal">
            Close
        </button>

            <button type="submit" name="submit" class="btn btn-danger mx-3">Add to Cart
            </button>
        </form>

    </div>
</div>
    ';

    echo $output;
}

?>