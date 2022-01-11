<?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DRE-PUNO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
    <link rel="shortcut icon" href="http://www.drepuno.gob.pe/web/templates/drep5/images/logogrdrep.png">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="../admin/public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../admin/public/img/apple-touch-icon.png">
   <!-- jQuery -->
   <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
     <!-- Bootbox -->
    <script src="../admin/public/js/bootbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="main.js"></script>
  
  </head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<!-- Your customer chat code -->

<div class="wrapper">

  <header class="main-header">
  <div class="cabe">
    <img style="float:left;" src="http://www.drepuno.gob.pe/web/templates/drep5/images/logogrdrep.png" height="60"  />  
    <h3>DIRECCIÓN REGIONAL DE EDUCACIÓN PUNO</h3>
  
  </div>

  
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top ">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>

      <div class="navbar-custom-menu ">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="../admin/ajax/usuario.php?op=salir" class="btn btn-dark">Salir</a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
    
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    
    <section class="sidebar">
      <!-- Sidebar user panel -->
<br><br><br>   
<div class="user-panel">
  
        <div class="pull-left img">
          <img style="width: 20px; height: 20px;" >
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre']; ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MENÚ </li>


      <li><a href="../admin/vistas/escritorio.php"><i class=""></i> <span>Inicio</span></a></li>


<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
      <li class="treeview">
          <a href="#">
            <i class=""></i> <span>Administración de Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-sort-desc pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin/vistas/usuario.php"><i class=""></i> Usuarios</a></li>
            <li><a href="../admin/vistas/tipousuario.php"><i class=""></i> Tipo Usuario</a></li>
            <li><a href="../admin/vistas/departamento.php"><i class=""></i> Departamento</a></li>
            <li><a href="../admin/vistas/cargo.php"><i class=""></i> Cargo</a></li>
          </ul>
      </li>

          <li class="treeview">
          <a href="#">
            <i class=""></i> <span>Control de Asistencias</span>
            <span class="pull-right-container">
              <i class="fa fa-sort-desc pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin/vistas/asistencia.php"><i class=""></i> Asistencia</a></li>
            <li><a href="../admin/vistas/rptasistencia.php"><i class=""></i> Reportes</a></li>
           
          </ul>
      </li>
<?php } ?>
<?php if ($_SESSION['tipousuario']!='Administrador') {
?>
          <li class="treeview">
          <a href="#">
            <i class=""></i> <span>Mis Asistencias</span>
            <span class="pull-right-container">
              <i class="fa fa-sort-desc pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/prueba2/asistencia/vistas/asistencia.php"><i class=""></i> Nueva Asistencia</a></li>
            <li><a href="../admin/vistas/asistenciau.php"><i class=""></i> Asistencia</a></li>
            <li><a href="../admin/vistas/rptasistenciau.php"><i class=""></i> Reportes</a></li>
           
          </ul>
      </li>
<?php } ?> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>