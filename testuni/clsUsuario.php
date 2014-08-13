<?php

include("MySQL.php");

class clsUsuario{

var $USUA_ID;
var $USUA_FECHACAMBIO;
var $USUA_REGISTRADOPOR;
var $PEGE_ID;
var $USUA_USUARIO;
var $USUA_CLAVE;
var $TIUSUA_ID;
var $USUA_ESTADO;



public function getnombre($id)
	{
		$sql =  "SELECT USUA_USUARIO FROM tbl_usuario WHERE USUA_ID = '".$id."'";		
		$connection = new MySQL();
		$query = $connection->consulta($sql);
		if($connection->num_rows($query)>0){
			 while($resultados = $connection->fetch_array($query)){ 
			 	return ($resultados['USUA_USUARIO']); 
 				}
   			
		}
		

	}




public function getNumUsuarios(){

$sql =  "SELECT count(USUA_USUARIO) as tot FROM tbl_usuario";		
		$connection = new MySQL();
		$query = $connection->consulta($sql);
		if($connection->num_rows($query)>0){
			 while($resultados = $connection->fetch_array($query)){ 
			 	return ($resultados['tot']); 
 				}
   			
		}

}



public function insert(){

$user = new clsUsuario();

$user->USUA_FECHACAMBIO="CURDATE()";
$user->USUA_REGISTRADOPOR="edilverbm";
$user->PEGE_ID=29;
$user->USUA_USUARIO="pruebas";
$user->USUA_CLAVE="123456";
$user->TIUSUA_ID=1;
$user->USUA_ESTADO=1;
	
$sql =  "INSERT INTO tbl_usuario VALUES ('','{$user->USUA_FECHACAMBIO}','{$user->USUA_REGISTRADOPOR}',{$user->PEGE_ID},'{$user->USUA_USUARIO}','{$user->USUA_CLAVE}',{$user->TIUSUA_ID},{$user->USUA_ESTADO})";		
		$connection = new MySQL();
		$query = $connection->consulta($sql);	
}


}

?>
