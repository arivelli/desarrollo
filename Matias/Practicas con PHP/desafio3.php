<?php
 if($_POST){
     
     $txNombre=$_POST['txNombre'];
     $txApellido=$_POST['txApellido'];
     $txNacionalidad=$_POST['txNacionalidad'];
     $edad=$_POST['edad'];

     echo "Hola ".$txNombre." ".$txApellido." programador ".$txNacionalidad." de ".$edad." años";




 }

 ?>

 <br/>
 <br/>
 <br/>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action= "desafio3.php" method="post">
        Nombre:    
        <input type="text" name="txNombre" id="">
        <br/>
        Apellido:  
        <input type="text" name="txApellido" id="">
        <br/>
        Nacionalidad:    
        <input type="text" name="txNacionalidad" id="">
        <br/>
        Edad:
        <input type="int" name="edad" id="">
        <br/>
        <br/>
        <br/>
        <input type="submit" value="Enviar datos">
    </form>
    
</body>
</html>