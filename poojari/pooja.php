`
<?php
session_start();
include("includes/header.php");
include("config/dbcon.php");
if ($_SESSION['auth_id1']) {
    $pid = $_SESSION['auth_id1'];
    // echo $id;
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item ">Pooja Service</li>
    </ol>

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Pooja Service</h3>
                    <!-- <div class="d-md-flex justify-content-md-end">

                        <a class="btn btn-primary" href="addpooja.php" role="button">Add User</a>
                    </div> -->
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>PoojaName</th>
                                <th>PoojaImg</th>
                                <th>Price</th>
                                <!-- <th>Edit</th> -->
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                        // echo $result;
                        $qry = "select popaid,poojatitle,price,poojaimg from pooja p ,poojapandit poj where poj.poojaid=p.poojaid and poj.pid='$pid' group by poojatitle";
                        $result = $con->query($qry);
                        while ($row = $result->fetch_assoc()):
                            $id = $row['popaid'];
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['poojatitle']; ?>
                                </td>
                                <td><img src="<?php echo 'img/' . $row['poojaimg']; ?>" height="300px" width="200px">
                                </td>
                                <td>
                                    <?php echo $row['price']; ?>
                                </td>

                                <td>
                                    <!-- <a class="btn btn-danger" href="deletepooja.php?id="" role="button"
                                        onclick="return mydelete()">Delete</a> -->
                                    <button class="btn btn-danger btn-del" name="delete" type="submit"
                                        value="<?php echo $row['popaid']; ?>">Delete</button>
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