<?php 
  include "..\\top_p4.php";
  echo "Exercice 4";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : <br>
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br>
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br>
Les deux nombres sont identiques si les deux nombres sont égaux
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        function compareInt($number1, $number2){
          if ($number1 > $number2){
            return "Le premier nombre est plus grand ($number1, $number2)";
          } elseif ($number1 < $number2){
            return "Le premier nombre est plus petit ($number1, $number2)";
          } elseif ($number1 == $number2){
            return "Les 2 nombres sont identiques ($number1, $number2)";
          } else{
            return "veuillez entrer des paramètres valides";
          }
        }

        echo compareInt(10, 10);
      ?>
      </p>

<?php include "..\..\bottom_html.php";