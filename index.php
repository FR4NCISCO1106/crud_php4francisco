<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4b30322afc.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Hola Mundo</h1>
    <div class="container-fluid row">
    <form class="col-4 p-3">
        <h3 class="text-center text-secondary">Registro de personas</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cedula</label>
    <input type="text" class="form-control" name="cedula"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="nombre"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
    <input type="text" class="form-control" name="correo"> 
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CEDULA</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conexion->query("select * from persona")
    while($datos=sql->fetch_obkect()){
        
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>00000001</td>
        <td>25/03/1960</td>
        <td>@mdo</td>
        <td>
          <a href="" class="btn btn-small btn-success"><i class="fa-solid fa-pen"></i></a>
          <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>

    }
    ?>

   
  </tbody>
</table>
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>