<?php

if($_POST){

$boton=$_POST['btnValor'];

switch($boton){

    case "X": 
        echo "Presiono la opccion X";
    break;
    
    case "Y":
        echo "Presiono la opccion Y";
    break;
    
    case "Z":
        echo "Presiono la opccion Z";
    break;
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
    <title>Evalucion de acciones del usuario</title>
</head>
<body>
    <form action="desafio7.php" method="post">

<input type="submit" name="btnValor" value="X">
 <br/>
 <br/>  
<input type="submit" name="btnValor" value="Y"> 
 <br/>
 <br/>   
<input type="submit" name="btnValor" value="Z">  
    

</body>
</html>
