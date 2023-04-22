<?php
include("includes/header.php");
include("config/dbcon.php");
$qry = "select cat_id,cat_name from category";
$result = $con->query($qry);
if (isset($_POST['submit'])) {
    $id = $_POST['txtid'];
    // echo "<script>alert($id);</script>";
    $name = $_POST['txtname'];
    $desc = $_POST['txtdesc'];
    $price = $_POST['txtprice'];

    $img = $_FILES['txtimg']['name'];
    $tmp_img = $_FILES['txtimg']['tmp_name'];
    if ($img != '') {
        move_uploaded_file($tmp_img, "../image/" . $img);
        $qry1 = "INSERT INTO `product`(`cat_id`, `pname`, `pdesc`, `pimg`, `pprice`) VALUES ('$id','$name','$desc','$img','$price')";
        $result1 = $con->query($qry1);
        if($result1)
        {
            echo "success";
        }
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="category.php" class="text-decoration-none"> Product</a></li>
        <li class="breadcrumb-item ">Add Product</li>
    </ol>

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Add Product</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-outline mb-4">

                            <select class="form-select" name="txtid" aria-label="Default select example">
                                <option selected>Select Category In Which You Want Add</option>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <option value="<?= $row['cat_id']; ?>"><?= $row['cat_name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2">Product name</label>
                            <input type="text" id="form4Example2" class="form-control" name="txtname" />
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Description</span>
                            <textarea class="form-control" name="txtdesc" id="summernote1" style="height: 100px"
                                name="txtdesc">
                            </textarea>
                        </div>
                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" name="txtimg" />
                        </div>

                        <!--description -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example3">Price</label>
                            <input type="text" class="form-control" rows="4" name="txtprice">
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>