<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 6</title>
</head>
<body>
<h1>Muestra el día de la Semana segun el numero seleccionado  </h1>    

<form action="proceso6.php" method="post" >
 <h2>Selecione un Numero</h2>

 <select name="num" id="num">
    <option value="Lunes" selected> 1 </option>
    <option value="Martes"> 2 </option>
    <option value="Miercoles"> 3 </option>
    <option value="Jueves"> 4 </option>
    <option value="Viernes"> 5 </option>
    <option value="Sabado"> 6 </option>
    <option value="Domingo"> 7 </option>
    
 </select>

 <input type="submit" value="Enviar"> 


</form>


</body>
</html>