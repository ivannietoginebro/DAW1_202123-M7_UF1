<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activitat Matriu animals</title>
</head>
<body>
<h1>Activitat Matriu animals</h1>
<?php
    // Donada la següent matriu que representa animals:

    $animals = [
        ["perro", "perro", "https://es.wikipedia.org/wiki/Canis_familiaris"],
        ["gato", "gato", "https://es.wikipedia.org/wiki/Felis_silvestris_catus"],
        ["conejo", "conejo", "https://es.wikipedia.org/wiki/Oryctolagus_cuniculus"],
        ["zorro", "zorro", "https://es.wikipedia.org/wiki/Vulpini"],
        ["caballo", "caballo", "https://es.wikipedia.org/wiki/Equus_ferus_caballus"],
        ["vaca", "vaca", "https://es.wikipedia.org/wiki/Bos_taurus"],
        ["gallina", "gallina", "https://es.wikipedia.org/wiki/Gallus_gallus_domesticus"],
        ["pato", "pato", "https://es.wikipedia.org/wiki/Anas_platyrhynchos_domesticus"],
        ["cerdo", "cerdo", "https://es.wikipedia.org/wiki/Sus_scrofa_domestica"],
        ["oveja", "oveja", "https://es.wikipedia.org/wiki/Ovis_orientalis_aries"],
        ["", "", ""]
    ];

    /* On la primera columna es un animal, la segona es una imatge i la tercera es un link a Wikipedia

        1. Omplir la matriu amb 10 animals. La ultima fila sera buida (11 files).
        2. Es vol programar una aplicacio que de manera aleatoria mostri la imatge d'un animal amb el seu nom sota
            aquesta imatge i que fent click sobre ella, ens dirigeixi a la Wiki.
        3. S'ha de tenir en compte que si toca mostrar la ultima fila, mostrarem un missatge d'error informant
            que l'animal es desconegut.
        4. Les imatges dels animals, es guardaran en un directori anomenat img.
    */

    $numRandom = rand(0, count($animals)-1);


    if($animals[$numRandom][0] == ""){
        echo "Animal desconegut";
    }else{
?>
        <a href="<?=$animals[$numRandom][2]?>"><img src="img/<?=$animals[$numRandom][1]?>.jpg"></a><br>
        <p>Nom de l'animal: <?=$animals[$numRandom][0]?></p>
<?php
    }
?>
</body>
</html>