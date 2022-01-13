<?php

/* veremos arreglos (arrays) a tener 
en cuanta la posicion inicial 
(indice inicial) por defecto  es cero */ 

$frutas=array("tomate", "banana", "anana", "durazno", "kiwi");

print_r($frutas);
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
/* veremos arreglos y en esta ocacion 
nosotros les asignaremos el indice que deseamos
a casa elemento. */

$frutas=array("t1"=> "tomate", "b2"=> "banana", "a3"=> "anana", 
"d4"=> "durazno", "k5"=>"kiwi");

print_r($frutas);

// lectura de array llamando por indice ej. t1 nos mostrara tomate

echo "<br/>"."<br/>"."<br/>".$frutas["t1"];
echo "<br/>"."<br/>"."<br/>".$frutas["a3"];
echo "<br/>"."<br/>"."<br/>".$frutas["k5"];
echo "<br/>"."<br/>"."<br/>".$frutas["d4"];
echo "<br/>"."<br/>"."<br/>".$frutas["b2"];
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 

/* Aqui veremos como leer todos los valores sin utilizar "print_r"
para ello utilizaremos la lectura de cicclo "for" */ 

$frutas=array( "tomate", "banana",  "anana", "durazno", "kiwi");

for($ind=0;$ind<=4;$ind++){

    echo $frutas[$ind]."<br/>";
}
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 

/* Aca haremos una lectura de ciclo asociatvo es 
decir realizaremos la lectura del valor asosiado al indice 
que le hemos asignado y para ello utilizaremos 
la lectura de ciclo "foreach" */

$frutas=array("t1"=> "tomate", "b2"=> "banana", "a3"=> "anana", 
"d4"=> "durazno", "k5"=>"kiwi");

foreach($frutas as $ind=>$val){
    
    echo "El nombre/valor de la fruta ".$val. " tiene el 
    siguiente indice => ".$ind."<br/>";

}
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 

// funciones de arreglos

/* utilizaremos la funcion de arreglo "array_push"
que sirve para agregar valores a una lista 
ya existente */  

$frutas=array("tomate", "banana",  "anana", "durazno", "kiwi");

array_push($frutas,"frutilla" , "naranja");

print_r($frutas);

echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[6]. " que la 
disfrutes y te brinde mucha energia" ;
echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[5]. " que la 
disfrutes y te brinde mucha energia";
echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[4]. " que la 
disfrutes y te brinde mucha energia";
echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[3]. " que la 
disfrutes y te brinde mucha energia";
echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[2]. " que la 
disfrutes y te brinde mucha energia";
echo "<br/>"."<br/>"."La sabrosa fruta 
que te ha tocado comer en esta
ocasion es ". $frutas[1]. " que la 
disfrutes y te brinde mucha energia";
echo "<br/>"."<br/>"."La sabrosa fruta
 que te ha tocado comer en esta
ocasion es ". $frutas[0]. " que la 
disfrutes y te brinde mucha energia";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>