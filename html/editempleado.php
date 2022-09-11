<?php 

session_start();
include("conexion.php"); 
$IdEmpleado = $_POST['IdEmpleado'];
$Nombre_empleado = $_POST['Nombre_empleado'];
$Puesto = $_POST['Puesto'];

$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
		echo "conexion exitosa. <br />";		
		$consulta= "UPDATE `empleado` SET `Nombre_empleado` = '$Nombre_empleado', `Puesto` = '$Puesto'/* , `DPI` = '$DPI', `Telefono` = '$Telefono', `Email` = '$email', `FechaIngreso` = '$FechaIngreso' */ WHERE `empleado`.`IdEmpleado` = '$IdEmpleado'";
		$resultado= mysqli_query($conexion, $consulta);
		
		if ($resultado) 
		{
           
			header("location:empleado.php");
		}
		else 
		{
            echo ' Please Check Your Query ';
            header("location:vActulizarE.php");
		}
		
		if (mysqli_close($conexion))
		{ 
			echo "desconexion realizada. <br />";
		} 
		else 
		{
			echo "error en la desconexión";
		}
}


?>