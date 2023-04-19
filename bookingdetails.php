<?php
include("admin/config/dbcon.php");
$qry = "SELECT * FROM `pooja` WHERE poojaid='$_GET[id]'";
$result = $con->query($qry);
$row = $result->fetch_assoc();
?>
<html>

<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" /> -->
<style>
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    --mdb-nav-pills-link-active-bg: red;
    --mdb-nav-pills-link-active-color: white;
    background-color: var(--mdb-nav-pills-link-active-bg);
    color: var(--mdb-nav-pills-link-active-color);
}
</style>
</head>


<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card" style="height:100%;">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="<?php echo 'admin/img/'.$row['poojaimg'] ?>"
                                        alt="<?= $row['poojaimg'] ?>" width="350" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">

                                <div class="mt-4 mb-3"> <span
                                        class="text-uppercase text-muted brand">Purohit</span><br><br>
                                    Name : <span class="text-uppercase"><strong>
                                            <?= $row['poojatitle']?>
                                        </strong><span><br><br>
                                            Duration : <span class="text-uppercase"><strong>
                                                    <?= $row['approxtime'] ?>
                                                </strong></span><br><br>
                                           Price : <span class="text-uppercase"><strong>    <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px"
                                        viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                                    </svg>
                                                    <?= $row['pprice'] ?>
                                                </strong></span><br><br>
                                </div>
                                
                                <a href="bookingdetails.php?id=<?= $row['poojaid'] ?>" class="btn btn-primary btn-sm"
                                    type="submit" name="order" style="background:#d12e11;">Order
                                    Now</a>
                            </div>
                        </div>
                        <!-- Pills navs -->
                        <div class="mx-1">
                            <ul class="nav nav-pills ml-4 mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1"
                                        role="tab" aria-controls="ex1-pills-1" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2"
                                        role="tab" aria-controls="ex1-pills-2" aria-selected="false">Benefits</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3"
                                        role="tab" aria-controls="ex1-pills-3" aria-selected="false">Pooja Requirements</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->

                            <!-- Pills content -->
                            <div class="tab-content ml-5" id="ex1-content">
                                <div class="tab-pane fade show active p-4" id="ex1-pills-1" role="tabpanel"
                                    aria-labelledby="ex1-tab-1">
                                    <?= $row['pdesc'] ?>
                                </div>
                                <div class="tab-pane fade p-4" id="ex1-pills-2" role="tabpanel"
                                    aria-labelledby="ex1-tab-2">
                                    <?php echo $row['benefit'];?>
                                </div>
                                <div class="tab-pane fade p-4" id="ex1-pills-3" role="tabpanel"
                                    aria-labelledby="ex1-tab-3">
                                    Puja Requriment :
                                    <?php 
                                        echo "<a href='admin/pdfs/$row[poojareq]' download>download</a>";
                                    ?>
                                </div>
                            </div>
                            <!-- Pills content -->
                        </div>
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
<?php include("includes/footer.php") ?>

</html>