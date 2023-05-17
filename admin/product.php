<?php
include("includes/header.php");
include("config/dbcon.php");
?>
<div class="container-fluid px-4">
    <h3>Pooja Product</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item ">Product</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">

                <div class="card-header">
                    <h3>Product</h3>
                    <div class="d-md-flex justify-content-md-end">

                        <a class="btn btn-primary" href="addproduct.php" role="button">Add Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "SELECT * FROM `product` group by pname";
                        $result = $con->query($qry);
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row['pname'] ?>
                                </td>
                                <td>
                                    <img src="<?= '../image/' . $row['pimg']; ?>" height="300px" width="200px">

                                </td>

                                <td>
                                    <?= $row['pprice']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="productedit.php?id=<?= $row['pid']; ?>"
                                        role="button">Edit</a>
                                </td>
                                <form action="" method="post">
                                    <td>
                                        <a class="btn btn-danger" href="delproduct.php?id=<?= $row['pid']; ?>"
                                            role="submit" onclick="return mydelete();">Delete</a>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
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