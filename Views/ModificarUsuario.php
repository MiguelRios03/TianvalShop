<?php

    session_start();
    
    $nombre = $_SESSION["name"];
    $city = $_SESSION["city"];
    $address = $_SESSION["address"];
    $phone = $_SESSION["phone"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar perfil</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../Iconos/Icono.JPG' rel="icon" type="image/png">
    <link rel="stylesheet" href="../assets/Estilo/ModificarUsuario.css">

</head>
<body>
        <?php
        if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
            include 'HeaderC.php';
            
        } else {
            include 'HeaderS.php';
        }
        ?>
            
        <div class="form container">
        <h2>ACTUALIZA TU PERFIL A TU GUSTO</h2>  

        <form method="post" action="../Controllers/ModificarUsuarioController.php" autocomplete="off">

            <div class="form-content">
            <label>Nombre completo <i class='bx bx-user'></i></label>
                <input type="text" name="name" value="<?php echo $nombre; ?>">
            </div>

            <div class="form-content">
                <label>Telefóno <i class='bx bxs-phone'></i></label>
                <input type="text" name="phone" value="<?php echo $phone; ?>" >
            </div>

            <div class="form-content">
                <label>Ciudad de residencia <i class='bx bxs-city'></i></label>
                <input type="text" name="city"value="<?php echo $city; ?>" >
            </div>

            <div class="form-content">
                <label>Dirección de residencia <i class='bx bx-home-heart'></i></label>
                <input type="text" name="address" value="<?php echo $address; ?>" >
            </div>

            <div class="Actualizar">
            <input class="boton" type="submit" name="contact" value="ACTUALIZAR">
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
