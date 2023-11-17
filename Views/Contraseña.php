<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperación de contraseña</title> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='../Iconos/Icono.JPG' rel="icon" type="image/png">
        <link rel="stylesheet" href="../assets/Estilo/Contraseña.css">
        
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
            <h1> Para cambiar la contraseña ingrese los siguientes datos:</h1>
            <form method="post" action="../Controllers/ContraseñaController.php">

            <div class="email">
                <label>Correo <i class='bx bx-envelope'></i></label>
                <input type="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>

            <div class="document">
            <label>Documento de identidad <i class='bx bx-id-card'></i></label>
                <input type="text" name="document" placeholder="Ingrese su documento" required>
            </div>

            <div class="Validar">
                <input type="submit" class="boton" value="Validar">
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