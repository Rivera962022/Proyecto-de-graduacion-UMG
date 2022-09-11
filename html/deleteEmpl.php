<?php 

session_start();
include("conexion.php"); 


$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
        $IdEmpleado = $_GET['Del'];
		echo "conexion exitosa. <br />";		
        $query = " DELETE FROM `empleado` where IdEmpleado = '".$IdEmpleado."'";
        $result = mysqli_query($conexion,$query);
        if($result)
        {
            header("location:empleado.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
   }
    else
    {
        header("location:empleado.php");
    }


?>