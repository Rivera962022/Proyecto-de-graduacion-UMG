<?php 

    require '../html/conexion.php';
    $IdDonaciones = $_GET['GetID'];
    $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
    die("la cadena tiene algo malo");
    $query = " SELECT * from usuario where IdUsuario= '".$_GET['GetID']."'";
    $result = mysqli_query($conexion,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $IdUsuario = $row['IdUsuario'];
        $User = $row['Usuario'];
        $Pass = $row['Password'];
        $Iniciales = $row['Iniciales'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Actualizacion de usuario</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Actualizacion de usuario</h3>
                        </div>
                        <div class="card-body">
                            <form action="actualizarUsuario.php" method="post">
                            <label for="Iniciales">Usuario</label>
                                <input type="text" class="form-control mb-2"  name="User" value="<?php echo $User ?>">
                            <label for="Iniciales">Contraseña</label>
                                <input type="text" class="form-control mb-2" name="Pass" value="<?php echo $Pass ?>">
                            <label for="Iniciales">Iniciales</label>
                                <input type="text" class="form-control mb-2" name="Iniciales" value="<?php echo $Iniciales ?>">
                                <input type="hidden" name="IdUsuario" value= '<?php echo $IdUsuario ?>'/>
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