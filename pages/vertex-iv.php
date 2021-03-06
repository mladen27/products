<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>Vertex IV</title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>Vertex IV</h1></div>
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
                      <li class="breadcrumb-item active">Vertex IV</li>
                    </ol>
                    <img src="/Website/img/products/vertex-iv/VertexIV-T3_550x840.png">

                    <p>Vertex IV je najprodavaniji instrument za merenje visina u šumarstvu!</p><br>

                    <p>Vertex IV omogućuje precizne i pouzdane rezultate merenja u svim šumskim terenima i uslovima. Ovaj instrument omogućuje merenje visina, distanci, uglova i horizontalnih rastojanja.</p><br>

                    <p>Ultrazvučni sistem merenja distanci je vrlo pogodan za rad u šumarstvu, čime je moguće premer vršiti i u uslovima guste prizemne vegetacije. Instrument ima vrlo malu potrošnju baterije, tako da je omogućen dugotrajan rad na terenu.</p><br>

                    <h2>Merenje distance</h2>
                    <img src ="/Website/img/products/vertex-iv/T3Denst_550x840.jpg"><br>
                    <p>Sa proverenom ultra zvučnom metodom merenja i vrlo vidljivom končanicom, Verex IV nudi precizne distance i u gustom podrastu. Ultra zvučni metod je pogodan kod primernih površina za distanci do 30 metara u uslovima gustog podrasta, gde je meta slabo vidljiva. </p><br>

                    <h2>Merenje visina</h2>
                    <img src ="/Website/img/products/vertex-iv/VertexIVDist_550x840.jpg"><br>
                    <p>Vertex IV omogućava brzo i precizno merenje visina sa bilo koje tačke u odnosu na mereni objekat.</p><br>
                    <p>Postavljanjem transpondera na drvo, bira se bilo koja pozicija odakle je objekat najbolje vidljiv. Nanišani se transponder, pritisne enter dugme i očita razdaljina. Zatim se nanišani visina koju želimo da merimo i pritiskom na dugme, visina se pojavljuje na displeju. Sa iste tačke se može meriti neograničeni broj visina, a poslednje 4 su prikazane na displeju.</p><br>

                    <h2>Merenje ugla</h2>
                    <img src ="/Website/img/products/vertex-iv/VertexIVKrickan_550x840.jpg"><br>
                    <p>Vertex IV ima mogućnost merenja uglova na terenu i prikazivanja u stepenima, gradima i procentima. Kod primernih površina je pogodan za preračunavanje horizontalnih distanci.</p><br>

                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>