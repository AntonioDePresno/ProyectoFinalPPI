<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("Location: shop.html");
    }else{
        $correo=$contrasena="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $contrasena = test_input($_POST["c_passwd"]);
            $correo = test_input($_POST["c_correo"]);
        }

        
        $con = mysqli_connect("localhost","root","","ProyectoFinalPPI");

        if(mysqli_connect_errno()){
            echo "Error: " . msqli_connect_erro();
        }

        $correo = mysqli_real_escape_string($con,$correo);
        $contrasena = mysqli_real_escape_string($con,$contrasena);

        $result=mysqli_query($con,"SELECT idusuario from usuario where correo='$correo';");

        if(mysqli_num_rows($result)>0){
            $result1=mysqli_query($con,"SELECT contrasena from usuario where correo='$correo';");
            while($row=mysqli_fetch_array($result1)){
                $con=$row['contrasena'];
            }
            if($con==$contrasena){

                $result2=mysqli_query($con,"SELECT * FROM usuario WHERE correo='$correo';");
                while($row=mysqli_fetch_array($result2)){
                    $_SESSION["id"]=$row['idusuario'];
                    $_SESSION["usuario"]=$row['nombre'];

                }
                echo $_SESSION["id"];
                mysqli_close($con);
                //header("Location: shop.php");
            }
        }else{
            mysqli_close($con);
            header("Location: login.html");        
        }

    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>