<?php
require('../conexion.php');
$ID=$_GET['ID'];
$db_nombre_sacer = $_POST['nombre'];
$db_a_paterno_sacer = $_POST['a_paterno'];
$db_a_materno_sacer = $_POST['a_materno'];
$db_especialidad_sacer = $_POST['especialidad'];
$db_f_nac = $_POST['f_nac'];
$Estado = $_POST['Activo'];
$html="";

if ($Estado=="NAC") {
	$est=0;
}else{
	$est=1;
}



//$sql = "INSERT INTO sacerdote (NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, ESPECIALIDAD, FECHA_NAC, ACTIVO) 
//VALUES ('$db_nombre_sacer','$db_a_paterno_sacer','$db_a_materno_sacer','$db_especialidad_sacer','$db_f_nac','1')";

$sql1="UPDATE sacerdote SET 
NOMBRE='".$db_nombre_sacer."',
PRIMER_APELLIDO='".$db_a_paterno_sacer."',
SEGUNDO_APELLIDO='".$db_a_materno_sacer."',
ESPECIALIDAD='".$db_especialidad_sacer."',
FECHA_NAC=".$db_f_nac.",
ACTIVO=".$est."
WHERE ID_SACERDOTE=".$ID.";";

//echo $sql1;


if($mysqli->query($sql1) == TRUE){
    echo "<script>REGISTRO MODIFICADO CON EXITO</script>";
    echo "<script>window.open('../sacerdote.php','_self')</script>";
}else{
	echo "<script>ERROR AL MODIFICAR EL REGISTRO, INTENTE DE NUEVO</script>";	
	echo "<script>window.open('../sacerdote.php','_self')</script>";
}


?>