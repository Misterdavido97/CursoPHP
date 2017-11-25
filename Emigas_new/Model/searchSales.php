<?php
    include("conexion.php");

    $queryPedidos = "SELECT
    u.UserId as UserId,
    COUNT(p.Name) AS CountPipettes,
    SUM(p.Price) AS Price,
    CONCAT(u.Name, ' ', u.LastName) AS Name,
    u.DocumentNumber,
    u.Mail
        FROM pipette p
        INNER JOIN userxpippette up
        ON p.PipetteId = up.PipetteId
        INNER JOIN user u
        ON up.UserId = u.UserId
        GROUP BY u.UserId, u.Name, u.LastName, u.DocumentNumber, u.Mail
        ORDER BY up.Id";
        $pedidos = $conexion->query($queryPedidos);

    return $pedidos;