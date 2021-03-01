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
				<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="Alldoctors.php">All Doctors</a></li>
				<li class="nav-item"><a class="nav-link" href="OurServices.php">Our Services</a></li>
				<li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
				<li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
			</ul>
		</div>
		
	</div>
</nav>
<!--Carousel slider-->
<section id="Carousel" class=" text-center text-light">
<div class="container-fluid">
	<div class="carousel slide" id="myslider" data-ride="carousel">
		<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/cover-2.jpg" class="image-1">
		<div class="carousel-caption  text-left caption col-md-4">

					<h2 class="display-4 text-dark">Health Care</h2>
					<p class="lead text-dark"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.LoremIpsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					
				</div>
			</div>
			<div class="carousel-item">
			<img src="img/cover-1.jpg" class="image-1">
		<div class="carousel-caption  text-left caption col-md-4">

					<h2 class="display-4 text-dark">Health Care</h2>
					<p class="lead text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					
					
				</div>
			</div>
		<div class="carousel-item">
			<img src="img/medicine.png" class="image-1">
		<div class="carousel-caption  text-left caption col-md-4">

					<h2 class="display-4 text-light">Health Care</h2>
					<p class="lead text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					
					
				</div>
			</div>
		</div>
		<ul class="carousel-indicators">
			<li data-target="#myslider" data-slide-to="0" class="active"></li>
			<li data-target="#myslider" data-slide-to="1"></li>
			<li data-target="#myslider" data-slide-to="2"></li>
			
		</ul>
		<a href="#myslider" data-slide="prev" class="carousel-control-prev">
			<span class="carousel-control-prev-icon">
				
			</span>
		</a>
			<a href="#myslider" data-slide="next" class="carousel-control-next">
			<span class="carousel-control-next-icon">
				
			</span>
		</a>
	   </div>
	 </div>
	</section>
<!--Boxex-->
<section id="Boxex" class="py-5 text-center">
	<div class="container">
		<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
				<div class="info-Authors mb-5">
					<h2 class="display-4 bg-light">Available Doctors</h2>
		
					
				</div>
		
	</div>
		<div class="row">
			
				            
				 <?php
				 $fileHandle = fopen("files/available.csv", "r");

					//Loop through the CSV rows.
					while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {

				        ?>   
			<div class="col-md-4 mt-3">
				<div class="card border-primary outline">

					<div class="card-body">
			
						<h4 class="mahu">
							<div>
						<a href="img/<?=$row[0]?>"><img src="img/<?=$row[0]?>" class="img-fluid picture-2 rounded-circle first-image mb-3" style="height: 200px;margin-bottom: 17px;width: 100%"></a>
					</div>
							<?= $row[1] . "<br />\n"; ?>
						</h4>
						<p class="text-center text-success"><?= $row[2] . "<br />\n"; ?></p>
					
						<p>
							<b><?= $row[3] . "<br />\n"; ?> </b> 
							<br>
						</p>
							
						
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
				<p class="lead">Copyright &copy; 2020 M-Medical Center</p>
				<span class="lead">Design by:<a href="#"class="text-light">  Munny </a><a href="#"class="text-light"> </a></span>
				
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