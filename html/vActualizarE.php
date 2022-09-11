<?php 

    require '../html/conexion.php';
    $IdEmpleado = $_GET['GetID'];
    $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
    die("la cadena tiene algo malo");
    $query = " SELECT IdEmpleado,Nombre_empleado, Puesto from empleado  where IdEmpleado= '".$_GET['GetID']."' ";
    $result = mysqli_query($conexion,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $IdEmpleado = $row['IdEmpleado'];
        $Nombre_empleado = $row['Nombre_empleado'];
        $Puesto = $row['Puesto'];


    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Actualizacion de empleado</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Actualizacion de empleado</h3>
                        </div>
                        <div class="card-body">

                            <form action="editempleado.php" method="post">
                            <label for="Iniciales">Nombre:</label>
                                <input type="text" class="form-control mb-2"  name="Nombre_empleado" value="<?php echo $Nombre_empleado ?>">
                            <label for="Iniciales">Puesto:</label>
                                <input type="text" class="form-control mb-2" name="Puesto" value="<?php echo $Puesto ?>">
                                <input type="hidden" name="IdEmpleado" value= '<?php echo $IdEmpleado ?>'/></br>
                                <button class="btn btn-primary" name="update">Actualizar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>