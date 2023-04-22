<?php
session_start();
include("includes/header.php");
include("config/dbcon.php");
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
                if (isset($_POST['submit'])) {
                    // $poojaID = $_POST['txtID'];
                    $poojaTITLE = $_POST['txttitle'];
                    $PDSEC = $_POST['txtdesc'];
                    $approxTIME = $_POST['txttime'];
                    $beneFIT = $_POST['txtben'];
                    // IMage update
                    $old_img=$_POST['old_img'];
                    $new_img=$_FILES['txtimg']['name'];
                    $tmp_img=$_FILES['txtimg']['tmp_name'];
                    // pdf update
                    $old_pdf=$_POST['old_pdf'];
                    $new_pdf=$_FILES['txtreq']['name'];
                    $tmp_pdf=$_FILES['txtreq']['tmp_name'];
                    if($new_img!='')
                    {
                        $update_file=$new_img;
                    }
                    else{
                        $update_file=$old_img;
                    }
                    if($new_pdf!='')
                    {
                        $update_pdf=$new_pdf;
                    }
                    else{
                        $update_pdf=$old_pdf;

                    }

                    $qry = "UPDATE pooja set poojatitle='$poojaTITLE',poojaimg='$update_file',pdesc='$PDSEC',approxtime='$approxTIME',benefit='$beneFIT',poojareq='$update_pdf' WHERE poojaid='$mid'";
                    $result = $con->query($qry);

                    if ($result) {
                        // exit;
                        if($new_img!='')
                        {
                            move_uploaded_file($tmp_img,"img/".$new_img);
                            unlink("img/".$old_img);
                        }      
                        if($new_pdf!='') 
                        {
                            move_uploaded_file($tmp_pdf,"pdfs/".$new_pdf);
                            unlink("pdfs/".$old_pdf);
                        }
                        echo "<script type='text/javascript'>window.top.location='pooja.php';</script>";
                        $_SESSION['message'] = "Susseccfully Edited ";
                        exit(0);

                    } else {
                        $_SESSION['message'] = "Failed to Edited ";
                        header("location:pooja.php");
                        exit(0);
                    }

                }
                $qry = "SELECT * FROM pooja WHERE poojaid='$mid'";
                $result = $con->query($qry);
                $row = $result->fetch_assoc();
                $ID = $row['poojaid'];
                $TITLE = $row['poojatitle'];
                $DESC1 = $row['pdesc'];
                $time = $row['approxtime'];
                $BENEFIT = $row['benefit'];
                $req = $row['poojareq'];
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-bod ml-2 mr-2">
                        <div class="input-group mb-3 mt-2 ">
                            <span class="input-group-text" id="basic-addon1" name="txtID">PoojaID</span>
                            <input type="text" class="form-control" aria-label="Username" value="<?php echo $ID; ?>"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Pooja Name</span>
                            <input type="text" class="form-control" value="<?php echo $TITLE; ?>" aria-label="Username"
                                name="txttitle" aria-describedby="basic-addon1">
                        </div>
                        <input type="text" name="old_img" value="<?php echo $row['poojaimg'];?>">
                        <div class="input-group mb-3">
                        </div>
                        <img src="<?php echo 'img/'.$row['poojaimg'];?>" height="300px" width="200px">
                        <input type="file" class="form-control mb-2" aria-label="Username" name="txtimg"
                            aria-describedby="basic-addon1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Description</span>
                            <textarea class="form-control" id="summernote" name="txtdesc" style="height: 100px"
                                name="txtdesc"><?php echo $DESC1; ?>
                                 </textarea>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Choose time</span>
                            <input type="time" class="form-control" placeholder="Username" name="txttime"
                                aria-label="Username" value="<?php echo $time; ?>" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Benefit</span>
                        <textarea class="form-control" name="txtben" id="summernote1" style="height: 100px"
                            name="txtdesc"><?php echo $BENEFIT; ?>
                                 </textarea>
                    </div>
                    <input type="text" name="old_pdf" value="<?= $row['poojareq'];?>">

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="txtreq"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php
include("includes/footer.php");
?>