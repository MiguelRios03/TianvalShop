<?php
session_start();
$value = $_POST['id'];
include("../Models/ModeloCarrito.php");
include '../DB/connection.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$cartModel = new CartModel($con);
$response = $cartModel->addShoe($value);
    

    mysqli_close($con);

?>
