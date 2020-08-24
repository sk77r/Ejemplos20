<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $num = $_REQUEST['num'];
        //echo "Campo SELECCIONADO fue: ".$num."<br/><br/>"; 
        echo "El Resultado de la seleccion es:"."<br><br>";

        switch ($num)
        {
            case "Lunes": 
                echo "La opción 1 corresponde al: día Lunes";
            break;

            case "Martes": 
                echo "La opción 2 corresponde al: día Martes";
            break;

            case "Miercoles": 
                echo "La opción 3 corresponde al: día Miercoles";
            break;

            case "Jueves": 
                echo "La opción 4 corresponde al: día Jueves";
            break;

            case "Viernes": 
                echo "La opción 5 corresponde al: día Viernes";
            break;

            case "Sabado": 
                echo "La opción 6 corresponde al: día Sabado";
            break;

            case "Domingo": 
                echo "La opción 7 corresponde al: día Domingo";
            break; 
        }


    ?>  
</body>
</html>