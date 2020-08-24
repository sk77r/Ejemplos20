<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>

<body>
    <?php
    //Generar un valor aleatorio entre 1 -100
    //Debe indicar si la sifra tiene 1,2 o 3 digitos

    $minimo = $_REQUEST['txtMinimo'];
    $maximo = $_REQUEST['txtMaximo'];

    $valor = rand($minimo, $maximo);
    echo "El valor sorteado es $valor<br>";
    if ($valor <= 9) {
        echo "Tiene un digito";
    }
    else
    {
        if($valor <100)
        {
            echo "Tiene dos digitos";
        }
        else{
            echo "Tiene tres digitos";
        }
    }

    ?>
</body>

</html>