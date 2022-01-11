 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>TRANSPORTES</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="http://www.munipuno.gob.pe/stweb/images/users/logo.png">

    <!-- DATATABLES -->
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<!-- Your customer chat code -->

<div class="wrapper">

  <header class="main-header">
  <div class="cabe">
    <img style="float:left;" src="http://www.munipuno.gob.pe/stweb/images/users/logo.png" height="65"  />  
    <h3>GERENCIA DE TRANSPORTES Y SEGURIDAD VIAL</h3>
  </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="../ajax/usuario.php?op=salir" class="btn btn-dark">Salir</a>
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
<br><br>   
<div class="user-panel">
  
        <div class="pull-left img">
          <img style="width: 20px; height: 20px;" >
        </div>
        <div class="pull-left info">
          
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MENÚ </li>


      <li><a href="escritorio.php"><i class=""></i> <span>Inicio</span></a></li>


<?php //if ($_SESSION['tipousuario']=='Administrador') {
?>
      <!-- <li class="treeview">
          <a href="#">
            <i class=""></i> <span>Administración de Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-sort-desc pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class=""></i> Usuarios</a></li>
            <li><a href="tipousuario.php"><i class=""></i> Tipo Usuario</a></li>
            <li><a href="departamento.php"><i class=""></i> Departamento</a></li>
            <li><a href="cargo.php"><i class=""></i> Cargo</a></li>
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
            <li><a href="asistencia.php"><i class=""></i> Asistencia</a></li>
            <li><a href="rptasistencia.php"><i class=""></i> Reportes</a></li>
           
          </ul>
      </li>-->
<?php //} ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>