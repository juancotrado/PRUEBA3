<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Usuario{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($nombre,$apellidos,$login,$tipdepersonal,$iddepartamento,$grupocupacional,$idcat){
	date_default_timezone_set('America/Lima');
	$fechacreado=date('Y-m-d H:i:s');
	$sql="INSERT INTO usuarios (nombre,apellidos,login,tipdepersonal,iddepartamento,grupocupacional,codigo_persona) VALUES ('$nombre','$apellidos','$login','U$login','$iddepartamento','$grupocupacional','$idcat')";
	return ejecutarConsulta($sql);

}
public function insertar1($nombre,$apellidos,$login,$tipdepersonal,$iddepartamento,$grupocupacional,$idcat){
	date_default_timezone_set('America/Lima');
	$fechacreado=date('Y-m-d H:i:s');
	$sql="INSERT INTO usuarios (nombre,apellidos,login,tipdepersonal,iddepartamento,grupocupacional,codigo_persona) VALUES ('$nombre','$apellidos','$login','MTP$login','$iddepartamento','$grupocupacional','$idcat')";
	return ejecutarConsulta($sql);

}

public function editar($idusuario,$nombre,$apellidos,$login,$iddepartamento,$idtipousuario,$idcargo,$tipdepersonal,$grupocupacional,$email,$codigo_persona){
	$sql="UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',login='$login',iddepartamento='$iddepartamento',idtipousuario='$idtipousuario',idcargo='$idcargo',tipdepersonal='$tipdepersonal',grupocupacional='$grupocupacional',email='$email',codigo_persona='$codigo_persona'    
	WHERE idusuario='$idusuario'";
	 return ejecutarConsulta($sql);

}
public function editar_clave($idusuario,$clavehash){
	$sql="UPDATE usuarios SET password='$clavehash' WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}
public function buscar($login){
	$sql="SELECT FROM usuarios WHERE login LIKE LOWER ('%".$login."%') OR nombre LOWER ('%".$login."%')";
	return ejecutarConsulta($sql);
}
public function mostrar_clave($idusuario){
	$sql="SELECT idusuario, password FROM usuarios WHERE idusuario='$idusuario'";
	return ejecutarConsultaSimpleFila($sql);
}
public function desactivar($idusuario){
	$sql="DELETE FROM usuarios WHERE idusuario=$idusuario";
	//$sql="SELECT * FROM usuarios WHERE login LIKE '%$idusuario%'";
	
	return ejecutarConsulta($sql);
}
public function activar($idusuario){
	$sql="UPDATE usuarios SET estado='1' WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}

//metodo para mostrar registros
public function mostrar($idusuario){
	$sql="SELECT u.nombre,u.apellidos,d.nombre as departamento FROM usuarios u INNER JOIN departamento d ON u.iddepartamento=d.iddepartamento
	WHERE idusuario='$idusuario'";
	return ejecutarConsulta($sql);
}

//listar registros
public function listar(){
	$sql="SELECT u.nombre,u.apellidos,u.tipdepersonal,u.idusuario,u.login,c.nombre as departamento FROM usuarios u INNER JOIN categoria C ON u.codigo_persona=c.idcat ";
	return ejecutarConsulta($sql);
	//$sql="SELECT *FROM usuarios";
	//return ejecutarConsulta($sql);
}

public function cantidad_usuario(){
	$sql="SELECT count(*) nombre FROM usuarios";
	return ejecutarConsulta($sql);
}
public function select(){
	$sql="SELECT * FROM departamento";
	return ejecutarConsulta($sql);
}
public function select1($for){
	//$id = $_POST['id'];
	$sql="SELECT * FROM categoria WHERE idusuario='$for'";
	return ejecutarConsulta($sql);
}
//Función para verificar el acceso al sistema
	public function verificar($login,$tipdepersonal)
    {
    	$sql="SELECT u.codigo_persona,u.idusuario,u.nombre,u.apellidos,u.login,u.idtipousuario,u.iddepartamento,u.idcargo,u.tipdepersonal,u.grupocupacional,u.email,u.login, tu.nombre as tipousuario FROM usuarios u INNER JOIN tipousuario tu ON u.idtipousuario=tu.idtipousuario WHERE login='$login' AND password='$clave' AND estado='1'"; 
    	return ejecutarConsulta($sql);  
    }
}

 ?>
