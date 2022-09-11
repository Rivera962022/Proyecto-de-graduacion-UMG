<!DOCTYPE html>
<html >
<head>

  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Administracion</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


  
</head>

<body>

  
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>7763 8821</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> municipalidadconcepcion2016@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>

            </div>
          </div>
        </div> 
      </div> 
    </div> 

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Municipalidad de Concepción Chiquirichapa</span></a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="empleado.php">Empeados</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="usuario.php">Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="proveedores.php">Proveedores</a>
            </li>
            <li class="nav-item ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Movimientos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="solicitudes.php">Solicitudes</a></li>
                      <li><a class="dropdown-item" href="compra.php">Compras</a></li>
                      <li><a class="dropdown-item" href="#">Entregas</a></li>
                      <li><a class="dropdown-item" href="#">Reportes</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="salir.php">Cerrar Sesion</a>
            </li>
            
          </ul>
        </div> 
      </div> 
    </nav>
  </header>

  <?php 
   include("conexion.php");
  ?>
  
  <h1 class="mt-5" align="center">Registro de usuarios</h1> 
  <div class="page-section">
  <div class="container">
  <h2>Usuarios activos registrados</h2>   
  <br> 
  <?php 

                $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
                die("la cadena tiene algo malo");
                if (!$conexion) 
                {
                die("Conexion fallida: " . mysqli_connect_error());
                }
                $stringQuerry = "SELECT usuario.IdUsuario, usuario.Usuario, usuario.Iniciales, usuario.Password, empleado.Nombre_empleado, rol.NombreRol from usuario
                inner join empleado on empleado.IdEmpleado = usuario.IdEmpleado inner join rol on rol.IdRol = usuario.IdRol";
                $result = $conexion->query($stringQuerry) or exit("Error code ({$conexion->errno}): {$conexion->error}");

                
                        if(!$result)

            {

                printf("Error: %s\n", mysqli_error($conexion));

                exit();

            }
            echo "<table class='table table-bordered'>
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre del empleado</th>
                    <th>Iniciales</th>
                    <th>Rol</th>
                    <th>Editar</th>
                    <th>Dar de baja</th>
                </tr>
                    </thead>
                ";
                echo"<tbody>";
                while( $fila = mysqli_fetch_array($result, MYSQLI_BOTH))

                {
                    
                        $IdUsuario = $fila['IdUsuario'];
                        echo "<tr>";
                            echo "<td>" . $fila['Usuario']."</td>";
                            echo "<td>" . $fila['Nombre_empleado']."</td>";
                            echo "<td>" . $fila['Iniciales']."</td>";
                            echo "<td>" . $fila['NombreRol']."</td>";?>
                            <td class="center aligned">
                                <a href="editUsuario.php?GetID=<?php echo $IdUsuario ?>">
                                <button  class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                            <td class="center aligned">
                                <a href="deleteUsuario.php?Del=<?php echo $IdUsuario ?>">
                                <button  class="btn btn-danger">Dar de baja</button>
                                </a>
                            </td>
                          <?php  echo"</tr>";
                    echo"</tbody>";
                }
                    echo"</table>";
            ?>
            <br>
             <div class="d-flex justify-content-center">
             <input class=" btn btn-success"  type="submit" onclick="foo()" value="Generar reporte PDF" />
             </div>
    </div>
  </div>



<h1 class="mt-5" align="center">Registra un nuevo usuario</h1> 
  <div class="page-section">
  <div class="form">

    <form method="post" action="insertUsuario.php" class="contact-form mt-1"  >
        <div class="row mb-3">
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="User">Usuario</label>
                 <input type="text" name="User" id="User"  class="form-control" placeholder="Usuario..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Iniciales">Iniciales</label>
                 <input type="text" name="Iniciales" id="Iniciales"  class="form-control" placeholder="Iniciales..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Pass">Password</label>
                 <input type="password" name="Pass" id="Pass"  class="form-control" placeholder="Contraseña..." required>
            </div>

            <br>
            <br>
            <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="Mecanico">Empleado</label>
              <select id="IdEmpleado" name="IdEmpleado" class="form-control">
                <?php
                    // Realizamos la consulta para extraer los datos
                    $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
                          die("la cadena tiene algo malo");
                          if (!$conexion) 
                          {
                          die("Conexion fallida: " . mysqli_connect_error());
                          }
                          $stringQuerry = "SELECT IdEmpleado, Nombre_empleado from empleado";
                          $result = $conexion->query($stringQuerry) or exit("Error code ({$conexion->errno}): {$conexion->error}");
                            while ($fila  = mysqli_fetch_array($result, MYSQLI_BOTH))
                            {
                        echo '<option value="'.$fila['IdEmpleado'].'">'.$fila['Nombre_empleado'].'</option>';
                      }
                    ?>
              </select>
              </div>
              <br>
            <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="Mecanico">Rol</label>
              <select id="IdRol" name="IdRol" class="form-control">
                <?php
                    // Realizamos la consulta para extraer los datos
                    $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
                          die("la cadena tiene algo malo");
                          if (!$conexion) 
                          {
                          die("Conexion fallida: " . mysqli_connect_error());
                          }
                          $stringQuerry = "SELECT IdRol, NombreRol from rol";
                          $result = $conexion->query($stringQuerry) or exit("Error code ({$conexion->errno}): {$conexion->error}");
                            while ($fila  = mysqli_fetch_array($result, MYSQLI_BOTH))
                            {
                        echo '<option value="'.$fila['IdRol'].'">'.$fila['NombreRol'].'</option>';
                      }
                    ?>
              </select>
              </div>

 
     
        </div>
      <br>          
      <div class="d-flex justify-content-center">
      <input type="submit" name="data[password]" class="next btn btn-info" value="Enviar" />
      </div>
      
    </form>
  </div>
</div>


<footer class="page-footer">
  <div class="container">
    <div class="row px-md-3">

      <div class="col-sm-6 col-lg-6 py-3">
        <h5>Informacion de contacto</h5>
        <p class="footer-link mt-2">Municipalidad de Concepción Chiquirichapa Santa Luisa de Marillac, Quetzatenango</p>
        <a href="#" class="footer-link">7763 8821</a>
        <a href="#" class="footer-link">municipalidadconcepcion2016@gmail.com</a>

        <h5 class="mt-3">Redes Sociales</h5>
        <div class="footer-sosmed mt-3">
          <a href="https://www.facebook.com/MunicipalidadDeConcepcionChiquirichapa" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
        </div>
      </div>
    </div>

    <hr>

    <p id="copyright">Copyright &copy; 2021 <!-- <a href="https://macodeid.com/" target="_blank"> -->UMG - Quetzatenango</a>. All right reserved</p>
  </div>
</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

      <script>
       function foo(){
              var w = window.open('reporteUsuarios.php', 'Reporte'); w.print;
              }
      </script>

</body>
</html>
