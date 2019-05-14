<?php
    session_start();
    $idproducto="";
    $cantidad=$stock=$nuevacant=$precio=$total="0";

    if(isset($_SESSION['id'])){
        $idusuario=$_SESSION['id'];
    }

    $con=mysqli_connect("localhost","root","","ProyectoFinalPPI");
    $query="SELECT * FROM carrito WHERE usuario='$idusuario';";
    $result=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($result)){
        $idproducto=$row['producto'];
        $cantidad=$row['cantidad'];

        $query1="SELECT * from producto where idproducto='$idproducto';";
        $result1=mysqli_query($con,$query1);


        while($col=mysqli_fetch_array($result1)){
            $stock=$col['stock'];
            $precio=$col['precioproducto'];
        }
        if($stock>0){
            $nuevacant=$stock - $cantidad;
        }

        $query2="UPDATE producto SET stock='$nuevacant' WHERE idproducto='$idproducto';";
        mysqli_query($con,$query2);

        $total=$precio * $cantidad;
        $query3="INSERT into historial values ('',$idusuario,$idproducto,$cantidad,$total);";
        mysqli_query($con,$query3);
    }

    $query4="DELETE from carrito WHERE usuario='$idusuario';";
    mysqli_query($con,$query4);
    header("Location: thankyou.php");
?>