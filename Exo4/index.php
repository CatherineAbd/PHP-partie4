<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo4</title>
  </head>
  <body>
      <p>
      <?php
        function concatString($number1, $number2){
          if ($number1 > $number2){
            return "Le premier nombre est plus grand";
          } elseif ($number1 < $number2){
            return "Le premier nombre est plus petit";
          } else{
            return "Les 2 nombres sont identiques";
          }
        }

        echo concatString(10, 10);
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux -->