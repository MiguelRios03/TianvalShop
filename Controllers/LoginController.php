<?php
include("../DB/connection.php");
include("../Models/ModeloInicioUsuario.php");

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

//Usuario predefinido para pruebas
$usuario_correcto = "Administrador@TianvalShop.com";
$Contraseña_correcta = "Hola1234";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    //Capturamos los datos que se ingresan al formulario
    $Correo = $_POST["email"];
    $Contra = $_POST["password"];

    session_start();

    //Consulta en la base de datos con el correo ingresado para comparar valores y ver que sí exista en la base

    $ModeloInicioUsuario = new InicioUsuario($con);
    $resultEmail = $ModeloInicioUsuario->obtenerUsuarioPorEmail($Correo);

    if ($resultEmail && mysqli_num_rows($resultEmail) == 1) {
        $row = mysqli_fetch_assoc($resultEmail);

        
        if ($Contra ==$row["contraseña"] && $Correo==$row["email"]) {

            $_SESSION['name'] = $row["nombre"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['document'] = $row["documento"];
            $_SESSION['city'] = $row["ciudad"];
            $_SESSION['address'] = $row["direccion"];
            $_SESSION['phone'] = $row["telefono"];
            
            header("Location: ../Views/Usuario.php");


        } else {
            echo '<script language="javascript">alert("El usuario o la contraseña son incorrectos");window.location.href="../Views/InicioSesion.php"</script>';
        }
    } else if($row["email"] == "Administrador@TianvalShop.com" && $row["contraseña"]=="Administrador"){ //Creado para ingresar con un usuario predefinido como administrador

        $_SESSION["email"] ="Administrador@TianvalShop.com";

        header("Location: ../Views/Usuario.php");
    } else{
        /*Si no coinciden los datos ingresados con datos que hayan en la base de datos,
         imprimimos un mensaje de error*/
        echo '<script language="javascript">alert("El usuario no existe");window.location.href="../Views/InicioSesion.php"</script>';
    }

    mysqli_close($con);
}

?>