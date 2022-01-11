<?php 
//activamos almacenamiento en el buffer


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
<div class="box-header with-border" style="height: 10%; background:#e9f0ff;">
  <h1 class="box-title">Registro de Asistencias </h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistadou" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Nombres</th>
      <th>Área</th>
      <th>Fecha Hora</th>
      <th>Asistencia</th>
      <th>Detalles</th>
      <th>Evidencia</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>

    </tfoot>   
  </table>
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
 <script src="scripts/asistencia.js"></script>
 <?php 

  ?>
