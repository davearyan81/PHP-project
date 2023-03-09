<?php
include("includes/header.php");
include("config/dbcon.php");
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="pooja.php" class="text-decoration-none"> Pooja</a></li>
        <li class="breadcrumb-item ">Add Pooja</li>
    </ol>

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Add Pooja</h3>
                </div>
                <?php

                if (isset($_POST['submit'])) {

                    $title = $_POST['potitle'];
                    $desc = $_POST['podesc'];
                    $time = $_POST['potime'];
                    $ben = $_POST['poben'];
                    // Image upload
                    $imgname = $_FILES['poimg']['name'];
                    $tmp_img = $_FILES['poimg']['tmp_name'];

                    $pdfname = $_FILES['poreq']['name'];
                    $tmp_pdf = $_FILES['poreq']['tmp_name'];
                    if ($imgname != '' && $pdfname != '') {
                        move_uploaded_file($tmp_img, "img/" . $imgname);
                        move_uploaded_file($tmp_pdf, "pdfs/" . $pdfname);

                        $qry = "INSERT INTO pooja (poojatitle,poojaimg,pdesc,approxtime,benefit,poojareq) VALUES ('$title','$imgname','$desc','$time','$ben','$pdfname')";
                        $result = $con->query($qry);
                        if ($result) {
                            echo "<script type='text/javascript'>window.top.location='addpooja.php';</script>";

                            $_SESSION['message'] = "Data Added susscessfully";
                        } else {
                            echo "Failed";
                        }
                    }
                    // $con = mysqli_connect("localhost", "root", "", "dbproject");
                
                }

                ?>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2">Pooja Tittle</label>
                            <input type="text" id="form4Example2" class="form-control" name="potitle" />
                        </div>

                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" name="poimg" />
                        </div>

                        <!--description -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example3">Pooja description</label>
                            <textarea class="form-control" id="summernote" rows="4" name="podesc"></textarea>
                        </div>
                        <!-- Pooja Time -->
                        <div class="form-outline mb-4">
                            <input type="time" id="form4Example2" class="form-control" name="potime">Pooja Time</label>
                        </div>
                        <!-- <label class="form-label" for="form4Example2"-->

                        <!-- Pooja Benefit -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form4Example2">Pooja Benefit</label>
                            <input type="text" id="summernote1" class="form-control" name="poben" />
                        </div>
                        <!-- chosse file -->
                        <div class="form-outline mb-4">
                            <input type="file" id="form4Example2" class="form-control" name="poreq" />
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
?>