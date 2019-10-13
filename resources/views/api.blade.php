<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Helpme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo_solo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style media="screen">
    #api{
      margin-left: 20%;
    }
  </style>
</head>

<body>

  <header id="header">
    <div class="container">
      <div class="float-left">
          <a href="#intro" class="scrollto">
            <img src="img/logo_app.png" alt="" width="100px" class="mb-6">
        </a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Inicio</a></li>
          <li class="drop-down"><a href="{{url('/')}}">¿Qué es Helpme?</a>
            <ul>
              <li><a href="{{url('/')}}">Como Funciona</a></li>
              <li><a href="{{url('/')}}">Descargar</a></li>
            </ul>
          </li>
          <li><a href="{{url('/')}}">¿Quiénes Somos?</a></li>
          <li><a href="{{url('/')}}">Contáctanos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <img src="img/logo_app.png" alt="" width="80%">
          <h2 align="center"><span class="span">Ayuda</span> a los que más lo <span class="span">Necesitan</span></h2>
        </div>
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/donations.png" alt="Donations" class="img-fluid mt-5 ml-5" width="80%">
        </div>
      </div>

    </div>
  </section>

  <section id="api" class="wow fadeInUp">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <h1 class="align-self-center">Lista de Reportes</h1>
          <table class="table table-response">
            <thead class="table dark">
              <tr>
                <td>Direccion ip</td>
                <td>Nombre</td>
                <td>Fecha de llamada</td>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>{{$body}}</td>
                  <td>Carlos Ortis</td>
                  <td>{{$api}}</td>
                </tr>
                <tr>
                  <td>{{$body}}</td>
                  <td>Juan Muñoz</td>
                  <td>{{$api}}</td>
                </tr>
                <tr>
                  <td>{{$body}}</td>
                  <td>Karla Sanchez</td>
                  <td>{{$api}}</td>
                </tr>
                <tr>
                  <td>{{$body}}</td>
                  <td>Melany Bolaños</td>
                  <td>{{$api}}</td>
                </tr>
            </tbody>
          </table>
      </div>

    </div>
  </section>


  <footer id="footer">
    <div class="container">
      <div class="copyright">
          <h4 class="mt-5"><strong>Información de contacto:</strong></h4>
          <p>
              <strong>Dirección:</strong> Calle 4 # 2-80 <br>
              <strong>Ciudad:</strong> Popayán - Cauca<br>
            <strong>Celular:</strong> +57-3058172745<br>
            <strong>Correo:</strong> hackmons5@gmail.com<br>
          </p>
        &copy; Copyright <strong>Helpme</strong>. Todos los derechos reservados
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
