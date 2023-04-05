<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4 Fonction</title>
</head>
<body>
    <!--Exercice 4 :
Faire une fonction qui permet de générer un tableau html à partir d’un tableau php.--->
    <main>
    <?php
    function arrayA (){
        $grid = ["aliment" => 'tomate','  salade','  oignon','  sauce', '  algerienne'];
        echo'<table>';
        echo"<tr>";
        foreach ($grid as $aliment => $value) {
            echo"<td>".$value.'</td>';
        }
        echo'</tr>';
        echo'</table>';
    }
    arrayA();
    ?>
    </main>
</body>
</html>