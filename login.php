<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de Gestion de Recursos Humanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>
  <h1 class="text-center p-3">Sistema de Gestion de Recursos Humanos</h1>
  <h2 class="text-center p-3">Login</h2>
  
  <?php
    include "modelo/conexion.php";
    include "controlador/controlador.php";
  ?>

  <div class= "container">
    <div class="login-content">
      <form method="POST" class="align-center" action="">
        <div class="mb-3">
          <label class="form-label">Usuario</label>
          <input id="nombreUsuario" class="input" type="text" name="nombreUsuario">
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input id="clave" class="input" type="password" name="clave">
        </div>
        <div class="view">
          <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
        </div>
        <button name="btningresar" type="submit" class="btn btn-primary">Iniciar sesion</button>
      </form>

  </body>
</html>
