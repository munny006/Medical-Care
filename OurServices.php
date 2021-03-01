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
				<li class="nav-item"><a class="nav-link" href="AllDoctors.php">All Doctors</a></li>
				<li class="nav-item active"><a class="nav-link" href="OurServices.php">Our Services</a></li>
				<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
				<li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
			</ul>
		</div>
		
	</div>
</nav>
<!--Home-started-->
	<section id="getstarted" class="py-5 text-center text-light">
		<div class="dark-overlay">
			<div class="container">
			<div class="row">
				<div class="col mt-5 pt-5">
					<h1 class="text-center text-light">Our Services</h1>
				</div>
				
			</div>
			</div>
			
		</div>
		</section>
		<!--Background-->
<section id="Background" class="py-5 text-center" style="background-color: #f6f7fa;">
	<div class="bala">
	<div class="container">
		<div class="row">
			<?php
				$fileHandle = fopen("files/services.csv", "r");
				//Loop through the CSV rows.
				while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
			?> 
			<div class="col-lg-4" style="padding-left:3px;padding-right: 3px;">
				<div class="card border-primary my-4">
					<div class="card-body">
						<img src="img/<?= $row[3]; ?>" alt="" style="height:140px;width:100%;">
						<h3 class="text-primary">
							<?= $row[0] . "<br />\n"; ?>
						</h3>
						<p class="">
							<?= $row[1] . "<br />\n"; ?>
						</p>
						<h4><span class="badge badge-warning"><?= $row[2]; ?> TK</span></h4>
					</div>
					
				</div>
			</div>
			<?php
				    }
				?>
		</div>
	</div>
		
	</div>
</section>
	<!--Footer-->
<footer id="footer-main" class="py-5 bg-dark text-center text-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="">Copyright &copy; 2020 M-Medical Center </p>
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