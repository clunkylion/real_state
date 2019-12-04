<?php
function conecta(){
    $conexion = mysqli_connect("localhost", "root", "", "db_inmobiliaria");
return $conexion;
}

/*if(!$conexion){
echo "Error no hay conexcion con la bd";
}else{
    echo "Conectado a la base de datos";
}*/

/*function fecha_hora()
{
    
    date_default_timezone_get('America/Santiago');
    $fecha_hora = date('H:i:s d-m-Y');
    return $fecha_hora;
}*/
?>