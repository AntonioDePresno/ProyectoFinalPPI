<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fashion | Login</title>
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

      if(isset($_SESSION['id'])){
        header("Location: user.php");
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
            </div>
          </div>
        </div>
      </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Login</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Crear una cuenta</h2>
            <div class="p-3 p-lg-5 border">
                <form action=registro.php method="POST">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_mail" class="text-black">Correo Electronico</label>
                    <input type="text" class="form-control" id="c_mail" name="c_mail" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_contra" class="text-black">Contraseña<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_contra" name="c_contra" placeholder="Contraseña" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fechanac" class="text-black">Fecha de Nacimiento<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fechanac" name="c_fechanac" placeholder="DD/MM/AAAA" required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_tarjeta" class="text-black">Numero de Tarjeta<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_tarjeta" name="c_tarjeta" required>
                  </div>
                </div>

                <div class="form-group row mb-5">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Direccion<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address" required>
                  </div>
                </div>
                <div class="form-group row mb-5">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrarse">
                </div>
              </form>

            </div>
          </div>
          <div class="col-md-6">
            <form action="login.php" method="POST">
                <div class="row mb-5">
                    <div class="col-md-12">
                      <h2 class="h3 mb-3 text-black">Inicio de Sesión</h2>
                      <div class="form-group row mb-5">
                          <div class="col-md-12">
                            <input type="text" class="form-control" id="c_correo" name="c_correo" placeholder="Correo" required>
                          </div>
                        </div>
                        <div class="form-group row mb-5">
                            <div class="col-md-12">
                              <input type="password" class="form-control" id="c_passwd" name="c_passwd" placeholder="Contraseña" required>
                            </div>
                          </div>
                        <div class="form-group row mb-5">
                          <div class="col-md-12">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar">
                          </div>
                      </div>
                  </div>
              </div>
            </form>
        <!-- </form> -->
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