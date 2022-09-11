<?php 

session_start();
include("conexion.php"); 
$IdProveedor = $_POST['IdProveedor'];
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Contacto = $_POST['Contacto'];
$NIT = $_POST['NIT'];

$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
		echo "conexion exitosa. <br />";		
		$consulta= "UPDATE `proveedores` SET `Nombre_proveedor` = '$Nombre', `Direccion` = '$Direccion', `Telefono` = '$Telefono', `Email` = '$Email', `Contacto` = '$Contacto', `NIT` = '$NIT'  WHERE `proveedores`.`IdProveedor` = '$IdProveedor'";
		$resultado= mysqli_query($conexion, $consulta);
		
		if ($resultado) 
		{
           
			header("location:proveedores.php");
		}
		else 
		{
            echo ' Please Check Your Query ';
            header("location:editProveedor.php");
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