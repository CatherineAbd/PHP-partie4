<?php 
  include "..\\top_p4.php";
  echo"Exercice 6";
  ?>
  <p class="topic">Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaîne de la forme :   <br>
  Bonjour + nom + prénom + , tu as + age + ans.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        function identity($firstname, $lastname, $age){
          return "Bonjour $firstname $lastname, tu as $age ans";
        }

        echo identity("Martin", "Dupont", 16);
      ?>
      </p>
    
<?php include "..\..\bottom_html.php";