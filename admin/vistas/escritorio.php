<?php
//activamos almacenamiento en el buffer


 
require 'header.php';
require_once('../modelos/Usuario.php');
  $usuario = new Usuario();
  $rsptan = $usuario->cantidad_usuario();
  $reg=$rsptan->fetch_object();
  $reg->nombre;
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

<div class="panel-body"> 


<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-red">
    
    <a href="asistencia.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <br><strong>BUSCAR </strong>
      </h5>
      
    </div>
    
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>









<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-blue">
  <a href="usuario.php" class="small-box-footer">
    <div class="inner">
      <h4 style="font-size: 20px;">
        <strong>LISTA DE LICENCIAS   </strong>
      </h4>
      <p>Total <?php echo $reg->nombre; ?></p>
      </div>
    
    <div class="small-box-footer">
           <i class="fa"></i>
           <br>
           
     </div>
    

  </a>
      </div>

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