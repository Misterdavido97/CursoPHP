<?php
    include("../Model/conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["telefono"];
    $celular = $_POST["celular"];
    $correo = $_POST["correo"];
    $productos = $_POST["productos"];
    
    


    $searchUser = "SELECT * FROM user WHERE DocumentNumber = '$cedula'";
    $queryInsert = "INSERT INTO user
    (Name,
    LastName,
    DocumentType,
    DocumentNumber,
    Address,
    Phone,
    CellPhone,
    Mail)
    VALUES
    ('$nombre',
    '$apellido',
    1,
    '$cedula',
    '$direccion',
    '$telefono',
    '$celular',
    '$correo');";

    $queryUpdate = "UPDATE user
    SET Name = '$nombre',
    LastName = '$apellido',
    Address = '$direccion',
    Phone = '$telefono',
    CellPhone = '$celular',
    Mail = '$correo'
    WHERE DocumentNumber = '$cedula'";

    $Id = 0;

    $resultado = $conexion->query($searchUser);
    if($resultado->num_rows != 0){
        $Id = $resultado->fetch_assoc()['UserId'];
        $resultado = $conexion->query($queryUpdate);
    }else{
        $resultado = $conexion->query($queryInsert);
        $Id = $conexion->insert_id;
    }

    if($productos){
        foreach ($productos as $value) {
            $queryInsertP = "INSERT INTO userxpippette
            (UserId,
            PipetteId)
            VALUES
            ($Id,
            $value)";
    
            $resultado = $conexion->query($queryInsertP);       
        }
    }
    
    header("Location: ../View/index.php");
?>