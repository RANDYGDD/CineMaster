<?php
  session_start();
?>


<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pelicula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" type="image/png" href="Img/icono.png">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/mostrar.css">
    <link rel="stylesheet" href="CSS/bootstrap-social.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <script src="http://use.edgefonts.net/astloch:n4,n7:all.js"></script>
    <link rel="stylesheet" href="Recursos/css/bootstrap-theme.css">
    <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
    <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
    <script src="Recursos/js/bootstrap.min.js"></script> 

   <style>
.credit-card-div  span { padding-top:10px; }
.credit-card-div img { padding-top:30px; }
.credit-card-div .small-font { font-size:9px; }
.credit-card-div .pad-adjust { padding-top:10px; }
</style>
    
<?php 
$titulo= $genero= $duracion= $clasificacion= $idioma= $reparto= $dirimg= " ";
$sipnosis = $horario=" ";
        
include("conexion.php");
$nombre=mysqli_escape_string($conexion,$_GET['nombre']);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT DATE_FORMAT(PS.HORARIO, '%d %b %y %h:%i %p') HORARIO, PS.ID_SALA, P.ID_PELICULA,P.NOMBRE_P, P.GENEROS_P, P.PRECIO_P, P.DURACION_P, P.CLASIFICACION_P, P.CLASIFICACION_P, P.IDIOMAS_P, P.PROTAGONISTAS_P, P.DIR_PIC, P.SIPNOSIS_P FROM peliculas P, P_SALAS PS WHERE P.ID_PELICULA = PS.ID_PELICULA AND NOMBRE_P = '$nombre'";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id_pelicula=$row['ID_PELICULA'];
        $titulo=$row['NOMBRE_P'];
        $genero=$row['GENEROS_P'];
        $precio=$row['PRECIO_P'];
        $duracion=$row['DURACION_P'];
        $clasificacion=$row['CLASIFICACION_P'];
        $idioma=$row['IDIOMAS_P'];
        $reparto=$row['PROTAGONISTAS_P'];
        $dirimg=$row['DIR_PIC'];
        $sipnosis=$row['SIPNOSIS_P'];   
        $horario=$row['HORARIO'];
        $sala=$row['ID_SALA'];
    }
    
}else{
    echo 'hola munda';
}
    
    
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT S.ASIENTOS_S TOTAL, COUNT(UP.ID_PELICULA) RESERVADOS, (S.ASIENTOS_S - COUNT(UP.ID_PELICULA)) DISPONIBLES, P.NOMBRE_P FROM peliculas P, u_peliculas UP, usuarios U, p_salas PS, salas S
WHERE U.ID_USUARIO = UP.ID_USUARIO AND UP.ID_PELICULA = P.ID_PELICULA AND P.ID_PELICULA = PS.ID_PELICULA AND 
PS.ID_SALA = S.ID_SALA AND P.ID_PELICULA =$id_pelicula";
$result3 = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result3) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result3)) {
        $total=$row['TOTAL'];
        $reservados=$row['RESERVADOS'];
        
    }
    
}

  

