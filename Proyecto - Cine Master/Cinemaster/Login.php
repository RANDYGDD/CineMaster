<?php
  session_start();
  if(isset($_SESSION['user'])){
      session_destroy();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Seccion</title>
  <link rel="icon" type="image/png" href="Img/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/Login.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="CSS/bootstrap-social.css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script>
  <script src="Recursos/js/bootstrap.min.js"></script> 
   
   <!--
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  -->
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="nosotros.html">CineMaster</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="tienda.php">Peliculas en General</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Registro.php">Registrarse</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
$userErr = $passerror=" ";
$user= $password=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["password"])){
    $passerror = "Poner su contraseña";
  } else {
    $password = test_input($_POST["password"]);
   
    if(strlen($password)<=4){
        $passerror="contraseña invalida";
    }
   
  }
    
 if (empty($_POST["usuario"])) {
    $userErr = "Ponga su usuario";
   } else {
    $user = test_input($_POST["usuario"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$user)) {
      $userErr = "Usuario invalido"; 
    }
      
     if(strlen($user)<4){
         $userErr="Usuario invalido";
     }
     
     $result=verificar($user,$password);
     
     if($result==1){
         header("Location:Blog2.php");
     }else{
         $userErr='Usuario o Contraseña invalido';
         $passerror='Usuario o Contraseña invalido';
         
     }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data=htmlentities($data);
  return $data;
 
}

    
function verificar($usuario,$key)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
     
    
     $usuario= mysqli_escape_string($conexion,$usuario);
     $key=mysqli_escape_string($conexion,$key);
    
      $salt='zakl05p';
      $key=md5($key).$salt;
     $stmt = mysqli_query($conexion, "SELECT * FROM USUARIOS where USER_NAME='$usuario' and  PASS_USER='$key'");



if(mysqli_affected_rows($conexion)>0){  
    session_start();
    $_SESSION['user']=$usuario;
mysqli_close($conexion); 
    
return 1;
}
    
 mysqli_close($conexion);
 return 0;
      
    
}
    
?>
   
   
   <div class="container-fluid">
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <div class="row">
  <div class=" col-xs-12 col-sm-5  col-md-4  col-lg-4  col-sm-offset-4 col-md-offset-4  col-lg-offset-4 ">
  <div id="cabeza"> 
  <div class="form-group">
    <label for="Usuario">Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Usuario">
    <span style="color:yellow;font-size: 15px;font-family:'comic sans ms'"><?php echo $userErr;?></span>
  </div>
  <div class="form-group">
    <label for="pwd">Contraseña</label>
    <input type="password" class="form-control" name="password" placeholder="Contraseña">
    <span style="color:yellow;font-size: 15px;font-family:'comic sans ms'"><?php echo $passerror;?></span>
  </div>
    <button type="submit" class="btn btn-success pull-right">Iniciar Seccion</button><br><br>
  <buttom class="btn btn-default"><a href="Registro.php">Registrarme</a></buttom>

 </div>
  </div>
  </div>
  </div>
  </form>
  </div>

      <div class="container">
            <div class="row">
             <div class=" col-md-offset-5 col-md-4">  
                     <hr>
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
                   
             </div> 
              <hr>  
             
    </div>
<div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
          <a href="nosotros.html" class="footer">Sobre Nosotros</a>
           <a href="nosotros.html#contact" class="footer">Ayuda</a>
           <a href="Todo.html#EMPLEO" class="footer">Empleos</a>
           <a href="Todo.html#PRIVACIDAD" class="footer">Privacidad</a>
           <a href="Todo.html#COOKIES" class="footer">Cookies</a>
           <a href="Todo.html#POLITICAS" class="footer">Politicas</a>
           <a href="Todo.html#RESTRINCIONES" class="footer">Restriciones</a>
           <a href="#" class="footer">Desarrolladores</a>
           <a href="Todo.html#CONDICIONES" class="footer">Condiciones</a>
           <a href="Todo.html" class="footer">@2016 Cinemaster</a>
      </div>
      
  </div>
   </div>
</body>
</html>