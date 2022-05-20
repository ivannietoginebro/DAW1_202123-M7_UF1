<?php
include("inc/constants.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recollirs dades formulari</title>
</head>
<body>
<?php
$nomalumne = $_POST["nomalumne"];
$assignaturaalumne = $_POST["assignaturaalumne"];
for ($i=0; $i <count($assignatures) ; $i++) { 
    if ($assignaturaalumne==$assignatures[$i][0]){
        $nomassignaturausuari = $assignatures[$i][1];
    }
}

?>
<h1>Dades rebudes correctament</h1>
Les dades rebudes són:<br>
Nom: <?=$nomalumne?><br>
Assignatura: <?=$nomassignaturausuari?><br>
<a href="index.php">-Tornar al formulari-</a>
    
    
</body>
</html>