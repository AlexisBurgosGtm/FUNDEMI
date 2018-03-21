<!DOCTYPE html>


<html lang="en">

<?php
      //include('conexion_sis.php');

      session_start();
      $loged = $_SESSION['loged'];
      if ($loged == 'SI'){
          $usuario = $_SESSION['nomusuario'];
          $nivel = $_SESSION['nivel'];
          $hoy = date('Y-m-d');
                        } else {
         header('Location: index.php');
                                }
?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Monitoreo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />

</head>


<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <!--<a href="#" class="simple-text logo-mini">
                    Ventas
                </a>-->
                <a href="#" class="simple-text logo-normal">
                    Monitoreo de Transportes
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="inicio.php">
                            <i class="now-ui-icons shopping_delivery-fast"></i>
                            <p>Viajes</p>
                        </a>
                    </li>
                    <li>
                        <a href="blank.php">
                            <i class="now-ui-icons business_money-coins"></i>
                            <p>Gastos</p>
                        </a>
                    </li>
                    <li>
                        <a href="blank.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Combustibles</p>
                        </a>
                    </li>
                    <li>
                        <a href="blank.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Contactos</p>
                        </a>
                    </li>
                    <li>
                        <a href="blank.php">
                            <i class="now-ui-icons business_chart-pie-36"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                    
                    <li class="active-pro">
                        <a href="index.php">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                            <p>Salir</p>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">

                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#">Inicio</a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>


                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                      <!--<form method="POST" action="inicio.php">
                          <div class="input-group no-border">

                              <input type="text" id="filtro" name="filtro" value="" class="form-control" placeholder="Producto...">
                              <input type="submit" value="Buscar" class="form-control">
                          </div>
                      </form>-->
                      <!--
                      <form>
                           <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Buscar precio...">
                                <span class="input-group-addon" type="submit">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                      -->
                        
                        <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons loader_gear"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Admin</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Seguridad</a>
                                    <a class="dropdown-item" href="#">Propietarios</a>
                                    <a class="dropdown-item" href="#">Clientes</a>
                                    <a class="dropdown-item" href="#">Periodos</a>
                                    <a class="dropdown-item" href="#">Equipos</a>
                                    <a class="dropdown-item" href="#">Personal</a>
                                    <a class="dropdown-item" href="#">Destinos</a>
                                    <a class="dropdown-item" href="#">Listados</a>
                                    <a class="dropdown-item" href="#">Departamentos</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
            </div>
