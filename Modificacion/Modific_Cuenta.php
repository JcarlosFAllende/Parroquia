<?php
include('../conexion.php');

$ID = $_GET['Valor'];

$contrasenaold = $_POST['old_password'];
$contrasenanew = $_POST['password'];
$contrasenaconfir = $_POST['confirm_password'];

$sql1="SELECT count(*) AS Num FROM USUARIOS WHERE PASSWORD=".$contrasenaold." AND idUsuario=".$ID.";";
//echo $sql1;

$resultado=$mysqli->query($sql1);

$row = $resultado->fetch_assoc();
$numero = $row['Num'];

if ($numero = 1) {
	if($contrasenanew==$contrasenaconfir){
		$sqlu="UPDATE usuarios SET 
		Password='".$contrasenanew."'
		WHERE idUsuario=".$ID.";";

		if($mysqli->query($sqlu) == TRUE){
		    echo "<script>Contrasena reestablecida /n Su nueva contrasena es 12345</script>";
		    echo "<script>window.open('../constancia.php','_self')</script>";
		}else{
			echo "<script>ERROR AL REESTABLECER LA CONTRASENA</script>";	
			echo "<script>window.open('../account.php','_self')</script>";
		}
	}
}




/*

*/
?>