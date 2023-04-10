<?php
include("includes/header.php");
include("config/dbcon.php");


if (isset($_POST['submit'])) {
    $name = $_POST['txtname'];
    $offer = $_POST['txtoffer'];

    $img = $_FILES['txtimg']['name'];
    $img_tmp = $_FILES['txtimg']['tmp_name'];

    if ($img != '') {
        move_uploaded_file($img_tmp, '../image/' . $img);
        $qry="INSERT INTO `category`(`cat_name`, `cat_image`, `offer`) VALUES ('$name','$img','$offer')";
        $result=$con->query($qry);
        if($result){
            echo "<script type='text/javascript'>window.top.location='category.php';</script>";
        }
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="category.php" class="text-decoration-none"> Category</a></li>
        <li class="breadcrumb-item ">Add Category</li>
    </ol>

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2">Category name</label>
                            <input type="text" id="form4Example2" class="form-control" name="txtname" />
                        </div>

                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" name="txtimg" />
                        </div>

                        <!--description -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example3">Offer</label>
                            <input type="text" class="form-control" rows="4" name="txtoffer">
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