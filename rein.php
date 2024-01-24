

<?php
require 'Conexion.php';
?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</head>

<body>
 
  <!-- FORMULARIO -->
  <div class="container">
  <h2 style="text-align:center;" >Registro de Clientes</h2>

<form class="row g-3" action="validar.php" method="POST">
  <div class="col-md-6">
  <input type="hidden" class="form-control mb-3" name="id" placeholder="Id"> 
      <label for="nombre">*Nombre:</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre(s)" ><br>
      </div>

      <div class="col-md-6">
      <label for="apellidos">*Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos"  class="form-control" placeholder="Ingrese sus apellidos" ><br>
      </div>

      <div class="col-md-6">
      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo"  class="form-control" placeholder="Ingrese su correo electrónico" ><br>
</div>

      <div class="col-md-6">
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono"  class="form-control" placeholder="Ingrese su número de teléfono" ><br>
</div>

      <div class="col-md-6">
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion"  class="form-control" placeholder="Ingrese su dirección " ><br>
        </div>

        <div class="col-md-6">
      <label for="direccion">Usuario:</label>
      <input type="text" id="usuario" name="usuario"  class="form-control" placeholder="Ingrese un usuario " ><br>
        </div>

      <div class="col-md-6">
      <label for="psw">Contraseña:</label>
      <input type="text" id="psw" name="psw"  class="form-control" placeholder="Ingrese su contraseña "><br>
</div>

<div class="col-md-6">
      <label for="psw">Confirmar contraseña::</label>
      <input type="text" id="passw" name="pssw"  class="form-control" placeholder="Ingrese nuevamente su contraseña "><br>
</div>
      
<div class="col-12">
      <button type="submit" class= "btn btn-primary" name="registrar">Registrar</button>
      </div>
  </form>


  <form class="row g-3" action="login.php" method="POST">
  <div class="col-md-6">

     
      <div class="col-md-6">
      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo"  class="form-control" placeholder="Ingrese su correo electrónico" ><br>
</div>

      <div class="col-md-6">
      <label for="psw">Contraseña:</label>
      <input type="text" id="psw" name="psw"  class="form-control" placeholder="Ingrese su contraseña "><br>
</div>
<div class="col-12">
      <button type="submit" class= "btn btn-primary" name="registrar">iniciar sesion</button>
      </div>
</form>


  
  
  
</body>

</html>