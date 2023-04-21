<!DOCTYPE html>
<html lang="en">
<!-- -->
<?php include("includes/navbar.php"); ?>

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
								<form>
									<div class="form-group">
										<span class="form-label">Full Name</span>
										<input class="form-control" type="text"
											placeholder="Enter a destination or hotel name" required />
									</div>
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="Email"
											placeholder="Enter a destination or hotel name" required />
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Date of Pooja</span>
												<input class="form-control" type="date"
													placeholder="Enter a destination or hotel name" />
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Poojari Name</span>
												<input class="form-control" type="text"
													placeholder="Enter a destination or hotel name" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<span class="form-label">Phone No</span>
										<input class="form-control" type="number"
											placeholder="Enter a destination or hotel name" required />
									</div>
									<div class="form-group">
										<span class="form-label">Pooja Name</span>
										<input class="form-control" type="text"
											placeholder="Enter a destination or hotel name" required />
									</div>
									<div class="form-group">
										<span class="form-label">Address</span>
										<input class="form-control" type="text"
											placeholder="Enter a destination or hotel name" required />
									</div>

									<div class="form-btn">
										<button class="submit-btn">Submit</button>
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