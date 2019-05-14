<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fashion | Productos</title>
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
    if(isset($_SESSION["usuario"])){
      $usuario=$_SESSION["usuario"];
      $cerrar="Cerrar Sesion";
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
                <a href="index.php" class="js-logo-clone">Fashion</a>
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
              <a href="cart.php" class="icons-btn d-inline-block bag">
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

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Productos</strong></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">
            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h1 class="text-black h5">Todos los Productos</h1></div>
              </div>
            </div>
            <?php
              
              $nombre=$precio=$img="";
              $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");

              $query="SELECT * FROM producto;";
              $result=mysqli_query($con,$query);

              while($row=mysqli_fetch_array($result)){
                $precio=$row['precioproducto'];
                $nombre=$row['nombreproducto'];
                $img=$row['imagen'];
                $idproducto=$row['idproducto'];
                echo "<div class='row mb-5'>";
                echo "<div class='col-lg-6 col-md-6 item-entry mb-6'>";
                echo "<a href=# class='product-item md-height bg-gray d-block'>";
                echo "<img src='./img/". $img ."'alt='Image class=img-fluid'>";
                echo "</a>";
                echo "<h2 class='item-title'>". $nombre ."</h2>";
                echo "<strong class='item-price'>Precio: ". $precio ."</strong>";
                echo "<form action='shop-single.php' method='get'>";
                echo "<button class='btn btn-primary btn-lg btn-block' name=producto value='". $idproducto ."'>Ver mas</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
              }
            ?>        
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