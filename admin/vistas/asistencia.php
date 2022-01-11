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
  <h1 class="box-title">Buscar por el número de DNI </h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="box-header with-border">
  <input type="text" class="form-control" id ="buscar" name = "buscar">
  <br>
</div>
<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <button onclick="buscar($('#buscar').val());" class="btn btn-primary">BUSCAR</button>
  
</div>

<div id = "datos_buscador" class= "container pl-5 pr-5">
</div>
<div class="panel-body table-responsive" id="listadoregistros">
  <table id ="tablasis" class="table">
    <thead>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>DNI</th>
      <th>Categoria</th>
      <th>Numero de licencia</th>
      <th>N°</th>
      
    </thead>
    <tbody>
    </tbody>
    <tfoot>
    </tfoot>   
  </table>
</div>
<script type>
  
  
function buscar(buscar){
	var parametros = {"buscar":buscar};
	$.ajax({
	
	type: 'POST',
	url:'../ajax/asistencia.php?op=buscar',
  data: parametros,
  
	success: function(data){
	document.getElementById("tablasis").innerHTML = data;
	}
	});
}


</script>

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
