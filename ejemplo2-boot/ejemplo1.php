<?php

if(isset($_REQUEST['txtNombre']) && isset($_REQUEST['txtEdad']))
{
    $nombre = $_REQUEST['txtNombre'];
    $edad = $_REQUEST['txtEdad'];

    if($edad >= "18")
    {
        echo "$nombre es mayor de edad";        
    }
    else
    {
        echo "$nombre es menor de edad";
    }
}
else
{
    echo "Debe completar los campos obligatorios";
}


?>