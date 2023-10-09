<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="login-card">
      <h1>Iniciar sesion<h1>
      <h2>Ingrese sus datos</h2>
        <form class="login-form" action="login.php" method="POST">

        <?php

        if (isset($_GET['error'])) 
        { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>Usuario</label>
          <input type="text" name="usuario" placeholder="usuario"><br>
        <label>Contraseña</label>
          <input type="password" name="contraseña" placeholder="contraseña">
        <button type="submit">Ingresar</button>
      </form> 
    </div>
  </body>
</html>
