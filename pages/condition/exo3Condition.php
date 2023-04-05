<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3 Condition</title>
</head>
<body>
    <!---Exercice 3 :
Écrivez un code PHP pour déterminer si une personne est admissible à un emprunt. Si son salaire est
supérieur ou égal à 50 000 $ et qu'elle a moins de 30 ans, affichez "Admissible à l'emprunt.", sinon
affichez "Non admissible à l'emprunt."-->
    <?php
    $age = 30;
    $salary = 50000;
    $result = $age >= 30 && $salary >= 50000 ? "vous etes eligible a l'emprunt ! " : "Vous n'etes pas eligible a l'emprunt";
    echo($result) 
    ?>
</body>
</html>