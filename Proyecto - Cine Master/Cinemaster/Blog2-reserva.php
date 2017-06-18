<?php
  session_start();
  if(empty($_SESSION['user'])){
      header("Location:index.php");
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo $_SESSION['user'];?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="Img/icono.png">
      <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="CSS/bootstrap-social.css">
 <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" href="Recursos/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
  <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
  <script src="Recursos/js/bootstrap.min.js"></script>  

  <style>
      body{
          padding-top: 55px; 
      }
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
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
        <li class="active"><a href="#">Perfil<span class="sr-only">(current)</span></a></li>
        <li><a href="index.php#estrenos">Estrenos</a></li>
        <li><a href="tienda.php">Recientes</a></li>
      </ul>
<ul class="nav navbar-nav" role="tablist">
  <li role="presentation"><a href="Blog2.php?nombre=promocion">Promociones<span class="badge">4</span></a></li>
</ul>
          <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon glyphicon glyphicon-user"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cambiar.php">Cambiar contraseña</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="Todo.html" role="button">Políticas de usuario</a></li>
              <li role="separator" class="divider"></li>
            <li><a href="cambiar_user.php" role="button">Cambiar Usuario</a></li>
             <li role="separator" class="divider"></li>
              <li><a href="cerrar.php" role="button" >Cerrar sesión</a></li>
          </ul>
      <li><a></a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
</nav>
 </div>  
    </header>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <a><i class="fa fa-user aria-hidden='true' fa-5x"></i><a class="btn btn-success" role="button" data-toggle="modal" data-target="#myModal2"><?php echo $_SESSION['user']?></a>
      <br>
      <ul class="nav nav-pills nav-stacked">
       <br>
        <li class=""><a href="Blog2.php"><i class="fa fa-home aria-hidden='true' fa-5x" > </i> <span class="label label-primary">Inicio</span></a></li>
         <li class=""><a href="tienda.php"><i class="fa fa-film aria-hidden='true' fa-4x "></i><span class="label label-info">Películas</span></a></li>
        <li><a href="Mercado.php"><i class="fa fa-cutlery aria-hidden='true' fa-4x " ></i> <span class="label label-success">Comida</span></a></li>
        <li><a href="Blog2.php?boleta=ticket"><i class="fa fa-ticket aria-hidden='true' fa-4x"></i><span class="label label-danger">Ticket</span></a></li>
      </ul><br>
    </div>

<div class="col-sm-9">
<?php
include("conexion.php");
$por_pagina = 4;
$num=0;
    
if(isset($_GET['nombre'])){
         
$pagina_query = mysqli_query($conexion,"SELECT FECHA FROM promociones");
$num=mysqli_num_rows($pagina_query);
$paginas = ceil( $num / $por_pagina);
$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$start = ($pagina - 1) * $por_pagina;



$query = mysqli_query($conexion,"SELECT * FROM promociones LIMIT $start, $por_pagina");



echo "<h4><small>POST RECIENTES</small></h4>";

while($row = mysqli_fetch_assoc($query)){

	$fecha = $row['FECHA'];
	$descripcion = $row['DESCRIPCION'];
    $ambiente=$row['AMBIENTE'];
    
     echo "<hr>";
    echo  "<h2>$ambiente</h2>";
     echo "<h5><span class='glyphicon glyphicon-time'></span>Cinemaster: $fecha</h5>";
     echo "<div>$descripcion</div>";
     echo "<br><br>";
}	
         
         
}elseif(isset($_GET['boleta'])){
$us = $_SESSION['user'];
$query = mysqli_query($conexion, "SELECT U.USER_NAME USER, DATE_FORMAT(UP.FECHA_RESERVA,'%b %d %Y %h:%i %p') FECHA,  UP.COD_USER ID, DATE_FORMAT(PS.HORARIO,'%b %d %Y %h:%i %p') HORARIO FROM usuarios U, u_peliculas UP, peliculas P, p_salas PS
WHERE U.ID_USUARIO = UP.ID_USUARIO AND UP.ID_PELICULA = P.ID_PELICULA AND P.ID_PELICULA = PS.ID_PELICULA AND U.USER_NAME= '$us';");


echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-responsive'>";
 echo "<tr class='text text-primary'>
                      <th>Fecha</th>
                      <th>Usuario</th>
                      <th>Horario</th>
                      <th>ID</th>
                  </tr>";

while($row = mysqli_fetch_assoc($query)){

	$usuario = $row['USER'];
	$horario = $row['HORARIO'];
    $fecha=$row['FECHA'];
    $id=$row['ID'];

 echo "<tr>
    <td><span class='text text-success'><b>$fecha</b></span></td>
    <td><span class='text text-success'><b>$usuario</b></span></td>
    <td><span class='text text-success'><b>$horario</b></span></td>
    <td><span class='text text-success'><b>$id</b></span></td>
  </tr>";
                    
}	
  echo  "</table>"; 
  echo "</div>";
    
}
else{
$pagina_query = mysqli_query($conexion,"SELECT FECHA FROM noticias");
$num=mysqli_num_rows($pagina_query);
$paginas = ceil( $num / $por_pagina);
$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina']: 1;
$start = ($pagina - 1) * $por_pagina;

$query = mysqli_query($conexion,"SELECT AD.NOMBRES_ADMIN AUTOR, DATE_FORMAT(N.FECHA,'%d %b %Y') FECHA, N.TITULO, N.GENERO, N.NOTA FROM administradores AD, noticias N WHERE AD.ID_ADMIN = N.ID_ADMIN LIMIT $start, $por_pagina");


echo "<h4><small>POST RECIENTES</small></h4>";

while($row = mysqli_fetch_assoc($query)){

	$fecha = $row['FECHA'];
	$titulo = $row['TITULO'];
    $genero=$row['GENERO'];
	$autor = $row['AUTOR'];
	$nota = $row['NOTA'];	
    
     echo "<hr>";
    echo  "<h2>$titulo</h2>";
     echo "<h5><span class='glyphicon glyphicon-time'></span> Post by  $autor, $fecha</h5>";
     echo "<h5><span class='label label-danger'>$genero</span> <span class='label label-primary'>$genero</span></h5><br>";
     echo "<div>$nota</div>";
     echo "<br><br>";
}	

    
$anterior = $pagina - 1;
$siguiente = $pagina + 1;

echo "<nav aria-label='Page navigation'>";
echo "<ul class='pagination'>";
if(!($pagina<=1)){
    
echo  "<li><a href='Blog2.php?pagina=$anterior' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";


}



if($paginas >= 1){


	for($x=1;$x<=$paginas;$x++){

		//echo ($x == $pagina) ? '<b><a href="?pagina='.$x.'">'." ".$x.'</a></b> ' : '<a href="?pagina='.$x.'">'." ".$x.'</a> '; 
        
      echo ($x == $pagina) ?  "<li class='active'><a href='?pagina=$x'>$x</a></li>"  :  "<li><a href='?pagina=$x'><b>$x</b></a></li>";
		
	}	

}
if(!($pagina>=$paginas)){

//echo "<a href='update.php?pagina=$siguiente'> Siguiente</a>";

    echo "<li><a href='Blog2.php?pagina=$siguiente' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";

}

echo   "</ul>";
echo  "</nav>";

echo "</center>";
}
mysqli_close($conexion);


?>     
</div>
    

  </div>
</div>
 
 <div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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