<?php
//incluimos la clase nusoap.php
require_once('../ProyectoSW-master/lib/nusoap.php');
require_once('../ProyectoSW-master/lib/class.wsdlcache.php');
//creamos el objeto de tipo soap_server
//$ns->"http://localhost/ProyectoSW-master/samples";
$server = new soap_server;
//$server->configureWSDL('comprobarPasswordd',$ns);
//$server->wsdl->schemaTargetNamespace=$ns;
//registramos la función que vamos a implementar
//se podría registrar mas de una función …
$server->register('comprobarPassword');//, array('x'=>'xsd:string'), array('z'=>'xsd:string'), $ns);

//implementamos la función
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

//llamamos al método service de la clase nusoap
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? 
$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>