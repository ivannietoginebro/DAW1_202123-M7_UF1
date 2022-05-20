<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recollir dades</title>
</head>
<body>
<?php
$nomalumne = $_POST["nomalumne"];
$correualumne = $_POST["correualumne"];
?>
<h1>Dades rebudes correctament</h1>
Les dades rebudes són:<br>
Nom: <?=$nomalumne?>
Correu: <?=$correualumne?>
<a href="index.html">-Tornar al formulari-</a>
</body>
</html>