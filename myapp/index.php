<!DOCTYPE html>
<?php
if ((isset($_POST['name'])) && ($_POST['name'] != '') && (isset($_POST['email'])) && ($_POST['name'] != '')) {

    include "models/modelo.php";
    $nuevo = new Usuario();
    $asd = $nuevo->setUsuario($_POST['name'], $_POST['email'],  $_POST['password']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Ejemplo MVC con PHP</h1>
                <hr/>
                <p class="lead">Creamos una base de datos de los servicios <br/>
                    que podría realizar un taller y <br/>
                    operamos con ella utilizando el paradigma MVC</p>
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-5">
                        <h3>Nuevo Usuario</h3>
                        Nombre: <input type="text" name="name" class="form-control"/>
                        Email: <input type="text" name="email" class="form-control"/>
												Password: <input type="text" name="password" class="form-control"/>
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de usuarios</h3>
                    <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de usuarios</a>
                    <hr/>
                </div>
            </div>
            <footer class="col-lg-12 text-center">
                Raul Fdez - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
