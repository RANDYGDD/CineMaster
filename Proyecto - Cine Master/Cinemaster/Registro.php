<?php
  session_start();
  if(isset($_SESSION['user'])){
      session_destroy();
  }
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <title>Formulario Registro</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="Img/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/estilos.css">
  <link rel="stylesheet" href="Recursos/css/bootstrap-theme.min.css">
  <script src="Recursos/Jquery/jquery-2.2.4.min.js"></script> 
  <script src="Recursos/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="CSS/bootstrap-social.css">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
     
   <!--
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="CSS/estilos.css" rel="stylesheet">
  <script src="custom.js"></script>
  -->
</head>
<body>

  
   <div class="container-fluid">  
<nav class="navbar navbar-inverse">
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
        <li class="active"><a href="#">Registro<span class="sr-only">(current)</span></a></li>
        <li><a href="tienda.php">Peliculas general</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right">
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      <li><a></a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
</nav>
 </div>  


<?php
$nameErr = $emailErr = $genderErr = $apellidoErr= $userErr = $passerror= $pass2error=" ";
$nombre = $email = $genero = $apellido= $user= $password= $password2="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["nombre"])) {
    $nameErr = "Nombre requerido";
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nameErr = "Solo letras y espacios en blanco permitidos";
    }
    
      if(strlen($nombre)<3){
          $nameErr="Nombre demasiado corto";
      }
  }
      if (empty($_POST["password"])){
    $passerror = "Contraseña requerida";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (strlen($password)<=4){
      $passerror= "La contraseña debe ser mayor a 4 digitos";
        
    }
  }
    
    if (empty($_POST["password2"])){
    $pass2error = "Campo requerido";
  } elseif(strlen($password)>4){
      $password2 = test_input($_POST["password2"]);
    if ($password!=$password2){
      $pass2error= "Las contraseñas no coinciden";
        
    }
  }
    
    
      if (empty($_POST["apellido"])) {
    $apellidoErr = "Apellido requerido";
  } else {
    $apellido = test_input($_POST["apellido"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) {
      $apellidoErr = "Solo letras y espacios en blanco permitidos"; 
    }
    
    if(strlen($apellido)<3){
          $nameErr="Apellido demasiado corto";
      }
  }
 if (empty($_POST["usuario"])) {
    $userErr = "Usuario Requerido";
   } else {
    $user = test_input($_POST["usuario"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$user)) {
      $userErr = "Solo letras y espacios en blanco y numeros permitidos"; 
    }
       $valor=verificar($user,0);
      
        if($valor==1){
              $userErr="Usuario existente";
         }
     if(strlen($user)<4){
         $userErr="Usuario debe contener minimo 4 caracteres";
     }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email requerido";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato invalido"; 
    }
      
    $valor=verificar($email,1);
      
        if($valor==1){
              $emailErr="Email Registrado previamente";
         }
  }

  if (empty($_POST["genero"])) {
    $genderErr = "Genero requerido";
  } else {
    $genero = test_input($_POST["genero"]); 
      
}
   
   if($nameErr==" " && $apellidoErr==" " && $emailErr==" " && $genderErr==" " && $passerror==" " && $pass2error==" "){
        insertar($nombre,$apellido,$email,$user,$password,$genero); 
        header("Location:Blog2.php");
   }
    
  }  
        

    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data=htmlentities($data);
  return $data;
 
}

function verificar($data,$num)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
    
     $data= mysqli_escape_string($conexion,$data);
if($num==1){
    $stmt = mysqli_query($conexion, "SELECT * FROM USUARIOS where CORREO_U ='$data'");
    
}else{
     $stmt = mysqli_query($conexion, "SELECT * FROM USUARIOS where USER_NAME ='$data'");
}




if(mysqli_affected_rows($conexion)>0){  
    mysqli_close($conexion);  
      return 1;
}
    
 mysqli_close($conexion);
 return 0;
      
    
}
    
    
function insertar($nombre,$apellido,$correo,$usuario,$contrasena,$sexo)
{
include("conexion.php");
$null=null;
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}


$stmt = mysqli_prepare($conexion, "INSERT INTO USUARIOS (ID_USUARIO, NOMBRES_U, APELLIDOS_U, CORREO_U, USER_NAME, PASS_USER, SEXO) VALUES (?, ?, ?,?,?,?,?);");

if ($stmt === false) {
	trigger_error('Statement failed! ' . htmlspecialchars(mysqli_error($conexion)), E_USER_ERROR);
}
 $salt='zakl05p';
 $contrasena=md5($contrasena).$salt;
$bind = mysqli_stmt_bind_param($stmt, "sssssss",$null,$nombre, $apellido, $correo,$usuario,$contrasena,$sexo);

if ($bind === false) {
	trigger_error('Bind param failed!', E_USER_ERROR);
}

$exec = mysqli_stmt_execute($stmt);

if ($exec === false) {
	trigger_error('Statement execute failed! ' . htmlspecialchars(mysqli_stmt_error($stmt)), E_USER_ERROR);	
}

 session_start();
    $_SESSION['user']=$usuario;

mysqli_stmt_close($stmt);

mysqli_close($conexion);

}
    
    
?>


<div class="container-fluid">
  <div class="row">
           <div class="col-md-4 col-xs-12  col-sm-8 col-md-offset-2">  
                 <h6 class="text text-danger">Siguenos:</h6>
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
  <div class=" col-xs-12 col-sm-5  col-md-4  col-lg-4  col-sm-offset-4 col-md-offset-4  col-lg-offset-4 ">
    <div id="cabeza">
    <div class="jumbotron">
   <h3>CineMaster</h3>
   </div>
  <form  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="formulario" >
     <div class="row">
         <div class="col-md-6">
    <div class="form-group">
      <label for="Nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder=" Nombre" value="<?php echo $nombre?>">
      <span class="error"> <?php echo $nameErr;?></span>
    </div>
      </div>
       <div class="col-md-6">
     <div class="form-group">
      <label for="Apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $apellido?>">
      <span class="error"> <?php echo $apellidoErr;?></span>
      </div>
    </div>
     </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Introduzca su Email" value="<?php echo $email ?>">
      <span class="error"><?php echo $emailErr;?></span>
    </div>
    <div class="form-group">
      <label for="Usuario">Usuario</label>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario" value="<?php echo $user?>">
      <span class="error"><?php echo $userErr;?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="contra"  name="password" placeholder="Introduzca su contraseña">
      <span class="error"> <?php echo $passerror;?></span>
    </div>
    <div class="form-group">
      <label for="pwd">Repita su Contraseña:</label>
      <input type="password" class="form-control" id="contra2" name="password2" placeholder="Repita Su Contraseña">
      <span class="error"><?php echo $pass2error;?></span>
      <div class="form-group">
          <label for="sexo">Sexo:</label>
           <select class="form-control" name="genero">
               <option></option>
               <option value="Masculino">Masculino</option>
               <option value="Femenino">Femenino</option>
           </select>
           <span class="error"><?php echo $genderErr?> </span>
    </div>
       <div id="repuesta" style="display:none;"></div>
     <div class="form-group">
         <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
   
  </form>
  </div>
  </div>
</div>
    </div>
   
    <div class="row">
      <div class="col-md-12 col-ms-12 col-xs-12">
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
