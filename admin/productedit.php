<?php
include("includes/header.php");
include("config/dbcon.php");

$mid = $_GET["id"];
if (isset($_POST['submit'])) {
    $name = $_POST['txtname'];
    $desc = $_POST['txtdesc'];
    $price = $_POST['txtprice'];
    $desc = str_replace("'", "\'", $desc);
    // old image
    $old_img = $_POST['old_img'];
    $new_img = $_FILES['txtimg']['name'];
    $tmp_img = $_FILES['txtimg']['tmp_name'];

    if ($new_img != '') {
        $update_img = $new_img;
    } else {
        $update_img = $old_img;
    }

    $qry = "UPDATE `product` SET `pname`='$name',`pdesc`='$desc',`pimg`='$update_img',`pprice`='$price' where pid='$mid'";
    $result = $con->query($qry);
    if ($result) {
        if ($new_img != '') {
            move_uploaded_file($tmp_img, "../image/" . $new_img);
            unlink("../image/" . $old_img);
        }
        echo "<script>window.top.location='product.php'</script>";
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>Edit</h3>
                </div>
                <?php
                $qry = "SELECT * FROM product WHERE pid='$mid'";
                $result = $con->query($qry);
                $row = $result->fetch_assoc();
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-bod ml-2 mr-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Name</span>
                            <input type="text" class="form-control" value="<?php echo $row['pname']; ?>"
                                aria-label="Username" name="txtname" aria-describedby="basic-addon1">
                        </div>
                        <input type="text" name="old_img" value="<?php echo $row['pimg']; ?>">
                        <div class="input-group mb-3">
                        </div>
                        <img src="<?= '../image/' . $row['pimg']; ?>" height="300px" width="200px">
                        <input type="file" class="form-control mb-2" aria-label="Username" name="txtimg"
                            aria-describedby="basic-addon1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Description</span>
                            <textarea class="form-control" name="txtdesc" id="summernote1" style="height: 100px"
                                name="txtdesc"><?php echo $row['pdesc']; ?>
                                 </textarea>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Product Name</span>
                            <input type="text" class="form-control" value="<?php echo $row['pprice']; ?>"
                                aria-label="Username" name="txtprice" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>