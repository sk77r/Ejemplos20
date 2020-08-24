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
     $num3 = $_REQUEST['num3'];

     $prom = ($num1 +$num2 + $num3)/3;

    echo "Primera Nota introducida: " .$num1 ."<br>"; 
    echo "Segunda Nota introducida: " .$num2 ."<br>"; 
    echo "Tercera Nota introducida: " .$num3 ."<br><br>"; 

    echo "El promedio de las Notas es: " . round($prom,2)."<br><br>";


      
      if ($prom == 10) {
        echo "El promedio fue: Sobresaliente";
      } else {
          if ($prom >= 8 || $prom >= 9 )
                 {
                 echo "La promedio fue: Notable";
                }
           else{
                    if ($prom >= 6 || $prom >= 7 )
                    {
                        echo "La promedio fue: Bien";
                     }
                     else 
                     {
                        if ($prom >= 4 || $prom >= 5 )
                        {
                            echo "La promedio fue: Suficiente";
                         }
                         else 
                         {
                            echo "La promedio fue: Insuficiente";
                         }

                         
                     }

           }     
      }
      

    ?>  
</body>
</html>