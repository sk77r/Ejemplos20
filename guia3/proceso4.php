<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $base = $_REQUEST['base'];
    $altura = $_REQUEST['altura'];

    $area = $base*$altura;

    echo "El valor de la base ingresada es: " .$base. "<br>";
    echo "El valor de la altura ingresada es: ".$altura. "<br>";

    echo "El valor del Area del Rectangulo es: ".$area;




    ?>
</body>
</html>