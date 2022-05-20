<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>

<?php
    //COmentari d'una línia
    /*Diverses línies 
        Segona Línia
    */
    $var1= "Contingut de la variable de text";
    $var2 = 56.9;
    $var3 = 10;
    $var4 = true;
?>

<?php
    echo "El contingut de la variable var1 és ".$var1."<br>";
    echo "El contingut de la variable var2 és <I>".$var2."</I><br>";
    echo "El contingut de la variable var3 és <I>".$var3."</I><br>";
    echo "La suma de les variables var2 i var3 és ".($var2+$var3);
?>
<br>
El contingut de la variable var1 és <?=$var1?><br>
El contingut de la varibale var2 és <I><?=$var2?></I><br>
El contingut de la varibale var3 és <I><?=$var3?></I><br>
La suma de les variables var2 i var3 és <I><?=($var2+$var3)?></I><br>
    
</body>
</html>