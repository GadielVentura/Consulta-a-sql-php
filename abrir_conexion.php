<?php
session_start();
//parametros a configurar pa la base de datos
/*$host = 'localhost'; //para la 80
$basededatos = "condominios";
$usuariodb = "gadiel";
$clavedb = "12345"; 
*/
//lista de tablas
//$tabla_db = "propietario";

//error_reporting(0); //no me muestra errores


$conexion = mysqli_connect(
    'localhost',
    'gadiel',
    '12345',
    'condominios'
);
//$conexion = new  mysqli($host,$usuariodb,$clavedb,$basededatos);

/*
if($conexion->connection_errno){
    echo "el sitio experimenta fallos...";
    exit();

}*/


?>