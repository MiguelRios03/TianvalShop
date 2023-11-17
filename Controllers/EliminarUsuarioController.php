<?php
session_start(); // Inicia la sesión si no está iniciada
include("../DB/connection.php");
include("../Models/ModeloUsuario.php");

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$Correo= $_POST['email'];

if(isset($_POST['email'])){


    // Crea una instancia de ModeloUsuario
    $modeloUsuario = new ModeloUsuario($con); // Asegúrate de que $conexion esté definido

    // Llama al método eliminarUsuarioPorEmail y verifica si se ha eliminado el usuario
    if($modeloUsuario->eliminarUsuarioPorEmail($Correo)){

         echo '<script language="javascript">alert("El usuario se eliminó del sistema");window.location.href="../Views/Usuario.php"</script>';
    } else {
        echo '<script language="javascript">alert("El usuario no se pudo eliminar, vuelva a intentar...");window.location.href="../Views/EliminarUsuario.php"</script>';
    }

    mysqli_close($con);
}

?>