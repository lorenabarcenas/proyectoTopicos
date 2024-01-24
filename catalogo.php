

<?php
require 'conexion.php';
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
<style>
h5{
        font-family: cursive;
        font-size:50px;
        text-align:center;
    }
    </style>
<body style= "background-color:rgb(233, 150, 122);">


<nav class="navbar navbar-expand-sm bg-warning navbar-dark">

  <div class="container-fluid">
   <div class="btn-gorup">
   <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
    </a>
   <button type="button" class="btn btn-danger" onclick="location.href='home.php'" >Home</button>
  
</div>

  </div>
</nav>
<h5>Catalogo de productos</h5>
<div class="container" >

<?php
      $db= mysqli_connect('localhost', 'root', '', 'examen');
      $sql="SELECT  * FROM productos";
      $result=mysqli_query($db,$sql);
      $mostrar =mysqli_fetch_array($result);
      foreach($result as $mostrar){
      ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
      <div class="col">
        <div class="card shadow-sm">
      <?php 
      $id=$mostrar['id_pintura'];
      $imagen="imagenes/producto/$id/1.jpg";
      
      ?>
        <img src="<?php echo $imagen; ?>" 
        width="300px" heigth="400px"> 
        <div class="card-body">      
       
        <h4> Nombre: <?php  echo $mostrar['nombre']?></h4>
        <p> numero de identificacion: <?php  echo $mostrar['id_pintura']?></p>
        <p> Autor: <?php  echo $mostrar['autor']?></p>
        <p> Precio:  $<?php  echo $mostrar['precio']?></p>
         <p> Categoria: <?php  echo $mostrar['id_categoria']?></p>
        <div class="d-flex  align-items-center">
        <div clss="btn-group ">
        
          <a href="detalles.php?variable=<?php echo urlencode($id);?>"  class="btn btn-danger">Detalle del producto</a>
        </div>
       
        </div>
        </div>
         </div>
      </div>
    </div>
      <?php

      } 
      ?> 
</div>
  

 
</body>

</html>