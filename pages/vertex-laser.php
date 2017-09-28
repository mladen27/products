<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>VL5 - Vertex Laser</title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>VL5 Vertex Laser</h1></div>
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
                      <li class="breadcrumb-item active">VL5 - Vertex Laser</li>
                    </ol>
                    <img src="/Website/img/products/vertex-laser/VL5_550x840.png">

                    <p>VL5 Vertex Laser je vodeći instrument za efikasan premer visine, distance i nagiba. Odlični rezultati se dobijaju u svim okruženjima.</p><br>

                    <p>VL5 Vertex Laser dozvoljava da se odabere najpogodinij metod merenja za aktuelnu lokaciju i situaciju.</p><br>

                    <p>Ultrazvučni sistem merenja distanci je vrlo pogodan za rad u šumarstvu, čime je moguće premer vršiti i u uslovima guste prizemne vegetacije. Instrument ima vrlo malu potrošnju baterije, tako da je omogućen dugotrajan rad na terenu.</p><br>
                    <img src ="UltraljudPlot_550x840"><br>

                    <h2>Merenje distanci</h2>
                    <img src ="/Website/img/products/vertex-laser/DistacneLaser_550x840.jpg"><br>
                    <p>Instrument je zasnovan na kombinaciji ultrazvučne i laser metodologije. Za kratke distance i kod primernih površina u inventuri šuma gde su uslovi guste prizemne vegetacije, koristi se pouzdani ultrazvučni metod. Kod većih distanci do 700 metara, laserska tehnologija je idealna. </p><br>

                    <h2>Merenje visina</h2>
                    <img src ="/Website/img/products/vertex-laser/HGT_550x840.jpg"><br>
                    <p>Merenje visina se vrši odabirom metoda koji je najpogodini za konkretnu lokaciju, okruženje i situaciju. Postoji više metoda merenja visina i to koristeći jednu ili više tački na objektu, kao i koristeći ultrazvučnu ili lasersku metodologiju.</p><br>

                    <h2>Merenje nagiba</h2>
                    <img src ="/Website/img/products/vertex-laser/Angle_550x840.jpg"><br>
                    <p>VL5 Vertex Laser prikazuje rezultate merenja nagiba u stepenima, gradima i procentima.</p><br>

                    
                    <h2>Specijalizovane fukcije</h2>
                    <p>VL5 Vertex Laser ima ugrađene i specijalne funkcije. Najkorišćenije funkcije su Hazard Trees, koja identifikuje drveće koje ugrožava električne vodove, Delta Height funkcija koja meri opuštenost električnih vodova, kao i mnoge druge specijalizovane funkcije. </p><br>      

                    <h2>Komunikacija</h2>
                    <p>VL5 Vertex Laser komunicira sa eksternim uređajima Bluetooth i IR vezom. Takođe, rezultati premera mogu biti prebačeni i na DP II kompjuterizovanu prečnicu.</p><br>

                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>