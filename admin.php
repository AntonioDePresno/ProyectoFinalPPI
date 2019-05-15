<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fashion | Admin</title>
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
    if(isset($_SESSION["admin"])){
      $usuario=$_SESSION["usuario"];
      $cerrar="Cerrar Sesion";
    }else{
        //header("Location: login.html");
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
            <a href="loginForm.php" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span>
            </a>
            <span><?php echo $usuario ?></span>
            <a href="cerrar.php"><?php echo $cerrar?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="color:black">Agregar un Producto</h2>
                <form action="addproduct.php" method="POST">
                    <div class="form-group row mb-5">
                        <div class="col-md-12">
                            <label for="nombre" class="text-black">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="col-md-12">
                            <label for="precio" class="text-black">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="col-md-12">
                            <label for="descripcion" class="text-black">Descripcion</label>
                            <textarea rows=4 cols=50 class="form-control" id="descripcion" name="descripcion" required>
                            </textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="stock" class="text-black">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="col-md-12">
                            <label for="fabricante" class="text-black">Fabricante</label>
                            <input type="text" class="form-control" id="fabricante" name="fabricante" required>
                        </div>
                        <div class="col-md-12">
                            <label for="origen" class="text-black">Origen</label>
                            <input type="text" class="form-control" id="origen" name="origen" required>
                        </div>
                        <div class="col-md-12">
                            <label for="img" class=text-black>Nombre de la Imagen</label>
                            <input type="text" class="form-control" id="img" name="img" placeholder="Ej. imagen.png"required>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Agregar">
                        </div>
                </form>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <h2 style="color:black">Modificar un Producto</h2>
                        <form action="modproduct.php" method="POST">
                            <div class="form-group row mb-5">
                                <div class="col-md-6">
                                    <label for="modifica" class="text-black"><strong>Modificar Producto</strong></label>
                                    <input type="radio" class="form-control" id="opcion" name="opcion" value="modifica" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="modifica" class="text-black"><strong>Eliminar Producto</strong></label>
                                    <input type="radio" class="form-control" id="opcion" name="opcion" value="elimina" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="id" class="text-black">ID del Producto</label>
                                    <input type="text" class="form-control" id="id" name="id" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="campo" class="text-black">Campo a Modificar</label>
                                    <input type="text" class="form-control" id="campo" name="campo">
                                </div>
                                <div class="col-md-12">
                                    <label for="valor" class="text-black">Nuevo Valor</label>
                                    <input type="text" class="form-control" id="valor" name="valor">
                                </div>
                                <div class="col-md-12">
                                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Confirmar">
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 style="color:black">Historial de Compras</h2>
                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name"># Transaccion</th>
                    <th class="product-name">ID Usuario</th>
                    <th class="product-name">ID Producto</th>
                    <th class="product-name">Cantidad</th>
                    <th class="product-name">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $transaccion=$usuario=$producto=$cantidad=$total="";
                    $con=mysqli_connect("localhost","root","","ProyectoFinalPPI");
                    $query="SELECT * FROM historial;";
                    $result=mysqli_query($con,$query);
                    
                    while($row=mysqli_fetch_array($result)){
                      $transaccion=$row['idtransaccion'];
                      $usuario=$row['idusuario'];
                      $producto=$row['idproducto'];
                      $cantidad=$row['cantidad'];
                      $total=$row['total'];
                      echo "<tr>";
                      echo "<td><h2 class='h5 text-black'>". $transaccion ."</h2></td>";
                      echo "<td><h2 class='h5 text-black'>". $usuario ."</h2></td>";
                      echo "<td><h2 class='h5 text-black'>". $producto ."</h2></td>";
                      echo "<td><h2 class='h5 text-black'>". $cantidad ."</h2></td>";
                      echo "<td><h2 class='h5 text-black'>$". $total ."</h2></td>";
                      echo "</tr>";
                    }

                  ?>
                  </tbody>
                </table>
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