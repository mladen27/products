
<?php
    $row = null;
    require_once '..\php\connect.php';
    $id = $_GET['product'];
    $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id;";

    if($query_run = mysqli_query($link, $query)){
        if($row = mysqli_fetch_assoc($query_run)){

        }
    } else {
        echo mysqli_error($link);
    }

?>
<div class="nav-side-menu">
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li class="sidebar-title">
                  <a href="/Website/pages/products.php"><i class="fa fa-dashboard fa-lg"></i><span class="vert-align">Products</span></a>
                </li>

                <li  data-toggle="collapse" data-target="#calipers" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i>&nbsp;Prečnice</a>
                </li>
                <ul class="sub-menu collapse" id="calipers">
                  <?php
                      $row = null;
                      require_once '..\php\connect.php';
                      $id = $_GET['product'];
                      $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE k.alias = 'calipers';";

                      if($query_run = mysqli_query($link, $query)){
                          if($row = mysqli_fetch_assoc($query_run)){

                          }
                      } else {
                          echo mysqli_error($link);
                      }

                      if($query_run = mysqli_query($link, $query)){
                          //echo "<table border=1 frame=void rules=rows style = 'width: 100%'>";
                          while($row = mysqli_fetch_assoc($query_run)){
                              echo "<li><a href='#'>";


                              echo $row['ime'];

                              echo "</a></li>";
                          }

                          //echo "</table>";
                      } else {
                          echo mysqli_error($link);
                      }
                    ?>
                </ul>


                <li data-toggle="collapse" data-target="#height" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>&nbsp;Visinomeri</a>
                </li>  
                <ul class="sub-menu collapse" id="height">
                  <?php
                      $row = null;
                      require_once '..\php\connect.php';
                      $id = $_GET['product'];
                      $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE k.alias = 'height';";

                      if($query_run = mysqli_query($link, $query)){
                          if($row = mysqli_fetch_assoc($query_run)){

                          }
                      } else {
                          echo mysqli_error($link);
                      }

                      if($query_run = mysqli_query($link, $query)){
                          //echo "<table border=1 frame=void rules=rows style = 'width: 100%'>";
                          while($row = mysqli_fetch_assoc($query_run)){
                              echo "<li><a href='#'>";


                              echo $row['ime'];

                              echo "</a></li>";
                          }

                          //echo "</table>";
                      } else {
                          echo mysqli_error($link);
                      }
                    ?>
                </ul>


                <li data-toggle="collapse" data-target="#survey" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i>&nbsp;Krede</a>
                </li>
                <ul class="sub-menu collapse" id="survey">
                  <?php
                      $row = null;
                      require_once '..\php\connect.php';
                      $id = $_GET['product'];
                      $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE k.alias = 'survey';";

                      if($query_run = mysqli_query($link, $query)){
                          if($row = mysqli_fetch_assoc($query_run)){

                          }
                      } else {
                          echo mysqli_error($link);
                      }

                      if($query_run = mysqli_query($link, $query)){
                          //echo "<table border=1 frame=void rules=rows style = 'width: 100%'>";
                          while($row = mysqli_fetch_assoc($query_run)){
                              echo "<li><a href='#'>";


                              echo $row['ime'];

                              echo "</a></li>";
                          }

                          //echo "</table>";
                      } else {
                          echo mysqli_error($link);
                      }
                    ?>
                </ul>

                <li data-toggle="collapse" data-target="#chalk" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i>&nbsp;Svrdla</a>
                </li>
                <ul class="sub-menu collapse" id="chalk">
                  <?php
                      $row = null;
                      require_once '..\php\connect.php';
                      $id = $_GET['product'];
                      $query = "SELECT p.id as pId, p.ime, p.kraciopis, p.duziopis, k.naziv, k.alias FROM proizvod p INNER JOIN kategorija k ON p.kategorija = k.id WHERE k.alias = 'chalk';";

                      if($query_run = mysqli_query($link, $query)){
                          if($row = mysqli_fetch_assoc($query_run)){

                          }
                      } else {
                          echo mysqli_error($link);
                      }

                      if($query_run = mysqli_query($link, $query)){
                          //echo "<table border=1 frame=void rules=rows style = 'width: 100%'>";
                          while($row = mysqli_fetch_assoc($query_run)){
                              echo "<li><a href='#'>";


                              echo $row['ime'];

                              echo "</a></li>";
                          }

                          //echo "</table>";
                      } else {
                          echo mysqli_error($link);
                      }
                    ?>
                </ul>

            </ul>
     </div>
</div>