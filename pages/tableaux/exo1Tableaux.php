<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1 Tableaux</title>
</head>
<body>
    <!--Exercice 1 :
Écrivez un code PHP qui déclare un tableau contenant les noms de 5 fruits, puis affiche le contenu de ce tableau à
l'aide d'une boucle.--->
<?php
$grid = ['pomme ',"poire ","banane ","fraise ","cerise "];
for ($i=0; $i < count($grid); $i++) { 
    echo$grid[$i];
};
?>
    
</body>
</html>