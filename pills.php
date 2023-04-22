<?php
include("admin/config/dbcon.php");
$qry = "SELECT * FROM ((`poojapandit` INNER JOIN `pandit` ON poojapandit.pid=pandit.pid) INNER JOIN `pooja` ON poojapandit.poojaid=pooja.poojaid) WHERE pandit.pid='$_GET[id]'";
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
                            <div class="text-center p-4"> <img id="main-image" src="<?= 'image/' . $row['pimage'] ?>"
                                            width="350" />
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">

                                <div class="mt-4 mb-3"> <span
                                        class="text-uppercase text-muted brand">Purohit</span><br><br>
                                    Name : <span class="text-uppercase"><strong>
                                            <?= $row['fname'] . ' ' . $row['lname'] ?>
                                        </strong><span><br><br>
                                            Email : <span class="text-lowercase"><strong>
                                                    <?= $row['email'] ?>
                                                </strong></span><br><br>
                                            location : <span class="text-uppercase"><strong>
                                                    <?= $row['state'] ?> , India
                                                </strong></span><br><br>
                                </div>
                            </div>
                        </div>
                        <!-- Pills navs -->
                        <div class="mx-1">
                            <ul class="nav nav-pills ml-4 mb-3 p-2" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1"
                                        role="tab" aria-controls="ex1-pills-1" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2"
                                        role="tab" aria-controls="ex1-pills-2" aria-selected="false">Language Knows</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3"
                                        role="tab" aria-controls="ex1-pills-3" aria-selected="false">About Puja</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->
                            <!-- Pills content -->

                            <div class="tab-content ml-5" id="ex1-content">
                                <div class="tab-pane fade show active p-4" id="ex1-pills-1" role="tabpanel"
                                    aria-labelledby="ex1-tab-1">
                                    <?= $row['pdetails'] ?>
                                </div>
                                <div class="tab-pane fade p-4" id="ex1-pills-2" role="tabpanel"
                                    aria-labelledby="ex1-tab-2">
                                    Hindi/English/Sanskrit
                                </div>
                                <div class="tab-pane fade p-4" id="ex1-pills-3" role="tabpanel"
                                    aria-labelledby="ex1-tab-3">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-mdb-toggle="collapse" data-mdb-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Puja Performed
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-mdb-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <?php while ($row = $result->fetch_assoc()): ?>

                                                            <?= "<strong>" . $row['poojatitle'] . "<br></strong>" ?>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><br>

                                        <span class="pl-4">Available timings : Any Time</span>
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
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include("includes/footer.php") ?>

</html>