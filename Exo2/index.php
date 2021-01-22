<?php 
  include "..\\top_p4.php";
  echo "Exercice 2";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
    <p>
    <?php
      function returnString($varString){
        return $varString;
      }

      echo returnString("Coucou");
    ?>
    </p>
  
<?php include "..\..\bottom_html.php";