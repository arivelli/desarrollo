<?php

if($_POST){

    $primervalor=$_POST['primervalor'];
    $segundovalor=$_POST['segundovalor'];

   if(($primervalor != $segundovalor) && ($primervalor > $segundovalor)){
    echo "El primer valor es mayor al segundo valor";
   }
   elseif(($primervalor != $segundovalor) && ($primervalor < $segundovalor)){
    echo "El primer valor es menor al segundo valor";
   }
   elseif($primervalor == $segundovalor){
    echo "Los dos valores son iguales";
   }
   elseif(($primervalor = null) && ($segundovalor = null)){
     echo "No hay valores ingresados";  
   }
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
    <title>Operadores Logicos</title>
</head>
<body>
    <form action="desafio5.php" method="post">
    
    Primer valor:
    <input type="text" name="primervalor" id="">
    <br/>
    <br/>
    Segundo valor:
    <input type="text" name="segundovalor" id="">
    <br/>
    <br/>
    <br/>
    <br/>
    <input type="submit" value="RESULTADO" id="">


    
</body>
</html>

