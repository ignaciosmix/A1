<!DOCTYPE html>
<html>
<head>
   <title>Ejercicio 4</title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Guardamos el nombre en la variable $name
$name = $_POST['name'];
echo "<h3> Hola $name </h3>";
?>
</body>
</html>





