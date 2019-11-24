<!DOCTYPE html>
<html lang="es">
<head>
    <title>Maderera Oregon-Tecnico Maderero</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="Bootstrap_4/css/bootstrap.min.css">	
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.min.css">  
	<link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.min.css"/> 
</head>

<body>
<div class="container">
        <h3>Lista de Ventas</h3>
        <p>Resultado de la busqueda</p> 
        <p>Volver:</p> 
        <li class="h"><a href="TecnicoFarmaceutico.php" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
            <div class="table-responsive">
            <form action="php/factura.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero de venta</th>
                        <th>Cliente</th>
                        <th>DNI</th>
                        <th>Cantidad Total</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $fechainicio=$_POST["start_date"];
                $fechafin=$_POST["end_date"];
                $sql= "SELECT v.id_ventas, concat (c.nombre_cliente,' ', c.apellidos_cliente) as cliente, c.dni_cliente, v.venta_total,
                v.fecha_actual  
                FROM ruby.ventas v JOIN  ruby.cliente c on v.id_cliente=c.id_cliente WHERE (v.fecha_actual BETWEEN '$fechainicio' AND 
                '$fechafin')";

                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_ventas']  ?></td>
                    <td><?php echo $mostrar['cliente']  ?></td>
                    <td><?php echo $mostrar['dni_cliente']  ?></td>
                    <td><?php echo $mostrar['venta_total']  ?></td>
                    <td><?php echo $mostrar['fecha_actual']  ?></td>
                    
                    <td>
                        <input type="submit" value="Register" name="submit">
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            </form>
            </div>
        </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="librerias/JQuery/jquery-3.3.1.min.js"></script>	 
<script src="librerias/Popper/popper.min.js"></script>	 	 
<script src="librerias/Bootstrap_4/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    
</body>
</html>