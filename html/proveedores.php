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

  <!-- JavaScript Bundle with Popper -->
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
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

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
            <li class="nav-item">
              <a class="nav-link" href="usuario.php">Usuarios</a>
            </li>
            <li class="nav-item active">
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
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <?php 
   include("conexion.php");
  ?>
  
  <h1 class="mt-5" align="center">Registro de proveedores</h1> 
  <div class="page-section">
  <div class="container">
    
  <h2>Proveedores activos registrados</h2>   
  <br> 
  <?php 

                $conexion = mysqli_connect($servidor,$user,$pw,$db) or 
                die("la cadena tiene algo malo");
                if (!$conexion) 
                {
                die("Conexion fallida: " . mysqli_connect_error());
                }
                $stringQuerry = "SELECT IdProveedor, Nombre_proveedor, Direccion, Telefono, Email, Contacto, NIT from proveedores";
                $result = $conexion->query($stringQuerry) or exit("Error code ({$conexion->errno}): {$conexion->error}");

                // Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
                        if(!$result)

            {

                printf("Error: %s\n", mysqli_error($conexion));

                exit();

            }
            echo "<table class='table table-bordered'>
                <thead>
                <tr>
                    <th>Nombre del proveedor</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th>NIT</th>
                    <th>Editar</th>
                    <th>Dar de baja</th>
                </tr>
                    </thead>
                ";
                echo"<tbody>";
                while( $fila = mysqli_fetch_array($result, MYSQLI_BOTH))

                {
                    
                        $IdProveedor = $fila['IdProveedor'];
                        echo "<tr>";
                            echo "<td>" . $fila['Nombre_proveedor']."</td>";
                            echo "<td>" . $fila['Direccion']."</td>";
                            echo "<td>" . $fila['Telefono']."</td>";
                            echo "<td>" . $fila['Email']."</td>";
                            echo "<td>" . $fila['Contacto']."</td>";
                            echo "<td>" . $fila['NIT']."</td>";
                            ?>
                            <td class="center aligned">
                                <a href="editProveedor.php?GetID=<?php echo $IdProveedor ?>">
                                <button  class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                            <td class="center aligned">
                                <a href="deleteProveedor.php?Del=<?php echo $IdProveedor ?>">
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



<h1 class="mt-5" align="center">Registra un nuevo proveedor</h1> 
  <div class="page-section">
  <div class="form">

    <form method="post" action="insertProveedor.php" class="contact-form mt-1"  >
        <div class="row mb-3">
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Nombre_proveedor">Nombre proveedor</label>
                 <input type="text" name="Nombre_proveedor" id="Nombre_proveedor"  class="form-control" placeholder="Nombre..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Direccion">Direccion</label>
                 <input type="text" name="Direccion" id="Direccion"  class="form-control" placeholder="Direccion..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Telefono">Telefono</label>
                 <input type="text" name="Telefono" id="Telefono"  class="form-control" placeholder="Telefono..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Email">Email</label>
                 <input type="email" name="Email" id="Email"  class="form-control" placeholder="Email..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="Contacto">Contacto</label>
                 <input type="text" name="Contacto" id="Contacto"  class="form-control" placeholder="Contacto..." required>
            </div>
            <div class="col-sm-6 py-2 wow fadeInRight">
                 <label for="NIT">NIT</label>
                 <input type="text" name="NIT" id="NIT"  class="form-control" placeholder="NIT..." required>
            </div>
            <br>
            <br>
      

 
     
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

    <p id="copyright">Copyright &copy; 2022 UMG - Quetzatenango</a>. All right reserved</p>
  </div>
</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

      <script>
       function foo(){
              var w = window.open('reporteProveedores.php', 'Reporte'); w.print;
              }
      </script>

</body>
</html>
