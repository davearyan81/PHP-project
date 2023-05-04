<?php
session_start();
$id=$_SESSION['auth_id1'];
include("includes/header.php");
include("config/dbcon.php");
// ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Accepted Request</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none">Accepted Request</a></li>
        <li class="breadcrumb-item ">Request</li>
        <li class="breadcrumb-item ">Accepted</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                
                <div class="card-header">
                    <h3>Accepted Request</h3>
                   
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pandit Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "select * from booking where status='accept'";
                        $result = $con->query($qry);
                        while ($row = $result->fetch_assoc()):
                            ?>
                            <tr>
                                <td>
                                    <?= $row['name']; ?>
                                </td>
                                <td>
                                    <?= $row['email'] ?>
                                </td>
                                <td>
                                    <?= $row['phno'] ?>
                                </td>
                                <td>
                                    <?= $row['status'] ?>
                                </td>
                               
                            </tr>
                        <?php endwhile; ?>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>