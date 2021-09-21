<?php 
include '../templates/header.php'; 
$ID = $_GET['Valor'];
?>

<div class="content">
				<div class="container">
						<div class="col-sm-12">
							<h2>Modificar <b>Parroquia</b></h2>
						</div>

						<div class="col-sm-12">
							<div class="col-sm-6">
								<img src='../images/constancia.jpg' style="width: 100%;">
							</div>
							<div class="col-sm-6" >
	<?php							
	echo "<form method='POST' action='Modific.php?ID=".$ID."' enctype='multipart/form-data'>"
	?>
									<h2>Datos generales</h2>
										<br>
										<label for="nombre" class="formulario-letra">Nombre:</label>
										<input type="text" name="nombre" id="nombre" class="form-control">
										<br>

										<label for="a_paterno" class="formulario-letra">Primer Apellido:</label>
										<input type="text" name="a_paterno" id="a_paterno" class="form-control">	
										<br>

										<label for="a_materno" class="formulario-letra">Segundo Apellido:</label>
										<input type="text" name="a_materno" id="a_materno" class="form-control">	
										<br>

										<label for="f_nac" class="formulario-letra">Fecha de Nacimiento:</label>
										<input type="date" name="f_nac" id="f_nac" class="form-control">	
										<br>

										<label for="cbx_identificacion" class="formulario-letra">Tipo de Identificación:</label>
										<select name="cbx_identificacion" id="cbx_identificacion" class="form-control">
											<?php

												$query = "SELECT * FROM IDENTIFICACION";

													$resultado = $mysqli->query($query);
													$filas = ($resultado->num_rows);
													//echo $query;

													if( $filas <> 0)
													{
														while ($row = $resultado->fetch_assoc())
														{
															$ID_IDEN = $row['ID_IDENTIFICACION'];
															$TIPO_IDEN = $row['TIPO_IDEN'];
															
															echo "<option value='".$ID_IDEN."'>".$TIPO_IDEN."</option>";
														}
													}
												    else
												    {
												    	echo "<option value='0'>NO EXISTEN TIPOS DE IDENTIFICACION</option>";
												    }

											?>
										</select>
										<br>

										<label for="num_iden" class="formulario-letra">Numero de Identificacion:</label>
										<input type="text" name="num_iden" id="num_iden" class="form-control">	
										<br>

										<label for="f_sac" class="formulario-letra">Fecha de Sacramento:</label>
										<input type="date" name="f_sac" id="f_sac" class="form-control">	
										<br>	


										<label for="cbx_sacra" class="formulario-letra">Sacramento:</label>
										<select name="cbx_sacra" id="cbx_sacra" class="form-control">
											<?php

												$query = "SELECT * FROM SACRAMENTOS";

													$resultado = $mysqli->query($query);
													$filas = ($resultado->num_rows);
													//echo $query;

													if( $filas <> 0)
													{
														while ($row = $resultado->fetch_assoc())
														{
															$ID_SACRA = $row['ID_SACRAMENTO'];
															$SACRAMENTO = $row['SACRAMENTO'];
															
															echo "<option value='".$ID_SACRA."'>".$SACRAMENTO."</option>";
														}
													}
												    else
												    {
												    	echo "<option value='0'>NO EXISTEN DATOS DE SACRAMENTOS</option>";
												    }

											?>
										</select>
										<br>


										<label for="cbx_parro" class="formulario-letra">Parroquia:</label>
										<select name="cbx_parro" id="cbx_parro" class="form-control">
											<?php

												$query = "SELECT * FROM PARROQUIA";

													$resultado = $mysqli->query($query);
													$filas = ($resultado->num_rows);
													//echo $query;

													if( $filas <> 0)
													{
														while ($row = $resultado->fetch_assoc())
														{
															$ID_PARROQUIA = $row['ID_PARROQUIA'];
															$NOMBRE_PARROQUIA = $row['NOMBRE_PARROQUIA'];
															
															echo "<option value='".$ID_PARROQUIA."'>".$NOMBRE_PARROQUIA."</option>";
														}
													}
												    else
												    {
												    	echo "<option value='0'>NO EXISTEN DATOS DE PARROQUIAS</option>";
												    }

											?>
										</select>
										<br>


										<label for="cbx_sacer" class="formulario-letra">Sacerdote:</label>
										<select name="cbx_sacer" id="cbx_sacer" class="form-control">
											<?php

												$query = "SELECT * FROM SACERDOTE";

													$resultado = $mysqli->query($query);
													$filas = ($resultado->num_rows);
													//echo $query;

													if( $filas <> 0)
													{
														while ($row = $resultado->fetch_assoc())
														{
															$ID_SACERDOTE = $row['ID_SACERDOTE'];
															$NOMBRE = $row['NOMBRE'];
															$A_P = $row['PRIMER_APELLIDO'];
															$A_M = $row['SEGUNDO_APELLIDO'];
															
															echo "<option value='".$ID_SACERDOTE."'>".$NOMBRE." ".$A_P." ".$A_M."</option>";
														}
													}
												    else
												    {
												    	echo "<option value='0'>NO EXISTEN DATOS DE SACERDOTES</option>";
												    }

											?>
										</select>
										
										<?php
										//echo $ID;

										/*
										<br>

										<label for="archivo" class="formulario-letra">Documento Escaneado:</label>
										<input type="file" name="archivo" id="archivo" class="form-control">	
										<br>	
										*/
										?>
										<br>
										<br>
										<input type="submit" type="button" name="login" class="btn btn-primary" value="Modificar">
								</form>
								
								
							</div>
						</div>
				</div>
			</div>