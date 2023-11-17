<?php

    session_start();
    
    $nombre = $_SESSION["name"];
    $email = $_SESSION["email"];
    $document = $_SESSION["document"];
    $city = $_SESSION["city"];
    $address = $_SESSION["address"];
    $phone = $_SESSION["phone"];

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Información de usuario</title> 
        <link href='../assets/Iconos/Icono.JPG' rel="icon" type="image/png">
        <link rel="stylesheet" href="../assets/Estilo/Usuario.css">
        
    </head>

<body>

        <?php
        if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
            include 'HeaderC.php';
            
        } else {
            include 'HeaderS.php';
        }
        ?>    

        <div class="datos">
            <h2>INFORMACIÓN PERSONAL</h2>
        <?php
            
                echo "<p id = 'saludo'>Nombre: " .$nombre . "<br/></p>";
                echo "<p id = 'saludo'>Correo: " .$email . "<br/></p>";
                echo "<p id = 'saludo'>Documento: " .$document . "<br/></p>";
                echo "<p id = 'saludo'>Ciudad de residencia: " .$city . "<br/></p>";
                echo "<p id = 'saludo'>Dirección: " .$address . "<br/></p>";
                echo "<p id = 'saludo'>Telefono: " .$phone . "<br/></p>";
                echo "</br>";
        ?>
        <div class="botones">
        
        <?php
                echo '<a href="../Controllers/LogoutController.php" class="button">Cerrar sesión</a>';
                echo '<a href="../Views/ModificarUsuario.php" class="button">Actualizar perfil</a>';
                if($_SESSION['email'] == "Administrador@TianvalShop.com"){
                    echo "</br>";
                    echo "</br>";
                    echo '</br><a href="../Views/EliminarUsuario.php" class="button">Eliminar usuario</a>';
                echo "</br>";
                }
                echo "</br>";
                echo "<p>";
        ?>
        </div>
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