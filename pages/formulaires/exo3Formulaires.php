<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Exercice 3 :
Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur HEX, une largeur, une hauteur,
un arrondie des bord (border-radius), et de générer un rectangle (ou carré) sur la page web.-->

<?php 
?>

<body>
<form action="" method="get">
        <label for="color"></label>
        <input type="text" id="hex" name="hex">
        <input type="text" id='width' name='width'>
        <input type="text" id='height'name='height'>
        <input type="text" id='border'name='border'>
        <button type="submit">submit</button>
    </form>
<div style="background-color : <?= $_GET['hex'] ?? '0'?>; height:<?= $_GET['height'] ?? '0'?>px;
            width:<?= $_GET['width'] ?? '0' ?>px; border-radius:<?= $_GET['border'] ??'0' ?>px;">

</div>   


</body>

</html>