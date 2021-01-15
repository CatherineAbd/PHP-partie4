<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo8</title>
  </head>
  <body>
      <p>
      <?php
        function sumThreeNumbers($number1 = 3, $number2 = 4, $number3 = 5){
          return $number1 + $number2 + $number3;
        }
        echo "Appel de la fonction avec les valeurs par défaut, donc sans paramètre : " . sumThreeNumbers() . "<br>";
        echo "Appel de la fonction avec 1, 2, 16 en paramètres : " . sumThreeNumbers(1, 2, 16);
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.
Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments.
 -->
