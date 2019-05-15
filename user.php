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
    if(isset($_SESSION["usuario"])){
      $id=$_SESSION["id"];
      $usuario=$_SESSION["usuario"];
      $cerrar="Cerrar Sesion";
      $con=mysqli_connect("localhost","root","","ProyectoFinalPPI");
    }else{
        header("Location: loginForm.php");
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
            <a href="loginForm.php" class="icons-btn d-inline-block bag">
              <span class="icon-user"></span>
            </a>
            <span><?php echo $usuario ?></span>
            <a href="cerrar.php"><?php echo $cerrar?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail"></th>
                    <th class="product-name">Nombre</th>
                    <th class="product-name">Correo</th>
                    <th class="product-name">Fecha de Nacimiento</th>
                    <th class="product-name">Tarjeta</th>
                    <th class="product-name">Direccion</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                    $result=mysqli_query($con,"SELECT * FROM usuario WHERE idusuario='$id';");
                      
                      while($row=mysqli_fetch_array($result)){
                        $nombre=$row['nombre'];
                        $correo=$row['correo'];
                        $fecha=$row['fechanac'];
                        $tarjeta=$row['tarjeta'];
                        $dir=$row['direccion'];
                        
                        echo "<tr>";
                        echo "<td class='product-thumbnail'>";
                        echo "<img src='./images/user.jpg' alt='Image' class='img-fluid'>";
                        echo "</td>";
                        echo "<td class='product-name'>";
                        echo "<h2 class='h5 text-black'>". $nombre ."</h2>";
                        echo "</td>";
                        echo "<td>". $correo ."</td>";
                        echo "<td>". $fecha . "</td>";
                        echo "<td>". $tarjeta ."</td>";
                        echo "<td>". $dir ."</td>";
                        echo "</tr>";

                      }
                      
                    mysqli_close($con);
                    ?>
                </tbody>
              </table>
            </div>
</body>
</html>