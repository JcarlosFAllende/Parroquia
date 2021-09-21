<?php
require('../conexion.php');
$ID=$_GET['ID'];
$db_nombre = $_POST['nombre_parroquia'];
$db_municipio = $_POST['municipio'];
$db_direccion = $_POST['direccion'];
$db_cp = $_POST['cp'];
$Estado=$_POST['Activo'];

if ($Estado=="NAC") {
	$est=0;
}else{
	$est=1;
}



//$sql = "INSERT INTO sacerdote (NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, ESPECIALIDAD, FECHA_NAC, ACTIVO) 
//VALUES ('$db_nombre_sacer','$db_a_paterno_sacer','$db_a_materno_sacer','$db_especialidad_sacer','$db_f_nac','1')";

$sql1="UPDATE parroquia SET 
NOMBRE_PARROQUIA='".$db_nombre."',
MUNICIPIO='".$db_municipio."',
DIRECCION='".$db_direccion."',
CP='".$db_cp."',
ACTIVO=".$est."
WHERE ID_PARROQUIA=".$ID.";";

echo $sql1;


if($mysqli->query($sql1) == TRUE){
    echo "<script>REGISTRO MODIFICADO CON EXITO</script>";
    echo "<script>window.open('../parroquia.php','_self')</script>";
}else{
	echo "<script>ERROR AL MODIFICAR EL REGISTRO, INTENTE DE NUEVO</script>";	
	echo "<script>window.open('../parroquia.php','_self')</script>";
}


?>