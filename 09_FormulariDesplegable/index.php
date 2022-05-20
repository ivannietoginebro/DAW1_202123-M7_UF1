<?php
include("inc/constants.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari amb desplegables</title>
</head>
<body>
    <form action="recollirdades.php" method="post">
        Nom: <input type="text" name="nomalumne" id="nomalumne"><br>
        Assignatura:
        <select name="assignaturaalumne" id="assignaturaalumne">
        <?php
            for ($i=0; $i <count($assignatures) ; $i++) { 
                echo "<option value='".$assignatures[$i][0]."'>".$assignatures[$i][1]."</option>";
            }
        ?>
        </select>
        
        <input type="submit" value="Enviar dades">
    </form>
    
</body>
</html>