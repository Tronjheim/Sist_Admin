<?php
include "protec.php";
include "esadmin.php";
$operacion = false;
$usuario = "";
$pass = "";
$errores = array();
if (isset($_POST["pass"]) and isset($_POST["usuario"])) {
    $pass = $_POST["pass"];
    $usuario = trim(strtolower($_POST["usuario"]));
    $usuario_id = $_SESSION["usuario_id"];
    include "conexion.php";
    if (strlen($usuario) == 0) {
        $errores["usuario"] = "VACIO";
    } else {
        $sql = "SELECT usuario_id FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $res = mysqli_query($link, $sql);
        if (mysqli_num_rows($res) > 0) {
            $errores["usuario"] = "EXISTE";
        }
    }
    if (count($errores) == 0) {
        $sql = "INSERT INTO usuarios(usuario,pass) VALUES ('$usuario','$pass')";
        mysqli_query($link, $sql);
        if (mysqli_affected_rows($link)) {
            $operacion = true;
        }
    }
    print_r($errores);
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
                        <?php if ($operacion == true) { ?>
                            <div class="alert alert-success" role="alert">Contraseña actualizada</div>
                        <?php } ?>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input name="usuario" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input name="pass" type="password" class="form-control">
                            </div>
                            <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>