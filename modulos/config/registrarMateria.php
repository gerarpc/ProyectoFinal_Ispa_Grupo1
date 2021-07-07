<?php 
    include_once("DBconect.php");
    $datos = isset($_POST['nombres']);
    $noVacios= $_POST['nombres'] !== "";
    
    switch($datos && $noVacios){
    case true:
                $nombres = $_POST['nombres'];
                $conexion = new Database; 
                //$consulta = "SELECT nombres FROM materias WHERE nombres="."'".$nombres."'";
                //$repetido = $conexion->db->query($consulta);
                $repetido = $conexion->db->query("SELECT nombres FROM materias WHERE nombres="."'".$nombres."'");
                $numeroDeFilas = $repetido->rowCount();
                if ($numeroDeFilas <= 0) {
                $confirm = $conexion->insertarMateria($nombres);
            }else {
                $confirm = 3;
            }    
            break;
    case false:
        $confirm = 2; //uno o mas campos estan vacios	
    }

    

    header('location: ../profesores/add_materias.php?confirm='.$confirm)
?>