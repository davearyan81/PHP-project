<?php
include('includes/header.php');
include('includes/navbar.php');
include("admin/config/dbcon.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT offer,pname,pdesc,pimg,pprice FROM product, category WHERE product.cat_id='$id' GROUP BY pname";
    $result = $con->query($qry);
    ?>
    <section style="background-color:whitesmoke;">
        <div class="text-center container py-5">
            <h1 class="mt-4 mb-5"><strong>Categories</strong></h1>

            <div class="row">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="<?= 'image/' . $row['pimg']; ?>" class="w-100 h-100" />

                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5>
                                                <?php if ($row['offer'] != 0): ?>
                                                    <span class="badge bg-danger ms-2">
                                                        <?= $row["offer"]; ?>% off
                                                    </span>
                                                <?php endif; ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h3 class="card-title mb-3" style="font-family: 'Labrada', serif; color:#d12e11;">
                                        <?= $row['pname']; ?>
                                    </h3>
                                </a>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a class="btn btn-danger" href="#" role="button">Explore</a>
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