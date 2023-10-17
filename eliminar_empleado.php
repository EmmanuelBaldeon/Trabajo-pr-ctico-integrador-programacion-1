<?php

if (!empty($_GET['idEmpleado'])) {
  $id= $_GET['idEmpleado'];
  $sql=$conexion->query("DELETE FROM empleados WHERE idEmpleado=$id ");
  if ($sql==1) {
    echo '<div class="alert alert-success">Empleado elimnado correctamente</div>';
  } else {
    echo '<div class="alert alert-danger">Error al eliminar empleado</div>';
  }
}  
?>
