<?php
include("includes/header.php");
include("config/dbcon.php");
?>
<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['txttitle'];
    $offer = $_POST['txtoffer'];

    // old image
    $old_img = $_POST['old_img'];
    $new_img = $_FILES['txtimg']['name'];
    $new_img_tmp = $_FILES['txtimg']['tmp_name'];
    if ($new_img != '') {
        $update_file = $new_img;
    } else {
        $update_file = $old_img;
    }
    $qry = "UPDATE `category` SET `cat_name`='$name',`cat_image`='$update_file',`offer`='$offer' where cat_id='$id'";
    $result = $con->query($qry);
    if ($result) {
        if ($new_img != '') {
            move_uploaded_file($new_img_tmp, '../image/' . $new_img);
            unlink('../image/' . $old_img);
        }
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
                $mid = $_GET["id"];
                $qry = "SELECT * FROM category WHERE cat_id='$mid'";
                $result = $con->query($qry);
                $row = $result->fetch_assoc();
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-bod ml-2 mr-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Category Name</span>
                            <input type="text" class="form-control" value="<?php echo $row['cat_name']; ?>"
                                aria-label="Username" name="txttitle" aria-describedby="basic-addon1">
                        </div>
                        <input type="text" name="old_img" value="<?php echo $row['cat_image']; ?>">
                        <div class="input-group mb-3">
                        </div>
                        <img src="<?= '../image/' . $row['cat_image']; ?>" height="300px" width="200px">
                        <input type="file" class="form-control mb-2" aria-label="Username" name="txtimg"
                            aria-describedby="basic-addon1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Category Name</span>
                            <input type="text" class="form-control" value="<?php echo $row['offer']; ?>"
                                aria-label="Username" name="txtoffer" aria-describedby="basic-addon1">
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