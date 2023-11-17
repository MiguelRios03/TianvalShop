<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cambio de contraseña</title> 
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
            <h1> Cambio de contraseña</h1>
            <form method="post" action="../Controllers/CambioContraseñaController.php">
            
            <div class="contraseña">
                <label>Nueva contraseña <i class='bx bx-key'></i></label>
                <input type="password" class="texto" minlength="8" maxlength="50" name="password1" placeholder="Ingrese su nueva contraseña" required>
            </div>
            <p>
            </p>
            
            <div class="contraseña">
                <label>Repetir contraseña <i class='bx bx-key'></i></label>
                <input type="password" class="texto" minlength="8" maxlength="50" name="password2" placeholder="Ingrese su contraseña nuevamente" required>
            </div>
            <p>
            </p>
            <div class="Validar">
                <input type="submit" class="boton" value="Cambiar">
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
