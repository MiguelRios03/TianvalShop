<?php
 $list =   $_SESSION['list'];
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "tianvalshop";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
 $sql = 'SELECT * FROM producto';

 $shoesList = [];

$index = 0;
 if ($result = $conn -> query("SELECT * FROM producto")) {
  $_SESSION['shoesList'] = [];
 
    while ($row = $result->fetch_assoc()) {
      array_push($_SESSION['shoesList'], new Shoe($row['idProducto'] - 1, $row['descripcion'], $row['precio'], $row['cantidadProduc'], $row['image'] ));  
  }
  }

 foreach($_SESSION['shoesList'] as $current) {
     echo '<form id="signup_form" method="post" class="form-horizontal" role="form" action="../Controllers/addShoeController.php"> ';
     echo '<input type="number" value="'.$current->id.'" name="id" hidden >';
     echo "<div class='item'>";
     echo '<figure>';
     echo '<img src="'.$current->path.'" alt="producto"/>';
     echo '</figure>';
     echo '<div class="info-product">';
     echo '<h2>'.$current->name.'</h2>';
     echo '<p>$ '.$current->price.'</p>';
     echo '<p>Stock: '.$current->amount.'</p>';
     echo '<button type="submit" value="Calcular" class="boton-carrito">Añadir al carrito</button>';
     echo '</div> ';
     echo '</div> ';
     echo '</form>';
 }
 
?>