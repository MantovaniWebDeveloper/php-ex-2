<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio uno</title>
  </head>
  <body>
    <?php
      $varPassata = $_GET["password"];
     ?>
     <!--UTILIZZO LA FORMA CONTRATTA DEL IF COSI DA INIETTARE SUBITO LO STILE -->
     <h2 style="<?php echo($varPassata == "Boolean"  ? 'color:green;' :  'color:red;') ?>"><?php echo $varPassata ?></h2>

  </body>
</html>
