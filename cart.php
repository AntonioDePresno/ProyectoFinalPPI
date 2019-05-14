<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fashion | Carrito</title>
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
      $cerrar=$usuario=$idproducto=$cantidad=$precio=$nombre=$img="";

      if(isset($_SESSION["id"])){

          $idusuario=$_SESSION["id"];
          $usuario=$_SESSION["usuario"];
          $cerrar="Cerrar Sesion";

          $con=mysqli_connect("localhost","root","","ProyectoFinalPPI");
      }else{
        header("Location: login.php"); 
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
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form action="updatecart.php" class="col-md-12" method="get">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail"></th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                    $result=mysqli_query($con,"SELECT * FROM carrito WHERE usuario='$idusuario';");

                    while($row=mysqli_fetch_array($result)){
                      echo "<tr>";
                      $idproducto=$row['producto'];
                      $cantidad=$row['cantidad'];
                      
                      $result1=mysqli_query($con,"SELECT * from producto WHERE idproducto='$idproducto';");
                      
                      while($col=mysqli_fetch_array($result1)){
                        $img=$col['imagen'];
                        $precio=$col['precioproducto'];
                        $nombre=$col['nombreproducto'];

                        echo "<td class='product-thumbnail'>";
                        echo "<img src='./images". $img ."' alt='Image' class='img-fluid'>";
                        echo "</td>";
                        echo "<td class='product-name'>";
                        echo "<h2 class='h5 text-black'>". $col['nombreproducto'] ."</h2>";
                        echo "</td>";
                        echo "<td>". $precio ."</td>";
                        echo "<td>". $cantidad . "</td>";
                        echo "</div>";
                        echo "<td><button class='btn btn-primary height-auto btn-sm' name=elimina value='". $idproducto ."'>X</a></td>";

                      }
                      echo "</tr>";
                    }
                    mysqli_close($con);
                    ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="shop.php"><button class="btn btn-outline-primary btn-sm btn-block">Catalogo</button></a>
              </div>
            </div> 
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='compra.php'">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
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