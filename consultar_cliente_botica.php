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
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Técnico Maderero</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Técnico Maderero</span></li>
        <a href="TecnicoFarmaceutico.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
<br/><br/>

        <form class="form-horizontal" action="./consultar_cliente_botica.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
        <div class="h2-titulo">
                <br>
            <h2>Visualizar Cliente</h2></div>
        <div class="container">
        <h3>Cliente Buscado</h3>

        <div class="form-group">
                <label class="control-label col-sm-2" for="txtFiltro">Ingrese Nombre o DNI:</label>
                <div class="col-sm-3">          
                    <input type="text" class="form-control" id="txtFiltro" name="txtFiltro" placeholder="Ingresar Nombre o DNI" required>
                </div>
                <input type="submit" name="btnBuscar" value="Buscar" class="btn btn-primary">

        </form>

<br><br>
        <div class="row">

                    <div class="col-lg-10">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Datos Personales
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <h3 align="center">Detalles del Cliente</h3>
                                </br>

                                <?php
                                        include 'php/conexion.php';
                                        $filtro=$_POST['txtFiltro'];
                                        $sql="SELECT * FROM cliente where dni_cliente='$filtro' or nombre_cliente like '%$filtro%'";
                                        $result=mysqli_query($conexion,$sql);
                                        while($mostrar=mysqli_fetch_array($result)){
                                        ?>


                                    <fieldset disabled>
                                        <div class="form-group">
                                            <div class="col-lg-2">
                                                <label>N° de DNI:</label>
                                            </div> 
                                            <div class="col-lg-4">
                                                <input class="form-control" name="nombre_producto" type="text" value="<?php echo $mostrar['dni_cliente']?>" autofocus>
                                            </div> <div class="col-lg-2">
                                            <label>Telefono:</label>
                                        </div> 
                                        <div class="col-lg-4">
                                            <input class="form-control" name="peso" type="number" value="<?php echo $mostrar['telefono_cliente']?>" >
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <label>Nombres:</label>
                                        </div> 
                                        <div class="col-lg-4">
                                            <input class="form-control" name="nomb" type="text" value="<?php echo $mostrar['nombre_cliente']?>" >
                                        </div> <div class="col-lg-2">
                                        <label>Apellidos:</label>
                                    </div> 
                                    <div class="col-lg-4">
                                        <input class="form-control" name="talla" type="text" value="<?php echo $mostrar['apellidos_cliente']?>" >
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <label>Edad:</label>
                                    </div> 
                                    <div class="col-lg-4">
                                        <input class="form-control" name="ape" type="text" value="<?php echo $mostrar['edad_cliente']?>" >
                                    </div> 
                                </div> 
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <label>Correo:</label>
                                    </div> 
                                    <div class="col-lg-4">
                                        <input class="form-control" name="text" type="text" value="<?php echo $mostrar['correo_cliente']?>" >
                                    </div> 
                                </div> 
                            </fieldset>
                            <?php
                            }?>
                    </div>
                </div>  
            </div>
                
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