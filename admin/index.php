<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("location:../adminloginpage.php");
}
include("includes/header.php");
include("config/dbcon.php");
$qry = "select * from pandit where status='pending'";
$qry1 = "select * from pandit where status='accept'";
$qry2 = "select * from pandit where status='reject'";
$result = $con->query($qry);
$result1 = $con->query($qry1);
$result2 = $con->query($qry2);
$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Pendeing Request <span class="badge badge-warning">
                        <?= $count; ?>
                    </span></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="pending.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Accepted Request<span class="badge badge-warning">
                        <?= $count1; ?>
                    </span></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="accept.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Rejected Card<span class="badge badge-dark">
                        <?= $count2; ?></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="reject.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>