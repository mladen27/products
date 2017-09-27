<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/Website/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <title><?php ?></title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php'; 
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->
                <div id="theCarousel" class="carousel slide custom-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
                            <li data-target="#theCarousel" data-slide-to="1"> </li>
                            <li data-target ="#theCarousel" data-slide-to="2"> </li>
                        </ol >

                        <div class="carousel-inner">
                            <div class="item active" >
                                <div class ="slide1">
                                    <img src = "/Website/img/header2.jpg" style = "width: 100%; height: 100%;"/>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div style="text-align: center;"><h1>Proizvodi</h1></div><hr>
                        <div class="product-table">
                            <?php
                                if(isset($_GET['group'])){
                                    require_once '..\php\connect.php';
                                    $group = $_GET['group'];





                                    if(isset($_GET['key-word'])){ 
                                        mysql_query("SELECT * FROM proizvod
                                            WHERE (`ime` LIKE '%".$_GET['key-word']."%') OR (`kraciopis` LIKE '%".$_GET['key-word']."%')");
                                    } else {
                                        if($group == 'all'){
                                            $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.palias, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id;";
                                        } else {
                                            $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.palias, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE k.alias = '".$group."';";
                                        }
                                    }

                                    if($query_run = mysqli_query($link, $query)){
                                        //echo "<table border=1 frame=void rules=rows style = 'width: 100%'>";
                                        while($row = mysqli_fetch_assoc($query_run)){
                                            echo "<div class='panel panel-default panel-inline'>";


                                            echo "<div class='panel-heading'><a href='/Website/pages/".$row['palias'].".php'>".$row['ime']."</a></div>";
                                            echo "<div class='panel-body'><img style='width: 100%' src='/Website/img/products/".$row['alias']."/".$row['pId']."/default.jpg' style='width: 100%;'></div>";

                                            echo "</div>";
                                        }

                                        //echo "</table>";
                                    } else {
                                        echo mysqli_error($link);
                                    }


                                }
                            ?>
                        </div>

        <?php require_once("../templates/footer.php"); ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/Website/js/bootstrap.min.js"></script>
  
    </body>
</html>