<?php

if (!empty($_POST['btningresar'])) {
  if (!empty($_POST['nombreUsuario']) && !empty($_POST['clave'])) {
    echo '<div class="alert alert-danger">Los campos no pueden estar vacios</div>';
  } else {	
    $nombreUsuario = $_POST['nombreUsuario'];
    $clave = $_POST['clave'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$nombreUsuario' && password = '$clave'";
    if ($datos=$sql->fetch_object()) {
      header("location:index.php"); 
    } else {
      echo '<div class="alert alert-danger">Acceso denegado</div>';
    }
  }
}

?>
