<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperación de contraseña</title> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='../Iconos/Icono.JPG' rel="icon" type="image/png">
        <link rel="stylesheet" href="../assets/Estilo/EliminarUsuario.css">
        
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
            <h1> ELIMINAR USUARIO</h1>
            <form method="post" action="../Controllers/EliminarUsuarioController.php">

            <div class="email">
                <label>Correo <i class='bx bx-envelope'></i></label>
                <input type="email" name="email" placeholder="Ingrese correo de la cuenta a eliminar" required>
            </div>

            <div class="Eliminar">
                <input type="submit" class="boton" value="Eliminar">
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