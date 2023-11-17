<?php 

    $list = $_SESSION['list'];
    $amounts = $_SESSION['amounts'];


$total = 0;
$index = 0;
foreach($list as $current) {
    $valueAmount = 1;
    foreach($amounts as $amount) {
        if ($amount->id == $_SESSION['shoesList'][$current]->id) {
            $valueAmount = $amount->amount;
        } else {}
    }
    

   echo '<div class="item">';
   echo  '<img src="'.$_SESSION['shoesList'][$current]->path.'" alt="producto'.$current.'"/>';
   echo  '<div class="item-details">';
   echo '<h2>'.$_SESSION['shoesList'][$current]->name.'</h2>';
   echo '<p>Precio: $ '.$_SESSION['shoesList'][$current]->price.'</p>';
   echo '<p>Cantidad: '; 
   echo '<form class="form-horizontal" role="form"  method="post" action="../Controllers/changeAmountController.php">';
   echo '<input type="number" value="'.$current.'" name="id" hidden >';
   echo  '<input value="'.$valueAmount.'" type="text"  name="cant">';
   echo '<input type="submit" value="Confirmar">';
   echo '</form></p>';
   echo '</div>';
   echo '<form  method="post" class="form-horizontal" role="form" action="../Controllers/DeleteController.php"> ';
   echo '<input type="number" value="'.$index.'" name="id" hidden >';
   echo '<button type="submit" value="Calcular" class="boton-carrito">Eliminar</button>';
   echo '</form>';
   echo  '</div>';
    $total += $_SESSION['shoesList'][$current]->price;
    $index += 1;
}

echo '<div class="total">';
echo 'Total: $'.$total.'';
echo '<form id="signup_form" method="post" class="form-horizontal" role="form" action="../Controllers/BuyController.php"> ';
echo '<button type="submit" value="Calcular" class="boton-carrito">Confirmar compra</button>';
echo '</form>';
echo '</div>';
echo '</div>';

?>