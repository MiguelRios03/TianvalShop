<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Iconos/Icono.JPG' rel="icon" type="image/png">
    <link rel="stylesheet" href="../assets/Estilo/RegistroUsuario.css">

</head>

    <?php
        if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
            include 'HeaderC.php';
            
        } else {
            include 'HeaderS.php';
        }
    ?>

<body>
<div class="formulario">
        <h1> Registro de usuario </h1>

            <form method="post" action="../Controllers/RegistroController.php" name="Registro-form">

            <div class="username">
            <label>Nombre completo <i class='bx bx-user'></i></label>
            <input type="text" class="texto" maxlength="50" name="username" placeholder="Ingrese su nombre completo" required>
            </div>

            <div class="password">
                <label>Contraseña <i class='bx bx-key'></i></label>
                <input type="password" class="texto" minlength="8" maxlength="50" name="password" placeholder="Ingrese su contraseña" required>
            </div>

            <div class="email">
                <label>Correo electrónico <i class='bx bx-envelope'></i></label>
                <input type="text" class="texto" maxlength="50" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>

            <div class="documento">
                <label>Documento de identidad <i class='bx bx-id-card'></i></label>
                <input type="text" class="texto" maxlength="15" name="document" placeholder="Ingrese su número de documento" required>
            </div>

            <div class="city">
                <label>Ciudad de residencia <i class='bx bxs-city'></i></label>
                <input type="text" class="texto" maxlength="20" name="city" placeholder="Ingrese su ciudad de residencia" required>
            </div>

            <div class="address">
                <label>Dirección de residencia <i class='bx bx-home-heart'></i></label>
                <input type="text" class="texto" maxlength="25" name="address" placeholder="Ingrese su dirección de residencia" required>
            </div>

            <div class="telefono">
                <label>Telefóno <i class='bx bxs-phone'></i></label>
                <input type="text" class="texto" maxlength="20" name="phone" placeholder="Ingrese su número de telefóno" required>
            </div>
            
            <div class="registrar">
                <input type="submit" name="registrar" class="boton" value="Registrarse">
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
