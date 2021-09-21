<?php
include('../conexion.php');

$ID = $_GET['Valor'];


$sql = "DELETE FROM `parroquia` WHERE ID_PARROQUIA='$ID'";


			if ($mysqli->query($sql) == TRUE)
			{
			    echo "<script>REGISTRO ELIMINADO CON EXITO</script>";
			    echo "<script>window.open('../parroquia.php','_self')</script>";
			}
			else
			{
				$html.= "ERROR AL ELIMINAR, INTENTELO DE NUEVO". $mysqli->error;
				echo "<script>window.open('../parroquia.php','_self')</script>";
			}

?>