<?php
include '../DB/connection.php'
?>
<?php
    echo '';
    session_start();
    
if($_SESSION["email"] == "Administrador@gmail.com"){

    $nombre = "Miguel Ángel Ríos";
    $email = "Administrador@gmail.com";
    $city = "Medellín";
    $phone = "3116547274";
}else{
    $nombre = $_SESSION["name"];
    $email = $_SESSION["email"];
    $document = $_SESSION["document"];
    $city = $_SESSION["city"];
    $address = $_SESSION["address"];
    $phone = $_SESSION["phone"];
}
?>

<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='../assets/Iconos/Icono.JPG' rel="icon" type="image/png">
    <link rel="stylesheet" href="../assets/Estilo/Contacto.css">

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
        <h2>CONTACTANOS</h2>

        <form method="post" action="../Controllers/ContactoController.php" autocomplete="off">

            <div class="form-content">
            <label>Nombre completo <i class='bx bx-user'></i></label>
                <input type="text" id="name" name="name" value="<?php echo $nombre; ?>" readonly="readonly">
            </div>

            <div class="form-content">
                <label>Correo <i class='bx bx-envelope'></i></label>
                <input type="email" id="email" email="email" value="<?php echo $email; ?>" readonly="readonly">
            </div>

            <div class="form-content">
                <label>Telefóno <i class='bx bxs-phone'></i></label>
                <input type="tel" id="phone" phone="phone" value="<?php echo $phone; ?>" readonly="readonly">
            </div>

            <div class="form-content">
                <label>Ciudad de residencia <i class='bx bxs-city'></i></label>
                <input type="text" id="city" city="city" value="<?php echo $city; ?>" readonly="readonly">
            </div>

            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Describe tu problema"></textarea>
            
            <div class="Enviar">
            <input class="boton" type="submit" name="contact" value="ENVIAR">
            </div>
        </form>

    </div>

    <div class="botones">
    <br>
    <h3>También nos puedes contactar a traves de:</h3>

    <img src="../assets/Img/gmail.png" title="Correo electrónico" class="botoncontacto" onclick="window.open('mailto:TianvalShop@shop.com')">
    <img src="../assets/Img/call.png" title="Llámanos" class="botoncontacto"onclick="window.open('tel:3126398360')">
    <img src="../assets/Img/whatsapp.png" title="Escríbenos" class="botoncontacto" onclick="window.open('https://wa.me/573126398360')">
        
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

