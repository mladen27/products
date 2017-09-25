<head>
	<meta http-equiv="X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
</head>

<body>
	<?php require_once '../templates/header.php' ?>
	<div class="container body-container">
		
            <div id="productslideshow" class="carousel slide custom-carousel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/Website/img/mantax1.png" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="/Website/img/mantax2.jpg" alt="Second slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#productslideshow" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productslideshow" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
	</div>
	
	<script src = "../js/jquery-3.2.1.js"></script>
	<script src = "../js/bootstrap.min.js"></script>

</body>
