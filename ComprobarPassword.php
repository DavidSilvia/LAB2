<?php
//incluimos la clase nusoap.php
require_once('../ProyectoSW-master/lib/nusoap.php');
require_once('../ProyectoSW-master/lib/class.wsdlcache.php');
//creamos el objeto de tipo soap_server
//$ns->"http://localhost/ProyectoSW-master/samples";
$server = new soap_server;
//$server->configureWSDL('comprobarPasswordd',$ns);
//$server->wsdl->schemaTargetNamespace=$ns;
//registramos la funci�n que vamos a implementar
//se podr�a registrar mas de una funci�n �
$server->register('comprobarPassword');//, array('x'=>'xsd:string'), array('z'=>'xsd:string'), $ns);

//implementamos la funci�n
function comprobarPassword ($x, $y){
	if($y == 1234){
		$fp=fopen("http://localhost//ProyectoSW-master/toppasswords.txt", "r") or exit("No se abre el fichero");
		while(!feof($fp)){
			$linea = fgets($fp);
			if(strstr($linea, $x)!=null){
				return "INVALIDA";
			}
		}
		return "VALIDA";
		fclose($fp);
	}
	else if($y !=1234){
		return "USUARIO NO AUTORIZADO";
	}
}

//llamamos al m�todo service de la clase nusoap
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? 
$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>