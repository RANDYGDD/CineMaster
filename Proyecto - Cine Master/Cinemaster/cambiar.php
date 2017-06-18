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
    <title>Cambiar Contrase&ntildea</title>
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
$userErr = $vpasserror=$npasserror=$npass2error=" ";
$vpass = $npass= $npass2 ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (empty($_POST["vpass"])){
    $vpasserror = "Ponga su Contrase&ntilde;a actual";
  } else {
    $vpass= test_input($_POST["vpass"]);
   
    if(strlen($vpass)<=4){
        $vpasserror="La Contrase&ntilde;a debe tener al menos 5 caracteres";
    }
    
      $result=verificar($vpass);
      if($result!=1){
          $vpasserror="La Contrase&ntilde;a es inválida";
      }
   
  }
    
if (empty($_POST["npass"])){
    $npasserror = "Ponga su nueva Contrase&ntilde;a";
  } else {
    $npass= test_input($_POST["npass"]);
   
    if(strlen($npass)<=4){
        $npasserror="La Contrase&ntilde;a debe tener al menos 5 caracteres";
    }
   
  }

if (empty($_POST["npass2"])){
    $npass2error = "Repita su nueva Contrase&ntilde;a";
  } else {
    $npass2= test_input($_POST["npass2"]);
    if($npass2!=$npass){
        $npass2error="Las Contrase&ntilde;a no coinciden";
    }
  }

      
if($vpasserror==" " && $npasserror==" " && $npass2error==" "){
     $resultado=actualizar($npass);
     if($resultado==1){
         echo "<h3 class='text text-warning'>Se actualizo su Contrase&ntilde;a</h3>";
         header("Refresh:2;url=Login.php");
     }else{
         echo "<h3 class='text text-danger'>Error al cambiar su Contrase&ntilde;a</h3>";
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

    
function verificar($vpass)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
    
$vpass= mysqli_escape_string($conexion,$vpass);
$salt='zakl05p';
$vpass=md5($vpass).$salt;
$usuario=$_SESSION['user'];
    


$stmt = mysqli_query($conexion, "SELECT USER_NAME , PASS_USER FROM usuarios  WHERE USER_NAME='$usuario' AND  PASS_USER='$vpass'");





if(mysqli_affected_rows($conexion)>0){  
    mysqli_close($conexion);  
      return 1;
}
    
 mysqli_close($conexion);
 return 0;
      
    
}
    
function  actualizar($npass)
{
include("conexion.php");
if (!$conexion) {
	trigger_error('mysqli Connection failed! ' . htmlspecialchars(mysqli_connect_error()), E_USER_ERROR);
}
    
     $npass= mysqli_escape_string($conexion,$npass);
     $usuario=$_SESSION['user'];
     $salt='zakl05p';
     $npass=md5($npass).$salt;
     $stmt = mysqli_query($conexion, "UPDATE usuarios  SET PASS_USER='$npass' where USER_NAME='$usuario'");



if(mysqli_affected_rows($conexion)>0){ 
    
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
    <label for="pwdv"  class="text text-success">Contrase&ntildea actual:</label>
    <input type="password" class="form-control" name="vpass" placeholder="Contrase&ntilde;a actual">
    <span style="color:red;font-size: 15px;font-family:'comic sans ms'"><?php echo $vpasserror;?></span>
  </div>
  <div class="form-group">
    <label for="pwd"  class="text text-primary">Nueva contrase&ntildea:</label>
    <input type="password" class="form-control" name="npass" placeholder="Nueva contrase&ntilde;a">
    <span style="color:red;font-size: 15px;font-family:'comic sans ms'"><?php echo $npasserror;?></span>
  </div>
<div class="form-group">
    <label for="pwd" class="text text-primary">Repita su nueva contrase&ntildea:</label>
    <input type="password" class="form-control" name="npass2" placeholder="Repita su nueva contrase&ntilde;a" >
    <span style="color:red;font-size: 15px;font-family:'comic sans ms'"><?php echo $npass2error;?></span>
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