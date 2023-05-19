<?php
include("config/dbcon.php");
if(isset($_SESSION['auth1']))
{
    $id=$_SESSION['auth_id1'];
    $qry="select * from booking where status='pending' and poojari_name='$id'";
    $result=$con->query($qry);
    $count=mysqli_num_rows($result);
    $qry1="select * from booking where status='accept' and poojari_name='$id'";
    $result1=$con->query($qry1);
    $count1=mysqli_num_rows($result1);
    $qry2="select * from booking where status='reject' and poojari_name='$id'";
    $result2=$con->query($qry2);
    $count2=mysqli_num_rows($result2);
}
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Pooja
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="pooja.php">Pooja Service</a>
                        <a class="nav-link" href="addpooja.php">Add Pooja</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Request
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="pending.php">Pending Request<span class="badge text-bg-primary mx-2">
                                <?= $count; ?>
                            </span></a>
                        <a class="nav-link" href="accept.php">Accepted Request<span class="badge text-bg-success mx-2">
                                <?= $count1; ?>
                            </span></a>
                        <a class="nav-link" href="reject.php">Rejected Request<span class="badge text-bg-danger mx-2">
                                <?= $count2; ?>
                            </span></a>
                    </nav>
                </div>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>