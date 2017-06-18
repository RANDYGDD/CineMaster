<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peliculas</title>
    <link rel="icon" type="image/png" href="Img/icono.png">
    <link href="CSS/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap-social.css">
     <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="Recursos/css/bootstrap-theme.css">
    <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
    <script src="Recursos/js/bootstrap.min.js"></script>  
    
    
    <style>
        body{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a90329+95,6d0019+97&0.63+4,1+90 */
background: -moz-linear-gradient(45deg, rgba(169,3,41,0.63) 4%, rgba(169,3,41,1) 90%, rgba(169,3,41,1) 95%, rgba(109,0,25,1) 97%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg, rgba(169,3,41,0.63) 4%,rgba(169,3,41,1) 90%,rgba(169,3,41,1) 95%,rgba(109,0,25,1) 97%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg, rgba(169,3,41,0.63) 4%,rgba(169,3,41,1) 90%,rgba(169,3,41,1) 95%,rgba(109,0,25,1) 97%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a1a90329', endColorstr='#6d0019',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
    </style>
    
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Cinemaster</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="nosotros.html">Nosostros</a>
                    </li>
                    <li>
                        <a href="Mercado.php">Comidas</a>
                    </li>
                    <li>
                        <a href="nosotros.html#map">Contactos</a>
                    </li>
                </ul>
                
        <ul class="nav navbar-nav navbar-right">
         <?php
          session_start();
       if(isset($_SESSION['user'])){
            $user=$_SESSION['user'];
             echo "<li><a href='Blog2.php'><span class='glyphicon glyphicon-user'>$user</span></a></li>";
            echo "<li><a></a></li>";
           
       }else{
          echo "<li><a href='Registro.php'><span class='glyphicon glyphicon-user'></span>Sign Up</a></li>";
          echo "<li><a href='Login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
          echo "<li><a></a></li>";
           
       }
    ?>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            

    <div class="col-sm-3 sidenav">

      <ul class="nav nav-pills nav-stacked">
          <li><h3 class="label label-info">Filtrar por: </h3></li><br>
		 <li><div class="btn-group">
                <button class="btn btn-success  dropdown-toggle btn-md" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLASIFICACION<span class="caret"></span>
               </button>
                <ul class="dropdown-menu">
                   <li> <a href="tienda.php?nombre=1-A">A</a></li>
                   <li> <a href="tienda.php?nombre=1-B">B</a></li>
                   <li> <a href="tienda.php?nombre=1-C">C</a></li>
                </ul>
               </div></li><br>
               
                <li><div class="btn-group">
                <button class="btn btn-success  dropdown-toggle btn-md" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GENERO<span class="caret"></span>
               </button>
                <ul class="dropdown-menu">
                   <li> <a href="tienda.php?nombre=2-R">Romántico</a></li>
                   <li> <a href="tienda.php?nombre=2-A">Acción</a></li>
                   <li> <a href="tienda.php?nombre=2-T">Terror Y Suspenso</a></li>
                   <li> <a href="tienda.php?nombre=2-D">Animación</a></li>
                </ul>
               </div></li>
                  <br>
                  <li><div class="btn-group">
                <button class="btn btn-success dropdown-toggle btn-md" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IDIOMA<span class="caret"></span>
               </button>
                <ul class="dropdown-menu">
                   <li> <a href="tienda.php?nombre=3-E">Español</a></li>
                   <li> <a href="tienda.php?nombre=3-I">Inglés</a></li>
                </ul>
               </div></li>
                     
             <br>
                  <li><div class="btn-group">
                <button class="btn btn-success  dropdown-toggle btn-md" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DURACION<span class="caret"></span>
               </button>
                <ul class="dropdown-menu">
                   <li> <a href="tienda.php?nombre=4-MA">Mayor de 120 min</a></li>
                   <li> <a href="tienda.php?nombre=4-ME">Menor de 120 min</a></li>
                </ul>
               </div></li>
                     <br>
                      
      </ul>
    </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image img-rounded" src="Img/moana.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="Img/Dory.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image img-rounded" src="Img/escuadron.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                
<?php
include("conexion.php");
  if(isset($_GET['nombre'])){
  $nombre=mysqli_escape_string($conexion,$_GET['nombre']);
  }else{
      $nombre='default';
  }
            
                switch($nombre){
                    case '1-A':
                        $sql="SELECT * FROM PELICULAS WHERE CLASIFICACION_P='A' ";
                        break;
                    case '1-B':
                        $sql="SELECT * FROM PELICULAS WHERE CLASIFICACION_P='B' ";
                        break;
                    case '1-C':
                        $sql="SELECT * FROM PELICULAS WHERE CLASIFICACION_P='C' ";
                        break;
                     case '2-R':
                         $sql="SELECT * FROM PELICULAS WHERE GENEROS_P LIKE '%Romance%' ";
                        break;
                    case '2-A':
                         $sql="SELECT * FROM PELICULAS WHERE GENEROS_P LIKE '%Accion%' ";
                        break;
                    case '2-T':
                        $sql="SELECT * FROM PELICULAS WHERE GENEROS_P LIKE '%Terror%'";
                        break;
                     case '2-D':
                        $sql="SELECT * FROM PELICULAS WHERE GENEROS_P LIKE '%Animacion%'";
                        break;
                    case '3-E':
                        $sql="SELECT * FROM PELICULAS WHERE IDIOMAS_P LIKE '%Espa%' ";
                        break;
                    case '3-I':
                        $sql="SELECT * FROM PELICULAS WHERE IDIOMAS_P LIKE '%Ingl%' ";
                        break;
                     case '4-MA':
                        $sql="SELECT * FROM PELICULAS WHERE DURACION_P_M >= 120 ";
                        break;
                     case '4-ME':
                        $sql="SELECT * FROM PELICULAS WHERE DURACION_P_M < 120 ";
                        break;
                     default:
                     $sql="SELECT * FROM PELICULAS";
                        
                }
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conexion, $sql);
                
if (mysqli_num_rows($result) > 0) {
          echo "<div class='row'>";       
    while($row = mysqli_fetch_assoc($result)) {
       $idioma=$row['IDIOMAS_P'];
       $titulo=$row['NOMBRE_P'];
       $precio=$row['PRECIO_P'];
       $dirimg=$row['DIR_PIC'];
       $genero=$row['GENEROS_P'];
       $duracion=$row['DURACION_P'];
       $clasificacion=$row['CLASIFICACION_P']; 
       $reparto=$row['PROTAGONISTAS_P'];
       $sipnosis=$row['SIPNOSIS_P'];

                echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
                     echo   "<div class='thumbnail'>";
                     echo "<a href='mostrar.php?nombre=$titulo'>";
                     echo    "<img class='img img-reponsive' src='$dirimg'>";
                     echo "</a>";
                     echo    "<div class='caption'>";
                     echo     "<h5 class='pull-right text text-danger'>RD$:$precio.00</h5>";
                     echo     "<h6 class='text text-warning'><a href='mostrar.php?nombre=$titulo'>$titulo</a></h6>";
                     echo    "<span class='text text-success'>$idioma</span>";
                     echo    "<p style='font-size: 11px''>$sipnosis</p>";
                echo  "</div>";
                echo  "</div>";
                echo  "</div>";
    }
    echo  "</div>";
}else{
    echo  "<div class='alert alert-info' role='alert'><h2>No hay resultados que mostrar</h2></div>";
}
                

mysqli_close($conexion);
               
?>

            </div>

        </div>

    </div>

<footer id="main-footer">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-5">
        <h3>Informaciones</h3>
        <div id="desploy">
        <ul id="link-list">
           <a href="nosotros.html" class="footer">Sobre Nosotros</a>
           <a href="nosotros.html#contact" class="footer">Ayuda</a>
           <a href="Todo.html#EMPLEO" class="footer">Empleos</a>
           <a href="Todo.html#PRIVACIDAD" class="footer">Privacidad</a>
           <a href="Todo.html#COOKIES" class="footer">Cookies</a>
           <a href="Todo.html#POLITICAS" class="footer">Politicas</a>
          <a href="Todo.html#RESTRINCIONES" class="footer">Restriciones</a>
          <a href="nosotros.html#demo1" class="footer">Desarrolladores</a>
          <a href="Todo.html#CONDICIONES" class="footer">Condiciones</a>
          <a href="Todo.html" class="footer">@2016Cinemaster</a>
        </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
        <h3>NO TE PIERDAS NUESTRAS NOVEDADES</h3>
        <form id="subscribe-form" action="#">
          <div class="row">
        <div class="col-xs-7 col-sm-8">
                 <h4 class="text text-danger">Siguenos:</h4>
                <div id="sociales">
                <a class="btn btn-social-icon btn-twitter">
                 <span class="fa fa-twitter"></span>
                </a>
                  <a class="btn btn-social-icon btn-facebook">
                 <span class="fa fa-facebook"></span>
                </a>
                 <a class="btn btn-social-icon btn-instagram">
                 <span class="fa fa-instagram"></span>
                </a>
                 <a class="btn btn-social-icon btn-pinterest">
                 <span class="fa fa-youtube"></span>
                </a>
                <a class="btn btn-social-icon btn-google">
                 <span class="fa fa-google"></span>
                </a>
                 </div>  
          </div>
        </form>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-5">
        <h3>Cinemaster</h3>
        <p>Sitio Web de cinematografía.</p>
        <p>&copy; Todos los derechos reservados CINEMASTER 2016.</p>
      </div>
      <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
        <div class="row">
          <div class="col-sm-6">
            <ul id="font-end">                        
              <h4>Creado Por:</h4>
              <h5>Randy Diloné</h5>
              <h5>Luis Miguel</h5>
            </ul>
          </div>
          <div class="col-sm-6">
            <br>
            <br class="hidden-xs">
            <br class="hidden-xs">
          
          </div>
        </div>
      </div>
    </div>
       </div>
   </footer>
</body>
</html>