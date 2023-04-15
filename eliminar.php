<?php
include "conexion.php";
include "menu.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $id = $_POST['id'];

    $stmt = $link->prepare("DELETE FROM usuarios WHERE usuario_id = ? AND usuario = ?");
    $stmt->bind_param("is", $id, $usuario);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Eliminar Usuario</title>
</head>

<body class="bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <p>&nbsp;</p>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="usuario">Ingrese usuario <i class="bi bi-arrow-down"></i></label>
                                <input name="usuario" type="text" class="form-control" aria-describedby="ayudausuario">
                            </div>
                            <div class="form-group">
                                <label for="id">ID <i class="bi bi-arrow-down"></i></label>
                                <input name="id" type="number" class="form-control" aria-describedby="ayudacontraseña">
                            </div>
                            <button type="submit" class="btn btn-secondary">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>