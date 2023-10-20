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
    <script>
      function eliminar() {
        var respuesta=confirm("¿Estas seguro que quieres eliminar el registro?");  
        return respuesta;
      }
    </script>
    <h1 class="text-center p-3">Bienvenido al Sistema de Gestion de Recursos Humanos</h1>

    <?php
    include "modelo/conexion.php";
    include "controlador/registro_empleado.php";
    include "controlador/eliminar_empleado.php";
    ?>
    
    <div class="container-fluid row">
        <form class="col 4 p-3" method="POST">
          <h3 class="text-center alert alert-secondary">Ingreso de Datos</h3>

          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
          </div>
          <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
          </div>
          <div class="mb-3">
            <label class="form-label">DNI</label>
            <input type="number" class="form-control" name="dni">
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento">
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha de ingreso</label>
            <input type="date" class="form-control" name="fechaIngreso">
          </div>
          <div class="mb-3">
            <label class="form-label">Sueldo</label>
            <input type="number" class="form-control" name="sueldo">
          </div>
          <div class="mb-3">
            <label class="form-label">Puesto</label>
            <input type="text" class="form-control" name="puesto">
          </div>
          <div class="mb-3">
            <label class="form-label">Departamento</label>
            <select id="dropdown" name="depto" class="form-control required">
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
          <input name="btnregistrar" class="btn btn-primary" type="submit" value="Registrar">
        </form>
        <div class="col-8 p-4">
           <table class="table">
             <thead class="bg-info">
               <tr>
                 <th scope="col">ID</th>
                 <th scope="col">NOMBRE</th>
                 <th scope="col">APELLIDO</th>
                 <th scope="col">DNI</th>
                 <th scope="col">FECHA DE NACIMIENTO</th>
                 <th scope="col">FECHA DE INGRESO</th>
                 <th scope="col">SUELDO</th>
                 <th scope="col">PUESTO</th>
                 <th scope="col">DEPARTAMENTO</th>
               </tr>
             </thead>
             <tbody>

             <?php

              include "modelo/conexion.php";
              $sql = $conexion->query(" SELECT * FROM empleados ");
              while($datos=$sql->fetch_object()) { ?>
                <tr>
                  <td><?= $datos->idEmpleado ?></td>
                  <td><?= $datos->nombre ?></td>
                  <td><?= $datos->apellido ?></td>
                  <td><?= $datos->dni ?></td>
                  <td><?= $datos->fechaNacimiento ?></td>
                  <td><?= $datos->fechaIngreso ?></td>
                  <td><?= $datos->sueldo ?></td>
                  <td><?= $datos->puesto ?></td>
                  <td><?= $datos->codDepto ?></td>
                  <td>
                    <a href="modificar_empleado.php?id=<?= $datos->idEmpleado ?>" class="btn btn-small btn-warning">Editar</a>
                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->idEmpleado ?>" class="btn btn-small btn-danger">Eliminar</a>
                  </td>
                </tr>
              <?php }

             ?>
               
             </tbody>
           </table>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </html>
