<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3 Fonction</title>
</head>
<body>
    <!--Exercice 3 :
Écrivez une fonction qui renvoie le plus grand nombre contenu dans un tableau numéroté.--->
    <main>
    <?php
    $array = [1,2,3,4,5,6,7,8,9,10];
    function biggest($array){
        echo max($array);
    }
    biggest($array);
    ?>
    </main>
</body>
</html>