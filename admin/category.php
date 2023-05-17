<?php
include("includes/header.php");
include("config/dbcon.php");
?>
<div class="container-fluid px-4">
    <h3>Pooja Category</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item ">Category</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">

                <div class="card-header">
                    <h3>Category</h3>
                    <div class="d-md-flex justify-content-md-end">

                        <a class="btn btn-primary" href="addcat.php" role="button">Add Category</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Offer</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "select * from category";
                        $result = $con->query($qry);
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row['cat_name'] ?>
                                </td>
                                <td><img src="<?= '../image/' . $row['cat_image']; ?>" height="300px" width="200px">
                                </td>
                                <td>
                                    <?= $row['offer']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="catedit.php?id=<?= $row['cat_id']; ?>" role="button">Edit</a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-del1" value="<?= $row['cat_id']; ?>"
                                        type="submit">Delete</button>
                                </td>
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