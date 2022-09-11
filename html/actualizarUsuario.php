<?php 

session_start();
include("conexion.php"); 
$IdUsuario = $_POST['IdUsuario'];
$User = $_POST['User'];
$Pass = $_POST['Pass'];
$Iniciales = $_POST['Iniciales'];

$conexion = mysqli_connect($servidor, $user, $pw, $db) or die("la cadena tiene algo malo");     
if ($conexion) 
{
		echo "conexion exitosa. <br />";		
		$consulta= "UPDATE `usuario` SET `Usuario` = '$User', `Password` = '$Pass', `Iniciales` = '$Iniciales'  WHERE `usuario`.`IdUsuario` = '$IdUsuario'";
		$resultado= mysqli_query($conexion, $consulta);
		
		if ($resultado) 
		{
           
			header("location:usuario.php");
		}
		else 
		{
            echo ' Please Check Your Query ';
            header("location:editUsuario.php");
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