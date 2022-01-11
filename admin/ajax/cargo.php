<?php 
require_once "../modelos/Cargo.php";
if (strlen(session_id())<1) 
	session_start();

$cargo=new Cargo();

$idcargo=isset($_POST["idcargo"])? limpiarCadena($_POST["idcargo"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$idusuario=$_SESSION["idusuario"];

switch ($_GET["op"]) {
	case 'guardaryeditar':
	if (empty($idcargo)) {
		$rspta=$cargo->insertar($nombre,$descripcion,$idusuario);
		echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar los datos";
	}else{
         $rspta=$cargo->editar($idcargo,$nombre,$descripcion,$idusuario);
		echo $rspta ? "Datos actualizados correctamente" : "No se pudo actualizar los datos";
	}
		break;
	

	/*case 'desactivar':
		$rspta=$cargo->desactivar($idcargo);
		echo $rspta ? "Datos desactivados correctamente" : "No se pudo desactivar los datos";
		break;
	case 'activar':
		$rspta=$cargo->activar($idcargo);
		echo $rspta ? "Datos activados correctamente" : "No se pudo activar los datos";
		break;*/
	
	case 'mostrar':
		$rspta=$cargo->mostrar($idcargo);
		echo json_encode($rspta);
		break;

    case 'listar':
		$rspta=$cargo->listar();
		$data=Array();

		while ($reg=$rspta->fetch_object()) {
			$data[]=array(
            "0"=>'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcargo.')"><i class="fa fa-pencil"></i></button>',
            "1"=>$reg->nombre,
            "2"=>$reg->descripcion,
            "3"=>$reg->fechacreada
              );
		}
		$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
		echo json_encode($results);   
		break;

	case 'selectCargos':
		$rspta=$cargo->listar();
		echo '<option value="0">seleccione...</option>';
		while ($reg=$rspta->fetch_object()) {
			echo '<option value=' . $reg->idcargo.'>'.$reg->nombre.'</option>';
		}
		
		break;
}
 ?>