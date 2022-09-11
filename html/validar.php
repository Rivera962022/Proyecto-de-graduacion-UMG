<?php
    require '../html/conexion.php';
    session_start();

    if(isset($_POST['usuario'], $_POST['contraseña'])){
        $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
        die("la cadena tiene algo malo");
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $q="SELECT COUNT(*) as contar FROM usuario WHERE Usuario='$usuario' AND Password='$contraseña'";
        $consulta2=mysqli_query($conexion,$q);
        $array=mysqli_fetch_array($consulta2);
        if ($array['contar']>0) {
           $_SESSION['username']=$usuario;
           header("location:../html/empleado.php");
        }
        else{
            header("location:../html/index.html");
        }
    }
    else{
        header("location:../html/index.html");
    }
?>