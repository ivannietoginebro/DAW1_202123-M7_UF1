<!-- Dissenya una petita aplicació que recolli les dades personals d'una persona 
        La nostra aplicació constará de dues pàgines:
        1. La primera pàgina demanarà les dades de la persona
        Nom i cognom: dos camps de text
        Edat: desplegable amb les opcions del 0 al 99
        Pes: camp de text
        Genere: radiobutton amb les opcions de Home, Dona, Altres
        Estat Civil: radiobutton amb les opcions Solter, casat o altres
        Aficions: checkbox amb les següents opcions: cinema, esport, literatura, còmics, videojocs, música, series.
        2. La segona pàgina mostrarà tota la infroamció introduida per l'usuari.
        Només validarem que tant el nom com el cognom no siguin buits.
        La resta de camps si no rebem dades, s'informarà amb un text de "sense dades".
        Aquesta petita aplicació s'entregarà el proper dilluns 16.
    -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="estilos.css">
    <title>Activitat Correu Complerta</title>
</head>
<body class="colorTotFons" style="margin-left: 40%; margin-top: 15%;">

<p class="titolFormulari">FORMULARI</p>
    <form action="recollirdades.php" method="post">

    <div class="colorFons">
        <p>Nom: 
        <input type="text" name="nom">*

        Cognom: 
        <input type="text" name="cognom">*

          Edat: 
            <select name="edat">
              
                <?php
                    $edat = 99;
                    for ($i = 0; $i <= $edat; $i++) 
                    {
                        ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php
                    }
                ?>  

            </select>

            </p> 
         Pes:
        <input type="text" name="pes"> <br><br>

          Genere: <br>
          <input type="radio" name="genere" value="Home">
          <label>Home</label><br>
          <input type="radio" name="genere" value="Dona">
          <label>Dona</label><br>
          <input type="radio" name="genere" value="Altres">
          <label >Altres</label>
      
          <div style="margin-left:100px; margin-top:-77px;">
          Estat Civil: <br>
          <input type="radio" name="estatCivil" value="Solter">
          <label>Solter</label><br>
          <input type="radio" name="estatCivil" value="Casat">
          <label>Casat</label><br>
          <input type="radio" name="estatCivil" value="Altres">
          <label >Altres</label>
         </div>
   
           <br>
           <p>Aficions:</p>

          <label><input type="checkbox" name="aficions[]" value="Cinema">Cinema</label><br>
          <label><input type="checkbox" name="aficions[]" value="Esport">Esport</label><br>
          <label><input type="checkbox" name="aficions[]" value="Literatura">Literatura</label><br>
          <label><input type="checkbox" name="aficions[]" value="Còmics">Còmics</label><br>
          <label><input type="checkbox" name="aficions[]" value="Videojocs">Videojocs</label><br>
          <label><input type="checkbox" name="aficions[]" value="Música">Música</label><br>
          <label><input type="checkbox" name="aficions[]" value="Series">Series</label><br>


          <br>
          <input class="boto" type="submit" value="Enviar Dades">  

    </div>  
    </from>
    


</body>
</html>
