<?php
    $opcion=$id=$campo=$info="";

    $opcion=$_POST['opcion'];
    $id=$_POST['id'];
    $campo=$_POST['campo'];
    $info=$_POST['valor'];

    $con=mysqli_connect("localhost","root","","ProyectoFinalPPI");
    if($opcion=="elimina"){
        $query="DELETE from producto where idproducto='$id'";
        mysqli_query($con,$query);

        header("Location: admin.php");
    }else if($opcion=="modifica"){
        echo "UPDATE producto SET $campo='$info' WHERE idproducto='$id';";
        $query1="UPDATE producto SET $campo='$info' WHERE idproducto='$id';";
        mysqli_query($con,$query1);
    }
?>