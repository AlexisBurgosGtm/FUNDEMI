
<?php
//include('conexion_sis.php');
session_start();
$_SESSION['loged'] = 'NO';
?>

<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Online Sales</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link href="styl.min.css" rel="stylesheet" />
</head>


<body class=" sidebar-mini">
  <div class="wrapper wrapper-full-page ">
      <div class="full-page login-page section-image" filter-color="black">
          <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
          <div class="content">
              <div class="container">
                  <div class="col-md-4 ml-auto mr-auto">

                      <form class="form" method="post" action="session.php" autocomplete="off">

                        <div class="card card-login card-plain">

                          <div class="card-header ">
                                <div class="logo-container">
                                  <img src="logo.png" alt="">
                                </div>
                          </div>

                          <div class="card-body ">

                            <div class="input-group no-border form-control-lg">
                                  <span class="input-group-addon">
                                      <i class="now-ui-icons users_circle-08"></i>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Usuario..." id="usuario" name="usuario">
                            </div>

                            <div class="input-group no-border form-control-lg">
                                  <span class="input-group-addon">
                                      <i class="now-ui-icons objects_key-25"></i>
                                  </span>
                                  <input type="password" placeholder="Contraseña..." class="form-control" id="pass" name="pass">
                            </div>

                            <div class="input-group no-border form-control-lg">
                                  <input type="submit" placeholder="Ingresar" class="btn btn-primary btn-round btn-lg btn-block mb-3" value="Ingresar">
                            </div>
                          </div>

                          <div class="card-footer ">

                          </div>

                        </div>

                      </form>

                  </div>
              </div>
          </div>

          <footer class="footer">
              <div class="container-fluid">
                <div class="copyright">
                  <a>© Alexis Burgos</a>
                </div>
              </div>
          </footer>

</body>

<!--
<body class="bg-light">

  <div class="container">

        <div class="col-md-5">
        <div class="card card-login mx-auto mt-5">
          <div class="card-header">Inicio de sesión</div>

          <div class="card-body">

            <form action="session.php" method="POST" autocomplete="off" class="full-box logInForm">
          		<div class="form-group label-floating">
          		  <label class="control-label" for="usuario">Usuario</label>
          		  <input class="form-control" id="usuario" name="usuario" type="text">
          		</div>
          		<div class="form-group label-floating">
          		  <label class="control-label" for="pass">Contraseña</label>
          		  <input class="form-control" id="pass" name="pass"  type="password">
          		</div>
              <div class="form-group text-center">
                <input type="submit" value="Iniciar sesión" class="btn btn-primary btn-block">
              </div>

            </form>

          </div>
        </div>
        </div>


  </div>



</body>
-->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.js?v=1.0.1"></script>
</html>
