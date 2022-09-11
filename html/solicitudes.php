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

  <div class="page-section">
  <div class="container">
    
  <h2>Solicitudes</h2>   
  <br> 
  <div class="form">

<form method="post" action="" class="contact-form mt-1"  >
    <div class="row mb-3">
        <div class="col-sm-6 py-2 wow fadeInRight">
             <label for="Fecha">Fecha</label>
             <input type="date" name="Fecha" id="Fecha"  class="form-control" placeholder="Nombre..." required>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="Mecanico">Dependencia</label>
              <select id="IdEmpleado" name="IdEmpleado" class="form-control">
              </select>
        </div>

        <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="Mecanico">Solicitante</label>
              <select id="IdEmpleado" name="IdEmpleado" class="form-control">
              </select>
        </div>

        <div class="col-sm-6 py-2 wow fadeInRight">
              <label for="Mecanico">Fuente</label>
              <select id="IdEmpleado" name="IdEmpleado" class="form-control">
              </select>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
             <label for="Orden">No. Orden</label>
             <input type="text" name="Orden" id="Orden"  class="form-control" placeholder="Orden..." required>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
             <label for="NIT">NIT</label>
             <input type="text" name="NIT" id="NIT"  class="form-control" placeholder="NIT..." required>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
        <input type="radio" id="age1" name="age" value="30">
            <label for="age1">Bienes</label><br>
            <input type="radio" id="age2" name="age" value="60">
            <label for="age2">Materiales</label><br>  
            <input type="radio" id="age3" name="age" value="100">
            <label for="age3">Suministros</label><br>  
            <input type="radio" id="age3" name="age" value="100">
            <label for="age3">Servicios</label><br><br>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
             <label for="NIT">Solicitud Hoja CGC</label>
             <input type="text" name="NIT" id="NIT"  class="form-control" placeholder="Hoja..." required>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
             <label for="NIT">Observaciones</label>
             <input type="text" name="NIT" id="NIT"  class="form-control" placeholder="Hoja..." required>
        </div>
        <div class="col-sm-6 py-2 wow fadeInRight">
          <br>
          <br>
        <input type="radio" id="age1" name="age" value="30">
        <label class="text-danger" for="age1">Solicitud de compra</label><br>

        </div>
        <br>
        <br>
  


 
    </div>
  <br>          
  <div class="d-flex justify-content-center">
  <input type="submit" name="data[password]" class="next btn btn-info mx-3" value="Enviar" />
  <input type="submit" name="data[password]" class="next btn btn-success" value="Editar" />
  </div>
  
</form>
</div>
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

    <p id="copyright">Copyright &copy; 2021 UMG - Quetzatenango</a>. All right reserved</p>
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
