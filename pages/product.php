<?php
    $row = null;
    if(isset($_GET['product'])){
        require_once '..\php\connect.php';
        $id = $_GET['product'];
        $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE p.id = '".$id."';";

        if($query_run = mysqli_query($link, $query)){
            if($row = mysqli_fetch_assoc($query_run)){

            }
        } else {
            echo mysqli_error($link);
        }


    } else {
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Website/css/bootstrap.css">
        <link rel="stylesheet" href="/Website/css/style.css">
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/Website/img/Logo/logo-navbar.png" sizes="16x16" />
        <link href="https://fonts.googleapis.com/css?family=Oswald" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
            require_once '../templates/header.php';
        ?>
        <!--<div class="spacer">
            &nbsp;
        </div>-->
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php require_once '../templates/sidebar.php'; ?>
            </div>
            <div id="page-content-wrapper">
                <div id="page-content" class="page-content">
                    <div class="page-content-header">
                        <h1><?php echo $row['ime']; ?><span class="label label-info"></span></h1>
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