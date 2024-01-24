<?php
include ('home.php')
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
  <div class="">
  <h1 style="text-align:center;">Nuevo proveedor</h1>
<div class="container mt-3 d-flex justify-content-center">
  
 
  <br>
  <form action="method=POST">

    <div class="mb-3 mt-3">
      <label for="nombre">Nombre:</label>
      <input  class="form-control" id="nombre" placeholder="Ingresa Nombre" name="nombre">
     
     
    
    
      
    </div>
    <div class="mb-3">
      <label for="rfc">RFC</label>
      <input  class="form-control" id="pwd" placeholder="Ingresa RFC" name="pswd">
    </div>
    <div class="mb-3">
      <label for="telefono">Telefono</label>
      <input  class="form-control" id="pwd" placeholder="Enter celular" name="pswd">
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="pswd">
    </div>
 
    <button type="submit" class="btn btn-primary">Crear</button>
  </form>
</div>
</div>
<br>
<br>

</body>

</html>