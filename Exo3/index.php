<?php 
  include "..\\top_p4.php";
  echo "Exercice 3";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
    <p>
    <?php
      function concatString($firstString, $lastString){
        return "$firstString $lastString";
      }

      echo concatString("Coucou", "tout le monde");
    ?>
    </p>
  

<?php include "..\..\bottom_html.php";