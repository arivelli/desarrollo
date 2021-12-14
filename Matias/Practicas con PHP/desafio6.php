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

    if($primervalor == $segundovalor){
        echo "Ambos valores son iguales"."<br/>"."<br/>";
    }

    if($primervalor == 33){
        echo "$primervalor "."Este es un gran numero"."<br/>"."<br/>";
    }

    if($segundovalor < 10){
        echo "$segundovalor >>> ". "Este numero es meor que 10, vuelvalo a 
        intentar con un numero mayor o igual"."<br/>"."<br/>";
    }
   


    echo "$primervalor + $segundovalor ="."  ".$suma."<br/>"."<br/>"; 
    echo "$primervalor - $segundovalor = ".$resta. "<br/>"."<br/>";  
    echo "$primervalor * $segundovalor ="."  ".$multiplicacion. "<br/>"."<br/>";
    echo "$primervalor / $segundovalor = ".$division. "<br/>"."<br/>";

    /*La separacion de la desde el signo igual hasta el resultdo 
    en la suma y en la multiplicacion lo hice de una manera y en la 
    resta y en la division lo hice de otra manera.*/
}

?>

<br/>
<br/>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="desafio6.php" method="post">
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