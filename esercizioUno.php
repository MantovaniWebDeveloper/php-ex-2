<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio uno</title>
  </head>
  <body>
    <?php
      $varPassata = "Boolean";
     ?>
     <!--UTILIZZO LA FORMA CONTRATTA DEL IF COSI DA INIETTARE SUBITO LO STILE -->
     <h2 style="<?php echo($varPassata == "Boolean"  ? 'color:green;' :  'color:red;') ?>">Boolean</h2>

  </body>
</html>
