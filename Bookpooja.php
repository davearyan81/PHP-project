<?php
include('includes/header.php');
include('includes/navbar.php');
include('admin/config/dbcon.php');
$qry = "select * from pooja";
$result = $con->query($qry);
?>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 ">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="row p-3 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                            src="<?= 'admin/img/' . $row['poojaimg']; ?>"></div>
                    <div class="col-md-6 mt-5">
                        <h5>
                            <?= $row['poojatitle']; ?>
                        </h5>
                        <div class="d-flex flex-row">
                            <?php if($row['rating']>="4.0"): ?>
                            <div class="ratings mr-2"><h5><span class="badge badge-success"><img src="image/star.png" class="" height="10px" width="10px"></i><?= $row["rating"] ?></span></h5></div>
                            <?php else :?>
                            <div class="ratings mr-2"><h5><span class="badge badge-danger"><img src="image/star.png" class="" height="10px" width="10px"></i><?= $row["rating"] ?></span></h5></div>
                                <?php endif; ?>
                        </div>

                        <div class="mt-1 mb-1 spec-1"><span>100% pure copper</span><span class="dot"></span><span>Light
                                weight</span><span class="dot"></span><span>Best finish<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span></div>
                        <p class="text-justify text-truncate para mb-0">There are many sizes available for this murti.
                    </div>

                    <div class="align-items-center align-content-center col-md-3 border-left mt-5">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">Rs:
                                <?= $row['pprice'] ?>/-
                            </h4>
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <a href="bookingdetails.php?id=<?= $row['poojaid'] ?>" class="btn btn-sm" type="submit"
                                name="order" style="background:#d12e11; color:white;">Order
                                Now</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>