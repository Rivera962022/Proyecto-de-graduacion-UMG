<?php 

include("conexion.php");

$Nombre_proveedor=$_POST['Nombre_proveedor'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Contacto=$_POST['Contacto'];
$NIT=$_POST['NIT'];
$nuevaURL="proveedores.php";

$conexion = mysqli_connect($servidor,$user,$pw,$db) or 
	die("la cadena tiene algo malo");
	if (!$conexion) 
	{
    die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "INSERT INTO proveedores (Nombre_proveedor, Direccion, Telefono, Email, Contacto, NIT)
VALUES ('$Nombre_proveedor','$Direccion','$Telefono','$Email','$Contacto','$NIT')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo proveedor ingresado correctamente ";
    header('Location: '.$nuevaURL);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);

?>

