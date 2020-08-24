<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dolar = $_REQUEST['dolar'];
       
        $euro = $dolar * 1.18;

        echo "Dolares Ingresados : ".$dolar."<br>";
        echo "Conversion a Euros:  ".$euro;
        
    ?>

</body>
</html>