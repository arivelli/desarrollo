<?php

if($_POST){

    $primervalor=$_POST['primervalor'];
    $segundovalor=$_POST['segundovalor'];

    //We do a sum
    $suma=$primervalor+$segundovalor;
    //We do a substraction
    $resta=$primervalor-$segundovalor;
    //We do a multiplication
    $multiplicacion=$primervalor*$segundovalor;
    //We do a division
    $division=$primervalor/$segundovalor;



    echo $suma."<br/>";
    echo $resta. "<br/>";  
    echo $multiplicacion. "<br/>";
    echo $division. "<br/>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="desafio4.php" method="post">
     Primer valor:
    <input type="text" name="primervalor" id="">
    <br/>
     Segundo valor:
    <input type="text" name="segundovalor" id="">
    <br/>
    <input type="submit" value="RESULTADO" id="">


    
</body>
</html>
