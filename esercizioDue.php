<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio due by Dario Mantovani</title>
  </head>
  <body>

    <?php
      /*
      creo un array contenente le partite di basket di un'ipotetica tappa del
      calendario. Ogni array avrà una squadra di casa e una squadra ospite.
      Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
      punti fatti dalla squadra in trasferta.
      */
      $partite = [
        [
          'squadraCasa' => 'Virtus',
          'squadraOspite' => 'Ferrara kleb',
          'puntiCasa' => 107,
          'puntiOspite' => 109,
        ],
        [
          'squadraCasa' => 'Armani milano',
          'squadraOspite' => 'New basket brindisi',
          'puntiCasa' => 97,
          'puntiOspite' => 102,
        ],
        [
          'squadraCasa' => 'Acquila basket trento',
          'squadraOspite' => 'Polisportiva dinamo',
          'puntiCasa' => 87,
          'puntiOspite' => 83,
        ],
      ];

      var_dump($partite);
     ?>

     <!-- Stampiamo a schermo tutte le
          partite con questo schema, tenendo conto che il punteggio potrebbe non
          essere disponibile
          Olimpia Milano - Cantù | 55-60-->

          <ul>
            <?php foreach ($partite as $partita): ?>
              <li><?php echo $partita["squadraCasa"]; ?> - <?php echo $partita["squadraOspite"]; ?> | <?php echo $partita["puntiCasa"]; ?> - <?php echo $partita["puntiOspite"]; ?></li>
            <?php endforeach; ?>
          </ul>

  </body>
</html>
