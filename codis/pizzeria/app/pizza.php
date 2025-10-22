<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>RESULTAT</title>
  </head>
  <body>
    <font face="Arial">
      <?php
        $pvp = 10;     // preu base
        $IVA = 21;     // percentatge d'IVA
        $num_ingr = 0; // inicialitzem la variable

        echo "Has demanat la pizza bàsica amb:<br>";

        // si existeixen ingredients seleccionats
        if (isset($_GET['ingr']) && is_array($_GET['ingr'])) {
          foreach($_GET['ingr'] as $valor) {
            echo "* $valor<br>";
          }
          $num_ingr = count($_GET['ingr']);
        } else {
          echo "Cap ingredient extra<br>";
        }

        // càlcul del preu total
        $pvp_public = ((100 + $IVA) / 100) * ($pvp + $num_ingr);

        echo "<br><b>El preu és $pvp_public € (IVA inclòs)</b><br>";
      ?>
    </font>
  </body>
</html>

