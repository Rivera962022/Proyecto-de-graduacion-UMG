<?php 

session_start();
include("conexion.php"); 


$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
        $IdUsuario = $_GET['Del'];
		echo "conexion exitosa. <br />";		
        $query = " DELETE FROM `usuario` where IdUsuario = '".$IdUsuario."'";
        $result = mysqli_query($conexion,$query);
        if($result)
        {
            header("location:usuario.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
   }
    else
    {
        header("location:usuario.php");
    }


?>