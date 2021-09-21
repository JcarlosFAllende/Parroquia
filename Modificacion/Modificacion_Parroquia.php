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
								<img src='../images/parroquia.jpg' style="width: 100%;">
							</div>
							<div class="col-sm-6" >
								
								
	<?php							
	echo "<form method='POST' action='Modific_Parroquia.php?ID=".$ID."' enctype='multipart/form-data'>"
	?>
									<h2>Datos generales</h2>
										<br>
										<label for="nombre_parroquia" class="formulario-letra">Nombre Parroquia:</label>
										<input type="text" name="nombre_parroquia" id="nombre_parroquia" class="form-control">
										<br>

										<label for="municipio" class="formulario-letra">Municipio:</label>
										<input type="text" name="municipio" id="municipio" class="form-control">	
										<br>

										<label for="direccion" class="formulario-letra">Dirección:</label>
										<input type="text" name="direccion" id="direccion" class="form-control">	
										<br>

										<label for="cp" class="formulario-letra">Codigo Postal:</label>
										<input type="text" name="cp" id="cp" class="form-control">	
										<br>	
										
										<br>

										<select name="Activo" id="Activo" class="form-control">
											<option value="1">Activo</option>
											<option value="N0">No Activo</option>
										</select>

										<br>
										<input type="submit" type="button" name="login" class="btn btn-primary" value="Guardar">
								</form>
								
								
							</div>
						</div>
				</div>
			</div>
								