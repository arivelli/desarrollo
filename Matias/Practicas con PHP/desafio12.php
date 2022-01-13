<?php

class persona{

    public $name;
    public $lastname;
    public $age;
    public function setName($newName){ //acciones o metodos...(setters) 
        $this->name=$newName;
    }

    private function getName(){
        return $this->name; 
    }
    private function getLastname(){
        return $this->lastname; 
    }
    public function getFullname(){
        return $this->getName() . " " .$this->getLastname(); 
    }  

    public function setLastname($newName){ //acciones o metodos...(setters) 
        $this->lastname=$newName;
    }

     public function setAge($newAge){ //acciones o metodos...(setters)
    
        $this->age=$newAge;    
    }

}

$objAlumno1= new persona(); //instancia o creacon de un objeto
$objAlumno1->setName("Matias"); // llamando a un metodo
$objAlumno1->setLastname("Levallois"); // llamando a un metodo
$objAlumno1->setAge("30"); // llamando a un metodo

$objAlumno2= new persona(); //instancia o creacon de un objeto
$objAlumno2->setLastname("Ricigliano"); // llamando a un metodo
$objAlumno2->setName("Rocio"); // llamando a un metodo
$objAlumno2->setAge("37"); // llamando a un metodo

$objAlumno3= new persona(); //instancia o creacon de un objeto
$objAlumno3->setLastname("Cristiano"); // llamando a un metodo
$objAlumno3->setName("Mateo"); // llamando a un metodo
$objAlumno3->setAge("10"); // llamando a un metodo

$objAlumno4= new persona(); //instancia o creacon de un objeto
$objAlumno4->setLastname("Kingbell"); // llamando a un metodo
$objAlumno4->setName("Maria"); // llamando a un metodo
$objAlumno4->setAge("37"); // llamando a un metodo

$objAlumno5= new persona(); //instancia o creacon de un objeto
$objAlumno5->setLastname("Arcangel"); // llamando a un metodo
$objAlumno5->setName("Gabriel"); // llamando a un metodo
$objAlumno5->setAge("33"); // llamando a un metodo

$objAlumno6= new persona(); //instancia o creacon de un objeto
$objAlumno6->setLastname("Rivelli"); // llamando a un metodo
$objAlumno6->setName("Adrian"); // llamando a un metodo
$objAlumno6->setAge("41"); // llamando a un metodo

$objAlumno7= new persona(); //instancia o creacon de un objeto
$objAlumno7->setLastname("Levallois"); // llamando a un metodo
$objAlumno7->setName("Ameli"); // llamando a un metodo
$objAlumno7->setAge("3"); // llamando a un metodo

$objAlumno8= new persona(); //instancia o creacon de un objeto
$objAlumno8->setLastname("Chaign"); // llamando a un metodo
$objAlumno8->setName("Sonia"); // llamando a un metodo
$objAlumno8->setAge("53"); // llamando a un metodo

$objAlumno9= new persona(); //instancia o creacon de un objeto
$objAlumno9->setLastname("Messi"); // llamando a un metodo
$objAlumno9->setName("Lionel"); // llamando a un metodo
$objAlumno9->setAge("33"); // llamando a un metodo

$objAlumno10= new persona(); //instancia o creacon de un objeto
$objAlumno10->setLastname("Ronaldo"); // llamando a un metodo
$objAlumno10->setName("Cristiano"); // llamando a un metodo
$objAlumno10->setAge("38"); // llamando a un metodo

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

<?php

echo $objAlumno1->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno2->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno3->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno4->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno5->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno6->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno7->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno8->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno9->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo $objAlumno10->getFullname() . "<br/>" . "<br/>" . "<br/>";

echo "<br/>"."Hola soy ".$objAlumno1->name." "."y tengo"." " 
.$objAlumno1->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno2->name." "."y tengo"." "
.$objAlumno2->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno3->name." "."y tengo"." "
.$objAlumno3->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno4->name." "."y tengo"." "
.$objAlumno4->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno5->name." "."y tengo"." "
.$objAlumno5->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno6->name." "."y tengo"." "
.$objAlumno6->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno7->name." "."y tengo"." "
.$objAlumno7->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno8->name." "."y tengo"." "
.$objAlumno8->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno9->name." "."y tengo"." "
.$objAlumno9->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

echo "<br/>"."Hola soy ".$objAlumno10->name." "."y tengo"." "
.$objAlumno10->age." "."años de vida en esta maravillosa tierra"; // imprimir una propiage

?> 
<br/>
<br/>
<br/>
Hola
</body>
</html>