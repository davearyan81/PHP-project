<?php
session_start();
$id=$_SESSION['auth_id1'];

include("includes/header.php");
include("config/dbcon.php");

?>
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
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Accept/Reject</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "SELECT * FROM `booking` WHERE STATUS='pending' AND poojari_name='$id'";
                        $result = $con->query($qry);
                        // echo $result;
                        $count=mysqli_num_rows($result);
                        // echo $_SESSION['count'];
                        
                        while ($row = $result->fetch_assoc()):
                            ?>
                            <tr>
                                <td>
                                    <?= $row['name']; ?>
                                </td>
                                <td>
                                    <?= $row['email']; ?>
                                </td>
                                <td>
                                    <?= $row['phno']; ?>
                                </td>
                                <td>
                                <?= $row['address']; ?>
                                </td>
                                    <td>
                                        <form action="pendingcode1.php" method="post">
                                            <input type="hidden" name="txtid" value="<?= $row['bid']; ?>">
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