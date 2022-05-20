<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    $question = $_POST["subscribe"];
    if ($question=="1"){
        $question="SÍ";
    } else {
        $question="NO";
    }

    
    if($email=="")
    {
        ?>
            <h2>Error 1, falta un o més camps</h2>
        <?php
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        ?>
        <h2>Error 2, el mail no es valid</h2>
        <?php
    }
    else if($email!=$email2)
    {
        ?>
            <h2>Error 3, els emails no son iguals</h2>
        <?php
    }
    else 
    {
        ?>
            <h2>Informació</h2>
            <p>Email: <?=$email?></p>
            <p>Enviar publicitat: <?=$question?></p>
        <?php
    }

    
?>  