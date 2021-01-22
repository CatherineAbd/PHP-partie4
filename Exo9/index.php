<?php 
  include "..\\top_p4.php";
  echo "Exercice 9";
  ?>
  <p class="topic">Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2. Elle doit renvoyer le plus grand des deux.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        function biggerNumber($number1, $number2){
          // if ($number1 > $number2){
          //   return $number1;
          // } elseif ($number2 > $number1){
          //   return $number2;
          // } else{
          //   return "égalité";
          // }

          // beaucoup plus simple !!!
          return max($number1, $number2);
        }

        function biggerXNumber(...$nb){
          rsort($nb);
          // le plus petit
          //sort($nb);
          return $nb[0];
        }

        echo "Résultat de la fonction biggerNumber : " . biggerNumber(5, 4);
        echo "<br>Résultat de la fonction biggerXNumber : " . biggerXNumber (5,80,46,247,3);
      ?>
      </p>

<?php include "..\..\bottom_html.php";
