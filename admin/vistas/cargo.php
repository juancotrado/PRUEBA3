<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
}else{


require 'header.php';


 ?>
    <br>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <br>
      <div class="box">
<div class="box-header with-border" style="height: 10%; background:#e9f0ff; ">
  <h1 class="box-title"><button class="btn btn-info" id="btnagregar" onclick="mostrarform(true)"><i class=""></i>Agregar</button> Cargo </h1>
  <div class="box-tools pull-left">
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros" style=" background:white;">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Opciones</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Fecha/registro</th>
    </thead>
    <tbody> 
    </tbody>  
  </table>
</div>
<div class="panel-body" style="height: 30%; background:white;" id="formularioregistros" >
  <form action="" name="formulario" id="formulario" method="POST"  >
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Nombre</label>
      <input class="form-control" type="hidden" name="idcargo" id="idcargo">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
    </div>
        <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Descripcion</label>
      <input class="form-control" type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
    </div>
    <center><div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-success" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>

      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div></center>
  </form>
</div>
<!--fin centro-->
      </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php 


require 'footer.php';
 ?>
 <script src="scripts/cargo.js"></script>
 <?php 
}

ob_end_flush();
  ?>

