<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP4 exo3</title>
</head>
<body>
    <p>
    <?php
      function concatString($firstString, $lastString){
        return $firstString . $lastString;
      }

      echo concatString("Coucou", " tout le monde");
    ?>
    </p>
  
</body>
</html>

<!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines. -->