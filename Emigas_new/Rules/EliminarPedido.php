<?php
include("../Model/conexion.php");

if (isset($_GET['UserId']))
{
    $UserId = $_GET['UserId'];
    $conexion->query("DELETE FROM userxpippette WHERE UserId=$UserId") or die(mysql_error());
    $conexion->query("DELETE FROM user WHERE UserId=$UserId") or die(mysql_error());
    header("Location: ../View/index.php");
}
else header("Location: ../View/index.php");
