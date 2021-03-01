<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">
<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>Medical Center</title>
</head>
<body>
<!--Nav-->
<nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-fixed">
	<div class="container">
		<a href="/doctor/index.php" class="navbar-brand">
			<img src="img/logo.png" class="img-fluid" width="30" height="30">
			<h3 class="d-inline align-middle text-light">M-Medical Center</h3>
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon">
				
			</span>
		</button>
		<div id="navbarNav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="/doctor/index.php">Home</a></li>
				<li class="nav-item "><a class="nav-link" href="AllDoctors.php">All Doctors</a></li>
				<li class="nav-item"><a class="nav-link" href="OurServices.php">Our Services</a></li>
				<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
				<li class="nav-item active"><a class="nav-link" href="Contact.php">Contact</a></li>
			</ul>
		</div>
		
	</div>
</nav>
<!--started-->
	<section id="started" class="py-5 text-left text-light">
		<div class="dark-overlay">
			<div class="container">
			<div class="row">
				<div class="col-md-12 mt-5 pt-5">
					<h1 class="text-center text-light"></h1>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</section>
<!--Contect-->
<section id="Contect" class="py-5 bg-light">
	<div class="container">
		<h2 class="text-center">Contact us</h2>
		<h2 class="text-center">-------</h2>
		<p class="text-center">
			Get connected with us with given information here. We are available 24/7. So you can contact us at any time. We will try our best to give our best servie at all the times.
		</p>
		<style>
			.card {
			  color: rgba(256,256,256,1);
			  background: rgba(0,0,0,.5);
			  margin: 0;
			  box-shadow: 0 8px 20px #555, 0 8px 30px #555;
			}
		</style>
		<div class="row">
			<div class="col-lg-4 mt-4">
				<div class="card" style="background: teal;">
					<div class="card-body">
						<div class="row" style="border: 1px solid;border-radius: 50%;width: 90px;height: 90px;margin-left: auto;margin-right: auto;background: darkgray;">
							<i class="fa fa-envelope" style="border-radius: 50%;width: 129px;height: 118px;margin-left: auto;margin-right: auto;text-align: center;margin-top: 26%;font-size: 44px;"></i>
				     </div>
				    <br/>
					<p class="text-center">admin@email.com</p>
	
					</div>
				</div>
			</div>

			<div class="col-lg-4 mt-4">
				<div class="card" style="background: teal;">
					<div class="card-body">
						<div class="row" style="border: 1px solid;border-radius: 50%;width: 90px;height: 90px;margin-left: auto;margin-right: auto;background: darkgray;">
							<i class="fa fa-phone" style="border-radius: 50%;width: 129px;height: 118px;margin-left: auto;margin-right: auto;text-align: center;margin-top: 26%;font-size: 44px;"></i>
				     </div>
				    <br/>
					<p class="text-center">
						<a href="tel:01732888234" style="text-decoration: none;color: white;">01732888234</a>
					</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 mt-4">
				<div class="card" style="background: teal;">
					<div class="card-body" style="height: 194px">
						<div class="row" style="border: 1px solid;border-radius: 50%;width: 90px;height: 90px;margin-left: auto;margin-right: auto;background: darkgray;">
							<i class="fa fa-link" style="border-radius: 50%;width: 129px;height: 118px;margin-left: auto;margin-right: auto;text-align: center;margin-top: 26%;font-size: 44px;"></i>
				     </div>
				    <br/>
					<p class="text-center">
						<a href="http://www.facebook.com" class="text-white" style="text-decoration: none" target="_blank">
							<i class="fa fa-facebook mr-2 fa-border fa-lg p-2"></i>
						</a>
						<a href="http://www.twitter.com" class="text-white" style="text-decoration: none" target="_blank">
							<i class="fa fa-twitter mr-2 fa-border fa-lg p-2"></i>
						</a>
						<a href="http://www.linkedin.com" class="text-white" style="text-decoration: none" target="_blank">
							<i class="fa fa-linkedin fa-border fa-lg p-2"></i>
						</a>
						
					</p>
	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	
	
<!--Footer-->
<footer id="footer-main" class="py-5 bg-dark text-center text-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="lead">Copyright &copy; 2020 M-Medical Center </p>
				<span class="lead">Design by:<a href="#"class="text-light">  Munny </a><a href="#"class="text-light"></a></span>
				
			</div>
			
		</div>
		
	</div>
	
</footer>

        <script src="js/jquery2.js"></script>
        <script src="js/munny.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/navbar-fixed.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </body>
    </html>