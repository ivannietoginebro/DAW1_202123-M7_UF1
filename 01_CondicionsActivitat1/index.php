<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat 1. Condicions</title>
</head>
<body>
<center><h1>Joc dels dos daus</h1></center>
<?php
$dau1 = rand(1,6);
$dau2 = rand(1,6);
?>
 <img src="img/<?=$dau1?>.svg" alt="dau <?=$dau1?>">
 <img src="img/<?=$dau2?>.svg" alt="dau <?=$dau2?>"><br><br>   
<?php
    if ($dau1 == $dau2){
        $msg = "Els dos daus mostrats són iguals";
    } else if ($dau1 > $dau2){
        $msg = "El primer dau és el més gran i el seu número és ".$dau1;
    } else {
        $msg = "El segon dau és el més gran i el seu número és ".$dau2;
    }

    echo '<p style="color:blue;">'.$msg.'</p>';
?>
</body>
</html>