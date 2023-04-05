<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<!--Exercice 2 :
Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX et de l'afficher en arrièreplan de la page web.
Instructions:
1. Créez une page HTML qui contient un formulaire pour la saisie d'une couleur HEX.
2. Utilisez le code PHP pour récupérer la valeur de l'input et l'afficher en arrière-plan de la page web en
utilisant le code CSS suivant: background-color: #HEX;.-->

<body style="background-color: <?= $_GET['hex'] ?? '#007fff' ?>">
    <main>
        <form action="" method="get">
            <label for="name"></label>
            <input type="text" id="hex" name="hex">
            <button type="submit">submit</button>
        </form>
    </main>

</body>

</html>