<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title>Svrdlo</title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->                    
        <div class="page-content-header">
            <div style="text-align: center;"><h1>Svrdlo</h1></div>
        </div><hr>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php require_once '../templates/sidebar.php'; ?>
            </div>
            <div id="page-content-wrapper">
                <div id="product-content" class="page-content">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/Website/pages/products.php">Proizvodi</a></li>
                      <li class="breadcrumb-item"><a href="/Website/pages/product-group.php?group=survey">Svrdla</a></li>
                      <li class="breadcrumb-item active">Svrdlo</li>
                    </ol>
                    <img src="/Website/img/products/svrdlo/Borer550x840.png">

                    <p>Haglof Sweden je najveći svetski proizvođač priraštajnih svrdla. Postoji široka paleta modela, dužina, prečnika svrdla i veličina.</p><br>

                    <p>Vrh svrdla je izrađen od najkvalitetnijeg čelika sa PTFE presvlakom za zaštitu i smanjenje trenja. Ekstraktor se proizvodi od nerđajućeg čelika sa metalnom glavom i specijalno dizajniran za laku ekstrakciju izvrtka drveta.</p><br>

                    <p>Priraštajno svrdlo se takođe upotrebljava za kontrolu zagađenja, gustinu drveta, kontrolu prodiranja hemikalije, itd.</p><br>

                    <img src ="/Website/img/products/svrdlo/Core550x840.jpg"><br>


                </div>
            </div>
        </div>

        <?php require_once("../templates/footer.php"); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>