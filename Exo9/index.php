<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo9</title>
  </head>
  <body>
      <p>
      <?php
        function biggerNumber($number1, $number2){
          if ($number1 > $number2){
            return $number1;
          } elseif ($number2 > $number1){
            return $number2;
          } else{
            return "égalité";
          }
        }

        echo "Résultat de la fonction biggerNumber : " . biggerNumber(5, 4);
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2. Elle doit renvoyer le plus grand des deux. -->

