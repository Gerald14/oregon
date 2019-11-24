<!DOCTYPE html>
<html lang="es">
<head>
    <title>Maderera Oregon-Tecnico-Maderero</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css"href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
       var parametro;
       function popupx(){
           parametro=window.open("php/ventana_producto.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_producto";
           parametro.document.getElementById('2').value="nombre_producto";
           parametro.document.getElementById('3').value="laboratorio_producto";
           parametro.document.getElementById('4').value="precio_producto";
       }

       function popup1(){
           parametro=window.open("php/ventana_cliente.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_cliente";
           parametro.document.getElementById('2').value="nombre_cliente";
           parametro.document.getElementById('3').value="apellidos_cliente";
           parametro.document.getElementById('4').value="dni_cliente";
           parametro.document.getElementById('5').value="telefono_cliente";
       }

       function popup4(){
           parametro=window.open("php/ventana_venta.php","","width=600,height=400");
           parametro.document.getElementById('1').value="IDCV";
           parametro.document.getElementById('2').value="NombreCV";
           parametro.document.getElementById('3').value="DNICV";
           parametro.document.getElementById('4').value="IDMV";
           parametro.document.getElementById('5').value="SubTV";
           parametro.document.getElementById('6').value="IGVV";
           parametro.document.getElementById('7').value="TotalV";
       }

       function popup3(){
        window.alert("Se eliminó el elemento");
       }

   </script> 
</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rubi.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Técnico Maderero </a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Tecnico Maderero</span></li>
        <a href="TecnicoFarmaceutico.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
<br/><br/>

        <form class="form-horizontal" action="./consultar_cliente_botica.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
        <div class="h2-titulo">
                <br>
            <h2>Generar Historial de Compras</h2></div>
        <div class="container">

        <h3>Historial de Compra</h3>
<br>
        <div class="form-group">
                <label class="control-label col-sm-2" for="txtFiltro">Ingrese Nombre o DNI:</label>
                <div class="col-sm-3">          
                    <input type="text" class="form-control" id="txtFiltro" name="txtFiltro" placeholder="Ingresar Nombre o DNI" required>
                </div>
                <input type="submit" name="btnBuscar" value="Buscar" class="btn btn-primary">

        </form>

<br><br>
        
                <table class="table" style="width: 1000px">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Importe</th>
                    </tr>
                </thead>
                    <?php
                            include 'php/conexion.php';
                            $filtro2=$_POST['txtFiltro2'];
                            $sql2="SELECT id_producto,nombre_producto,cantidad_ventas,precio_producto FROM venta_espera WHERE dni_cliente='$filtro2'";
                            $result2=mysqli_query($conexion,$sql2);
                            while($mostrar2=mysqli_fetch_array($result2)){
                            ?>
                            <tr>
                    <td><?php echo $mostrar2['id_producto']  ?></td>
                    <td><?php echo $mostrar2['nombre_producto']  ?></td>
                    <td><?php echo $mostrar2['cantidad_ventas']  ?></td>
                    <td><?php echo $mostrar2['precio_producto']  ?></td>
                   
                </tr>
                <?php
                }
                ?>
</table>

                
    </div>    

            
            
        
     </div> 

    
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('../Alquiler.php');
    });
    </script>

    <footer>

    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
<script src="comportamiento/factura.js"></script>
<script type="text/javascript" src="comportamiento/jquery.min.js"></script>
</body>
</html>