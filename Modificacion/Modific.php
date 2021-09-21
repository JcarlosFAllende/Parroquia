<?php
include('../conexion.php');

$ID = $_GET['ID'];


$db_nombre = $_POST['nombre'];
$db_a_paterno = $_POST['a_paterno'];
$db_a_materno = $_POST['a_materno'];
$db_f_nac = $_POST['f_nac'];
$db_cbx_identificacion = $_POST['cbx_identificacion'];
$db_num_iden = $_POST['num_iden'];
$db_f_sac = $_POST['f_sac'];
$db_cbx_sacra = $_POST['cbx_sacra'];
$db_cbx_parro = $_POST['cbx_parro'];
$db_cbx_sacer = $_POST['cbx_sacer'];





$sql1="UPDATE persona_sacramento SET 
NOMBRE='".$db_nombre."',
PRIMER_APELLIDO='".$db_a_paterno."',
SEGUNDO_APELLIDO='".$db_a_materno."',
FECHA_NAC=".$db_f_nac.",
ID_IDENTIFICACION=".$db_cbx_identificacion.",
NUM_IDEN=".$db_num_iden.",
FECHA_SACRAMENTO=".$db_f_sac.",
ID_SACRAMENTO=".$db_cbx_sacra.",
ID_PARROQUIA=".$db_cbx_parro.",
ID_SACERDOTE=".$db_cbx_sacer."
WHERE ID_PERSONA_SACRAMENTO=".$ID.";";


//echo $sql1;

if($mysqli->query($sql1) == TRUE){
    echo "<script>REGISTRO MODIFICADO CON EXITO</script>";
    echo "<script>window.open('../constancia.php','_self')</script>";
}else{
	echo "<script>ERROR AL MODIFICAR EL REGISTRO, INTENTE DE NUEVO</script>";	
	echo "<script>window.open('../constancia.php','_self')</script>";
}



/*


$query = "SELECT SUBSTRING(SACRAMENTO,1,5) AS NOM_FOL FROM SACRAMENTOS WHERE ID_SACRAMENTO=$db_cbx_sacra";

	$resultado = $mysqli->query($query);
	$filas = ($resultado->num_rows);
	//echo $query;
		if( $filas <> 0)
		{
			while ($row = $resultado->fetch_assoc())
				{
				$NOM_FOL = $row['NOM_FOL'];
				}
			}
	    else
		    {
	    	echo "Error en busqueda de folios NOMBRE";
		    }



$query2 = "SELECT (COUNT(*)) + 1 AS NUM_FOL FROM `persona_sacramento` WHERE ID_SACRAMENTO=$db_cbx_sacra";

	$resultado2 = $mysqli->query($query2);
	$filas2 = ($resultado2->num_rows);
	//echo $query;
		if( $filas2 <> 0)
		{
			while ($row = $resultado2->fetch_assoc())
				{
				$NUM_FOL = $row['NUM_FOL'];
				}
			}
	    else
		    {
	    	echo "Error en busqueda de folios NUMERO";
		    }

		    $folio=$NOM_FOL."-".$NUM_FOL;

//NOMBRE -> nombre
//PRIMER_APELLIDO -> a_paterno
//SEGUNDO_APELLIDO ->a_materno
//FECHA_NAC -> f_nac
//ID_IDENTIFICACION -> cbx_identificacion
//NUM_IDEN -> num_iden
//FECHA_SACRAMENTO -> f_sac
//ACTIVO -> (1 por defecto)
//FOLIO_CONSTANCIA -> (Generar)
//ID_SACRAMENTO -> cbx_sacra
//ID_PARROQUIA -> cbx_parro
//ID_SACERDOTE -> cbx_sacer
//ARCHIVO -> archivo
//Archivo


$nombreArchivo = $_FILES['archivo']['name'];
$nombreArchivoExt = explode(".", $nombreArchivo);
$extensionArchivo = strtolower(end($nombreArchivoExt));

	if ($extensionArchivo=="pdf")
	{ //Validar Extension
							
		//Guardar pdf
		$directorio = "constancias/";
		$n_archivo=$folio;
		$archivo = $directorio . $n_archivo;
		move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo.".pdf");//Mover archivo temporal a la carpeta




			




			if ($mysqli->query($sql) === TRUE)
			{
			    echo "<script>window.open('constancia.php','_self')</script>";
			}
			else
			{
				$html.= "Error Al Insertar PERSONA ". $mysqli->error;;
			}


	}else{
		echo "No es un pdf";
	}


*/
?>