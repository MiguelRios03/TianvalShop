<?php
session_start();

include("../Models/ModeloUsuario.php");
include '../DB/connection.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

    $Correo = $_SESSION["email"];
    $nombre = $_POST["name"];
    $telefono = $_POST["phone"];
    $ciudad = $_POST["city"];
    $direccion = $_POST["address"];

    $ModeloUsuario = new ModeloUsuario($con);

    $actualizacionExitosa = $ModeloUsuario->actualizarDatos($nombre, $telefono, $ciudad, $direccion, $Correo);
   
    if ($actualizacionExitosa) {
        echo '<script>alert("Datos actualizados con éxito");window.location.href="../Views/InicioSesion.php"</script>';
    } else {
        echo '<script>alert("Error al actualizar los datos");window.location.href="../Views/ModificarUsuario.php"</script>';
    }

mysqli_close($con);
?>