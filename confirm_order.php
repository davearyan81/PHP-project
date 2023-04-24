<?php
session_start();

include("admin/config/dbcon.php");
$qry = "SELECT * FROM `checkout`";
$result = $con->query($qry);
$row = $result->fetch_assoc();
if (isset($_POST['submit'])) {
  unset($_SESSION['cart']);
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assest/css/confirm.css">
</head>

<body>
  <section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
              <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #FF4B2B;">
                  <?= $_SESSION['auth_user'] ?>
                </span>!</h5>
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0" style="color: #FF4B2B;">Your Order Confirmation</p>
              </div>
              <?php
              $total = 0;
              if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value):
                  $total += $value['price'] * $value['quantity'] ?>
                  <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-2">
                          <img src="<?= 'image/' . $value['image'] ?>" class="img-fluid" alt="Phone">
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0">
                            <?= $value['name'] ?>
                          </p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Qty:
                            <?= $value['quantity'] ?>
                          </p>
                        </div>
                        <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                          <p class="text-muted mb-0 small">Rs.
                            <?= $value['price'] * $value['quantity'] ?>
                          </p>
                        </div>
                      </div>
                      <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                    </div>
                  </div>
                <?php endforeach;
              } else {
                header("location:index.php");
              } ?>
              <div class="d-flex justify-content-between pt-2">
                <p class="fw-bold mb-0">Order Details</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> rs.
                  <?= $total ?>
                </p>
              </div>

              <div class="d-flex justify-content-between pt-2">
                <p class="text-muted mb-0">Order ID :
                  <?= $row['order_id'] ?>
                </p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="text-muted mb-0">Invoice Date :
                  <?= $row['date']; ?>
                </p>
              </div>

              <div class="d-flex justify-content-between mb-5">
                <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
              </div>
            </div>
            <div class="card-footer border-0 px-4 py-5"
              style="background-color: #FF416C; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                paid: <span class="h2 mb-0 ms-2">Rs.
                  <?= $total ?>
                </span></h5>
            </div>
            <div class="card-footer border-0 px-4 py-5">
              <form action="" method="post">
                <button type="submit" class="btn btn-danger" name="submit">Contine Shopping</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
<?php include("includes/scripts.php"); ?>