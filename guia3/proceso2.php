<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $num1 = $_REQUEST['num1'];
       $num2 = $_REQUEST['num2'];

        echo "El Primer numero es: ".$num1."<br>";
        echo "El Segundo numero es: ".$num2."<br>";

        echo "El resultado de la multiplicacion es: ".$num1*$num2;


    ?>


</body>
</html>