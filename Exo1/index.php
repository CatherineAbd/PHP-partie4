<?php 
  include "..\\top_p4.php";
  echo "Exercice 1";
  ?>
  <p class="topic">Faire une fonction qui retourne true.</p>
  <hr>
  <p class="topicTitle">Résultats</p>
    <p>
    <?php
      function returnTrue(){
        return "True";
      }

      echo returnTrue();
    ?>
    </p>
  
<?php include "..\..\bottom_html.php";