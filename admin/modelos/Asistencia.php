<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Asistencia{


	//implementamos nuestro constructor
public function __construct(){

}
public function buscar($buscar){
	//$sql="DELETE FROM usuarios WHERE idusuario=$idusuario";
	$sql="SELECT * FROM usuarios WHERE login LIKE '%$buscar%'";
	
	return ejecutarConsulta($sql);
}
public function listar(){
	$sql="SELECT * FROM usuarios";
	return ejecutarConsulta($sql);
}

}
 ?>
