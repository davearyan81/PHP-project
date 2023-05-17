<?php

include("includes/header.php");
include("includes/navbar.php");
include("admin/config/dbcon.php");
$uname = $_SESSION['auth_user'];
$qry = "SELECT * FROM `book_order` WHERE uid='$_SESSION[auth_id]' ";
$result = $con->query($qry);
$count=mysqli_num_rows($result);
?>
<div class="container my-5 d-flex justify-content-center">
    <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <?php if ($count>0): ?>
                    <div class="col my-auto">
                        <h4 class="mb-0 text-center">Thanks for your Order,<span class="change-color">
                                <?= $uname; ?>
                            </span> !</h4>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto">
                        <h4 class="color-1 mb-0 change-color">Your Order</h4>
                    </div>
                <?php else: ?>
                    <h6>Looks Like You Have Not Order yet.... </h6>
                <?php endif; ?>
            </div>
            <?php
            while ($row = $result->fetch_assoc()) {
                // echo 'image/'.$row['pimage'];
                ?>
                <div class="row mb-3">
                    <div class="col">
                        <div class="card card-2">
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img
                                            class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0"
                                            src="<?= 'image/' . $row['pimage']; ?>" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row my-auto flex-column flex-md-row">
                                            <div class="col my-auto">
                                                <h6 class="mb-0">
                                                    <?= $row['pname']; ?>
                                                </h6>
                                            </div>
                                            <div class="col my-auto"> <small>Qty :
                                                    <?= $row['qty']; ?>
                                                </small></div>
                                            <div class="col my-auto"> <small>Order At :
                                                    <?= $row['order_at']; ?>
                                                </small></div>
                                            <div class="col my-auto">
                                                <h6 class="mb-0">&#8377;
                                                    <?= $row['pprice']; ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include("includes/scripts.php") ?>