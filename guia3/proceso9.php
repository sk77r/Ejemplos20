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
      $factorial=1;


      for ($i=1; $i <= $num; $i++) { 
        $factorial = $factorial * $i;
      }
     
      echo "RESULTADO"."<br><br>";
      echo "El factorial de $num es: $factorial";



    ?>
    
 </body>
</html>