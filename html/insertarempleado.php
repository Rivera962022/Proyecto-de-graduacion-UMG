<?php 

include("conexion.php");

$nombre=$_POST['nombre'];
$puesto=$_POST['puesto'];

$nuevaURL="empleado.php"; 

$conexion = mysqli_connect($servidor,$user,$pw,$db) or 
	die("la cadena tiene algo malo");
	if (!$conexion) 
	{
    die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO empleado (Nombre_empleado,Puesto)
VALUES ('$nombre','$puesto')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo empleado ingresado correctamente ";
    header('Location: '.$nuevaURL);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

