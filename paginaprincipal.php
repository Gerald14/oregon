<?php

session_start();
$usuario = $_SESSION['username'];
$tipo = $_SESSION['type'];
echo $tipo;
if(!isset($usuario)){
    header("location: login.php");
}else{
    header("location: JefeDeAlmacen.php");
  /*  switch($tipo){
        case 'jefe de almacen':
            header("location: JefeDeAlmacen.php");
        break;
        case 'encargado de ventas':
            header("location: EncargadoDeVenta.php");
        break;
    }*/
    

    echo  $tipo;
    echo "<a href='php/salir.php'>SALIR </a>";
}







?>