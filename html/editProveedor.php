<?php 

    require '../html/conexion.php';
    $IdProveedor = $_GET['GetID'];
    $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
    die("la cadena tiene algo malo");
    $query = " SELECT * from proveedores where IdProveedor= '".$_GET['GetID']."'";
    $result = mysqli_query($conexion,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $IdProveedor = $row['IdProveedor'];
        $Nombre = $row['Nombre_proveedor'];
        $Direccion = $row['Direccion'];
        $Telefono = $row['Telefono'];
        $Email = $row['Email'];
        $Contacto = $row['Contacto'];
        $NIT = $row['NIT'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Actualizacion de proveedores</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Actualizacion de proveedores</h3>
                        </div>
                        <div class="card-body">
                            <form action="actualizarProveedor.php" method="post">
                            <label for="Iniciales">Nombre</label>
                                <input type="text" class="form-control mb-2"  name="Nombre" value="<?php echo $Nombre ?>">
                            <label for="Iniciales">Direccion</label>
                                <input type="text" class="form-control mb-2" name="Direccion" value="<?php echo $Direccion ?>">
                            <label for="Iniciales">Telefono</label>
                                <input type="text" class="form-control mb-2" name="Telefono" value="<?php echo $Telefono ?>">
                            <label for="Iniciales">Email</label>
                                <input type="text" class="form-control mb-2" name="Email" value="<?php echo $Email ?>">
                            <label for="Iniciales">Contacto</label>
                                <input type="text" class="form-control mb-2" name="Contacto" value="<?php echo $Contacto ?>">
                            <label for="Iniciales">NIT</label>
                                <input type="text" class="form-control mb-2" name="NIT" value="<?php echo $NIT ?>">
                                <input type="hidden" name="IdProveedor" value= '<?php echo $IdProveedor ?>'/>
                                <br>
                                <button class="btn btn-primary" name="update">Actualizar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>