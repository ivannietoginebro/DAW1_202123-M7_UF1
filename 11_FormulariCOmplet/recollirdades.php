<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="estilos.css">
    <title>Recollir amb desplegable</title>
</head>

<body class="colorTotFons" style="margin-left: 40%; margin-top: 15%;">

    <?php
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $edat = $_POST["edat"];
    $pes = $_POST["pes"];
    $genere = $_POST["genere"];
    $estatCivil = $_POST["estatCivil"];
    $aficions = array();
 

    for ($i=0; $i < count($_POST["aficions"]); $i++) { 
        $aficions[$i] = $_POST["aficions"][$i];
    }
    ?>
<div class="colorFons">
    <?php if (!empty($nom) && !empty($cognom)) { ?>

    <h1>DADES REBUDES CORRECTAMENT</h1>
    <h3>LES DADES REBUDES SON:</h3>
    Nom: <?=$nom?><br>
    Cognom: <?=$cognom?><br>

    <?php
    if (!empty($edat)) { ?>
    Edat: <?=$edat?> Anys<br>
    <?php  } else { ?>
    <p>El camp EDAT está buit</p>
    <?php } ?>

    <?php
    if (!empty($pes)) { ?>
    Pes: <?=$pes?> kg<br>
    <?php  } else { ?>
    <p>El camp PES está buit</p>
    <?php } ?>

    <?php
    if (!empty($genere)) { ?>
    Genere: <?=$genere?><br>
    <?php  } else { ?>
    <p>El camp GENERE está buit</p>
    <?php } ?>

    <?php
    if (!empty($estatCivil)) { ?>
    Estat Civil: <?=$estatCivil?><br>
    <?php  } else { ?>
    <p>El camp ESTAT CIVIL está buit</p>
    <?php } ?>

    <?php
    if (!empty($aficions)) { ?>
    Aficions: 
    <?php
    for ($i=0; $i < count($_POST["aficions"]); $i++) { 
      echo $aficions[$i];
      echo ", ";
    } ?>
    <?php  } else { ?>
    <p>El camp AFICIONS está buit</p>
    <?php } ?>
    
    <?php } else { ?>
    <p>ERROR! Els camps NOM i COGNOM no poden estar buits.</p> 
    <?php } ?>
    <button class="boto"><a href="index.php" style="text-decoration-none">Tornar</a></button> 
</div>

</body>

</html>