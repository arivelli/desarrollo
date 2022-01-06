<?php include("headboard.php");?>
<?php include("connection.php");?>
</br>
</br>
<?php

if($_POST){
  print_r($_POST);
  $name= $_POST['NAME'];
  $description= $_POST['description'];

  $date= new dateTime();

  $image=$date->getTimestamp()."_".$_FILES['FILE']['name'];      

  $temporary_image=$_FILES['FILE']['tmp_name'];

  move_uploaded_file($temporary_image,"images/".$image);

  $objConnection= new connection();
  $sql="INSERT INTO `projects` (`id`, `name`, `image`, `description`) VALUES (NULL,'$name', '$image', '$description');";
  $objConnection->run($sql); 
}
if($_GET){

    //"DELETE FROM `projects` WHERE `projects`.`id` = 15

    $id=$_GET['delete'];
    $objConnection= new connection();
    $sql="DELETE FROM `projects` WHERE `projects`.`id` =".$id;
    $objConnection->run($sql);
}

$objConnection= new connection();
$projects=$objConnection->consult("SELECT * FROM `projects`");

//print_r($projects)

?>

<br/>
<br/>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Project data
    </div>
    <div class="card-body">
    <form action="gallery.php" method="post" enctype="multipart/form-data"> 

        
         Name the project: <input class="form-control" type="text" name="NAME" id="">
         <br/>
         <br/>
         Image of the project : <input class="form-control" type="file" name="FILE" id="">
         <br/>
         <br/>
         Description:
        
           <textarea class="form-control" name="description" id="" rows="3"></textarea>
           <br/>
         
         <input class= "btn btn-success" type="submit" value="Send project">
         
    </form>
  
  
    </div>
</div>
            
        </div>
        <div class="col-md-6">
        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>IMAGE</th>
            <th>DESCRICRIPTION</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($projects as $project) {?>
        <tr>
            <td><?php echo $project['id'];?></td>
            <td><?php echo $project['name'];?></td>
            <td><?php echo $project['image'];?></td>
            <td><?php echo $project['description'];?></td>
            <td><a  class="btn btn-danger" href="?delete=<?php echo  $project['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
            
        </div>
        
    </div>
</div>



<br/>
<br/>







<?php include("footer.php");?>