<?php

class persona{

    public $nombre; // propiedades

    public function asignarNombre($nuevoNombre){ //acciones o metodos...

        $this->nombre=$nuevoNombre;
    }

     public $edad; // propiedades

     public function asignarEdad($nuevaEdad){ //acciones o metodos...
    
        $this->edad=$nuevaEdad;    
    }

}

$objAlumno1= new persona(); //instancia o creacon de un objeto
$objAlumno1->asignarNombre("Matias"); // llamando a un metodo
$objAlumno1->asignarEdad("30"); // llamando a un metodo

$objAlumno2= new persona(); //instancia o creacon de un objeto
$objAlumno2->asignarNombre("Rocio"); // llamando a un metodo
$objAlumno2->asignarEdad("37"); // llamando a un metodo

$objAlumno3= new persona(); //instancia o creacon de un objeto
$objAlumno3->asignarNombre("Mateo"); // llamando a un metodo
$objAlumno3->asignarEdad("10"); // llamando a un metodo

$objAlumno4= new persona(); //instancia o creacon de un objeto
$objAlumno4->asignarNombre("Maria"); // llamando a un metodo
$objAlumno4->asignarEdad("37"); // llamando a un metodo

$objAlumno5= new persona(); //instancia o creacon de un objeto
$objAlumno5->asignarNombre("Gabriel"); // llamando a un metodo
$objAlumno5->asignarEdad("33"); // llamando a un metodo

$objAlumno6= new persona(); //instancia o creacon de un objeto
$objAlumno6->asignarNombre("Adrian"); // llamando a un metodo
$objAlumno6->asignarEdad("41"); // llamando a un metodo

$objAlumno7= new persona(); //instancia o creacon de un objeto
$objAlumno7->asignarNombre("Ameli"); // llamando a un metodo
$objAlumno7->asignarEdad("3"); // llamando a un metodo

$objAlumno8= new persona(); //instancia o creacon de un objeto
$objAlumno8->asignarNombre("Sonia"); // llamando a un metodo
$objAlumno8->asignarEdad("53"); // llamando a un metodo

$objAlumno9= new persona(); //instancia o creacon de un objeto
$objAlumno9->asignarNombre("Lionel"); // llamando a un metodo
$objAlumno9->asignarEdad("33"); // llamando a un metodo

$objAlumno10= new persona(); //instancia o creacon de un objeto
$objAlumno10->asignarNombre("Cristiano"); // llamando a un metodo
$objAlumno10->asignarEdad("38"); // llamando a un metodo


echo "<br/>"."Hola soy ".$objAlumno1->nombre." "."y tengo"." " 
.$objAlumno1->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno2->nombre." "."y tengo"." "
.$objAlumno2->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno3->nombre." "."y tengo"." "
.$objAlumno3->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno4->nombre." "."y tengo"." "
.$objAlumno4->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno5->nombre." "."y tengo"." "
.$objAlumno5->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno6->nombre." "."y tengo"." "
.$objAlumno6->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno7->nombre." "."y tengo"." "
.$objAlumno7->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno8->nombre." "."y tengo"." "
.$objAlumno8->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno9->nombre." "."y tengo"." "
.$objAlumno9->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

echo "<br/>"."Hola soy ".$objAlumno10->nombre." "."y tengo"." "
.$objAlumno10->edad." "."años de vida en esta maravillosa tierra"; // imprimir una propiedad

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases en PHP</title>
</head>
<body>
    
</body>
</html>