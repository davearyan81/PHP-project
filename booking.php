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
}
if (isset($_POST["btn-submit"])) {
	$qry = "INSERT INTO `booking`(`name`, `email`, `pooja_name`, `poojari_name`, `phno`, `date`, `address`,`status`) VALUES ('$_POST[txtname]','$_POST[txtemail]','$_POST[txtpoojname]','$_POST[txtid]','$_POST[txtphno]','$_POST[txtdate]','$_POST[txtaddress]','pending')";
	$result = $con->query($qry);
	if ($result) {
		$to = "harnilkadia99@gmail.com";
		$sub = "booking";
		$body = '<!DOCTYPE html>
		<html
		  lang="en"
		  xmlns="http://www.w3.org/1999/xhtml"
		  xmlns:o="urn:schemas-microsoft-com:office:office"
		>
		  <head>
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width,initial-scale=1" />
			<meta name="x-apple-disable-message-reformatting" />
			<title></title>
		
			<style>
			  table,
			  td,
			  div,
			  h1,
			  p {
				font-family: Arial, sans-serif;
			  }
			</style>
		  </head>
		  <body style="margin: 0; padding: 0">
			<table
			  role="presentation"
			  style="
				width: 100%;
				border-collapse: collapse;
				border: 0;
				border-spacing: 0;
				background: #ffffff;
			  "
			>
			  <tr>
				<td align="center" style="padding: 0">
				  <table
					role="presentation"
					style="
					  width: 602px;
					  border-collapse: collapse;
					  border: 1px solid #cccccc;
					  border-spacing: 0;
					  text-align: left;
					"
				  >
					<tr>
					  <td
						align="center"
						style="padding: 20px 0 20px 0; background: #e2e7e8"
					  >
						<img
						  src="poojacom_new_logo-removebg-preview.png"
						  alt=""
						  width="300"
						  style="height: auto; display: block"
						/>
					  </td>
					</tr>
					<tr>
					  <td style="padding: 36px 30px 42px 30px">
						<table
						  role="presentation"
						  style="
							width: 100%;
							border-collapse: collapse;
							border: 0;
							border-spacing: 0;
						  "
						>
						  <tr>
							<style>
							  @import url("https://fonts.googleapis.com/css?family=Roboto:700");
		
							  body {
								font-family: "Roboto";
								background-color: #131417;
							  }
							  p {
								text-shadow: 0 0 7px rgba(255, 255, 255, 0.3),
								  0 0 3px rgba(255, 255, 255, 0.3);
							  }
		
							  .animation {
								height: 50px;
								overflow: hidden;
								margin-left: 1rem;
							  }
		
							  .animation > div > div {
								padding: 0.25rem 0.75rem;
								height: 2.81rem;
								margin-bottom: 2.81rem;
								display: inline-block;
							  }
		
							  .animation div:first-child {
								animation: text-animation 8s infinite;
							  }
		
							  .second div {
								background-color: #cd921e;
							  }
							  .third div {
								background-color: #c10528;
							  }
		
							  @keyframes text-animation {
								0% {
								  margin-top: 0;
								}
								10% {
								  margin-top: 0;
								}
								20% {
								  margin-top: -5.62rem;
								}
								30% {
								  margin-top: -5.62rem;
								}
								40% {
								  margin-top: -11.24rem;
								}
								60% {
								  margin-top: -11.24rem;
								}
								70% {
								  margin-top: -5.62rem;
								}
								80% {
								  margin-top: -5.62rem;
								}
								90% {
								  margin-top: 0;
								}
								100% {
								  margin-top: 0;
								}
							  }
							</style>
							<h1 style="color: white">
							  <section class="animation">
								<div class="third"><div>Pooja.Com</div></div>
								<div class="third"><div>Pooja.Com</div></div>
							  </section>
							</h1>
							<td style="padding: 0 0 36px 0; color: #153643">
							  <p>Their is a request to perform a pooja By : </p>
							  
							</td>
						  </tr>
						  <tr>
							<td style="padding: 0">
							  <table
								role="presentation"
								style="
								  width: 100%;
								  border-collapse: collapse;
								  border: 0;
								  border-spacing: 0;
								"
							  >
								<img src="" alt="" />
								<tr>
								  <td
									style="
									  width: 260px;
									  padding: 0;
									  vertical-align: top;
									  color: #153643;
									"
								  >
									<p
									  style="
										margin: 0 0 25px 0;
										font-size: 16px;
										line-height: 24px;
										font-family: Arial, sans-serif;
									  "
									></p>
								  </td>
								</tr>
							  </table>
							</td>
						  </tr>
						</table>
					  </td>
					</tr>
					<tr>
					  <td style="padding: 30px; background: #e2e7e8">
						<table
						  role="presentation"
						  style="
							width: 100%;
							border-collapse: collapse;
							border: 0;
							border-spacing: 0;
							font-size: 9px;
							font-family: Arial, sans-serif;
						  "
						>
						  <tr>
							<td style="padding: 0; width: 50%" align="left">
							  <p
								style="
								  margin: 0;
								  font-size: 14px;
								  line-height: 16px;
								  font-family: Arial, sans-serif;
								  color: #df6969;
								"
							  >
								&reg; Someone, Somewhere 2021<br /><a
								  href="http://www.example.com"
								  style="color: #df4f4f; text-decoration: underline"
								  >Unsubscribe</a
								>
							  </p>
							</td>
							<td style="padding: 0; width: 50%" align="right">
							  <table
								role="presentation"
								style="
								  border-collapse: collapse;
								  border: 0;
								  border-spacing: 0;
								"
							  >
								<tr>
								  <td style="padding: 0 0 0 10px; width: 38px">
									<a
									  href="http://www.twitter.com/"
									  style="color: #c55656"
									  ><img
										src="https://assets.codepen.io/210284/tw_1.png"
										alt="Twitter"
										width="38"
										style="height: auto; display: block; border: 0"
									/></a>
								  </td>
								  <td style="padding: 0 0 0 10px; width: 38px">
									<a
									  href="http://www.facebook.com/"
									  style="color: #ffffff"
									  ><img
										src="https://assets.codepen.io/210284/fb_1.png"
										alt="Facebook"
										width="38"
										style="height: auto; display: block; border: 0"
									/></a>
								  </td>
								</tr>
							  </table>
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
		header("location:thankyou.php");
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

	<title>Booking Form HTML Template</title>

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