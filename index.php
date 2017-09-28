
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

						<div class="carousel-inner">
							<div class="item active" >
								<div class ="slide1">
									<img src = "img/headers/header.jpg" style = "width: 100%; height: 100%;"/>
								</div>
								<div class="carousel-caption">
								  <h1>GODEX</h1>
								  <h2> PROFESIONALNA OPREMA ZA ŠUMARSTVO</h2>
								  <h2><a href="/Website/pages/product-group.php?group=all" class="btn btn-primary btn-sm">Pogledajte Proizvode</a></h2>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
			<div class ="row">
				<div class ="col-lg-12">
					<div class = "featured-wrapper">
						<div style="text-align: left;"><h1>NAJPRODAVANIJI PROIZVODI</h1></div>
						<div class="featured-item">
							<h3>DP II - Kompjuterska Prečnica</h3>
							<img src="/Website/img/products/dp-ii/DPII_Jenny550x840.jpg">
							<p>Lider na tržištu i tehnički unapređena DP II prečnica - programirajte, modifikujte i dopunite je da odgovara vašim specifičnim potrebama merenja prečnika.</p>
							<a href="/Website/pages/dp-ii.php">Detaljnije</a>
						</div>
						<div class="featured-item">
							<h3>Vertex IV - Visinomer</h3>
							<img src="/Website/img/products/vertex-iv/VertexIVDist_550x840.jpg">
							<p>Naš najbolje prodvani sistem instrumenata za određivanje visine drveta u šumi.</p>
							<a href="/Website/pages/vertex-iv.php">Detaljnije</a>
						</div>
						<div class="featured-item">
							<h3>Krede</h3>
							<img src="/Website/img/products/krede/foerster_03.jpg">
							<p>U ponudi se nalaze visokokvalitetne šumske krede nemačkog proizvođača Bleispitz. Sve krede su testirane i proverene pre isporuke.</p>
							<a href="/Website/pages/krede.php">Detaljnije</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class = "spacer"></div>
		<div class = "footer"> <?php require_once("templates/footer.php"); ?> </div>
			 

		<script src = "js/jquery-3.2.1.js"></script>
		<script src = "js/bootstrap.min.js"></script>
	</body>
</html>