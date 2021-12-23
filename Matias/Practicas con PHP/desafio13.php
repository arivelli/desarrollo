<?php

$txNombre="";
if ($_POST){
    $txNombre= (isset($_POST['txNombre']))?$_POST['txNombre']:"";
    $videoJuego= (isset($_POST['videoJuego']))?$_POST['videoJuego']:"";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion de los datos del formulario</title>
</head>
<body>
     <strong> HELLO </strong>: <?php echo $txNombre;?>
     <strong> ¿COMO ESTAS? HAS SELECCIONADO QUE TE GUSTA JUGAR  </strong>
     <?php echo $videoJuego;?>

     <br/>
     <br/>
     <br/> 

     <form action="desafio13.php" method="post">

     Nombre:

     <input type="text" name="txNombre" id="">

     ¿te gusto jugar?:<br/>
     <br/> Fortnite:      <input type="radio" name="videoJuego" value="Fornite" id=""><br/>
     <br/> God of War III:<input type="radio" name="videoJuego" value="God of War III" id=""><br/>
     <br/> Xtrem Legends: <input type="radio" name="videoJuego" value="Xtrem Legends" id=""><br/>
     <br/> Spider-Man:    <input type="radio" name="videoJuego" value="Spider-Man" id=""><br/>
     <br/> HeartStone:    <input type="radio" name="videoJuego" value="HeartStone" id=""><br/>

     <br/>
     <br/>
     <br/>    

     <input type="submit" value="ENVIAR INFORMACION">

</form>
    
</body>
</html>