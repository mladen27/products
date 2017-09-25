<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/Website/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <title>Products</title>


        <script type="text/javascript">
            function load(phpfile){
                if(window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP')
                }

                xmlhttp.onreadystatechange = function () {
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById('page-content').innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', phpfile, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <?php
            require_once '../templates/header.php'; 
        ?>
        <div class="spacer">
            &nbsp;
        </div>
        <div id="wrapper">
            <div id="sidebar-wrapper">

            </div>
            <div id="page-content-wrapper">
                <div id="page-content" class="page-content">
                    <div class="container custom-container">

                        <div class="row new-row">
                            <ul>
                                <li style>
                                    <h3>Prečnice</h3>
                                    <p>Manuelne, digitalne i kompjuterizovane prečnice za precizno merenje prečnika u svim vrstama premera u šumarstvu i preradi drveta.</p>
                                    <a href = "product-group?group=calipers"><img src="/Website/img/precnice.jpg" class="product-category"></a>
                                </li>
                                <li>

                                    <h3><br>Visinomeri</h3>
                                    <p>Različiti modeli instrumenata za merenja visina, rastojanja i uglova u šumarstvu i ostalim terenskim poslovima.</p>
                                    <a href="product-group?group=height"><img src="/Website/img/visinomeri.jpg" class="product-category"></a>
                                </li>
                                <li>
                                    <h3><br>Krede</h3>
                                    <p>Krede i držači za krede za obeležavanje stabala i sortimenata u šumarstvu i preradi drveta.</p>
                                    <a href="product-group?group=chalk"><img src="/Website/img/krede.jpg" class="product-category"></a>
                                </li>                            
                                <li>
                                    <h3><br>Svrdla</h3>
                                    <p>Priraštajno svrdlo za merenje debljinskog prirasta i kvaliteta drveta - dostupno u različitim dimenzijama.</p>
                                    <a href="product-group?group=chalk"><img src="/Website/img/ostalo.jpg" class="product-category"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>