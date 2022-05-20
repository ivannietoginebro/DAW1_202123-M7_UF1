<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array i Matrius</title>
</head>
<body>
<?php
$elmeuarray = array();
$elmeuarray[0]="el primer valor";
$elmeuarray[1]=4;
$elmeuarray[2]=true;
echo "El contingut de la posició 0 és ".$elmeuarray[0]."<br>";
echo "El contingut de la posició 1 és ".$elmeuarray[1]."<br>";
echo "El contingut de la posició 2 és ".$elmeuarray[2]."<br>";
echo "<br>";
for ($i=0; $i <count($elmeuarray) ; $i++) { 
    echo "El contingut de la posició ".$i." = ".$elmeuarray[$i]."<br>";
    //$elmeuarray[$i+1]="alguna cosa" > això provoca bucle infinit
}

$lamevamatriu = array();
$lamevamatriu[0][0]=1;
$lamevamatriu[0][1]=2;
$lamevamatriu[0][2]=3;
$lamevamatriu[1][0]=4;
$lamevamatriu[1][1]=5;
$lamevamatriu[1][2]=6;

for ($i=0; $i <count($lamevamatriu) ; $i++) { 
    for ($j=0; $j <count($lamevamatriu[$i]) ; $j++) { 
        echo "El contingut de la posició ".$i.", ".$j." = ".$lamevamatriu[$i][$j]." ";
    }
    echo "<br>";
}



?>





    
</body>
</html>