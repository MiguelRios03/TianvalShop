<?php
session_start();

include("../Models/ModeloUsuario.php");
include '../DB/connection.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

    $Correo = $_SESSION["email"];
    $Contraseña1 = $_POST["password1"];
    $Contraseña2 = $_POST["password2"];
    
    if ($Contraseña1==$Contraseña2) {
        $ModeloUsuario = new ModeloUsuario($con);
        $actualizacionExitosa = $ModeloUsuario->actualizarContraseña($Correo, $Contraseña1);
        if($actualizacionExitosa){
            echo '<script>alert("Contraseña actualizada con éxito");window.location.href="../Views/Index.php"</script>';
            session_destroy();
        } else {
            echo '<script>alert("Error al actualizar la contraseña");window.location.href="../Views/CambioContraseña.php"</script>';
        }
    } else{
        echo '<script>alert("Las contraseñas no coinciden");window.location.href="../Views/CambioContraseña.php"</script>';
    }

    mysqli_close($con);

?>
