<php
require_once "clases/conexion/config";


$conexcion = new conexion; 

$query = "SELECT * FROM empleado";

print_r($conexcion->obtenerDatos($query)));


?>