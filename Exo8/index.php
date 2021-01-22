<?php 
  include "..\\top_p4.php";
  echo "Exercice 8";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.
Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>
      <?php
        function sumThreeNumbers($number1 = 3, $number2 = 4, $number3 = 5){
          return $number1 + $number2 + $number3;
        }
        function sumXNumbers(...$nb){
          $result = 0;
          foreach ($nb as $nbr){
            $result += $nbr;
          }
          return $result;
        }
        echo "Appel de la fonction avec les valeurs par défaut, donc sans paramètre : " . sumThreeNumbers();
        echo "<br>Appel de la fonction avec 1, 2, 16 en paramètres : " . sumThreeNumbers(1, 2, 16);
        echo "<br>Appel de la fonction avec un nombre variable de paramètres :" . sumXNumbers(1,2,3,4);
      ?>
      </p>
<?php include "..\..\bottom_html.php";
