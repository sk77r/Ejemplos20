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
     *Descripcion: Mostrar un mensaje segun la hora ingresada
    
     */


    $nombre = $_REQUEST['txtNombre'];

    $hora = $_REQUEST['hora'];



    
    echo "La HORA selecciona fue: $hora <br><br>";
 


    if ($hora >= 6 && $hora <= 12  ) 
    {
        echo "Buenos Días "."<b>$nombre</b>";
    }
       else 
        {
         if ($hora >= 13  && $hora <= 20 )
             {
                 echo "Buenos Tardes "."<b>$nombre</b>";
                }
           else {
               echo "Buenos Noches "."<b>$nombre</b>";
                }
       }

           



?>


    
</body>
</html>