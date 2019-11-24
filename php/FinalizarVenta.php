<?php
include 'conexion.php';
$fecha=$_POST["fecha"];



$insertar3="SELECT id_venta,dni_cliente FROM venta_espera ORDER by id_venta DESC LIMIT 1";

$result=mysqli_query($conexion,$insertar3);
$row=mysqli_fetch_array($result);
$id_venta = $row["id_venta"];
$dni_cliente=$row["dni_cliente"];

//saca el valor de venta total de ventas
/*$insertarXX="SELECT venta_total FROM ventas WHERE id_ventas='$id_venta'";
$resultXX=mysqli_query($conexion,$insertarXX);
$rowXX=mysqli_fetch_array($resultXX);
$venta_total1=$rowXX["venta_total"];

$venta_totalfinal=$precio_total + $venta_total1;

var_dump($id_venta);
var_dump($dni_cliente);
var_dump($venta_total1);
var_dump($precio_producto);
var_dump($cantidad_ventas);
var_dump($precio_total);*/

$insertarFinal="UPDATE ventas SET fecha_actual='$fecha' WHERE id_ventas='$id_venta'";
$resultadoFinal=mysqli_query($conexion,$insertarFinal);
if(!$resultadoFinal){
    echo 'Error al registrarse';
}else{
    header('Location: ../TecnicoFarmaceutico.php'); 
}      



?>