<?php 

session_start();
include("conexion.php"); 


$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
        $IdProveedor = $_GET['Del'];
		echo "conexion exitosa. <br />";		
        $query = " DELETE FROM `proveedores` where IdProveedor = '".$IdProveedor."'";
        $result = mysqli_query($conexion,$query);
        if($result)
        {
            header("location:proveedores.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
   }
    else
    {
        header("location:proveedores.php");
    }


?>