<?php

  if (!empty($_POST['btnregistrar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['fechaNacimiento']) && !empty($_POST['fechaIngreso']) && !empty($_POST['sueldo']) && !empty($_POST['puesto']) && !empty($_POST['codDepto'])) {
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $dni=$_POST['dni'];
      $fechaNacimiento=$_POST['fechaNacimiento'];
      $fechaIngreso=$_POST['fechaIngreso'];
      $sueldo=$_POST['sueldo'];
      $puesto=$_POST['puesto'];
      $codDepto=$_POST['codDepto'];

      $sql=$conexion->query( "INSERT INTO empleados (nombre, apellido, dni, fechaNacimiento, fechaIngreso, sueldo, puesto, codDepto) VALUES ('$nombre', '$apellido', '$dni', '$fechaNacimiento', '$fechaIngreso', '$sueldo', '$puesto', '$codDepto') " );
      if ($sql==1) {
        echo '<div class="alert alert-success">Empleado registrado correctamente</div>';
      } else {
        echo '<div class="alert alert-danger">Error al registrar empleado</div>';
      }
    
    } else {
      echo "Alguno de los campos esta vacio o mal ingresado";
    }
 
}

?>
