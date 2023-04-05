<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2 Tableaux</title>
</head>

<body>
    <!---Exercice 2 :
Écrivez un code PHP qui déclare un tableau associatif contenant les noms et les prix de 5 produits, puis affiche le
contenu de ce tableau à l'aide d'une boucle foreach.--->
    <main>
        <?php
        $grid = ["papaye" => '4', "frmage" => '6', "Flavien" => '-100000000'];
        foreach ($grid as $noms => $value) {
            echo($noms);
            echo($value);
        }
        ?>
    </main>
</body>

</html>