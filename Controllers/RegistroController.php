<?php
include("../DB/connection.php");
include("../Models/ModeloRegistro.php");

$con = connection();

if (!$con) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if (isset($_POST["username"], $_POST["password"], $_POST["email"], $_POST["document"], $_POST["city"], $_POST["address"], $_POST["phone"])) {
    //Inicializando las variables con los datos que ingresa el usuario en el formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $document = $_POST["document"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    /*Iniciamos la sesion para guardar el correo y luego hacer la consulta en la base de datos con el 
    valor guardado en la pagina de contactenos
    */
    session_start();

    $_SESSION["email"] = $email;

    //Creamos un objeto de la clase Modelo 
    $ModeloRegistro = new ModeloRegistro($con);

    // Verificar si el correo ya existe
    if ($ModeloRegistro->verificarEmailExistente($email)) {
        echo '<script language="javascript">alert("El correo ingresado ya está registrado con un usuario");window.location.href="../Views/RegistroUsuario.php"</script>';
    // Verificar si el documento ya existe
    } elseif ($ModeloRegistro->verificarDocumentoExistente($document)) {
        echo '<script language="javascript">alert("El documento ingresado ya está registrado con un usuario");window.location.href="../Views/RegistroUsuario.php"</script>';
    } else {
        
        // Registrar al nuevo usuario
        if ($ModeloRegistro->registrarUsuario($username, $password, $email, $document, $city, $address, $phone)) {
            echo '<script language="javascript">alert("El usuario se ha creado con éxito");window.location.href="../Views/InicioSesion.php"</script>';
        } else {
            echo '<script language="javascript">alert("El usuario no se ha podido crear, inténtelo de nuevo...");window.location.href="../Views/RegistroUsuario.php"</script>';
        }
    }

    //Cierre de la consulta
    mysqli_close($con);
}
?>