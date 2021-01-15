<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 exo7</title>
  </head>
  <body>
      <p>
      <?php
        function gender_majority($gender, $age){
          if ($age < 18 AND $gender == "homme"){
            return ("Vous êtes un homme et vous êtes mineur");
          } elseif ($age < 18 AND $gender =="femme"){
            return ("Vous êtes une femme et vous êtes mineure");
          } elseif ($age >= 18 AND $gender == "homme"){
            return ("Vous êtes un homme et vous êtes majeur");
          } else{
            return ("Vous êtes une femme et vous êtes majeure");
          }
        }

        echo gender_majority("homme", 16);
      ?>
      </p>
    
  </body>
</html>

<!-- Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme  

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure

Gérer tous les cas. -->