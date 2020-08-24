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
     *Descripcion: Dado 2 variables efectuar la suma, resta, multiplicacion y division
     */


    $x = $_REQUEST['valor1'];
    $y = $_REQUEST['valor2'];




    echo "El primer valor ingresado fue: " .$x. "<br>";
    echo "El segundo valor ingresado fue: ".$y. "<br><br>";


    echo "El resultado de hacer la operacion SUMA es: ".($x+$y)."<br>";
    echo "El resultado de hacer la operacion RESTA es: ".($x-$y)."<br>";
    echo "El resultado de hacer la operacion MULTIPLICACION es: ".$x*$y."<br>";
    echo "El resultado de hacer la operacion DIVISION es: ".$x/$y."<br>";






    ?>
</body>
</html>