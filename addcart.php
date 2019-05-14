<?php
    session_start();
    if(isset($_SESSION["id"])){

        $idusuario=$_SESSION['id'];
        $producto=$_GET['producto'];
        $cantidad=$_GET['cant'];


        $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");
        $query = "INSERT into carrito VALUES ('$producto','$idusuario','$cantidad') ;";

        mysqli_query($con,$query);
        mysqli_close($con);
        header("Location: cart.php");

    }else{
        header("Location: shop.php");
    }
?>