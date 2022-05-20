<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CERCLES ALEATORIS</title>
</head>
<body>
<H1>CERCLES DE COLORS NUMERATS</H1>
<?php
$cercles = rand(1,9);
if ($cercles == 1){
    $msg ="Hem generat ".$cercles." cercle";
} else {
    $msg ="Hem generat ".$cercles." cercles";
}
?>

<H2><?=$msg?></H2>

<table>
<tr>
<?php
for ($i=0; $i < $cercles ; $i++) { 
    $color = rand(1,360);
    $nombre = rand(1,50);
    ?>
    <td width="75">
        <svg width="70" height="70" font-size="30" >
            <circle cx="35" cy="35" r="30" fill="hsl(<?=$color?>,100%,50%)" />
            <text x="35" y="50" text-anchor="middle"><?=$nombre?></text>
        </svg>
    </td>
<?php } ?>
</tr>
</table>

</body>
</html>