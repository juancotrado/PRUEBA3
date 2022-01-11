<?php 
 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: http://localhost/prueba2/asistencia/vistas/login.html");
}else{

require "header.php";

 ?>

<!-- Automatic element centering -->
<br><br>
<div class="content-wrapper">
     <!-- Main content -->
     <section class="content">
 
       <!-- Default box -->
       <div class="row">
         <div class="col-md-12">
       <br>
       <div class="box">
  <center><div class="box-header with-border" style="height: 10%; background:#e9f0ff;"><h1 class="box-title"> Asistencia nueva</h1></center>
   <div class="box-tools pull-right"> </div>
  </div>
 <!--box-header-->
 <!--centro-->
 <div class="panel-body" id="" style="height: 10%; background:#e9f0ff;" >
 <!--
 //include '../ajax/asistencia.php' -->
    <div name="movimientos" id="movimientos"></div> 

  <!-- User name -->
    
  <!-- START LOCK SCREEN ITEM -->
  <div class="panel-body" id="formularioregistros">
  <!--<div class="lockscreen-item">-->
    
    <div class="wrap">
      <ul class="tabs">
        <li><a href="#tab1"><span class=""></span><span class="tab-text">Entrada</span></a></li>
        <li><a href="#tab1"><span class=""></span><span class="tab-text">Salida</span></a></li>
      </ul>
      <div class="secciones">
        <article id="tab1">
          
          <form  action="" class="formulariop" name="formulario" id="formulario" method="POST">
            <br>  
            <div class="form-group col-lg-12 col-md-12 col-xs-12 p-3">
              <label for="">Id de Asistencia </label>
              <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12">
              <label for="">Detalles </label>
              <textarea type="text" class="form-control" name="detalles" id="detalles" placeholder="Detalles" ></textarea>
            </div>
            <!--<div class="form-group col-lg-6 col-md-6 col-xs-12">
              <label for="">Evidencia Archivos </label>
              <input type="file" class="custom-file-input" id="customFile">
            </div>-->
            <div class="form-group col-lg-12 col-md-12 col-xs-12">
              <label  for="">Evidencia (link) </label>
              <input type="text" class="form-control" name="evidencia" id="evidencia" placeholder="Link de Evidencias" >
            </div>

            <center><div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <button type="submit" class="btn btn-primary"> Guardar </button>
            </div></center>
            
          </form>
          
        </article>
        <article id="tab2">
          <form  action="" class="formulariop" name="formulario" id="formulario" method="POST">
              <br>  
              <div class="form-group col-lg-12 col-md-12 col-xs-12">
                <label for="">Id de Asistencia </label>
                <input type="password" class="form-control" name="codigo_persona" id="codigo_persona" placeholder="ID de asistencia">
              </div>
              <div class="form-group col-lg-12 col-md-12 col-xs-12">
                <label for="">Detalles </label>
                <textarea type="text" class="form-control" name="detalles" id="detalles" placeholder="Detalles" ></textarea>
              </div>
              <!--<div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Evidencia Archivos </label>
                <input type="file" class="custom-file-input" id="customFile">
              </div>-->
              <div class="form-group col-lg-12 col-md-12 col-xs-12">
                <label for="">Evidencia (link) </label>
                <input type="text" class="form-control" name="evidencia" id="evidencia" placeholder="Link de Evidencias" >
              </div>

              <center><div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary"> Guardar </button>
              </div></center>
              
            </form>
        </article>
      </div>
    </div> 

  </div>
  <!-- /.lockscreen-item 
  <div class="help-block text-center">
    Ingresa tu ID de asistencia
  
  </div>-->
  </div>
 
       </div>
       </div>
  </section>
</div>
<?php 

 require 'footer.php';
  ?>

 <script type="text/javascript" src="scripts/asistencia.js"></script>
 <?php 
 
}

ob_end_flush();
  ?>


   
