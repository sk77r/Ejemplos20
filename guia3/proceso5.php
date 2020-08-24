<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dia = $_REQUEST['dia'];
        
        echo "Campo SELECCIONADO fue: ".$dia."<br/><br/>";

        if($dia == "Lunes")
        echo "Dispositivos de Redes";
            elseif ($dia == "Martes")
            echo "Programación IV  ";
                elseif ($dia == "Miercoles")
                echo "Dispositivos de Redes";
                    elseif ($dia == "Jueves")
                    echo "Programación IV";
                        elseif ($dia == "Viernes")
                        echo "No Posee Carga Académica  ";
                            elseif ($dia == "Sabado")
                            echo "Administracion de Base de Datos";
                                elseif ($dia == "Domingo")
                                echo "No Posee Carga Académica  ";

      
    

    ?>  
</body>
</html>