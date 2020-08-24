<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

 /** 
     * @version 20082020
     * @author OScar Manuel Batres Castro
     * @carnet BC 100818
     *Descripcion: Calculo de la base de un Triangulo     
     */


    $x = $_REQUEST['base'];
    $y = $_REQUEST['altura'];

    $a = ($x*$y)/2;

    echo "El valor de la Base Ingresada es: " .$x. "<br>";
    echo "El valor de la Altura Ingresada es: ".$y. "<br><br>";

    echo "El valor del Area del Triangulo es: ".$a;




    ?>










</body>
</html>