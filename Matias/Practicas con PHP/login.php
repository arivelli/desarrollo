<?php 
session_start();

if($_POST) {

    if(($_POST['User']=="LeMatt") && ( $_POST['Password']=="desarrollo") ){

        $_SESSION['User']="LeMatt";
    
    header("location:index.php");   
  

    }else{
        echo "<script> alert ('Usuario o Contraseña incorrecta'); </script>";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
         
    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <br/>
            <br/>
            <br/>
            <div class="card">
                <div class="card-header">
                    INICIAR SESIÓN
                </div>
                <div class="card-body">
                        <form action="login.php" method="post">

                             User:  <input class="form-control" type="text" name="User" value="your name of user" id="">
                             <br/>
                             <br/>
                             Password:  <input class="form-control" type="password" name="Password" value="***********************" id="">    
                             <br/>
                             <br/>
                             <button class="btn btn-success" type="submit">ENTER THE GALLERY</button>

                         </form>  

                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>

            </div>
            <div class="col-md-4">

            </div>
        </div>  
   
    </div>   
  </body>
</html>




