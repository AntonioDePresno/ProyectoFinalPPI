<?php
    session_start();
    $nombre=$correo=$contrasena=$nac=$tarjeta=$direccion="";
    $result=NULL;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = test_input($_POST["c_fname"]);
        $correo = test_input($_POST["c_mail"]);
        $contrasena = test_input($_POST["c_contra"]);
        $nac = test_input($_POST["c_fechanac"]);
        $tarjeta = test_input($_POST["c_tarjeta"]);
        $direccion = test_input($_POST["c_address"]);
    }

    $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");

    if(mysqli_connect_errno()){
        echo "Error: " . msqli_connect_erro();
    }

    $nombre = mysqli_real_escape_string($con,$nombre);
    $correo = mysqli_real_escape_string($con,$correo);
    $contrasena = mysqli_real_escape_string($con,$contrasena);
    $nac = mysqli_real_escape_string($con,$nac);
    $tarjeta = mysqli_real_escape_string($con,$tarjeta);
    $direccion = mysqli_real_escape_string($con,$direccion);

    $result = mysqli_query($con, "SELECT idusuario FROM usuario WHERE correo='$correo';");

    if(mysqli_num_rows($result)==0){
        $sql = "INSERT INTO usuario (nombre, correo, contrasena, fechanac, tarjeta, direccion)
        VALUES ('$nombre','$correo','$contrasena','$nac','$tarjeta','$direccion');";

        if(!mysqli_query($con,$sql)){
            die('Error: ' . mysqli_error($con));
        }

        $result = mysqli_query($con, "SELECT * FROM usuario WHERE correo='$correo';");
        while($row=mysqli_fetch_array($result)){
            $_SESSION["id"]=$row['idusuario'];
            $_SESSION["usuario"]=$row['nombre'];

        }
        mysqli_close($con);
        header("Location: shop.php");
    }else{
        echo "Ya existe un usuario registrado con el correo: '$correo'";
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>