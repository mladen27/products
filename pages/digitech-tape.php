<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>Digitalna Traka</title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>Digitalna Traka</h1></div>
        </div><hr>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php require_once '../templates/sidebar.php'; ?>
            </div>
            <div id="page-content-wrapper">
                <div id="product-content" class="page-content">
                    <img src="/Website/img/products/digitech-tape/DigitechTape1550x840.png">

                    <p>Digitalna traka je dodatak za DP II prečnicu i koristi se za unapređeni premer dužine sortimenata u šumarstvu.</p><br>

                    <p>Digitalna traka je elektronski digitalni merni dodataka za DP II kompjuterizovanu prečnicu. Dužina trupca se meri direktno u kompjuter prečnice i omogućuje operateru na terenu efikasan rad bez potencijalnih grešaka kod premera.</p><br>

                    <p>Digitalna traka ima primenu i kod kalibracije harvesterskih mašina.</p><br>

                    <p>Digitalna traka se može uz odgovarajući program na DP II prečnici koristiti i za premer obima stabla, a zatim preračunavati u prečnik.</p><br>

                    <img src ="/Website/img/products/digitech-tape/DPIIDTT550x840.jpg"><br>


                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>