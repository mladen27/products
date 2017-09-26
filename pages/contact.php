<!doctype html>
<html>
	<head>		
		<script src = "../js/jquery-3.2.1.js"></script>
		<script src = "../js/bootstrap.min.js"></script>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content = "IE = edge">
		<title>Contact page</title>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />

		<script>
		    $(document).ready(function() {
	            $('.text-danger').hide();
	            $('.text-success').hide();
		        $('form').on('submit', function (e) {
		            e.preventDefault();
		            var error = false;

		            if (!$('#firstname').val()) {
		                $('#firstname-error').html('Niste uneli ime.');
		                $('#firstname-error').slideDown();
		                error = true;
		            } else {
		                $('#firstname-error').html('');
		            }

		            if (!$('#lastname').val()) {
		                $('#lastname-error').html('Niste uneli prezime.');
		                $('#lastname-error').slideDown();
		                error = true;
		            } else {
		               	$('#lastname-error').html('');
		            }

		            if (!$('#message').val()) {
		                $('#message-error').html('Molim vas unesite poruku.');
		                $('#message-error').slideDown();
		                error = true;
		            } else {
		                $('#message-error').html('');
		            }

		            if(!error) {
		            	$('#message-info').html('Poruka uspesno poslata');
		            	$('#message-info').slideDown();
		            } else {
		            	$('message-info').html('');
		            }
		            
		        }); 
		    });

		</script>
	</head>

	<body>
		<?php require_once '../templates/header.php' ?>

		<div class="spacer">
            &nbsp;
        </div>
		<div class="container body-container">
			<div class = "row">
				<div class = "col-lg-5 col-lg-offset-1">
					<form action="../send-message.php" method="post">
						<legend><span class="glyphicon glyphicon-envelope"></span> Pošaljite Poruku</legend>
						<div class="form-group">
							<label for="firstname">Ime *</label>
							<input type="text" class="form-control" id="firstname" placeholder="Vaše ime...">
							<p id = "firstname-error" class = "text-danger"></p>
						</div>
						<div class="form-group">
							<label for="lastname">Prezime *</label>
							<input type="text" class="form-control" id="lastname" placeholder="Vaše prezime...">
							<p id = "lastname-error" class = "text-danger"></p>
						</div>
						<div class="form-group">
							<label for="city">Grad</label>
							<input type="text" class="form-control" id="city" placeholder="Odakle ste...">
						</div>
						<div class="form-group">
							<label for="mail">Email *</label>
							<input type="mail" class="form-control" id="mail" placeholder="Vaš email...">
							<p id = "email-error" class = "text-danger"></p>
						</div>
						<div class="form-group">
							<label for="phonenumber">Broj Telefona</label>
							<input type="text" class="form-control" id="phonenumber" placeholder="Vaš broj telefona...">
						</div>
						<div class="form-group">
							<label for="message">Poruka *</label>
							<textarea class="form-control" id="message" rows="3"></textarea>							
							<p id = "message-error" class = "text-danger"></p>
						</div>
						<p id="message-info" class="text-success"></p>
						<button type="submit" class="btn btn-primary">Pošalji</button>
					</form>
				</div>
				<div class="col-md-3 col-lg-offset-2">
					<form>
						<legend><span class="glyphicon glyphicon-globe"></span> Kontakt Informacije</legend>
						
						<address>
							<strong>Godex, doo.</strong><br>
							<span class="glyphicon glyphicon-home"></span> Vojislava Ilića 17<br>
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


	</body>
</html>
