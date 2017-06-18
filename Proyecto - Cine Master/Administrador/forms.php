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

    <title>Administrador: <?php $_SESSION['admin'];?></title>

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
                    <li>
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
                                <a href="forms.php?nombre=peliculas"><i class="fa fa-fw fa-glyphicon glyphicon-pencil"></i>Nueva Pelicula</a>
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
                            <?php echo ucwords($_GET['nombre']);?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> formulasrios
                            </li>
                        </ol>
                    </div>
                </div>
    <?php
                
      if($_GET['nombre']=='reseña')
      {
           echo   "     <div class='row'>
                    <div class='col-lg-8 col-md-8 col-sm-6 col-xs-6'>

                        <form role='form'>

                            <div class='form-group'>
                                <label>Titulo</label>
                                <input type='text' class='form-control' name='titulo' placeholder='Titulo de la pelicula'>
                            </div>

                            <div class='form-group'>
                                <label>Genero</label>
                                <input class='form-control' placeholder='Genero de la Pelicula'>
                            </div>

                            <div class='form-group'>
                                <label>Reseña de la pelicula</label>
                                <textarea class='form-control' rows='3'></textarea>
                            </div>
                        
                             <center>
                             
                         <input type='submit' value='enviar' class='btn btn-primary'>
                         </center>
                    </div>
                </div>";
                
          
      }elseif($_GET['nombre']=='promocion'){
          
       echo '    <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">

                        <form role="form">
                          <div class="form-group">
                                <label>Descripcion de la promoción</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tipo de promoción</label>
                                <select class="form-control" name="ambito" id="">
                                   <option value="Pelicula">Pelicula</option>
                                    <option value="Comida">Comida</option>
                                </select>
                            </div>
                         <center>
                             
                         <input type="submit" value="enviar" class="btn btn-primary">
                         </center>
                    </div>
                </div>';
          
          
      }elseif($_GET['nombre']=='peliculas'){
          echo  ' <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Titulo</label>
                                <input type="text" class="form-control" name="titulo" placeholder="Titulo de la pelicula">
                            </div>

                            <div class="form-group">
                                <label>Años</label>
                                <input type="date" class="form-control"  name="anos" placeholder="Año de la Pelicula">
                            </div>
                            <div class="form-group">
                                <label>Duración</label>
                                <input type="text" class="form-control" name="duracion" placeholder="Duracion de la Pelicula">
                            </div>
                               <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control" name="precio" placeholder="Precio de la Pelicula">
                            </div>                            
                            <div class="form-group">
                                <label>Genero</label>
                                <input type="text" class="form-control" name="genero" placeholder="Genero de la Pelicula">
                            </div>
                              <div class="form-group">
                                <label>Clasificacion</label>
                               <select class="form-control" name="clasificacion" id="">
                                   <option value="A">A</option>
                                   <option value="B">B</option>
                                   <option value="C">C</option>
                                   
                               </select>
                            </div>
                            <div class="form-group">
                                <label>Idioma</label>
                               <select class="form-control" name="idioma" id="">
                                   <option value="Español">Espanol</option>
                                   <option value="Inlges">Inlges</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label>Protagonista</label>
                                <input type="text" class="form-control" name="prota" placeholder="Protagonista de la Pelicula">
                            </div>
                              <div class="form-group">
                                <label>Pais</label>
                                <input type="text" class="form-control" name="pais" placeholder="Pais de la Pelicula">
                            </div>
                            <div class="form-group">
                                <label>Imagen Nombre</label>
                                <input type="text" class="form-control" value="Img/" name="img" placeholder="Imagen de la Pelicula">
                            </div>


                            <div class="form-group">
                                <label>Sipnosis</label>
                                <textarea class="form-control" name="sipnosis" rows="3"></textarea>
                            </div>
                        
                             <center>
                             
                         <input type="submit" value="enviar" class="btn btn-primary">
                         </center>
                    </div>
                </div>';
                
               
          
          
          
          
          
      }elseif($_GET['nombre']=='comida'){
          
        echo     '  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Nombre de Comida</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre de la Comida">
                            </div>
                            <div class="form-group">
                                <label>Precio de comida  RD$:</label>
                               <input type="number" class="form-control"  name="comida" placeholder="Precio de la comida">
                            </div>
                            <div class="form-group">
                                <label>Imagen de la comida</label>
                                <input type="text" class="form-control" value="Comida/" name="imagen" placeholder="Imagen de la comida">
                            </div>                          
                             
                              <div class="form-group">
                                <label>Clasificacion de la comida</label>
                               <select class="form-control" name="clasificacion" id="">
                                   <option value="Aperitivo">Aperitivos</option>
                                   <option value="Bebidas">Bebidas</option>
                                   <option value="Combos">Combos</option>
                                   
                               </select>
                            </div>
                        
                             <center>
                             
                         <input type="submit" value="enviar" class="btn btn-primary">
                         </center>
                    </div>
                </div> ';           
          
          
      }
                

                
                
                
                
                
                
    ?>

             
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
