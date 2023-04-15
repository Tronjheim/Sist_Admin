<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Index</title>
</head>

<body class="bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <p>&nbsp;</p>
        <div class="card">
          <div class="card-body">
            <?php
            if (isset($_GET["op"])) {
              if ($_GET["op"] == "ERROR") {
            ?>


                <div class="alert alert-warning" role="alert"> USUARIO INCORRECTO </div>
            <?php
              }
            }
            ?>
            <form method="POST" action="login.php">
              <div class="form-group">
                <label for="usuario">Ingrese su usuario <i class="bi bi-arrow-down"></i></label>
                <input name="usuario" type="text" class="form-control" aria-describedby="ayudausuario">
                <small id="ayudausuario" class="form-text text-muted">No compartas tu usuario con nadie.</small>
              </div>
              <div class="form-group">
                <label for="pass">Contraseña <i class="bi bi-arrow-down"></i></label>
                <input name="pass" type="password" class="form-control" aria-describedby="ayudacontraseña">
                <small id="ayudacontraseña" class="form-text text-muted">No compartas tu contraseña con nadie.</small>
              </div>
              <button type="submit" class="btn btn-secondary">Confirmar</button>
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