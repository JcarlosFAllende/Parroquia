<?php
session_start();
        $id_usuario_db=$_SESSION['idusuario'];
        $nombre = $_SESSION['nombre'];
        //require('../conexion.php');

        if (is_file("conexion.php")) {
        	include("conexion.php");
        }else{
        	include("../conexion.php");
        }

        //require('../conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="author" content="muni">
<?php
	if(is_file("../conexion.php")){
?>
	<title>Página de inicio</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="table.css">
    
   
    <script src="../js/jquery.min.js"></script>
    
    <script src="../js/bootstrap.min.js"></script>
	<?php
	}else{	
    ?>
    <title>Página de inicio</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="table.css">
    
   
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <?php
	}
    ?>

 	</head>
 	<body>

    
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<?php
				if (is_file("../conexion.php")) {
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				    <li><a href="../constancia.php">REGISTRO DE SACRAMENTADOS</a>
				    <li><a href="../sacerdote.php">SACERDOTES</a>
					<li><a href="../parroquia.php">PARROQUIA</a></li>
					<li><a href="../Imprimir.php">REPORTE</a>



					</li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,  <?php echo $nombre; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="../account.php">Mi cuenta</a> </li>
							<li class="divider"></li>
							<li> <a href="../logout.php">Salir</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<?php
				}else{
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				    <li><a href="constancia.php">REGISTRO DE SACRAMENTADOS</a>
				    <li><a href="sacerdote.php">SACERDOTES</a>
					<li><a href="parroquia.php">PARROQUIA</a></li>
					<li><a href="Imprimir.php">REPORTE</a>



					</li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,  <?php echo $nombre; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">Mi cuenta</a> </li>
							<li class="divider"></li>
							<li> <a href="logout.php">Salir</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<?php
				}


				//<li><a href="../info.php">CONFIRMACIÓN</a>
				//<li><a href="../Matrimonio.php">MATRIMONIO</a>
			?>
					
			
			<!--/.nav-collapse -->
		</div>
	</div>