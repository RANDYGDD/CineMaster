<!DOCTYPE html>
<html lang="es">
<head>
  <title>Mercado</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="Img/icono.png">
  <link rel="stylesheet" href="CSS/shop-homepage.css">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/bootstrap-social.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
  <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
  <script src="Recursos/js/bootstrap.min.js"></script>
 
  
   <style>
.comida
{   color:rgba(178, 34, 34, 0.8);
    background-color:rgba(255, 29, 0, 0.37);
    font-size:50px;
    font-family:fantasy;
    padding-bottom:2px;
    margin-bottom:1%;
}
    </style> 
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Cinemaster</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="tienda.php">Peliculas</a></li>
        <li><a href="tienda.php">Compra voletas</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
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
  </div>
</nav>


                <div class="row">
                    <div class="col-md-offset-1 col-md-2 list-group">
                   <a href="#aperitivos" class="list-group-item list-primary list-group-item-warning">Aperitivos </a>
                   <a href="#bebidas" class="list-group-item list-group-item-info">Bebidas</a>
                   <a href="#combos" class="list-group-item list-group-item-success">Combos</a>
                </div>

                    <div class="carousel-holder col-md-8">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image img img-reponsive" src="Comida/comida_1-1600x900.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image img img-reponsive " src="Comida/comida_2-1600x900.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image img img-reponsive" src="Comida/comida_3-1600x900.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image img img-reponsive" src="Comida/comida_4-1600x900.jpg" alt="">
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
                   <hr>
  
<div class="container">
 <h2 id="aperitivos" class="text text-center comida">Aperitivos</h2>
  <hr>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">DONAS</div>
        <div class="panel-body"><img src="Comida/donas.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:50.00</div>


      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">POLLO FRITO</div>
        <div class="panel-body"><img src="Comida/pollo%20frito.jpg" class="img-responsive img-round" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:100.00 EL SERVICIO</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">HAMBURGUESA</div>
        <div class="panel-body"><img src="Comida/hamburgesas.jpg" class="img-responsive img-round"  alt="Image" ></div>
        <div class="panel-footer">POR SOLO RD$:100.00</div>
      </div>
    </div>
  </div>
</div>
 <hr>

<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4 col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">PAPAS FRTITAS</div>
        <div class="panel-body"><img src="Comida/papas%20fritas.jpg" class="img-responsive" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:75.00 LA RACION</div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-4 col-md-4 col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ENSALADA DE FRUTAS</div>
        <div class="panel-body"><img src="Comida/ensalada%20frutas.jpg" class="img-responsive" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:100.00 LA RACION</div>
      </div>
    </div>
    <div class="col-sm-4 col-sm-4 col-md-4 col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ENSALADA DE VEGETALES</div>
        <div class="panel-body"><img src="Comida/ensalada%20vegetale.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:100.00 LA RACION</div>
      </div>
    </div>
  </div>
</div>
  <hr>

<div class="container">
  <h2 id="bebidas" class="text text-center comida">Bebidas</h2>
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">SODA VARIADO</div>
        <div class="panel-body"><img src="Comida/soda.png" class="img-responsive" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:25.00 EL VASO</div>
      </div>
      
    </div>
    <div class="col-sm-4 col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">BEBIDA DE CHOCOLATE</div>
        <div class="panel-body"><img src="Comida/bebida-choco.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:75.00</div>
      </div>
    </div>
    
    <div class="col-sm-4 col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">COCTELES</div>
        <div class="panel-body"><img src="Comida/cocteles.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:75.00</div>
      </div>
    </div>
  </div>
</div>
    <hr>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">HELADOS</div>
        <div class="panel-body"><img src="Comida/helados.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:50.00</div>
      </div>
      
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">TE</div>
        <div class="panel-body"><img src="Comida/te.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:35.00</div>
        </div>
      </div>
    
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">BATIDOS VARIADOS</div>
        <div class="panel-body"><img src="Comida/Batidos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">DESDE RD$:75.00
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="3BDZWA845ARU2">
      <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
        </div>
      </div>
    </div>
  </div>
  </div>
     <hr>
<div class="container">
  <h2 id="combos" class="text text-center comida">Combos</h2>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MEGA COMBO</div>
        <div class="panel-body"><img src="Comida/combo%201.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:300.00</div>
      </div>
      
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">COMBO PEQUEÑO</div>
        <div class="panel-body"><img src="Comida/combo%202.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$ 150.00</div>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">PAPAS + HAMBURGUESA</div>
        <div class="panel-body"><img src="Comida/combo3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">POR SOLO RD$:150.00</div>
      </div>
    </div>
  </div>
</div>
<hr>

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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptate labore, distinctio, dolor eum est cupiditate beatae iste deleniti explicabo rem debitis sapiente aliquid molestias in, ullam. Vitae, accusamus, maiores.</p>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
				<div class="row">
					<div class="col-sm-6">
						<ul id="font-end">                        
							<h3>Cinemaster</h3>
							<p>Cinemaster</p>
							<li>Cinemaster</li>
							<li>Cinemaster</li>
							<br>
							<p>Cinemaster</p>
							<li>Cinemaster</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<br>
						<br class="hidden-xs">
						<br class="hidden-xs">
						
						<ul id="back-end">
							<p>Cinemaster</p>
							<li>Cinemaster</li>
							<li>Cinemaster</li>
						</ul>
					
					</div>
				</div>
			
				
			</div>
		</div>
       </div>
   </footer>
</body>
</html>