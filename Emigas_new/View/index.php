<!DOCTYPE html>
<html>
<head>
    <title>Emigas</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />
</head>
<body class="container-fluid">

    <?php 
        include("../Model/searchSales.php");
    ?>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h2>Pedidos Vigentes</h2>
        </div>
    </div>
    <br>
    </br>  
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Nombre Completo</th>
                <th>Cedula</th>
                <th>Correo</th>
                <th># Pipetas</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($pedidos)
                {
                    while($row = $pedidos->fetch_assoc())
                    {
            ?>
                    <tr>
                        <td><a href="new.php?UserId='<?php echo $row['UserId'] ?>'">Editar</a></td>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['DocumentNumber'] ?></td>
                        <td><?php echo $row['Mail'] ?></td>
                        <td><?php echo $row['CountPipettes'] ?></td>
                        <td><?php echo $row['Price'] ?></td>
                        <td><a href="../Rules/EliminarPedido.php?UserId='<?php echo $row['UserId'] ?>'">Eliminar</a></td>
                    </tr>
            <?php
                }
                    }
            ?>
            
        </tbody>
    </table>     
    </br>            
    <a class="btn btn-link" href='info.php'>Regresar</a>
    <a class="btn btn-dark" href='new.php'>Comprar</a>
    
</body>
</html>