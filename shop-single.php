<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fashion | Single</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <?php
      session_start();
      $usuario="";
      $cerrar="";
      $producto="";
      $nombre=$precio=$descripcion=$precio=$disponibilidad=$fabricante=$origen=$img="";

      if(isset($_SESSION["usuario"])){
        $usuario=$_SESSION["usuario"];
        $cerrar="Cerrar Sesion";
      }
      $producto=$_GET['producto'];

      $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");

      $query="SELECT * FROM producto WHERE idproducto='$producto';";
      $result=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($result)){
        $nombre=$row['nombreproducto'];
        $precio=$row['precioproducto'];
        $descripcion=$row['descripcion'];
        $disponibilidad=$row['stock'];
        $fabricante=$row['fabricante'];
        $origen=$row['origen'];
        $img=$row['imagen'];
      }


    ?>
    <div class="site-wrap">
      <div class="site-navbar bg-white py-2">
  
        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>  
          </div>
        </div>
  
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Fashion</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li><a href="index.php">INICIO</a></li>
                  <li><a href="shop.php">Productos</a></li>
                </ul>
              </nav>
            </div>
            <div class="icons">
              <a href="cart.html" class="icons-btn d-inline-block bag">
                <span class="icon-shopping-bag"></span>
              </a>
              <a href="login.html" class="icons-btn d-inline-block bag">
                <span class="icon-user"></span>
              </a>
              <span><?php echo $usuario ?></span>
              <a href="cerrar.php"><?php echo $cerrar?></a>
            </div>
          </div>
        </div>
      </div>
    
   

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <a href="shop.html">Productos</a><span class="mx-2 mb-0">/</span> <strong class="text-black">Producto</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <?php
                echo "<img src='". $img ."' alt='Image' class='img-fluid'>";
                ?>
              </a>
            </div>

          </div>
          <div class="col-md-6">
            <?php
            echo "<h2 class='text-black'>".$nombre."</h2>";
            echo "<p class='mb-4'>". $descripcion ."</p>";
            echo "<p class='mb-4'>Fabricante: ". $fabricante ."</p>";
            echo "<p class='mb-4'>Origen: ". $origen ."</p>";
            echo "<p><strong class='text-primary h4'>$". $precio ."</strong></p>";
            echo "<p class='mb-4'>Disponibles: ". $disponibilidad ."</p>";
            ?>
            <div class="mb-5">
              <form action="addcart.php" method="get">
                <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" name="cant" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>

              </div>
              <button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" name="producto" value="<?php echo "$producto"?>">Agregar al Carrito</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>