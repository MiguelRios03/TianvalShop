<?php
session_start();

include("../Models/ModeloUsuario.php");
include '../DB/connection.php';

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if (isset($_POST["email"]) && isset($_POST["document"])) {

    //Capturamos los datos que se ingresan al formulario
    $Correo = $_POST["email"];
    $Documento = $_POST["document"];

    session_start();

    //Consulta en la base de datos con el correo ingresado para comparar valores y ver que sí exista en la base

    $ValidarUsuario = new ModeloUsuario($con);
    $resultEmail = $ValidarUsuario->obtenerUsuarioPorEmail($Correo);

    if ($resultEmail && mysqli_num_rows($resultEmail) == 1) {
        $row = mysqli_fetch_assoc($resultEmail);
        
        if ($Documento==$row["documento"] && $Correo==$row["email"]) {
            
            $_SESSION['email'] = $Correo;
            
            header("Location: ../Views/CambioContraseña.php");


        } else {
            echo '<script language="javascript">alert("Los datos ingresados no coinciden...");window.location.href="../Views/Contraseña.php"</script>';
        }
    }else{
        /*Si no coinciden los datos ingresados con datos que hayan en la base de datos,
         imprimimos un mensaje de error*/
        echo '<script language="javascript">alert("El usuario no tiene cuenta en nuestro sistema");window.location.href="../Views/InicioSesion.php"</script>';
    }

    mysqli_close($con);
}
?>
