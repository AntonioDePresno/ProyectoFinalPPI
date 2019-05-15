<?php
    $nombre=$precio=$descripcion=$stock=$fabricante=$origen=$img="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = test_input($_POST["nombre"]);
        $precio = test_input($_POST["precio"]);
        $descripcion = test_input($_POST["descripcion"]);
        $stock = test_input($_POST["stock"]);
        $fabricante = test_input($_POST["fabricante"]);
        $origen = test_input($_POST["origen"]);
        $img = test_input($_POST["img"]);
    }

    $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");

    if(mysqli_connect_errno()){
        echo "Error: " . msqli_connect_erro();
    }

    $nombre = mysqli_real_escape_string($con,$nombre);
    $precio = mysqli_real_escape_string($con,$precio);
    $descripcion = mysqli_real_escape_string($con,$descripcion);
    $stock = mysqli_real_escape_string($con,$stock);
    $fabricante = mysqli_real_escape_string($con,$fabricante);
    $origen = mysqli_real_escape_string($con,$origen);
    $img = mysqli_real_escape_string($con,$img);

    $query="INSERT INTO producto VALUES ('','$nombre','$precio','$descripcion','$stock','$fabricante','$origen','$img'); ";
    echo $query;
    mysqli_query($con,$query);

    header("Location: admin.php");

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>