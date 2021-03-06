<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- styles-->
    <link rel="stylesheet" href="./styles.css">

    <title>Document</title>
</head>

<body class="back-ground">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8 mt-5 my-5">
                <div class="card">
                    <div class="card-header">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Login</a>
                            <a class="list-group-item list-group-item-action" id="list-register-list" data-toggle="list" href="#list-register" role="tab" aria-controls="register">Register</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list">


                                <form>
                                    <div>
                                        <div class="alert alert-danger" role="alert">
                                            Por favor, inicie sesión para accceder a esta area
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Correo Electronico</label>
                                            <input required type="text" class="form-control" id="email" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="passwd">Contraseña</label>
                                            <input required type="password" class="form-control" id="passwd" aria-describedby="passwdHelp">
                                        </div>
                                        <button type="Submit" class="btn btn-primary btn-block btn-primary">Ingresar</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade show " id="list-register" role="tabpanel" aria-labelledby="list-register-list">
                                <?php

                                if (isset($_GET['confirm'])) {

                                    if ($_GET['confirm'] === "0") {
                                        echo '<div class="alert alert-danger" role="alert">Dato no ingresado</div>';
                                    }
                                    if ($_GET['confirm'] === "1") {
                                        echo '<div class="alert alert-success" role="alert">Se ha registrado correctamente</div>';
                                    }
                                    if ($_GET['confirm'] === "2") {
                                        echo '<div class="alert alert-danger" role="alert">El campo vacio</div>';
                                    }
                                    if ($_GET['confirm'] === "3") {
                                        echo '<div class="alert alert-danger" role="alert">La identificacion o email ya esta registrado</div>';
                                    }
                                    //if ($_GET['confirm'] === "0")
                                }
                                ?>
                                <form action="../modulos/config/register.php" method="POST">
                                    <div>
                                        <div class="form-group">
                                            <label for="userId">Identificación</label>
                                            <input type="text" class="form-control" name="identificacion" id="userId" aria-describedby="idHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Nombres</label>
                                            <input type="text" class="form-control" name="nombres" id="name" aria-describedby="nameHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastname">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="lastname" aria-describedby="lastnameHelp">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Correo Electronico</label>
                                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="passwd">Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="passwd" aria-describedby="passwdHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="passwdConfirm">Confirmar Contraseña</label>
                                            <input type="password" class="form-control" name="confirmPassword" id="passwdConfirm" aria-describedby="passwConfirmdHelp">
                                        </div>

                                        <button type="Submit" class="btn btn-primary btn-block btn-primary">Registrar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>