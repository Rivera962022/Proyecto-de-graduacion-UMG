<?php 

include("conexion.php");

$User=$_POST['User'];
$Iniciales=$_POST['Iniciales'];
$Pass=$_POST['Pass'];
$IdEmpleado=$_POST['IdEmpleado'];
$IdRol=$_POST['IdRol'];
$nuevaURL="usuario.php";

$conexion = mysqli_connect($servidor,$user,$pw,$db) or 
	die("la cadena tiene algo malo");
	if (!$conexion) 
	{
    die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (Usuario,Password,Iniciales,IdRol,IdEmpleado)
VALUES ('$User','$Pass','$Iniciales','$IdRol','$IdEmpleado')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo usuario ingresado correctamente ";
    header('Location: '.$nuevaURL);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

