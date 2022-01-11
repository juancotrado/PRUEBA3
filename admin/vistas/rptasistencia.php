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
  <h1 class="box-title">Consulta de Asistencias por Fecha</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <label>Fecha Inicio</label>
    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="<?php echo date("Y-m-d"); ?>">
  </div>
  <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <label>Fecha Fin</label>
    <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="<?php echo date("Y-m-d"); ?>">
  </div>
  <div class="form-inline col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <label>Empleado</label>
    <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true" required>
    </select>
    <br>
    <button class="btn btn-success" onclick="listar_asistencia();">
      Mostrar</button>
  </div>
  <table id="tbllistado_asistencia" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Fecha</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Asistencia</th>
      <th>Fecha/Hora</th>
      <th>Detalles</th>
      <th>Evidencia</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
    </tfoot>   
  </table>
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
 <script src="scripts/asistencia.js"></script>
 <?php 

  ?>

