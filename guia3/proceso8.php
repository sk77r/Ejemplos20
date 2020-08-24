<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

   $max = $_REQUEST['max'];
   $min = $_REQUEST['min'];

   $numero=5;

   for($i=$min;$i<=$max;$i++)   {
	if($i%$numero==0){
	 echo $i." es múltiplo de ".$numero."<br>";
	}
}

    ?>
</body>
</html>

