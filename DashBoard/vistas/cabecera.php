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
  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https:/cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

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
    <a class="brand-link ps-3" style="margin:20px 5px 5px 10px"> 
      <img src="/assets/img/sipan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light" style="font-family:helvetica; text-shadow: 0px 0px 3px
            ;">SIPAN</span>
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
      <nav class="mt-2" style="margin:5px;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
          <div class="sb-sidenav-menu-heading">INICIO</div>
            <a href="escritorio.php" class="nav-link" >
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                Escritorio
              </p>
            </a>       
          </li>
          <li class="nav-item">
            <a href="huespedes.php" class="nav-link">
              <i class="nav-icon  fas fa-users"></i>
              <p>
                Huespedes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="configuracion.php" class="nav-link ">
                  <i class="fas 	fas fa-user-plus"></i>
                  <p>Recepcion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="servicio.php" class="nav-link">
                  <i class="fas 	fas fa-user-minus"></i>
                  <p>Salida</p>
                </a>
              </li>
              
            </ul>
          </li>       
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>
                Hostal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="configuracion.php" class="nav-link ">
                  <i class="fas fa-cog nav-icon"></i>
                  <p>Configuración</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="servicio.php" class="nav-link">
                  <i class="fas fa-praying-hands nav-icon"></i>
                  <p>Servicios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="personal.php" class="nav-link">
                  <i class="fas fa-pump-medical nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.perm.php" class="nav-link">
                  <i class="fas fa-hands-helping nav-icon"></i>
                  <p>Permiso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="diagnostico.php" class="nav-link">
                  <i class="  fas fa-bed nav-icon"></i>
                  <p>Reserva</p>
                </a>                
              </li>
            </ul>
          </li>
          <!-- Boton desplegble
          <div class="desplegable">
            <button class="boton" id="des">Clinica</button>
            <div class="links">
              <a href="#">Lin1</a>
              <a href="#">Lin2</a>
              <a href="#">Lin3</a>
            </div>
          </div>
          -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>Consultas<i class="right fas fa-angle-left"></i></p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item mr-3">
              <a href="#" class="nav-link">
                <i class="fas fa-dollar-sign nav-icon"></i>
                <p>Pagos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="historias.php" class="nav-link">
                <i class="fas fa-book-medical nav-icon"></i>
                <p>Email</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="contactos.php" class="nav-link">
                <i class="fas fa-address-book nav-icon"></i>
                <p>Contactos</p>
              </a>
            </li>
          </ul>
          </li>  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>Ayuda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>Acerca De...</p>
            </a>
          </li>                   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>