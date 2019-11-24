<!DOCTYPE html>
<html lang="es">

<head>
    <title>Maderera Oregon-Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Admin.css">
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="/librerias/Bootstrap_4/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="diseño/login.css">
    <script>
        var parametro;

        function popup() {
            parametro = window.open("php/ventana_producto.php", "", "width=600,height=400");
            parametro.document.getElementById('1').value = "id_producto";
            parametro.document.getElementById('2').value = "nombre_producto";
            parametro.document.getElementById('3').value = "laboratorio_producto";
            parametro.document.getElementById('4').value = "precio_producto";
        }

        function popup1() {
            parametro = window.open("php/ventana_cliente.php", "", "width=600,height=400");
            parametro.document.getElementById('1').value = "id_cliente";
            parametro.document.getElementById('2').value = "nombre_cliente";
            parametro.document.getElementById('3').value = "apellidos_cliente";
            parametro.document.getElementById('4').value = "dni_cliente";
            parametro.document.getElementById('5').value = "telefono_cliente";
        }

        function popup4() {
            parametro = window.open("php/ventana_venta.php", "", "width=600,height=400");
            parametro.document.getElementById('1').value = "IDCV";
            parametro.document.getElementById('2').value = "NombreCV";
            parametro.document.getElementById('3').value = "DNICV";
            parametro.document.getElementById('4').value = "IDMV";
            parametro.document.getElementById('5').value = "SubTV";
            parametro.document.getElementById('6').value = "IGVV";
            parametro.document.getElementById('7').value = "TotalV";
        }

        function popup3() {
            window.alert("Se eliminó el elemento");
        }

        function popup5() {
            parametro = window.open("php/ventana_busquedaventa", "", "width=600,height=400");
            parametro.document.getElementById('1').value = "start_date";
            parametro.document.getElementById('2').value = "end_date";

        }
    </script>

</head>


