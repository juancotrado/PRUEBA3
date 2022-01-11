<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Cargo{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($nombre,$descripcion,$idusuario){
		date_default_timezone_set('America/Lima');
	$fechacreada=date('Y-m-d H:i:s');
	$sql="INSERT INTO cargo (nombre,descripcion,fechacreada,idusuario) VALUES ('$nombre','$descripcion','$fechacreada','$idusuario')";
	return ejecutarConsulta($sql);
}

public function editar($idcargo,$nombre,$descripcion,$idusuario){
	$sql="UPDATE cargo SET nombre='$nombre',descripcion='$descripcion',idusuario='$idusuario' 
	WHERE idcargo='$idcargo'";
	return ejecutarConsulta($sql);
}
/*public function desactivar($idcargo){
	$sql="UPDATE cargo SET fechacreada='0' WHERE idcargo='$idcargo'";
	return ejecutarConsulta($sql);
}
public function activar($idcargo){
	$sql="UPDATE cargo SET fechacreada='1' WHERE idcargo='$idcargo'";
	return ejecutarConsulta($sql);
}
*/
//metodo para mostrar registros
public function mostrar($idcargo){
	$sql="SELECT * FROM cargo WHERE idcargo='$idcargo'";
	return ejecutarConsultaSimpleFila($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM cargo";
	return ejecutarConsulta($sql);
}
//listar y mostrar en selct
public function select(){
	$sql="SELECT * FROM cargo";
	return ejecutarConsulta($sql);
}
}

 ?>
