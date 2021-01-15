<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo5</title>
  </head>
  <body>
      <p>
      <?php
        function concatNumberString($number, $string){
          return $number . $string;
        }

        echo concatNumberString(10, " chaîne à concaténer");
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->