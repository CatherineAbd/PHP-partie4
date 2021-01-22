  <?php 
  include "..\\top_p4.php";
  echo "Exercice 10";
  ?>
  <p class="topic">Faire une fonction qui prend en paramètre : un nombre. Elle doit renvoyer le factoriel de ce nombre. <br>
  Bonus : faire une fonction récursive
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>
    <?php
    function factoriel($number)
    {
      $factoriel = 1;
      for ($i = 1; $i <= $number; $i++) {
        $factoriel *= $i;
      }
      return $factoriel;
    }

    // fonction php
    echo "Fonction php fact : " . gmp_fact(5);

    function factorielRecursive($number)
    {
      if ($number == 0) {
        return 1;
      } else {
        return $number * factorielRecursive($number - 1);
      }
    }
    echo "<br>Résultat de la fonction 'normale' : " . factoriel(5);
    echo "<br>Résultat de la fonction récursive : " . factorielRecursive(5);
    ?>
  </p>

<?php include "..\..\bottom_html.php";