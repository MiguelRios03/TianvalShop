<?php

class CartModel {
    private $con;

    public function __construct($conexion) {
        $this->con = $conexion;
       
    }

    function buy() {
      
        if($_SESSION["email"] != null) {
        
          $milliseconds = microtime(true) * 1000;
          $amounts = $_SESSION['amounts'];
          $list =  $_SESSION['list'];
          $total = 0;
             
          foreach($list as $current) {
            $valueAmount = 1;
            foreach($amounts as $amount) {
              if ($amount->id == $_SESSION['shoesList'][$current]->id) {
                  $valueAmount = $amount->amount;
              } else {}
          }

              $sql = "INSERT INTO productosventa(idVenta, idProducto, CantidadProducVenta)
              VALUES ($milliseconds, $current, $valueAmount)";
              $result = $this->con->query($sql);
              $total +=  $_SESSION['shoesList'][$current]->price;
              $sqlUpdate = "UPDATE producto SET cantidadProduc = ? WHERE idProducto = ?";
        $stmtUpdate = mysqli_prepare($this->con, $sqlUpdate);
        if ($stmtUpdate) {
          $newAmount = $_SESSION['shoesList'][$current]->amount -  $valueAmount;

            if ($newAmount > 0) {
              $id = $current + 1;
              mysqli_stmt_bind_param($stmtUpdate, "ss", $newAmount , $id);
              if(mysqli_stmt_execute($stmtUpdate)){
               
              } else {
                  
              }
            } else {
              echo '<script>alert("La cantidad solicitada no se encuentra en stock");window.location = "/TianvalShop/Views/Carrito.php"</script>'; 
              return true;
            }

         
      } else {
          
      }
           }
           $email = $_SESSION["email"];
           $sql = "INSERT INTO venta(idVenta, idUsuario, total)
           VALUES ($milliseconds, ' $email', $total)";
          
           $result = $this->con->query($sql);
           $_SESSION['list'] = [];
           $_SESSION['amounts'] = [];
       //   header("Location: http://localhost/TianvalShop/Views/Home.php", );
        echo '<script>alert("Tu pedido ha sido realizado con exito");window.location = "/TianvalShop/Views/Home.php"</script>'; 
           
        } else {
          echo '<script>alert("Debes iniciar sesón para realizar un pedido");window.location = "/TianvalShop/Views/InicioSesion.php"</script>'; 
        }
    } 


    function addShoe($value) {
      foreach($_SESSION['list'] as $id) {
        $flag = false;
          if ($id == $value) {
              $flag = true;
          } else {
          }
      }

     !$flag ?   array_push( $_SESSION['list'], $value) : null;

       
        
        header("Location: http://localhost/TianvalShop/Views/Home.php", );
     }

     function changeAmount($id ,$value) {
      array_push( $_SESSION['amounts'], new Amount($id, $value));
      header("Location: http://localhost/TianvalShop/Views/Carrito.php", );
   }

     function deleteShoe($index) {
        echo $index;
        unset($_SESSION['list'][$index]);
      header("Location: http://localhost/TianvalShop/Views/Carrito.php"); 
     }

}
