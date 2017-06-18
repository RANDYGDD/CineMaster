<?php
  session_start();
  if(isset($_SESSION['admin'])){
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
  <link rel="stylesheet" href="css/Login.css"> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
      body{
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cc0000+4,cc0000+11,cc0000+29,cc6363+73 */
background: #cc0000; /* Old browsers */
background: -moz-linear-gradient(45deg,  #cc0000 4%, #cc0000 11%, #cc0000 29%, #cc6363 73%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  #cc0000 4%,#cc0000 11%,#cc0000 29%,#cc6363 73%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  #cc0000 4%,#cc0000 11%,#cc0000 29%,#cc6363 73%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc6363',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

      }
    
  </style>
   
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
      <a class="navbar-brand" href="#">CineMaster</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
         header("Location:index.php");
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
     $stmt = mysqli_query($conexion, "SELECT * FROM administradores where ADMIN_NAME='$usuario' and  CONTRASENA_A='$key'");



if(mysqli_affected_rows($conexion)>0){  
    session_start();
    $_SESSION['admin']=$usuario;
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

 </div>
  </div>
  </div>
  </div>
  </form>
  </div>
</body>
</html>