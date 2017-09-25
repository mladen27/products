<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content = "IE = edge">
		<title>Contact page</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
	</head>

	<body>
		<?php require_once '../templates/header.php' ?>

		<div class="spacer">
            &nbsp;
        </div>
		<div class="container body-container">
			<div class = "row">
				<div class = "col-lg-5 col-lg-offset-1">
					<form>
						<legend><span class="glyphicon glyphicon-envelope"></span> Pošaljite Poruku</legend>
						<div class="form-group">
							<label for="firstname">Ime</label>
							<input type="text" class="form-control" id="firstname" placeholder="Vaše ime..." required>
						</div>
						<div class="form-group">
							<label for="lastname">Prezime</label>
							<input type="text" class="form-control" id="lastname" placeholder="Vaše prezime..." required>
						</div>
						<div class="form-group">
							<label for="city">Grad</label>
							<input type="text" class="form-control" id="city" placeholder="Odakle ste...">
						</div>
						<div class="form-group">
							<label for="mail">Email</label>
							<input type="mail" class="form-control" id="mail" placeholder="Vaš email..." required>
						</div>
						<div class="form-group">
							<label for="phonenumber">Broj Telefona</label>
							<input type="text" class="form-control" id="phonenumber" placeholder="Vaš broj telefona...">
						</div>
						<div class="form-group">
							<label for="message">Poruka</label>
							<textarea class="form-control" id="message" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Pošalji</button>
					</form>
				</div>
				<div class="col-md-3 col-lg-offset-2">
					<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Kontakt Informacije</legend>
						
						<address>
							<strong>Godex, doo.</strong><br>
							<span class="glyphicon glyphicon-home"></span> Vojislava Ilica 17<br>
							<span class="glyphicon glyphicon-map-marker"></span> Sremska Mitrovica, Serbia<br>
							<span class="glyphicon glyphicon-earphone"></span> +381/22-614-197<br>
							<span class="glyphicon glyphicon-phone"></span> +381/62-614-197 <br>
							<span class="glyphicon glyphicon-envelope"></span><a href="mailto:godex@neobee.net"> godex@neobee.net</a> <br>
						</address>
					</form>
				</div>
			</div>
		</div>

		<?php require_once("../templates/footer.php"); ?>
		
		<script src = "../js/jquery-3.2.1.js"></script>
		<script src = "../js/bootstrap.min.js"></script>

	</body>
</html>
