<?php 
  include "..\\top_p4.php";
  echo "Exercice 5";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre un nombre et une chaîne de caractères et qui renvoit la concaténation de ces deux paramètres.

  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        function concatNumberString($number, $string){
          return $number . $string;
        }

        echo concatNumberString(10, " chaîne à concaténer");
      ?>
      </p>
  <?php include "..\..\bottom_html.php";