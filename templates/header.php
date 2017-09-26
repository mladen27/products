<?php
	$host = $_SERVER['HTTP_HOST'];
?>


<nav class="navbar navbar-inverse navbar-custom">
  	<div class="container-fluid">
		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
	  		</button>
	  		<a class="navbar-brand" href="/Website/index.php"><img src = "/Website/img/Logo/logo-navbar.png" style = "height: 100%" /></a>
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav max-height">
				<li class="active"><a href="/Website/index.php">Početna<span class="sr-only">(current)</span></a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/Website/pages/products.php">Proizvodi<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="/Website/pages/product-group.php?group=all">Svi Proizvodi</a></li>
			          <li><a href="/Website/pages/product-group.php?group=calipers">Prečnice</a></li>
			          <li><a href="/Website/pages/product-group.php?group=height">Visinomeri</a></li>
			          <li><a href="/Website/pages/product-group.php?group=chalk">Krede</a></li>
			          <li><a href="/Website/pages/product-group.php?group=survey">Svrdla</a></li>
			        </ul>
				</li>
				<li><a href="/Website/pages/contact.php">Kontakt</a></li>
				<li><a href="/Website/pages/about.php">O Nama</a></li>
				<li><a href="/Website/pages/news.php">Aktuelno</a></li>
				<li><a href="http://www.haglofsweden.com/index.php/en/" target="_blank">Haglof</a></li>
			</ul>
			<!--
			<form method="get" action="product-group.php" class="navbar-form navbar-right">
				<div class="form-group">
					<input id="key-work" type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Pretraži</button>
			</form>
		-->
			 <span class="navbar-right navbar-align-vert">Telefoni: 022/614-197, 062/614-197 | E-mail: godex@neobee.net</span>
		</div>
	</div>
</nav>	 

