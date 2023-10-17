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
    <h1 class="text-center p-3">Bienvenido al Sistema de Gestion de Recursos Humanos</h1> 
    <div class="container-fluid row">
        <form class="col 4 p-3">
          <h3 class="text-center ext-secondary">Ingreso de Datos</h3>
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
            <input type="date" class="form-control" name="fechaNac">
          </div>
          <div class="mb-3">
            <label class="form-label">Fecha de ingreso</label>
            <input type="date" class="form-control" name="fechaIng">
          </div>
          <div class="mb-3">
            <label class="form-label">Sueldo</label>
            <input type="number" class="form-control" name="salario">
          </div>
          <div class="mb-3">
            <label class="form-label">Puesto</label>
            <input type="text" class="form-control" name="puesto">
          </div>
          <div class="mb-3">
            <label class="form-label">Departamento</label>
            <select id="dropdown" name="depto" class="form-control required">
              <option disabled selected value>Seleccionar</option>
              <option value="1"> 1</option>
              <option value="2"> 2</option>
              <option value="3"> 3</option>
              <option value="4"> 4</option>
              <option value="1"> 5</option>
              <option value="2"> 6</option>
              <option value="3"> 7</option>
              <option value="4"> 8</option>
              <option value="1"> 9</option>
              <option value="2"> 10</option>
              <option value="3"> 11</option>
              <option value="4"> 12</option>
            </select>
          </div>
        
          <button type="submit" class="btn btn-primary" name="btnregistrar">Registrar</button>
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
              $sql = $conexion->query("SELECT * FROM empleado");
              while($datos=$sql->fetch_object()) { ?>
                <tr>
                  <td><? $datos->idEmpleado ?></td>
                  <td><? $datos->nombreEmpleado ?></td>
                  <td><? $datos->apellidoEmpleado ?></td>
                  <td><? $datos->dniEmpleado ?></td>
                  <td><? $datos->fechaNacEmpleado ?></td>
                  <td><? $datos->fechaIngEmpleado ?></td>
                  <td><? $datos->sueldoEmpleado ?></td>
                  <td><? $datos->puestoEmpleado ?></td>
                  <td><? $datos->codDepto ?></td>
                  <td>
                    <a href="" class="btn btn-small btn-warning">Editar</a>
                    <a href="" class="btn btn-small btn-danger">Eliminar</a>
                  </td>
                </tr>
              <?php }

             ?>
               
             </tbody>
           </table>
        </div>

  
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
