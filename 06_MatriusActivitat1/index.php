<?php
//ENUNCIAT
/*
Dibuixar una graella en HTML de dimensions 20 x 20. Cada cel·la
d'aquesta graella contindrà un valor aleatori de 1 a 100. El color
de fons de cada cel·a vindrà donat segons el valor que contingui, és a dir,
si el valor està per sota de 50, el color de fons serà vermell amb el 
número en color blanc. En canvi, si el valor està per sobre de 50, el
color de fons serà verd amb el text en color negre.
A més, les files que siguin senars ens mostrarà la quantitat de nombres per sota de 50.
En canvi, les files que siguin parells es mostrarà la quantitat de nombre per sobre 50.
METODOLOGIA:
Primer haureu de crear una matriu de 20x20 amb tots els números generats de manera aleatòria.
Després, tornarem a recòrrer aquesta matrius per dibuixar la graella.

*/
?>
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
        $matriu = array();        
        for ($i=0; $i < 20; $i++) { 
            for ($j=0; $j < 20; $j++) { 
                $num = rand(1,100);
                $matriu[$i][$j] = $num;
            }
        }
     ?>

     <table>
        <?php
            for ($i=0; $i < count($matriu); $i++) { 
                $contMenor = 0;
                $contMajor = 0;
        ?>
                <tr>
                    <?php
                        for ($j=0; $j < count($matriu[$i]); $j++) { 
                            if($matriu[$i][$j] <= 50){
                                $estil = "color:white; background-color:red";
                                $contMenor++;
                            }else{
                                $estil = "background-color:green";
                                $contMajor++;
                            }
                            echo "<td style='".$estil."'>".$matriu[$i][$j]."</td>";
                        }

                        if($i % 2 == 0){
                            $estil = "background-color:blue; color:white";
                        }else{
                            $estil = "background-color:yellow";
                        }

                        echo "<td style='".$estil."'>".$contMajor."</td>";
                    ?>
                </tr>
        <?php
            }
        ?>
     </table>
</body>
</html>
