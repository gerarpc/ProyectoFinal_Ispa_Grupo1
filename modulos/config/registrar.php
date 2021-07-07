<?php 
    include_once("DBconect.php");
    $datos = isset($_POST['identificacion']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['telefono']);
    $noVacios= $_POST['identificacion'] !== "" && $_POST['nombres'] !== "" && $_POST['apellidos'] !== "" && $_POST['email'] !== "" && $_POST['telefono'] !== "";
    
    switch($datos && $noVacios){
    case true:
                $identificacion = $_POST['identificacion'];
                $nombres = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];
        
                $conexion = new Database;
                $repetido = $conexion->db->query("SELECT id FROM estudiantes WHERE identificacion=$identificacion");
                $numeroDeFilas = $repetido->rowCount();
                if ($numeroDeFilas <= 0) {
                $confirm = $conexion->insertar($identificacion, $nombres, $apellidos, $email, $telefono);
            }else {
                $confirm = 3;
            }     
            break;
    case false:
        $confirm = 2; //uno o mas campos estan vacios	
    }

    

    header('location: ../profesores/add_estudiantes.php?confirm='.$confirm)
?>