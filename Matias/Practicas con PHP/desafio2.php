<?php

if($_POST){

/*Recibir informacion del formulario 
HTML (Metodo GET) 
trabajando en archivos diferentes. */

$nombre=$_POST['txNombre'];
$apellido=$_POST['txApellido'];
$nacionalidad=$_POST['txNacionalidad'];

echo "Hola ".$nombre ,"  $apellido" ,"  $nacionalidad";
}


?>


