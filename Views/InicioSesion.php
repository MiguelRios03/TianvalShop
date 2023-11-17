<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../assets/Iconos/Icono.JPG' rel="icon" type="image/png">
    <link rel="stylesheet" href="../assets/Estilo/InicioSesion.css">

</head>

<body>

    <?php
        if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
            include 'HeaderC.php';
            
        } else {
            include 'HeaderS.php';
        }
    ?>
    
    <div class="formulario">
        <h1> Inicio de sesión</h1>
        <form method="post" action="../Controllers/LoginController.php" name="Logueo-form">

            <div class="email">
                <label>Correo <i class='bx bx-envelope'></i></label>
                <input type="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>

            <div class="password">
                <label> Contraseña</label> <i class='bx bxs-key'></i>
                <input type="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>

            <div class="loguearse">
                <input type="submit" class="boton" value="Ingresar">
            </div>

            <div class="recuperar">
                <h3>¿Olvidó su contraseña?</h3>
                <a href="Contraseña.php" class="url">Click aquí...</a>
            </div>

            <div class="registrarse">
                <h3>¿Aún no tiene cuenta?</h3>
                <a href="RegistroUsuario.php" class="url">Registrarse...</a>
            </div>

        </form>
    </div>
    <?php
    if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
    include 'FooterC.php'; 
    } else {
    include 'FooterS.php';
    }
    ?>

</body>

</html>
