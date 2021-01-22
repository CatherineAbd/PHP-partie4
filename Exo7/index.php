  <?php 
    include "..\\top_p4.php";
    echo "Exercice 7";
  ?>
  <p class="topic">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être : <br>
  Homme<br>
  Femme<br><br>

  La fonction doit renvoyer en fonction des paramètres :<br><br>

  Vous êtes un homme et vous êtes majeur<br>
  Vous êtes un homme et vous êtes mineur<br>
  Vous êtes une femme et vous êtes majeure<br>
  Vous êtes une femme et vous êtes mineure<br><br>

  Gérer tous les cas.
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
      <p>
      <?php
        function gender_majority($gender, $age){
          if ($age < 18 && $gender == "homme"){
            return ("Vous êtes un homme et vous êtes mineur");
          } elseif ($age < 18 && $gender =="femme"){
            return ("Vous êtes une femme et vous êtes mineure");
          } elseif ($age >= 18 && $gender == "homme"){
            return ("Vous êtes un homme et vous êtes majeur");
          } else{
            return ("Vous êtes une femme et vous êtes majeure");
          }
        }

        echo gender_majority("homme", 16);
      ?>
  </p>
  <?php include "..\..\bottom_html.php";