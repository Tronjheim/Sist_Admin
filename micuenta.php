<?php include "protec.php";
    $operacion=false;
    if(isset($_POST["pass"])){
        $pass=$_POST["pass"];
        $usuario_id=$_SESSION["usuario_id"];
        include "conexion.php";
        $sql="UPDATE usuarios SET pass='$pass' WHERE usuario_id=$usuario_id LIMIT 1";
        mysqli_query($link,$sql);
        if(mysqli_affected_rows($link)){
            $operacion=true;
        }
    }
?> 
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Mi cuenta</title>
  </head>
  <body>
   <div class="container">
    <?php include "menu.php"; ?>
    <div class="row">
        <div class="col-md-4 offset-md-4">
        <div class="card">
        <div class="card-body">
        <?php if($operacion==true){ ?>
        <div class="alert alert-success" role="alert">Contraseña actualizada</div>
        <?php } ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="pass">Nueva contraseña</label>
                    <input name="pass" type="password" class="form-control">
                </div>
                <input type="submit" namet="boton" value="actualizar" class="btn btn-primary">
            </form>
        </div>
        </div>
        </div>
    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>