<body>

    <!-- NAVEGADOR HORIZONALTAL -->
    <header id="header">
        <ul class="nav-top">
            <li><img src="imagenes/logo_oregon.jpg" alt="logo rocky" class="logo"></li>
            <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
            <li style="float:right"><a href="php/salir.php"><img src="imagenes/boton-salir.png "> Salir</a></li>
            <li style="float:right"><a href="#"><img src="imagenes/rec.png"> JEFE DE ALMACEN </a></li>
            <li style="float:right"><a href="#"><img src="imagenes/cronometro.png"> 00:10:30</a></li>
        </ul>

    </header>


    <!-- NAVEGADOR LATERAL -->
    <nav>
        <ul class="nav-lateral">

            <li style="margin-bottom: 25px"><img src="imagenes/usuario.png" class="activo">
                <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Jefe de almaacen</span></li>
            <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
            <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
            <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Gestion de Compras<img src="imagenes/abajo1.png" class="c"></a>
                <ul>
                    <li class="h"><a href="#tab2_1" class="x"><img src="imagenes/añadir.png" class="b">Orden de Requerimiento</a></li>
                    <li class="h"><a href="#tab2_2" class="x"><img src="imagenes/añadir.png" class="b">Orden de compra</a></li>
                    <li class="h"><a href="#tab2_3" class="x"><img src="imagenes/añadir.png" class="b">Registrar Productos</a></li>
                    <li class="h"><a href="#tab2_4" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Productos</a></li>
                    <li class="h"><a href="#tab2_5" class="x"><img src="imagenes/ojo.png" class="b">Reporte de Inventario</a></li>
                </ul>
            </li>

            <li><a href="#"><img src="imagenes/icon-ajustes.png" class="b">Ajustes</a></li>
        </ul>

    </nav>


    <!-- CONTENIDO DE LA PAGINA -->

    <div class="secciones">
        <article id="tab1">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a1">HOME</a>
            </div>
            <div class="h2-titulo">
                <h2>Inicio</h2>
            </div>
            <div class="ini-gestionar">
                <button type="button" class="btn btn-success btn-lg"><a href="#tab3" class="x">GESTION DE INVENTARIO</a></button>
            </div>

        </article>
        <article id="tab2">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a1">MI INFORMACION</a>
            </div>
            <div class="h2-titulo">
                <h2>Mi Informacion</h2>
            </div>
            <div class="container">
                <h3>Datos Personales</h3>
                <form class="form-horizontal" action="#" method="post" onsubmit="return validar();">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombrex" placeholder="Enter Nombre" name="nombrex" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apellido">Apellido:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="apellidox" placeholder="Enter Apellidos" name="apellidox" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="direccion">Direccion:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="direccion" placeholder="Enter Direccion" name="direccion" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre">Correo:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="Correox" placeholder="Enter Correo" name="correox" required>
                            <button type="button" class="btn btn-primary">Verificar</button>
                        </div>
                        <div id="resultadoCorreo"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="usuario">Usuario:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="usuariox" placeholder="Enter Usuario" name="usuariox" required>
                            <button type="button" class="btn btn-primary">Verificar</button>
                        </div>
                        <div id="resultadoUsuario"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="clave">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clavex" placeholder="Enter Contraseña" name="clavex" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefono">Telefono:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telefonox" placeholder="Enter Telefono" name="telefonox" required>
                        </div>
                    </div>


                </form>
            </div>
        </article>
        <article id="tab2_1">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION COMPRA</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Generar Orden de Requerimiento</a>
            </div>
            <div class="h2-titulo">
                <h2>Generar Orden de Requerimiento</h2>
            </div>
            <div class="container">
                <h3>Nueva Orden de Requerimiento</h3>

                <form class="form-horizontal" action="php/save_esperaruby.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">N° Orden de Requerimiento :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control datepicker" name="purchase_date" value="6396" disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">Codigo Proveedor:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Buscar proveedor.." readonly required> <br>
                            <button type="button" class="btn btn-primary" onclick="popup()">Buscar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_producto">Nombre Proveedor:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="NombreProveedor" readonly required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <button type="button" class=" btn btn-info" style="position:absolute; left:860px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Agregar productos</button>
                        </div>
                    </div>
                    <div id="resultados" class="form-group" style="position:absolute; left:90px; top:500px;">
                        <div class="col-sm-9">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>CODIGO</th>
                                        <th class="text-center">CANT.</th>
                                        <th>DESCRIPCION</th>
                                        <th>SUCURSAL</th>
                                        <th>NOTA</th>
                                        <th><span class="pull-right">PRECIO UNIT.</span></th>
                                        <th><span class="pull-right">PRECIO TOTAL</span></th>
                                        <th></th>
                                    </tr>
                                    <tr>

                                        <td class="text-center">1</td>
                                        <td class="text-center col-md-1">
                                            <input type="number" style="text-align:center" value="2" class="form-control input-sm" onblur="actualizar_item(this.value,1,'5307')">
                                        </td>
                                        <td>Motosierra </td>
                                        <td>ZAPATERIA LUIS CORNEL</td>
                                        <td class="col-md-2">
                                            <input type="text" value="" class="form-control input-sm" onblur="actualizar_item(this.value,5,'5307')">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" style="text-align:right" value="400" class="form-control input-sm" onblur="actualizar_item(this.value,2,'5307')">
                                        </td>
                                        <td><span class="pull-right">800</span></td>
                                        <td>
                                            <span class="pull-right"><a href="#" onclick="eliminar('5307')"><i class="glyphicon glyphicon-trash"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-center">1</td>
                                        <td class="text-center col-md-1">
                                            <input type="number" style="text-align:center" value="1" class="form-control input-sm" onblur="actualizar_item(this.value,1,'5318')">
                                        </td>
                                        <td>Motosierra </td>
                                        <td>ZAPATERIA LUIS CORNEL</td>
                                        <td class="col-md-2">
                                            <input type="text" value="" class="form-control input-sm" onblur="actualizar_item(this.value,5,'5318')">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" style="text-align:right" value="400" class="form-control input-sm" onblur="actualizar_item(this.value,2,'5318')">
                                        </td>
                                        <td><span class="pull-right">400</span></td>
                                        <td>
                                            <span class="pull-right"><a href="#" onclick="eliminar('5318')"><i class="glyphicon glyphicon-trash"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-center">2</td>
                                        <td class="text-center col-md-1">
                                            <input type="number" style="text-align:center" value="1" class="form-control input-sm" onblur="actualizar_item(this.value,1,'5308')">
                                        </td>
                                        <td>Motosierra de 14"</td>
                                        <td>ZAPATERIA LUIS CORNEL</td>
                                        <td class="col-md-2">
                                            <input type="text" value="" class="form-control input-sm" onblur="actualizar_item(this.value,5,'5308')">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" style="text-align:right" value="250" class="form-control input-sm" onblur="actualizar_item(this.value,2,'5308')">
                                        </td>
                                        <td><span class="pull-right">250</span></td>
                                        <td>
                                            <span class="pull-right"><a href="#" onclick="eliminar('5308')"><i class="glyphicon glyphicon-trash"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-center">5</td>
                                        <td class="text-center col-md-1">
                                            <input type="number" style="text-align:center" value="1" class="form-control input-sm" onblur="actualizar_item(this.value,1,'5319')">
                                        </td>
                                        <td>Motosierra de 30</td>
                                        <td>DE LA ROCHA</td>
                                        <td class="col-md-2">
                                            <input type="text" value="" class="form-control input-sm" onblur="actualizar_item(this.value,5,'5319')">
                                        </td>
                                        <td class="col-md-2">
                                            <input type="text" style="text-align:right" value="800" class="form-control input-sm" onblur="actualizar_item(this.value,2,'5319')">
                                        </td>
                                        <td><span class="pull-right">800</span></td>
                                        <td>
                                            <span class="pull-right"><a href="#" onclick="eliminar('5319')"><i class="glyphicon glyphicon-trash"></i></a></span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="6"><span class="pull-right">Neto $</span></td>
                                        <td><span class="pull-right">2.250</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><span class="pull-right">IVA $</span></td>
                                        <td><span class="pull-right">0</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><span class="pull-right">Total $</span></td>
                                        <td><span class="pull-right">2.250</span></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    < <input type="submit" value="Registrar" class="btn__enviar">
                    <button type="button" onclick="imprimir('6396')" class="btn btn-default" style="margin-right: 5px;"><i class="fa fa-print"></i> Imprimir</button>

                </form>
            </div>
        </article>
        </article>
        <article id="tab2_2">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION COMPRA</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Generar Orden de Compra</a>
            </div>
            <div class="h2-titulo">
                <h2>Generar Orden de Compra</h2>
            </div>
            <div class="container">
                <h3>Nueva Orden de Compra</h3>

                <form class="form-horizontal" action="php/save_esperaruby.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">Orden de Compra N°:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control datepicker" name="purchase_date" value="6396" disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">Codigo Proveedor:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Buscar proveedor.." readonly required> <br>
                            <button type="button" class="btn btn-primary" onclick="popup()">Buscar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_producto">Nombre Proveedor:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="NombreProveedor" readonly required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="buscar">Buscar O/R:</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="myInput" type="text" placeholder="Buscar Orden de requerimiento..">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-active">
                                    <thead class="bg-primary">
                                        <th>Codigo</th>
                                        <th>Nombre de Producto</th>
                                        <th>Laboratorio</th>
                                        <th>Precio</th>
                                        <th>Stock</th>
                                        <th>Descripcion</th>
                                    </thead>

                                    <?php
                                    include 'conexion.php';
                                    $sql = "SELECT * FROM producto";
                                    $result = mysqli_query($conexion, $sql);

                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>

                                        <tbody id="myTable">
                                            <tr>
                                                <td><a href="#" onclick="enviar1(<?php print $row["id_producto"]; ?>,'<?php print $row["nombre_producto"]; ?>','<?php print $row["laboratorio_producto"]; ?>','<?php print $row["precio_producto"]; ?>');"> <?php print $row["id_producto"]; ?></a></td>
                                                <td><a href="#" onclick="enviar1(<?php print $row["id_producto"]; ?>,'<?php print $row["nombre_producto"]; ?>','<?php print $row["laboratorio_producto"]; ?>','<?php print $row["precio_producto"]; ?>');"> <?php print $row["nombre_producto"]; ?></a></td>
                                                <td><a href="#" onclick="enviar1(<?php print $row["id_producto"]; ?>,'<?php print $row["nombre_producto"]; ?>','<?php print $row["laboratorio_producto"]; ?>','<?php print $row["precio_producto"]; ?>');"> <?php print $row["laboratorio_producto"]; ?></a></td>
                                                <td><a href="#" onclick="enviar1(<?php print $row["id_producto"]; ?>,'<?php print $row["nombre_producto"]; ?>','<?php print $row["laboratorio_producto"]; ?>','<?php print $row["precio_producto"]; ?>');"> <?php print $row["precio_producto"]; ?></a></td>
                                                <td><a href="#"> <?php print $row["cantidad_producto"]; ?></a></td>
                                                <td><a href="#"> <?php print $row["desc_producto"]; ?></a></td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                 <input type="submit" value="Registrar" class="btn__enviar">

                </form>
            </div>
        </article>
        <article id="tab2_3">

        </article>
        <article id="tab2_4">

        </article>
        <article id="tab2_5">

        </article>
        <article id="tab3">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Productos</a>
            </div>
            <div class="h2-titulo">
                <h2>Registrar Productos</h2>
            </div>
            <div class="container">
                <h3>Nuevo Producto</h3>
                <form class="form-horizontal" id="maquina-form" action="php/producto.php" method="post" onsubmit="return validar()" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_producto">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre_producto" placeholder="Ingrese nombre" name="nombre_producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="laboratorio_producto" placeholder="Ingrese laboratorio" name="laboratorio_producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="tipo_producto">Tipo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tipo_producto" placeholder="Ingrese tipo" name="tipo_producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="desc_producto">Descripcion:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="desc_producto" placeholder="Ingrese descripcion" name="desc_producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="img_producto">Imagen:</label>
                        <div class="col-sm-9">
                            <input type="file" id="img_producto" name="img_producto"><br /><br />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cantidad_producto">Cantidad:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cantidad_producto" placeholder="Ingrese cantidad" name="cantidad_producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="precio">Precio:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="precio_producto" placeholder="Ingrese precio" name="precio_producto" required>
                        </div>
                    </div>

                    <input type="submit" value="Registrar" id="btn__enviar" class="btn__enviar">

                </form>
            </div>

        </article>
        <article id="tab4">
            <div class="nav-form">
                <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Visualizar Productos</a>
            </div>
            <h2 class="h2-titulo">Visualizar Productos</h2>
            <div class="container">
                <h3>Lista de Productos</h3>
                <p>Lista de Productos de la Empresa</p>
                <input class="form-control" id="myInputs" type="text" placeholder="Buscar producto">
                <div class="table-responsive">
                    <table class="table table-bordered table-active">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Laboratorio</th>
                                <th>Tipo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Accion1</th>
                            </tr>
                        </thead>
                        <?php
                        include 'php/conexion.php';
                        $sql = "SELECT * FROM producto";
                        $result = mysqli_query($conexion, $sql);

                        while ($mostrar = mysqli_fetch_array($result)) {
                            ?>
                            <tbody id="myTable">
                                <tr>
                                    <td><?php echo $mostrar['id_producto']  ?></td>
                                    <td><?php echo $mostrar['nombre_producto']  ?></td>
                                    <td><?php echo $mostrar['laboratorio_producto']  ?></td>
                                    <td><?php echo $mostrar['tipo_producto']  ?></td>
                                    <td><?php echo $mostrar['desc_producto']  ?></td>
                                    <td><img height="250px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img_producto']); ?>" /></td>
                                    <td><?php echo $mostrar['cantidad_producto']  ?></td>
                                    <td><?php echo $mostrar['precio_producto']  ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info" onClick="window.location.href='modificarProducto.php?id=<?php echo $mostrar['id_producto']; ?>'">Editar</button>

                                        <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $mostrar['id_producto'] ?>')">

                                        </button>

                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>


            </div>
            <div class="container">
                <div id="tabla"></div>


            </div>
        </article>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#tabla').load('../JefeDeAlmacen.php');
            });
        </script>


        <!--
        <div class="nav-form">
            <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">USUARIO</h5><span class="barra-1">></span><h5 class="barra">Visualizar Usuario</h5>
        </div>
        <h2 class="h2-titulo">Visualizar Usuario</h2>
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th><th class="colum-nombre">Nombre</th><th class="colum-nombre">Apellidos</th><th>Rol</th><th>Correo</th><th>Usuario</th><th>Contraseña</th><th>Telefono</th><th>Accion</th>
                    </tr>
                </thead>
            </table>
        </div>
    </article>
            -->

        <footer>

        </footer>
    </div>



    <!--
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/JQuery/jquery-3.3.1.min.js"></script>
    <script src="librerias/Popper/popper.min.js"></script>
    <script src="librerias/Bootstrap_4/js/bootstrap.min.js"></script>
    <script src="librerias/sweetalert/sweetalert.min.js"></script>
    <script src="comportamiento/contenido.js"></script>
    <script src="comportamiento/contenidoMenu.js"></script>
    <script src="comportamiento/menu.js"></script>
    <script src="comportamiento/eliminarProducto.js"></script>
    <script src="comportamiento/mainbusqueda.js"></script>
    <script src="comportamiento/registroProducto.js"></script>
    <script type="text/javascript" src="comportamiento/jquery.min.js"></script>


    <!-- filtro para busqueda -->

    <!--
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
-->

    <script>
        $(document).ready(function() {
            $("#myInputs").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>



</body>

</html>