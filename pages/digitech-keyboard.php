<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>Digitech Keyboard</title>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>Digitech Keyboard</h1></div>
        </div><hr>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php require_once '../templates/sidebar.php'; ?>
            </div>
            <div id="page-content-wrapper">
                <div id="product-content" class="page-content">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/Website/pages/products.php">Proizvodi</a></li>
                      <li class="breadcrumb-item"><a href="/Website/pages/product-group.php?group=calipers">Prečnice</a></li>
                      <li class="breadcrumb-item active">Digitalna Tastatura</li>
                    </ol>
                    <img src="/Website/img/products/digitech-keyboard/DP_Keybord550x840.png">

                    <p>Koristeći Digitech tastaturu, unos različitih podataka u DP II kompjuterizovanu prečnicu će biti mnogo lakši.</p><br>

                    <p>Digitech tastatura je veoma pogodna kada prikupljamo obimne terenske podatke i kada koristimo alfa-numerički unos. Tastatura se koristi sa ili bez merne skale na DP II kompjuteru. Prilagođena je terenskim uslovima i vrlo je otporna.</p><br>

                    <img src ="/Website/img/products/digitech-keyboard/DPKeybord550x840.jpg"><br>



                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>