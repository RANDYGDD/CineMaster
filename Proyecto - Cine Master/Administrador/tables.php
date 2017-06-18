<?php
   session_start();
  if(empty($_SESSION['admin'])){
      header("Location:Login.php");
  }


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador <?php echo $_SESSION['admin'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
               <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Cinemaster Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['admin']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer a las 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['admin']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer A las  4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['admin']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Ayer a las  4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Leer todos los nuevos mensajes</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['admin']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Login.php"><i class="fa fa-fw fa-power-off"></i>Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                       <li>
                          <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                      </li>
                    <li class="active">
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i>Datos usuarios </a>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i>Publicar <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                            <li>
                                <a href="forms.php?nombre=reseña"><i class="fa fa-fw fa-glyphicon glyphicon-pencil"></i>Reseña</a>
                            </li>
                            <li>
                                <a href="forms.php?nombre=promocion"><i class="fa fa-fw fa-glyphicon glyphicon-pencil"></i>Promocion</a>
                            </li>
                             <li>
                                <a href="forms.php?nombre=nuevapelis"><i class="fa fa-fw fa-glyphicon glyphicon-pencil"></i>Nueva Pelicula</a>
                            </li>
                             <li>
                                <a href="forms.php?nombre=comida"><i class="fa fa-fw fa-glyphicon glyphicon-pencil"></i>Comida</a>
                            </li>
                        </ul>
                    </li>
                         <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-desktop"></i>Consultar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                             <li>
                                <a href="consulta.php?consulta=taquilla"><i class="fa fa-fw fa-desktop"></i>Taquillas</a>
                            </li>
                               <li>
                                <a href="consulta.php?consulta=horario"><i class="fa fa-fw fa-desktop"></i>Horarios</a>
                            </li>
                            <li>
                                <a href="consulta.php?consulta=pelicula"><i class="fa fa-fw fa-desktop"></i>Peliculas</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tablas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tablas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="content-fluid">
                    <div class="row">
                        <div class="col-md-12">
<?php
include('conexion.php');
                            
$por_pagina = 10;
$num=0;
                            
$pagina_query = mysqli_query($conexion,"SELECT ID_USUARIO FROM usuarios");
$num=mysqli_num_rows($pagina_query);
$paginas = ceil( $num / $por_pagina);
$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina']: 1;
$start = ($pagina - 1) * $por_pagina;
             

$query = mysqli_query($conexion,"SELECT * FROM usuarios LIMIT $start, $por_pagina");


    echo "  <div class='table-responsive'>
          <table class='table table-bordered table-hover table-striped'>
              <thead>
                <tr>
                    <th>ID USUARIO</th>
                    <th>NOMBRES</th>
                    <th>CORREO</th>
                    <th>USUARIOS</th>
                    <th>CONTRASEÑA</th>
                    <th>SEXO</th>
                   <th>ESTADO</th>
              </tr>
           </thead>
    <tbody>";

while($row = mysqli_fetch_assoc($query)){

	$id_user = $row['ID_USUARIO'];
	$nombres = $row['NOMBRES_U'];
    $correo=$row['CORREO_U'];
	$usuarios= $row['USER_NAME'];
	$key= $row['PASS_USER'];	
    $sexo = $row['SEXO'];	
    $estado = $row['ESTADO_U'];	
    
          
                              
                               
                            echo    "   <tr>
                                        <td>$id_user</td>
                                        <td>$nombres</td>
                                        <td>$correo</td>
                                        <td>$usuarios</td>
                                        <td>$key</td>
                                        <td>$sexo</td>
                                        <td>$estado</td>
                                    </tr>";
                                
                                
                               
                       
}
   echo "</tbody> 
        </table>
          </div>";

    
$anterior = $pagina - 1;
$siguiente = $pagina + 1;

echo "<nav aria-label='Page navigation'>";
echo "<ul class='pagination'>";
if(!($pagina<=1)){
    
echo  "<li><a href='tables.php?pagina=$anterior' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";


}



if($paginas >= 1){


	for($x=1;$x<=$paginas;$x++){

		//echo ($x == $pagina) ? '<b><a href="?pagina='.$x.'">'." ".$x.'</a></b> ' : '<a href="?pagina='.$x.'">'." ".$x.'</a> '; 
        
      echo ($x == $pagina) ?  "<li class='active'><a href='?pagina=$x'>$x</a></li>"  :  "<li><a href='?pagina=$x'><b>$x</b></a></li>";
		
	}	

}
if(!($pagina>=$paginas)){

//echo "<a href='update.php?pagina=$siguiente'> Siguiente</a>";

    echo "<li><a href='tables.php?pagina=$siguiente' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";

}

echo   "</ul>";
echo  "</nav>";

echo "</center>";
                            
mysqli_close($conexion);


?>     
                            
                            
                            
                        </div>
                        
                        
                    </div>
                    
                    
                </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
