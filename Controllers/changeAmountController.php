<?php
session_start();
$id = $_POST['id'];
$value = $_POST['cant'];
include("../Models/ModeloCarrito.php");
include '../DB/connection.php';
include '../Views/amount.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$cartModel = new CartModel($con);
$response = $cartModel->changeAmount($id, $value);
    mysqli_close($con);

?>
