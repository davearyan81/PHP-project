<?php
include("includes/navbar.php");
include("admin/config/dbcon.php");
$pooja_name = "";
$pandit_name = "";

if (isset($_POST['submit'])) {
	$pooja_name = $_POST['txttitile'];
	$pandit_name = $_POST['txtname'];
	$qry1 = "select * from pandit where pid='$pandit_name'";
	$result1 = $con->query($qry1);
	$row1 = $result1->fetch_assoc();
	$qry2 = "SELECT * FROM ((`poojapandit` INNER JOIN `pandit` ON poojapandit.pid=pandit.pid) 
	INNER JOIN `pooja` ON poojapandit.poojaid=pooja.poojaid) WHERE pooja.poojatitle='$pooja_name' AND pandit.pid='$pandit_name'";
	$result2 = $con->query($qry2);
	// echo $result2;
	$row2 = $result2->fetch_assoc();
}

if (isset($_POST["btn-submit"])) {
	$qry = "INSERT INTO `booking`(`name`, `email`, `pooja_name`, `poojari_name`, `phno`, `date`, `address`,`status`) VALUES ('$_POST[txtname]','$_POST[txtemail]','$_POST[txtpoojname]','$_POST[txtid]','$_POST[txtphno]','$_POST[txtdate]','$_POST[txtaddress]','pending')";
	$result = $con->query($qry);
	if ($result) {
		$to = "harnilkadia99@gmail.com";
		$sub = "booking";
		$body = '<!DOCTYPE html>
		<html>
		<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<style type="text/css">
		
		body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
		table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
		img { -ms-interpolation-mode: bicubic; }
		
		img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
		table { border-collapse: collapse !important; }
		body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
		
		
		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		}
		
		@media screen and (max-width: 480px) {
			.mobile-hide {
				display: none !important;
			}
			.mobile-center {
				text-align: center !important;
			}
		}
		div[style*="margin: 16px 0;"] { margin: 0 !important; }
		</style>
		<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
		
		
		<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
		For what reason would it be advisable for me to think about business content? That might be little bit risky to have crew member like them. 
		</div>
		
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
				
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
					<tr>
						<td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#F44336">
					   
						<div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
							<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
								<tr>
									<td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;" class="mobile-center">
										<h1 style="font-size: 36px; font-weight: 800; margin: 0; color: #ffffff;">Pooja.com</h1>
									</td>
								</tr>
							</table>
						</div>
						
						<div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;" class="mobile-hide">
						</div>
					  
						</td>
					</tr>
					<tr>
						<td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
							<tr>
								<td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
									<img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
									<h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
										Thank You For Your Booking!
									</h2>
								</td>
							</tr>
							<tr>
								<td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
									<p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iste ipsa numquam odio dolores, nam.
									</p>
								</td>
							</tr>
							<tr>
								<td align="left" style="padding-top: 20px;">
									<table cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
												Booking Details #
											</td>
											<td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
												
											</td>
										</tr>
										<tr>
											<td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
												Poojari Name
											</td>
											<td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
											' . " $_POST[txtpname]" . '
											</td>
										</tr>
										<tr>
											<td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
												Pooja Name
											</td>
											<td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
												' . "$_POST[txtpoojname]" . '
											</td>
										</tr>
										<tr>
											<td width="75%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
												Date of Pooja
											</td>
											<td width="25%" align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
												' . "$_POST[txtdate]" . '
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                                    Price Details #
                                                </td>
                                                <td width="25%" align="left" bgcolor="#eeeeee"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                    Poojari Price
                                                </td>
                                                <td width="25%" align="left"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                   ' . "$_POST[txtpprice]" . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                    Pooja Price
                                                </td>
                                                <td width="25%" align="left"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                   ' . " $_POST[txtpoojaprice]" . '
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>

							<tr>
							<td align="left" style="padding-top: 20px;">
								<table cellspacing="0" cellpadding="0" border="0" width="100%">
									<tr>
										<td width="75%" align="left"
											style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
											TOTAL
										</td>
										<td width="25%" align="left"
											style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; border-top: 3px solid #eeeeee; border-bottom: 3px solid #eeeeee;">
											'."$_POST[txtpprice]"+"$_POST[txtpoojaprice]".'
										</td>
									</tr>
								</table>
							</td>
						</tr>

						</table>
						
						</td>
					</tr>
					 <tr>
						<td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
							<tr>
								<td align="center" valign="top" style="font-size:0;">
									<div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
		
										<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
											<tr>
												<td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
													<p style="font-weight: 800;">Address</p>
													<p>' . "$_POST[txtaddress]" . '</p>
		
												</td>
											</tr>
										</table>
									</div>
									<div
                                            style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                                style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                    
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
								</td>
							</tr>
						</table>
						</td>
					</tr>
					
					<tr>
					<td align="center" style="padding: 35px; background-color: #ffffff;" bgcolor="#ffffff">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
							style="max-width:600px;">
							<tr>
								<td align="center">
									<img src="image/loginlogo.png" width="200" height="200"
										style="display: block; border: 0px; position:relative;top:-20px" />
								</td>
							</tr>
							<tr>
								<td align="center"
									style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;">
									<p
										style="font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;">
										Raju Complex Gurukul Rd, Memnagar, <br>Ahmedabad, Gujarat 380052
										
									</p>
								</td>
							</tr>
							<tr>
								<td align="left"
									style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;">
									<p
										style="font-size: 14px; font-weight: 400; line-height: 20px; color: #777777;">
										If you didnt create an account using this email address, please ignore this
										email or <a href="#" target="_blank"
											style="color: #777777;">unsusbscribe</a>.
									</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				</table>
				</td>
			</tr>
		</table>
			
		</body>
		</html>
		
		';
		$header = array(
			'From' => 'harnilkadia99@gmail.com',
			'MIME-Versio' => '1.0',
			'Content-type' => 'text/html; charset=iso-8859-1'
		);
		if (mail($to, $sub, $body, $header)) {
			header("location:thankyou.php");
		} else {
			echo "failed";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="assest/css/bootstrap5.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assest\css\style.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-push-5">
							<div class="booking-cta">
								<h1>Make your reservation</h1>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Animi facere, soluta magnam consectetur molestias itaque ad
									sint fugit architecto incidunt iste culpa perspiciatis
									possimus voluptates aliquid consequuntur cumque quasi.
									Perspiciatis.
								</p>
							</div>
						</div>
						<div class="col-md-4 col-md-pull-7">
							<div class="booking-form">
								<form method="post">
									<div class="form-group">
										<span class="form-label">Full Name</span>
										<input class="form-control" type="text" name="txtname"
											placeholder="Enter ypur Full name" required />
									</div>
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="Email" name="txtemail"
											placeholder="Enter your Email" required />
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Pooja Name</span>
												<input class="form-control" type="text" name="txtpoojname"
													value="<?= $pooja_name ?>" required />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Poojari Name</span>
												<input class="form-control" type="text" name="txtpname"
													value="<?= $row1['fname'] . ' ' . $row1['lname'] ?>" />
												<input type="hidden" name="txtid" value="<?= $pandit_name ?>">
												<input type="hidden" name="txtpprice" value="<?= $row2["price"] ?>">
												<input type="hidden" name="txtpoojaprice"
													value="<?= $row2["pprice"] ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<span class="form-label">Phone No</span>
										<input class="form-control" type="number" name="txtphno"
											placeholder="Enter your Phno" required />
									</div>

									<div class="form-group">
										<span class="form-label">Date of Pooja</span>
										<input class="form-control" type="date" name="txtdate"
											placeholder="Enter your date of pooja" />
									</div>
									<div class="form-group">
										<span class="form-label">Address</span>
										<textarea class="form-control" type="text" name="txtaddress"
											placeholder="Enter a Address" required></textarea>
									</div>

									<div class="form-btn">
										<button class="submit-btn" type="submit" name="btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>
<!-- This templates was made by Colorlib (https://colorlib.com) -->


</html>