<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Exercice 4 :
Créez un formulaire qui permet de faire la somme de 2 nombres et affiche le résultat. Attention, il faut
vérifier les données reçues avant de faire le calcul, si une mauvaise valeur est rentrée, nous devrons
afficher une erreur à l'utilisateur.-->


<body>
    <main>
    <form action="" method="get">
        <input type="text" name="numOne" id="numOne">
        <input type="text" name="numTwo" id="numTwo">
        <button type="submit">Submit</button>
    </form>
    <p><?= $_GET['numOne'] + $_GET['numTwo'] ? : 'ERROR'?></p>
    </main>
</body>
</html>