<?php
include("includes/header.php");
include("config/dbcon.php");
// ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Pending Request</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none">Pending Request</a></li>
        <li class="breadcrumb-item ">Request</li>
        <li class="breadcrumb-item ">Pending</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                
                <div class="card-header">
                    <h3>Pending Request</h3>
                    <div class="d-md-flex justify-content-md-end">

                        <a class="btn btn-primary" href="addpooja.php" role="button">Add User</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Pandit Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Accept/Reject</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "select pid,fname,lname,email,phno,status from pandit where status='pending'";
                        $result = $con->query($qry);
                        $count=mysqli_num_rows($result);
                        // echo $_SESSION['count'];
                        while ($row = $result->fetch_assoc()):
                            ?>
                            <tr>
                                <td>
                                    <?= $row['fname'] . ' ' . $row['lname']; ?>
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
                                <td>
                                    <form action="pendingcode.php" method="post">
                                        <input type="hidden" name="txtid" value="<?= $row['pid']; ?>">
                                        <button type="input" class="btn btn-primary" name="txtaccept">Accept</button>
                                        <button type="input" class="btn btn-danger" name="txtreject">Reject</button>
                                    </form>
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