<?php
# 
# 
function conexion(){
	try {
		//PDO 
		$conexion = new PDO("mysql:host=localhost;dbname=friendnote", "root", "");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;	
	} catch (PDOException $e) {
		return false;
	}
}

# 
# 
function limpiarDatos($datos){
	// 
	$datos = trim($datos);

	// 
	$datos = stripslashes($datos);

	// 
	$datos = htmlspecialchars($datos);
	return $datos;
}

?>