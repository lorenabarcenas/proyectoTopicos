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
    .fondo{
       background-color:rgb(210, 180, 140);
    }
    p{
        font-family: cursive;
        font-size:25px;
    }
    h4{
       
        font-size:25px; 
    }
</style>
<body style="background-color:rgb(210, 180, 140);">
<nav class="navbar navbar-expand-sm  bg-warning navbar-dark">
  <div class="container-fluid">
   <div class="btn-gorup">
   <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
    </a>
   <button type="button" class="btn btn-danger "onclick="location.href='Catalogo.php'" >Catalogo</button>
     
</div>
<div class="d-flex justify-content-end">
   <button type="button" class="btn btn-secondary "onclick="location.href='Catalogo.php'" >Carrito</button>
   </div> 
  </div>
</nav>
<div class="fondo" >
    <?php
    $db= mysqli_connect('localhost', 'root', '', 'examen');
    $id_producto=$_GET['variable'];
  
    $sql= "SELECT  * FROM productos where id_pintura= $id_producto ";
    
    $result= mysqli_query($db,$sql);
    $mostrar =mysqli_fetch_array($result);
   
    ?>
<div class="row">
<div class= "col-md-6 order-md-1">
<?php 
      $id=$mostrar['id_pintura'];
      $imagen="imagenes/producto/$id/1.jpg";
      
      ?>
        <img src="<?php echo $imagen; ?>" 
        width="500px" heigth="400px"> 

</div>
<div class="col-md-6 order-md-2">
   <h4> Nombre: <?php  echo  $mostrar['nombre']; ?></h4>
  <p> Autor: <?php  echo $mostrar['autor']?></p>
        <p> Precio:$ <?php  echo $mostrar['precio']?></p>
        <p> Categoria: <?php  echo $mostrar['id_categoria']?></p>
      
        <p> Descripción: <?php  echo $mostrar['descripcion']?></p>
        <div class="d-grid grap-3 col-10 mx-auto">
            <button class="btn btn-outline-dark" type="buton">Agregar al carrito</button>
        </div>
  </div>
        </div>
</div>
  

 
</body>

</html>