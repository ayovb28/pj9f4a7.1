<html>
  <head> 
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>RESULTAT</title>
  </head>
  <body>
    <font face="Arial">
      <?php
        $pvp = 10;    
        $IVA = 21;     
        $num_ingr = 0; 

        echo "Has demanat la pizza bàsica amb:<br>";

        if (isset($_GET['ingr']) && is_array($_GET['ingr'])) {
          foreach($_GET['ingr'] as $valor) {
            echo "* $valor<br>";
          }
          $num_ingr = count($_GET['ingr']);
        } else {
          echo "Cap ingredient extra<br>";
        }

        $pvp_public = ((100 + $IVA) / 100) * ($pvp + $num_ingr);

        echo "<br><b>El preu és $pvp_public € (IVA inclòs)</b><br>";
      ?>
    </font>
  </body>
</html>

