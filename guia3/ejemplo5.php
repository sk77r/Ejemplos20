<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 5</title>
</head>
<body>
    <h1>Asignatura según el día de la Semana </h1>

    <form action="proceso5.php" method="post">
        <h2>Ingrese el día de la Semana</h2>
         <select name="dia" id="dia">
             <option value = "Lunes" selected > Lunes</option>
             <option value = "Martes"  > Martes</option>
             <option value = "Miercoles"  > Miercoles</option>
             <option value = "Jueves"  > Jueves</option>
             <option value = "Viernes"  > Viernes</option>
             <option value = "Sabado"  > Sabado</option>
             <option value = "Domingo"  > Domingo</option>
                      
         </select>


        <input type="submit" value="Enviar">   
        
        </form>
</body>
</html>