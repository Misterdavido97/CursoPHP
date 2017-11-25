<?php
    include("conexion.php");

    $queryPipettes = "SELECT * FROM pipette";
    $pipettes = $conexion->query($queryPipettes);
    return $pipettes;