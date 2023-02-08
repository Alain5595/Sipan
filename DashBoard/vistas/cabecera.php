<?php
session_start();

if($_SESSION["s_usuario"] === null){
   header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MI APP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="/assets/plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/css/adminlte.min.css">

  <link href="assets/css/styles.css" rel="stylesheet" />
  <link href="assets/css/estilo01.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <!-- PRUEBAAAAAAAAAAAAAAAA -->
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


<!-- Recargar DataTable -->
<script type="text/javascript">
  
  var TablePacientes=null;
  var TableConfig=null;
  var TableServ=null;
  var TablePersonal=null;
  var TableDiagnos=null;
  var TableAten=null;
  var TablePlan=null;
  var TableHistoria=null;

</script>  

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar 
    Otro color de fondo más claro:   class="main-header navbar navbar-expand navbar-white navbar-light"-->
  <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="escritorio.php" class="nav-link">Inicio</a>
      </li>    
    </ul>
  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    <!-- Menú parte superior-->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Nav Item - User Information-->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="img-profile rounded-circle d-none d-lg-inline text-gray-600 small" style="height: 27px;" src="assets/img/user.png">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["s_usuario"];?></span>
          <i class="fas fa-door-closed"></i>
        </a>
         <!-- Dropdown - User Information --> 
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Perfil
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Ajustes
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Cerrar Sesión
          </a>
        </div>
      </li>   
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Menú parte izquierdo // cambiar color de fondo style="background: #03435A;"-->
  <aside class="main-sidebar elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a class="brand-link ps-3" style="margin:10px 1px 1px 2px"> 
      <img src="/assets/img/sipan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text " style="font-family:helvetica; text-shadow: 0px 0px 3px;">SIPAN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/img/121.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:white">Alain Peralta</a>
        </div>
      </div> -->
      <!-- Sidebar Menu -->
      
      <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
              <div class="nav">
                <div class="sb-sidenav-menu-heading">INICIO</div>
                  <a class="nav-link" href="escritorio.php">
                      <div class="sb-nav-link-icon"><i class="fas fa-chalkboard"></i></div>
                      Escritorio
                  </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                  
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="far fa-edit"></i></div>
                    Gestionar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>  
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="ingreso.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        Ingreso
                    </a>
                    <a class="nav-link" href="salida.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-minus"></i></div>
                        Salida
                    </a>

                  </nav>
                </div>
                
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Hostal
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>
                  <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    
                  <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        Configuracion
                    </a>
                    <a class="nav-link" href="escritorio.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-minus"></i></div>
                        Servicios
                    </a>
                  </nav>
                  
                </div>
                 <a class="nav-link" href="escritorio.php">
                      <div class="sb-nav-link-icon"><i class="far fa-address-card"></i></div>
                      Clientes
                  </a>
                  
                  <a class="nav-link" href="escritorio.php">
                      <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                      usuario
                  </a>
                  

                <div class="sb-sidenav-menu-heading">Complementos</div>
                  
                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Tienda
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>  
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        vender
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-minus"></i></div>
                        Productos
                    </a>

                  </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="	far fa-bell"></i></div>
                    Reportes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>  
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="tab.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        Ingreso
                    </a>
                    <a class="nav-link" href="escritorio.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-minus"></i></div>
                        Salida
                    </a>

                  </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="	fas fa-cogs"></i></div>
                    Mantenimiento
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                  </a>  
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="tab.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                        Ingreso
                    </a>
                    <a class="nav-link" href="escritorio.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-minus"></i></div>
                        Salida
                    </a>

                  </nav>
                </div>

                <!--- fin -->
                </div>

              </div>
            </div> 
          </nav>
        </div>
      </div>
    <!-- /.sidebar -->
  </aside>