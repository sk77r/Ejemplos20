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
     *Descripcion: Tabla de multiplicacion
    
    
     */


$num = $_REQUEST['num'];


echo "La tabla de Multiplicar del: " .$num." es"."<br><br>";
echo "<table border='1'>";


for ($i=1; $i<=10; $i++) 
{ 
    $multi = $num*$i;
    echo "<tr><td> $num*$i = $multi</td></tr>"; 
  
}


echo "</table>";

?>



</body>
</html>