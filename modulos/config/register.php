<?php 
    include_once("DBconect.php");
    $datos = isset($_POST['identificacion']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['confirmPassword']);
    $noVacios= $_POST['identificacion'] !== "" && $_POST['nombres'] !== "" && $_POST['apellidos'] !== "" && $_POST['username'] !== "" && $_POST['password'] !== ""&& $_POST['confirmPassword'] !== "";
    
    switch($datos && $noVacios){
    case true:
                $identificacion = $_POST['identificacion'];
                $nombres = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
        
                $conexion = new Database;
                $repetido = $conexion->db->query("SELECT id FROM usuarios WHERE identificacion='$identificacion' OR username='$username'");
                $numeroDeFilas = $repetido->rowCount();
                if ($numeroDeFilas <= 0) {
                $confirm = $conexion->registrarUsuarios($identificacion, $nombres, $apellidos, $username, $password);
            }else {
                $confirm = 3;
            }     
            break;
    case false:
        $confirm = 2; //uno o mas campos estan vacios	
    }

    header('location: ../index.php?confirm='.$confirm)
?>