<?php
 include '../Views/Shoe.php';
 include '../Views/amount.php';
 session_start();

include("../Models/ModeloCarrito.php");
include '../DB/connection.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$cartModel = new CartModel($con);
$response = $cartModel->buy();
    

    mysqli_close($con);
?>