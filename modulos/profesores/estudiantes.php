<?php
include_once('../config/DBconect.php');

$conexion = new Database;
$resultado = $conexion->datosEstudiantes();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles.css">
    <title>Listado de estudiantes</title>
</head>

<body class="background">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuOpciones"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Estudiantes
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item active" href="./estudiantes.php">Listado de estudiantes</a>
                <a class="dropdown-item" href="./materias.php">Listado de materias</a>
                <a class="dropdown-item" href="./archivos.php">Archivos</a>
            </div>
        </div>
        <div class="dropdown ml-auto">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuario
            </a>
            <div class="dropdown-menu-right dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Cerrar Sesión</a>
            </div>
        </div>
        
    </nav>
    <div class="container">
        <div class="d-flex justify-content-center">
        <div class="col-sm-8 col-xl-8 mt-5 my-5">
        <div class="card">
            <div class="card-header">
                <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                    <a>Listado de estudiantes</a>
                    <a href="./add_estudiantes.php" class="btn btn-primary ml-auto" role="button" aria-pressed="true">Crear Estudiante</a>
                </div>  
            </div>
            
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-login-list"></div>
                    <table class="table">
                        <thead>
                            <div class="alert alert-success" role="alert">
                             Se elimino correctamente el estudiante
                            </div>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Identificación</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($resultado as $fila){
                         echo "<tr>
                            <td>".$fila['id']."</td>
                            <td>".$fila['identificacion']."</td>
                            <td>".$fila['nombres']."</td>
                            <td>".$fila['apellidos']."</td>
                            <td>".$fila['email']."</td>
                            <td>".$fila['telefono']."</td>
                            </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>                
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"crossorigin="anonymous"></script>
</body>

</html>
