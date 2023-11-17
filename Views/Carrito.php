<?php
include 'amount.php';
include 'Shoe.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../assets/Estilo/Carrito.css">
    <link href='../assets/Iconos/Icono.JPG' rel="icon" type="image/png">
</head>

<body>
    <?php
        if(isset($_SESSION["email"]) && $_SESSION["email"] != null){
            include 'HeaderC.php';
            
        } else {
            include 'HeaderS.php';
        }
    ?>

    <div class="container">
        <?php include '../Controllers/CarritoController.php' ?>
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
