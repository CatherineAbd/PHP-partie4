<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo10</title>
  </head>
  <body>
      <p>
      <?php
        function factoriel($number){
          $factoriel = 1;
          for ($i=1; $i<=$number; $i++){
            $factoriel *= $i;
          }
          return $factoriel;
        }

        function factorielRecursive($number){
          if ($number==0){
            return 1;
          } else{
            return $number * factorielRecursive($number-1);
          }
          // if ($number > 1){
          //   $number--;
          //   factorielRecursive($number);
          //   echo 'Recurs $number=' . $number . '<br>';
          //   // return factorielRecursive($number--) * $number;
          // } else{
          //   echo "<br>sortie de la récursive number= $number<br>";
          //   return $number;
          // }
          
        }
        echo "Résultat de la fonction 'normale' : " . factoriel(4);
        echo "<br>Résultat de la fonction récursive : " . factorielRecursive(4);
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend en paramètre : un nombre. Elle doit renvoyer le factoriel de ce nombre.

Bonus : faire une fonction recursive -->
