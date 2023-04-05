<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1 Fonction</title>
</head>

<body>
    <!--Exercice 1 :
1
22
333
4444
55555
666666
7777777
88888888
Écrivez une fonction qui renvoie ce résultat, le nombre de lignes étant un paramètre.--->
    <main>
        <?php
        function palin($line)
        {
            for ($i = 0; $i <= $line; $i++) {
                echo (str_repeat($i, $i)) . '<br>';
            }
        }
        palin(8);
        ?>
    </main>
</body>

</html>