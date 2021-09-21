<?php
include('../conexion.php');

$ID = $_GET['Valor'];


$sql = "DELETE FROM `persona_sacramento` WHERE ID_PERSONA_SACRAMENTO='$ID'";


			if ($mysqli->query($sql) == TRUE)
			{
			    echo "<script>REGISTRO ELIMINADO CON EXITO</script>";
			    echo "<script>window.open('../constancia.php','_self')</script>";
			}
			else
			{
				$html.= "ERROR AL ELIMINAR, INTENTELO DE NUEVO". $mysqli->error;
				echo "<script>window.open('../constancia.php','_self')</script>";
			}
/*
$db_a_paterno = $_POST['a_paterno'];
$db_a_materno = $_POST['a_materno'];
$db_f_nac = $_POST['f_nac'];
$db_cbx_identificacion = $_POST['cbx_identificacion'];
$db_num_iden = $_POST['num_iden'];
$db_f_sac = $_POST['f_sac'];
$db_cbx_sacra = $_POST['cbx_sacra'];
$db_cbx_parro = $_POST['cbx_parro'];
$db_cbx_sacer = $_POST['cbx_sacer'];



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


VALUES ('$db_nombre','$db_a_paterno','$db_a_materno','$db_f_nac','$db_cbx_identificacion','$db_num_iden','$db_f_sac','1','$folio','$db_cbx_sacra','$db_cbx_parro','$db_cbx_sacer')";


}else{
		echo "No es un";
	}



	if ($extensionArchivo=="pdf")
	{ //Validar Extension
							
		//Guardar pdf
		$directorio = "constancias/";
		$n_archivo=$folio;
		$archivo = $directorio . $n_archivo;
		move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo.".pdf");//Mover archivo temporal a la carpeta

*/



		

//(`NOMBRE`, `PRIMER_APELLIDO`, `SEGUNDO_APELLIDO`, `FECHA_NAC`, `ID_IDENTIFICACION`, `NUM_IDEN`, `FECHA_SACRAMENTO`, `ACTIVO`, `FOLIO_CONSTANCIA`, `ID_SACRAMENTO`, `ID_PARROQUIA`, `ID_SACERDOTE`) 

?>


