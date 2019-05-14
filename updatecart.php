<?php
    
    $idproducto=$_GET['elimina'];
    $con=mysqli_connect("localhost", "root", "","ProyectoFinalPPI");

    $query="DELETE from carrito where producto='$idproducto';";

    mysqli_query($con,$query);
    mysqli_close($con);

    header("Location: cart.php");
?>