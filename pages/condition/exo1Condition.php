<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1 Condition</title>
</head>
<body>
    <!--Exercice 1 :
Écrivez un code PHP pour afficher le message "Bienvenue sur notre site." Si l'âge de l'utilisateur est
supérieur ou égal à 18 ans, sinon affichez "Vous n'êtes pas autorisé à accéder à ce site".-->
<?php
$age = 10;
$result = $age >= 18 ? "Vous avez l'age pour rentrez ici !" : "vous n'avez pas acces a ce compte !" ;
echo($result);
?>
</body>
</html>