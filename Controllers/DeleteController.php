<?php
 include '../Views/Shoe.php';
 session_start();

include("../Models/ModeloCarrito.php");
include '../DB/connection.php';

$index = $_POST['id'];
$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$ModeloUsuario = new CartModel($con);
$actualizacionExitosa = $ModeloUsuario->deleteShoe($index);
    

    mysqli_close($con);
?>