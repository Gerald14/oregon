<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="diseño/login.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="login.php"><b>Sistema </b>Oregon</a>
        </div><!-- /.login-logo hhda -->
        <div class="login-box-body">
            <p class="login-box-msg">Inicio de sesión</p>
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>Aviso!</strong>
                Has sido desconectado. </div>
                <form action="php/loguear.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="clave" class="form-control" placeholder="Contraseña" required="">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">

                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" name="login" class="btn btn-primary+ btn-block btn-flat">Entrar</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>