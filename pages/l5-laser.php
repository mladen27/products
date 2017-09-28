<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>L5 - Laser</title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>L5 -Laser</h1></div>
        </div><hr>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php require_once '../templates/sidebar.php'; ?>
            </div>
            <div id="page-content-wrapper">
                <div id="product-content" class="page-content">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/Website/pages/products.php">Proizvodi</a></li>
                      <li class="breadcrumb-item"><a href="/Website/pages/product-group.php?group=height">Visinomeri</a></li>
                      <li class="breadcrumb-item active">L5 - Laser</li>
                    </ol>
                    <img src="/Website/img/products/l5-laser/L5_550x840.png">

                    <p>L5 Laser je instrument za premer visine, distance i nagiba. </p><br>

                    <p>L5 Laser je robustan instrument otporan na teške terenske uslove. Poseduje internu memoriju za skladištenje i obradu podataka i mogućnost prenosa podataka na eksterne uređaje putem Bluetooth i IR veze.</p><br>

                    <h2>Merenje distanci</h2>
                    <img src ="/Website/img/products/l5-laser/DistacneLaser_550x840.jpg"><br>
                    <p>Laser tehnologija je idealna za merenje dugih distanci. Raspon merenja je od 46 cm do 700 m. </p><br>

                    <h2>Merenje visina</h2>
                    <img src ="/Website/img/products/l5-laser/HGT_550x840.jpg"><br>
                    <p>Laser tehnologija je idealna za merenje dugih distanci. Raspon merenja je od 46 cm do 700 m.</p><br>

                    <h2>Merenje nagiba</h2>
                    <img src ="/Website/img/products/l5-laser/Angle_550x840.jpg"><br>
                    <p>L5 Laser prikazuje rezultate merenja nagiba u stepenima, gradima i procentima.</p><br>

                    
                    <h2>Specijalizovane fukcije</h2>
                    <p>L5 Laser ima ugrađene i specijalne funkcije. Najkorišćenije funkcije su Hazard Trees, koja identifikuje drveće koje ugrožava električne vodove, Delta Height funkcija koja meri opuštenost električnih vodova, kao i mnoge druge specijalizovane funkcije.  </p><br>      

                    <h2>Komunikacija</h2>
                    <p>L5 Laser komunicira sa eksternim uređajima Bluetooth i IR vezom. Takođe, rezultati premera mogu biti prebačeni i na DP II kompjuterizovanu prečnicu.</p><br>

                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>