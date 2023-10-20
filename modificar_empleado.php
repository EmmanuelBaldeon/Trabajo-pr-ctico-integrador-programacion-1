<?php

include "modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query(" SELECT * FROM Empleados WHERE idEmpleado = '$id' ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestion de Recursos Humanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<form class="col 4 p-3 m-auto" method="POST">
  <h3 class="text-center alert alert-secondary">Modificar Empleado</h3>

  <input type="hidden" name="id" value="<?= $_GET["idEmpleado"] ?> ">
  <?php

  include "controlador/modificar_empleado.php";

  while($datos=$sql->fetch_object()) { ?>
    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Apellido</label>
      <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">DNI</label>
      <input type="number" class="form-control" name="dni" value="<?= $datos->dni ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" name="fechaNacimiento" value="<?= $datos->fechaNacimiento ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Fecha de ingreso</label>
      <input type="date" class="form-control" name="fechaIngreso" value="<?= $datos->fechaIngreso ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Sueldo</label>
      <input type="number" class="form-control" name="sueldo" value="<?= $datos->sueldo ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Puesto</label>
      <input type="text" class="form-control" name="puesto" value="<?= $datos->puesto ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Departamento</label>
      <select id="dropdown" name="codDepto" class="form-control required" value="<?= $datos->codDepto ?>">
        <option disabled selected value>Seleccionar</option>
        <option value="1"> 1 | GERENCIA, BUENOS AIRES</option>
        <option value="2"> 2 | PRODUCCION, BUENOS AIRES</option>
        <option value="3"> 3 | VENTAS, BUENOS AIRES</option>
        <option value="4"> 4 | VENTAS, CORDOBA</option>
        <option value="1"> 5 | VENTAS, SANTA FE</option>
        <option value="2"> 6 | VENTAS, MENDOZA</option>
        <option value="3"> 7 | INVESTIGACION, BUENOS AIRES</option>
        <option value="4"> 8 | COMERCIALIZACION, BUENOS AIRES</option>
        <option value="1"> 9 | MANTENIMIENTO, BUENOS AIRES</option>
        <option value="2"> 10 | MANTENIMIENTO, CORDOBA</option>
        <option value="3"> 11 | MANTENIMIENTO, SANTA FE</option>
        <option value="4"> 12 | MANTENIMIENTO, MENDOZA</option>
      </select>
    </div>   

  <?php }
  ?>

  <button type="submit" class="btn btn-primary" name="btnregistrar">Registrar</button>
</form>

</body>
</html>
