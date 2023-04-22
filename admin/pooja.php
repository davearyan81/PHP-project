<?php
include("includes/header.php");
include("config/dbcon.php");
// ?>
<div class="container-fluid px-4">
    <h3>Pooja Service</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="index.php" class="text-decoration-none"> Dashboard</a></li>
        <li class="breadcrumb-item ">Pooja Service</li>
    </ol>
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">

                <div class="card-header">
                    <h3>Pending Request</h3>
                    <div class="d-md-flex justify-content-md-end">

                        <a class="btn btn-primary" href="addpooja.php" role="button">Add Pooja</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>PoojaName</th>
                                <th>PoojaImg</th>
                                <th>Approxtime</th>
                                <th>Poojareq</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                        $qry = "select * from pooja";
                        $result = $con->query($qry);
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['poojaid'];
                            $title = $row['poojatitle'];
                            $time = $row['approxtime'];
                            $req = $row['poojareq'];
                            $img = "img/" . $row['poojaimg'];
                            $pdf = "<a href='pdfs/$req' target='_blank'><i class='fa-solid fa-file-pdf fa-2x'></i></a>";
                            ?>
                            <tr>
                                <td>
                                    <?php echo $title ?>
                                </td>
                                <td><img src="<?php echo $img; ?>" height="300px" width="200px">
                                </td>
                                <td>
                                    <?php echo $time ?>
                                </td>
                                <td>
                                    <?php echo $pdf; ?>
                                </td>
                                <td>
                                    <?php
                                    echo "<a href='edit.php?id=$id'>Edit</a>";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "<a href='delete.php?id=$id' onclick='return mydelete()'>Delete</a>";
                                    ?>
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