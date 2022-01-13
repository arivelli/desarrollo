<?php

if ($_POST){
// recibir informacion del formulario html (metodo post)
$nombre=$_POST['txNombre'];
$apellido=$_POST['txApellido'];

echo "Hola ".$nombre ," $apellido";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form action="desafio1.php" method="post">
        Nombre:
    <input type="text" name="txNombre" id="">
    <br/>
    <br/>
        Apellido:
    <input type="text" name="txApellido" id="">
    <br/>
    <br/>
    <input type="submit" value="Enviar">
    
    </form>
</body>
</html>