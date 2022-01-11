<?php 
require_once "../modelos/Asistencia.php";
if (strlen(session_id())<1) 
	session_start();
$asistencia=new Asistencia();

$codigo_persona=isset($_POST["codigo_persona"])? limpiarCadena($_POST["codigo_persona"]):"";
$iddepartamento=isset($_POST["iddepartamento"])? limpiarCadena($_POST["iddepartamento"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$apellidos=isset($_POST["apellidos"])? limpiarCadena($_POST["apellidos"]):"";
$detalles=isset($_POST["detalles"])? limpiarCadena($_POST["detalles"]):"";
$evidencia=isset($_POST["evidencia"])? limpiarCadena($_POST["evidencia"]):"";
$buscar=isset($_POST["buscar"])? limpiarCadena($_POST["buscar"]):"";


switch ($_GET["op"]) {
	case 'guardaryeditar':
		$result=$asistencia->verificarcodigo_persona($codigo_persona);

      	if($result > 0) {
	date_default_timezone_set('America/Lima');
      		$fecha = date("Y-m-d");
			$hora = date("H:i:s");

			$result2=$asistencia->seleccionarcodigo_persona($codigo_persona);
			   
     		$par = abs($result2%2);

          if ($par == 0){ 
                              
                $tipo = "Entrada";
        		$rspta=$asistencia->registrar_entrada($codigo_persona,$tipo);
    			//$movimiento = 0;
    			echo $rspta ? '<h3><strong>Nombres: </strong> '. $result['nombre'].' '.$result['apellidos'].'</h3><div class="alert alert-success"> Ingreso registrado '.$hora.'</div>' : 'No se pudo registrar el ingreso';
   		  }else{ 
                $tipo = "Salida";
         		$rspta=$asistencia->registrar_salida($codigo_persona,$tipo,$detalles,$evidencia);
     			//$movimiento = 1;
     			echo $rspta ? '<h3><strong>Nombres: </strong> '. $result['nombre'].' '.$result['apellidos'].'</h3><div class="alert alert-danger"> Salida registrada '.$hora.'</div>' : 'No se pudo registrar la salida';             
        } 
        } else {
		         echo '<div class="alert alert-danger">
                       <i class="icon fa fa-warning"></i> No hay empleado registrado con esa código...!
                         </div>';
        }

	break;

	
	/*case 'listaru':
    $idusuario=$_SESSION["idusuario"];
		$rspta=$asistencia->listaru($idusuario);
		//declaramos un array
		$data=Array();


		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
				"0"=>$reg->nombre,
				"1"=>$reg->departamento,
				"2"=>$reg->fecha_hora,
				"3"=>$reg->tipo,
				"4"=>$reg->detalles,
				"5"=>$reg->evidencia
				);
		}

		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);

	break;

	/*case 'listar_asistencia':
    $fecha_inicio=$_REQUEST["fecha_inicio"];
    $fecha_fin=$_REQUEST["fecha_fin"];
    $codigo_persona=$_REQUEST["idcliente"]; 
		$rspta=$asistencia->listar_asistencia($fecha_inicio,$fecha_fin,$codigo_persona);
		//declaramos un array
		$data=Array();


		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
				"0"=>$reg->fecha,
				"1"=>$reg->nombre,
				"2"=>$reg->apellidos,
				"3"=>$reg->tipo,
				"4"=>$reg->fecha_hora,
				"5"=>$reg->detalles,
				"6"=>$reg->evidencia
				);
		}

		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);

	break;
	*/
	/*case 'listar_asistenciau':
    $fecha_inicio=$_REQUEST["fecha_inicio"];
    $fecha_fin=$_REQUEST["fecha_fin"];
    $codigo_persona=$_SESSION["codigo_persona"]; 
		$rspta=$asistencia->listar_asistencia($fecha_inicio,$fecha_fin,$codigo_persona);
		//declaramos un array
		$data=Array();


		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
				"0"=>$reg->fecha,
				"1"=>$reg->nombre,
				"2"=>$reg->tipo,
				"3"=>$reg->fecha_hora,
				"4"=>$reg->detalles,
				"5"=>$reg->evidencia
				);
		}

		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);

	break;
	*/
		
		case 'buscar':
				$bus=$_POST['buscar'];
				$rspta=$asistencia->buscar($bus);
				
				
				//declaramos un array
				$data=Array();
				while ($reg=$rspta->fetch_object()) {
					$data[]=array(
						"0"=>$reg->nombre,
						"1"=>$reg->apellidos,
						
						);
				}
		
				$results=array(
					 "sEcho"=>1,//info para datatables
					 "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
					 "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
					 "aaData"=>$data); 
				echo json_encode ($data);
		
				break;
		case 'listar':
				
			break;
		

}
?>