
<!doctype html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content = "IE = edge">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/Website/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
	</head>

	<body>
		<?php require_once 'templates/header.php' ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->
		
		<div class = "container fit-container">
			<div class = "row">
				<div class="col-lg-12">
					<div id="theCarousel" class="carousel slide custom-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
							<li data-target="#theCarousel" data-slide-to="1"> </li>
							<li data-target ="#theCarousel" data-slide-to="2"> </li>
						</ol >

						<div class="carousel-inner">
							<div class="item active" >
								<div class ="slide1">
									<img src = "img/headers/header.jpg" style = "width: 100%; height: 100%;"/>
								</div>
								<div class="carousel-caption">
								  <h1>GODEX</h1>
								  <h2> PROFESIONALNA OPREMA ZA ŠUMARSTVO</h2>
								  <h2><a href="#" class="btn btn-primary btn-sm">Pogledajte Proizvode</a></h2>
								</div>
							</div>		
							<a class="left carousel-control" href="#theCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"> </span>
							</a>
							<a class="right carousel-control" href="#theCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class ="row">
				<div class ="col-lg-12">
					<div class = "home-wrapper">
						<h1>Aktuelno</h1>
						<div class="home-item">
						</div>
						<div class="home-item">
						</div>
						<div class="home-item">
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>

		<div class = "footer"> <?php require_once("templates/footer.php"); ?> </div>
			 

		<script src = "js/jquery-3.2.1.js"></script>
		<script src = "js/bootstrap.min.js"></script>
	</body>
</html>