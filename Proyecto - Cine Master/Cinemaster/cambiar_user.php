<?php
   session_start();
   if(!isset($_SESSION['user'])){
        include("index.php");
   }

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Usuario</title>
  <link rel="icon" type="image/png" href="Img/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a class="navbar-brand" href="Blog2.php">Mi portal</a>
    </div>
  </div>
</nav>

<?php
$userErr=" ";
$n_user=" ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["usuario"])) {
    $userErr = "Usuario Requerido";
   } else {
    $n_user= test_input($_POST["usuario"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$n_user)) {
      $userErr = "Solo letras y espacios en blanco y numeros permitidos"; 
    }
    $valor=verificar($n_user);      
    if($valor==1){
              $userErr="Usuario existente";
         }
     if(strlen($n_user)<4){
         $userErr="Usuario debe contener minimo 4 caracteres";
     }
  }
    
  if($userErr==" "){
      $resultado=actualizar($n_user);
       if($resultado==1){
         echo "<h3 class='text text-warning'>Se actualizo su Usuario</h3>";
         header("Refresh:2;url=Login.php");
     }else{
         echo "<h3 class='text text-danger'>Error al cambiar su Usuario</h3>";
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

    
function verificar($n_user)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
     $n_user= mysqli_escape_string($conexion,$n_user);
     $stmt = mysqli_query($conexion, "SELECT * FROM usuarios WHERE USER_NAME='$n_user'");

if(mysqli_affected_rows($conexion)>0){  
    
mysqli_close($conexion); 
return 1;
}else{
mysqli_close($conexion);
 return 0;
    
}
          
    
}
    
function  actualizar($n_user)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
    
     $n_user= mysqli_escape_string($conexion,$n_user);
     $usuario=$_SESSION['user'];
     $stmt = mysqli_query($conexion, "UPDATE usuarios  SET USER_NAME='$n_user' where USER_NAME='$usuario'");



if(mysqli_affected_rows($conexion)>0){ 
    
mysqli_close($conexion); 
    
return 1;
}else{
    
mysqli_close($conexion);
 return 0;
      
    
}
    

    
}
    
    
?>
   
   
   <div class="container-fluid">
   <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <div class="row">
  <div class=" col-xs-12 col-sm-5  col-md-4  col-lg-4  col-sm-offset-4 col-md-offset-4  col-lg-offset-4 ">
  <div id="cabeza"> 
  <div class="form-group">
    <label for="usuario_a"  class="text text-success">Usuario Actual:</label>
    <input type="text" class="form-control" name="user_a" value=<?php echo $_SESSION['user'];?>>
</div>
  <div class="form-group">
    <label for="usuario"  class="text text-primary">Nuevo Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Nueva usuario">
    <span style="color:red;font-size: 15px;font-family:'comic sans ms'"><?php echo $userErr;?></span>
  </div>
    <button type="submit" class="btn btn-success">Cambiar</button><br><br>

 </div>
  </div>
  </div>
  </div>
  </form>
  </div>
  
</body>

</html>