<?php
include("includes/header.php");
include("includes/navbar.php");
include("admin/config/dbcon.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT pname,pdesc,pimg,pprice FROM product,category WHERE product.cat_id='$id' group by pname";
    $result = $con->query($qry);
    ?>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row justify-content-center mb-3">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3" style="background-color: #fff">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">

                                            <img src="<?= 'image/' . $row['pimg']; ?>" class="w-100 h-100 img-fluid" />

                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(2
                                            53, 253, 253, 0.15);">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6 mt-4">
                                        <?= $row['pname']; ?>

                                        <p class="text-truncate mb-4 mb-md-0 mt-4">
                                            <?= $row['pdesc']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start mt-4">
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            Rs:
                                            <?= $row['pprice']; ?>

                                        </div>
                                        <h6 class="text-success">Free shipping</h6>
                                        <div class="d-flex flex-column mt-4">
                                            <button class="btn btn-danger btn-sm" type="button">Details</button>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php
}
include('includes/footer.php');
include('includes/scripts.php');
?>