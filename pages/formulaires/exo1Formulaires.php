<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<!--Exercice 1 :
Écrivez un formulaire de login qui demande à l'utilisateur de saisir son nom d'utilisateur et son mot de
passe, puis vérifiez ces informations pour déterminer si l'utilisateur peut accéder à un compte sécurisé.
Vous choisissez le mot de passe et le nom d'utilisateur du compte sécurisé que vous voulez. (Créer un
nouveau fichier php pour la page à sécuriser)-->
<body>
    <main>
        <form action="" method="get">
            <label for="name"></label>
            <input type="text" id="name" name="name">
            <input type="password" id="pwd" name="pwd">
            <button type="submit">submit</button>
        </form>
        <?php
        $name = $_GET['name'];
        $pwd = $_GET['pwd'];
        $good_user = 'root';
        $good_password = 'toor';
        if ($name == $good_user && $pwd == $good_password) {
            echo ($good_user . '  ' . $good_password);
        }
        ?>
    </main>

</body>

</html>