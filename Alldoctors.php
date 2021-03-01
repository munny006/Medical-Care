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
				<li class="nav-item active"><a class="nav-link" href="AllDoctors.php">All Doctors</a></li>
				<li class="nav-item"><a class="nav-link" href="OurServices.php">Our Services</a></li>
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
					<h1 class="text-center text-light">All Doctors</h1>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</section>
	<!--All doctors-->
<section id="all-doctors" class="py-5 text-center" style="background-color: #f6f7fa;">
	<div class="container">
		<div class="row">
				<?php
				 	$fileHandle = fopen("files/alldoctors.csv", "r");
					//Loop through the CSV rows.
					while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
				?>  
			<div class="col-lg-4 mt-4">
				<div class="card border-primary hover">
					<div class="card-body">
						
						<h4 class="mahu">
								<div>
						<a href="img/<?=$row[0]?>"><img src="img/<?=$row[0]?>" class="img-fluid picture-2 rounded-circle first-image mb-3" style="height: 200px;margin-bottom: 17px;width: 100%"></a>
					</div>
							<?= $row[1] . "<br />\n"; ?>
						</h4>
						<p class="text-center text-success"><?= $row[2] . "<br />\n"; ?></p>
						<p>
							<p>
							<b> <?= $row[3] . "<br />\n"; ?></b> 
							<br>

									
					<span style="background: #ecf1ff;padding: 5px 20px 5px 20px;border-radius:7%">
						<a href="tel:01735465867"><b>0<?= $row[4]; ?> </b> </a>
					</span>
	
					</div>
					
				</div>
				</div>
				<?php
				    

				    }
				?>
		

				
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