if(isset($_SESSION['user'])){
    

$usuario=$_SESSION['user'];
$sql2="SELECT ID_USUARIO FROM usuarios  WHERE USER_NAME = '$usuario'";
$result2 = mysqli_query($conexion, $sql2);

if (mysqli_affected_rows($conexion) > 0) 
{
        while($row = mysqli_fetch_assoc($result2)) {
        $id_usuario=$row['ID_USUARIO'];

        }
    
} 
 

}
    
  if(isset($_GET['ID_PELICULA2']))
  {
      $id_pelicula=base64_decode($_GET['ID_PELICULA2']);
      $id_usuario=base64_decode($_GET['ID_USUARIO2']);
      $fecha=date('d-m-Y-H:i:s');
    
      $id_pelicula=mysqli_escape_string($conexion,$id_pelicula);
      $id_usuario=mysqli_escape_string($conexion,$id_usuario);
      $code_user=$id_pelicula.$id_usuario.$fecha;
      

$sql ="Insert into u_peliculas values($id_pelicula,$id_usuario,'$code_user','$fecha')";

if (mysqli_query($conexion, $sql)) {
 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
      
 header("Location:mostrar.php?nombre=$titulo");

}  

    
mysqli_close($conexion);

        
?>

   <title><?php echo $titulo?></title>

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
                <a class="navbar-brand" href="#">
                    <img class="img img-reponsive" src="Img/Logo-p.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="nosotros.html">Nosotros</a>
                    </li>
                    <li>
                        <a href="tienda.php">Peliculas</a>
                    </li>
                    <li>
                        <a href="Todo.html">Contactanos</a>
                    </li>
                </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
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
           
        </div>
    </nav>
    
    <!-- Page Content -->
    <div class="container">

        <?php
           if($sala==1){
               $total=300;
               
           }else{
               $total=250;
           }
        
        
        
        ?>
        <div class="row">
            <div class="col-md-offset-1 col-md-4">
                <img class="img-responsive img-rounded thumbnail" src="<?php echo $dirimg;?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="informacion">
                    <h3 class="info" style="font-family:arial; color: #eac600;"><strong>Película: </strong><?php echo $titulo;?></h3> 
                 <span class="info"><strong>Géneros:</strong> <?php echo $genero;?></span> 
                 <span class="info"><strong>Duración:</strong> <?php echo $duracion;?></span> 
                 <span class="info"><strong>Clasificación: </strong><?php echo $clasificacion;?></span>
                 <span class="info"><strong>Idiomas:</strong> <?php echo $idioma;?></span>
                 <span class="info"><strong>Protagonistas:</strong> <?php echo $reparto;?></span>
                 <span class="info"><strong>Disponibles:</strong> <?php echo $reservados.'/'.$total;?></span>
                 <?php
                  if(isset($_SESSION['user'])){
                       echo "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>Comprar Ticket</button>";
                  }else{
                      echo "<a href='login.php'> <button  class='btn btn-danger btn-sm'>Inciar Seccion Para Reservar</button></a>";
                  }
               
              ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo 'Pelicula: '.$titulo. '    ' . 'RD$: ' .$precio.'.00' ; ?></h4>
      </div>
      <div class="modal-body">
        <form action="#" class="credit-card-div">
<div class="panel panel-default" >
 <div class="panel-heading">
     
      <div class="row ">
              <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Introduzca el numero de su tarjeta" />
              </div>
          </div>
     <div class="row ">
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" > Mes Expiracion</span>
                  <input type="text" class="form-control" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >  Año expiracion</span>
                  <input type="text" class="form-control" placeholder="YY" />
              </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
                  <span class="help-block text-muted small-font" >  CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
              </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
         <i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>

         </div>
          </div>
     <div class="row ">
              <div class="col-md-12 pad-adjust">

                  <input type="text" class="form-control" placeholder="Nombre de la tarjeta" />
              </div>
          </div>
     <div class="row">
<div class="col-md-12 pad-adjust">
    <div class="checkbox">
    <label>
      <input type="checkbox" checked class="text-muted"> Acetos los terminos <a href="https://www.paypal.com/es/home"> enterese de los terminos</a>
    </label>
  </div>
</div>
     </div>
       <div class="row ">
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                    <?php $id_pelicula=base64_encode($id_pelicula); $id_usuario=base64_encode($id_usuario);  echo "<a href='mostrar.php?ID_PELICULA2=$id_pelicula&ID_USUARIO2=$id_usuario&nombre=$titulo' class='btn btn-primary' >Pagar Ahora</a>";   ?>
              </div>
          </div>
     
                   </div>
              </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
               
                </div>
            </div>
            
        </div>

        <hr>
        
    

        <div class="row">
            <div class="col-md-6">  
        <div class="panel panel-success">
                <div class="panel-heading text-center">Sipnosis</div>
              <div class="panel-body">
                  <p class="text text-success"><?php echo $sipnosis;?></p>
              </div>
            </div> 
             </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
  <!-- Default panel contents -->
                   <div class="panel-heading text-center"><h4>Horario</h4></div> 
                      <div class="table-responsive">
                       <table class="table table-bordered">
                         <tr>
                      <th>Fecha</th>
                     <th>Sala</th>
                  </tr>
  <tr>
    <td><?php echo $horario; ?><br><span class="danger"></span></td>
    <td><?php echo 'Sala '.$sala;  ?></td>
  </tr>
                      </table>
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