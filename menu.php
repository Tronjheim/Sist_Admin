<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-expanded="false">
          <?php
          if (isset($_SESSION["usuario"])) {
            echo $_SESSION["usuario"];
          }
          ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <a class="dropdown-item" href="micuenta.php">Mi cuenta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="salir.php">Salir</a>
        </div>
      </li>
      <?php
      if (isset($_SESSION["rol"]) && $_SESSION["rol"] == "A") {
      ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-expanded="false">
            Administracion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="usuarios.php">Gestionar usuarios</a>
            <a class="dropdown-item" href="eliminar.php">Eliminar usuarios</a>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>
<br>