<?php
session_start();
include("includes/header.php");
include("config/dbcon.php");
if ($_SESSION['auth1']) {
    $id = $_SESSION['auth_id1'];
}
$qry = "select poojaid,poojatitle from pooja";
$result = $con->query($qry);
$qry1 = "select poojatitle,price from pooja p,poojapandit poj where p.poojaid=poj.poojaid";
$result1 = $con->query($qry1);
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <form action="insertpooja.php" method="post">
                                <input type="hidden" name="txthid" value="<?= $id; ?>">
                                <select class="form-select" name="txtsel" aria-label="Default select example">
                                    <option selected>--Select Pooja--</option>
                                    <?php while ($row = $result->fetch_assoc()): ?>
                                        <option value="<?= $row['poojaid']; ?>">
                                            <?= $row['poojatitle']; ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>

                                <div class="form-outline mt-4 mb-4">
                                    <input type="text" id="form1Example1" name="txtprice" class="form-control" />
                                    <label class="form-label" for="form1Example1">Price</label>
                                </div>
                                <button type="submit" name="btnsubmit" class="btn btn-primary">Add Pooja</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mt-5 container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Added Pooja</h3>
        </div>
        <div class="card-body">
            <table id="example" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Pooja Name</th>
                        <th>Pooja Price</th>
                    </tr>
                </thead>
                <?php
                $qry = "select poojatitle,price from poojapandit pooj, pooja p where pooj.poojaid=p.poojaid and pooj.pid='$id' group by poojatitle";
                $result = $con->query($qry);
                while ($row = $result->fetch_assoc()) {
                   
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['poojatitle']; ?>
                        </td>
                        <td>
                            <?php echo $row['price']; ?>
                        </td>
                        
                    </tr>
                <?php } ?>

            </table>

        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>