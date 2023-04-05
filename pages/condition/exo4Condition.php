<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4 Condition</title>
</head>

<body>
    <main>
        <!---Exercice 4 :
Écrivez un code PHP avec switch qui demande à l'utilisateur de saisir un jour de la semaine (le chiffre) et
affiche le jour suivant correspondant-->
        <?php
        $days = 2;
        switch ($days) {
            case '1':
                echo 'Le jour est lundi !';
                break;
            case '2':
                echo 'Le jour est mardi !';
                break;
            case '3':
                echo 'Le jour est mercredi !';
                break;
            case '4':
                echo 'Le jour est jeudi !';
                break;
            case '5':
                echo 'Le jour est vendredi !';
                break;
            case '6':
                echo 'Le jour est samedi !';
                break;
            case '7':
                echo 'Le jour est dimanche !';
                break;
            default:
                echo 'erreur entre un bon chiffre entre 1 et 7 !';
                break;
        }
        ?>
    </main>
</body>

</html>