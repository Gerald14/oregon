<?php
$host = "localhost";
$usuario="root";
$clave="";
$bd="oregon";
$conexion=mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "Conectado a la base de datos";
}
else{
    echo "Error al conectar a la base de datos";
}

?>