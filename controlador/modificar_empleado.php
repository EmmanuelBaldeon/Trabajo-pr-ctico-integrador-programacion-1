<?php

if (!empty($_POST['btnregistrar'])) {

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['dni']) && !empty($_POST['fechaNacimiento']) && !empty($_POST['fechaIngreso']) && !empty($_POST['sueldo']) && !empty($_POST['cargo']) && !empty($_POST['codDepto'])) {
      $id = $_POST['idEmpleado'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $dni = $_POST['dni'];
      $fechaNacimiento = $_POST['fechaNacimiento'];
      $fechaIngreso = $_POST['fechaIngreso'];
      $sueldo = $_POST['sueldo'];
      $cargo = $_POST['cargo'];
      $codDepto = $_POST['codDepto'];
      $sql = $conexion->query(" UPDATE Empleados SET nombre='$nombre', apellido='$apellido', dni='$dni', fechaNacimiento='$fechaNacimiento', fechaIngreso='$fechaIngreso', sueldo='$sueldo', cargo='$cargo', codDepto='$codDepto' WHERE idEmpleado= '$id' ");
        if($sql==1) {
          header("location:index.php");
        } else {
          echo "<div class='alert alert-danger'>Error al modificar empleado</div>";
        }

      } else {
          echo "<div class='alert alert-warning'>Campos vacios</div>";
      }
}

?>
