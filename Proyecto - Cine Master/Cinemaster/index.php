<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CineMaster</title>
  <link rel="icon" type="image/png" href="Img/icono.png">
   <link rel="stylesheet" href="CSS/full-slider.css">
  <link rel="stylesheet" href="CSS/2-col-portfolio.css">
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap-theme.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/bootstrap-social.css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
  <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
  <script src="Recursos/js/bootstrap.min.js"></script>  
  
   <!--
   <script src="https://use.fontawesome.com/c536a996a6.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  -->

</head>
<body>
    <header>
  <div class="container-fluid">  
<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="nosotros.html#nosotros">CineMaster</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Películas Recientes<span class="sr-only">(current)</span></a></li>
        <li><a href="index.php#estrenos">Estrenos</a></li>
        <li><a href="tienda.php">Todas las películas</a></li>
        <li class="dropdown">
          <a href="tienda.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Películas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="index.php#futuros">Futuros</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="tienda.php">Películas</a></li>
          </ul>
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
    </div><!-- /.navbar-collapse -->
</nav>
 </div>  
    </header>
    
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill"  style="background-image:url('Img/3. Avengers 2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Avengers: La era de Ultrón</h2>
                    <p>Una película épica solo para los aficcionados</p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Img/2. Conjuring 2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>El Conjuro 2</h2>
                    <p>Si eres de esos que les gusta el misterio y el terror, pues no te la puedes perder!</p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Img/1. Hitman.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Hitman: Agente 47</h2>
                    <p>Si te gusta la acción, esta es tu película</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
 
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
         <hr>
         <h2 class="text-center titulo" id="estrenos">Estrenos</h2>
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="<?php echo 'mostrar.php?nombre=moana'?>">
                    <img class="img-responsive img-rounded img-thumbnail" src="Img/moana.jpg" alt="Moana La Pelicula de Disney" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Moana'?>">Moana</a> 
                </h3>
                <p>La historia se desarrolla hace dos milenios en unas islas del sur del Pacífico. La protagonista es Moana Waialiki, una joven que desea explorar el mundo navegando por el océano.</p>
            </div>
              <div class="col-md-6 portfolio-item">
                <a href="<?php echo'mostrar.php?nombre=Escuadrón Suicida'; ?>">
                    <img class="img-responsive img-rounded img-thumbnail" src="Img/escuadron.jpg" alt="Crazy">
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Escuadrón Suicida'?>">Escuadrón Suicida</a>
                </h3>
                <p>Mientras el gobierno de EE.UU no tiene claro cómo responder a una visita alienígena a la Tierra con intenciones malignas, Amanda 'El Muro' Waller (Viola Davis), la líder de la agencia secreta A.R.G.U.S., ofrece una curiosa solución: reclutar a los villanos más crueles, con habilidades letales e incluso mágicas, para que trabajen para ellos.</p>
            </div>
        </div>
          <hr>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/pinguinos.jpg" alt="" height="413" width="795" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Los Pingüinos de Madagascar (La Película)'?>">Los Pingüinos de Madagascar</a>
                </h3>
                <p>Spin-off de 'Madagascar' protagonizado por los pingüinos de la isla. Las más divertidas aves encubiertas del mundo del espionaje: Capitán, Kowalski, Rico y Soldado. Son la élite de la élite y juntos unen sus fuerzas a una elegante organización encubierta llamada Viento Norte, liderada por el apuesto y musculoso Agente Clasificado.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/conjuro2.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Expediente Warren: El Caso Enfield - El Conjuro 2'?>">Expediente Warren: El Caso Enfield - El Conjuro 2</a>
                </h3>
                <p>Secuela de la exitosa "Expediente Warren" (2013) que presenta un caso real de los renombrados demonólogos Ed y Lorraine Warren. Para resolverlo viajan al norte de Londres para ayudar a una madre soltera que vive con sus cuatro hijos en una casa plagada de espíritus malignos.</p>
            </div>
        </div>
         <hr>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-6 col-lg-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded img-rounded" src="Img/frozen.jpg" alt="" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Frozen: El reino del hielo'?>">Frozen: El reino del hielo</a>
                </h3>
                <p>Cuando una profecía condena a un reino a vivir un invierno eterno, la joven Anna, el temerario montañero Kristoff y el reno Sven emprenden un viaje épico en busca de Elsa, hermana de Anna y Reina de las Nieves, para poner fin al gélido hechizo. Adaptación libre del cuento "La reina de las nieves".</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/rapido y furioso.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Rápidos y Furiosos 7'?>">Rápidos y Furiosos 7</a>
                </h3>
                <p>Ha pasado un año desde que el equipo de Dominic Torreto y Brian pudiera regresar finalmente a Estados Unidos, tras ser indultados. Desean adaptarse a una vida en la legalidad, pero el entorno ya no es el mismo. Dom intenta acercarse a Letty, y Brian lucha para acostumbrarse a la vida en una urbanización con Mia y su hijo.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <hr>

        <!-- Footer -->

    </div>
        <div class="container-fluid">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
         <hr>
          <h2 class="text-center titulo" id="futuros">Futuros</h2>
           <hr>
        <div class="row">
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/dospavos.jpg" alt="Moana La Pelicula de Disney" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Dos pavos en apuros'?>">Dos Pavos en Apuros</a>
                </h3>
                <p>Un par de pavos descubren una máquina del tiempo y deciden utilizarla para volver atrás en el tiempo al primer Día de Acción de Gracias para impedir convertirse en parte del menú.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/Tarzan.jpg" alt="Crazy" <a href="<?php echo 'mostrar.php?nombre=Tarzan'?>"</a>
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Tarzan'?>">Tarzán</a>
                </h3>
                <p>Ya hace años que Tarzán (Alexander Skarsgård) abandonó la jungla africana para llevar una vida aburguesada como John Clayton III, Lord Greystoke, junto a su esposa Jane (Margot Robbie). Pero un día le ofrecen el cargo de embajador en el Congo.</p>
            </div>
        </div>
          <hr>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
             <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/avenger.jpg" alt="" height="413" width="795" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Los Vengadores: La Era de Ultrón'?>">Avengers: La era de ultrón</a>
                </h3>
                <p>Cuando Tony Stark intenta reactivar un programa caído en desuso cuyo objetivo es mantener la paz, las cosas empiezan a torcerse y los héroes más poderosos de la Tierra, incluyendo a Iron Man, Capitán América, Thor, El Increíble Hulk, Viuda Negra y Ojo de Halcón, tendrán que afrontar la prueba definitiva cuando el destino del planeta se ponga en juego.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/Dory.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Buscando a Dory'?>">Buscando a Dory</a>
                </h3>
                <p>Un año después de los acontecimientos narrados en "Buscando a Nemo", Dory vive apaciblemente con Marlin y su hijo Nemo. Pero durante un viaje para ver cómo las mantarrayas migran de vuelta a casa, los problemas de memoria de Dory parecen desaparecer durante un segundo: recuerda que tiene una familia e inmediatamente decide emprender viaje para reencontrarse con sus padres, a los que perdió hace años.</p>
            </div>
        </div>
         <hr>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
           <div class="col-md-6 col-lg-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded img-rounded" src="Img/zootopia.jpg" alt="" >
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Zootopia'?>">Zootopia</a>
                </h3>
                <p>La moderna metrópoli mamífera de Zootrópolis es una ciudad absolutamente única. Está compuesta de barrios con diferentes hábitats como la lujosa Sahara Square y la gélida Tundratown. Es un crisol donde los animales de cada entorno conviven, un lugar donde no importa lo que seas.</p>
            </div>
            <div class="col-md-6 portfolio-item">
                <a href="#">
                    <img class="img-responsive img-rounded" src="Img/independencia.jpg" alt="">
                </a>
                <h3>
                    <a href="<?php echo 'mostrar.php?nombre=Independencia'?>">Independencia</a>
                </h3>
                <p>Utilizando la tecnología que los extraterrestres tenían 20 años antes, las naciones de la Tierra, que temen el regreso de los invasores, han colaborado en la elaboración de un gigantesco programa de defensa para proteger el planeta. Pero no es seguro que ese programa sirva para hacer frente a los avanzados e inauditos recursos de los atacantes.</p>
            </div>
        </div>

        <hr>

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