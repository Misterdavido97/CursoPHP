<!DOCTYPE html>
<html>
<head>
<title>Emigas</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />
</head>
<body>
<?php 
    $Name = "";
    $LastName = "";
    $DocumentNumber = "";
    $Address = "";
    $Phone = "";
    $CellPhone = "";
    $Mail = "";
    
    if (isset($_GET['UserId']))
    {
        $UserId = $_GET['UserId'];
        include("../Model/conexion.php");
        $queryUserEdit = "SELECT * FROM user WHERE UserId=$UserId";
        $userData = $conexion->query($queryUserEdit);

        if($userData)
        {
            $UserId = $_GET['UserId'];
            while($row = $userData->fetch_assoc())
            {
                $Name = $row['Name'];
                $LastName = $row['LastName'];
                $DocumentNumber = $row['DocumentNumber'];
                $Address = $row['Address'];
                $Phone = $row['Phone'];
                $CellPhone = $row['CellPhone'];
                $Mail = $row['Mail'];
            }
        }
    }
?>

<div class="container">
    <h2>Información del pedido</h2>
    <form action="../Rules/GuardarPedido.php" method="POST">
        <div class="form-group row">
            <label for="name" class="col-sm-1 col-form-label">Nombre:</label>
            <div class="col-sm-11">
                <input required type="text" id="name" name="nombre" class="form-control" value="<?php echo $Name?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lastName" class="col-sm-1 col-form-label">Apellido:</label>
            <div class="col-sm-11">
                <input required type="text" id="lastName" name="apellido" class="form-control"  value="<?php echo $LastName; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-1 col-form-label">Dirección:</label>
            <div class="col-sm-11">
                <input required type="text" id="address" name="direccion" class="form-control" value="<?php echo $Address; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="document" class="col-sm-1 col-form-label">Cédula:</label>
            <div class="col-sm-11">
                <?php 
                    if ($DocumentNumber) 
                    {
                       echo "<input required type='number' readonly id='document' name='cedula' class='form-control' value=$DocumentNumber>";
                    } 
                    else 
                    {
                        echo "<input required type='number' id='document' name='cedula' class='form-control' value=$DocumentNumber>";
                    }
                ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-1 col-form-label">Teléfono:</label>
            <div class="col-sm-11">
                <input type="number" id="phone" name="telefono" class="form-control" value="<?php echo $Phone; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="cellPhone" class="col-sm-1 col-form-label">Celular:</label>
            <div class="col-sm-11">
                <input type="number" id="cellPhone" name="celular" class="form-control" value="<?php echo $CellPhone; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="mail" class="col-sm-1 col-form-label">Correo:</label>
            <div class="col-sm-11">
                <input type="email" id="mail" name="correo" class="form-control" value="<?php echo $Mail; ?>">
            </div>
        </div>
        <?php 
        if (!$DocumentNumber) 
        {
        ?>
            <div class="form-group">
            <label for="products">Productos</label>
            <select required multiple class="form-control" id="products" name="productos[]" onChange="SumTotal();">
                <?php
                    include("../Model/searchPipettes.php");
                    while($row = $pipettes->fetch_assoc())
                    {
                ?>
                    <option value="<?php echo $row['PipetteId'] ?>" data-price="<?php echo $row['Price'] ?>"> <?php echo $row['Name'] ?></option>
                <?php
                    }
                ?>
            </select>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Total:</h4>
                    <span id="Total">0</span><span>$</span>
                </div>
            </div>    
        <?php
        } else {

            echo "<input hidden name='productos[]' value=[]>";
        }
        ?>
        <a class="btn btn-default" href="index.php">Regresar</a>
        <input type="button" value="Limpiar" class="btn btn-default" onclick="Clean();">
        <input type="submit" value="Guardar" class="btn btn-primary"/>
    </form>
</div>
<script src="../js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>