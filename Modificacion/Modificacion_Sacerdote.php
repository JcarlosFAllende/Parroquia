<?php 
include '../templates/header.php'; 
$ID = $_GET['Valor'];
?>

<div class="content">
				<div class="container">
						<div class="col-sm-12">
							<h2>Modificacion <b>Sacerdote</b></h2>
						</div>

						<div class="col-sm-12">
							<div class="col-sm-6">
								<img src='../images/sacerdote.jpg' style="width: 100%;">
							</div>
							<div class="col-sm-6" >
								
	<?php							
	echo "<form method='POST' action='Modific_Sacerdote.php?ID=".$ID."' enctype='multipart/form-data'>"
	?>
									<h2>Datos generales</h2>
										<br>
										<label for="nombre" class="formulario-letra">Nombre:</label>
										<input type="text" name="nombre" id="nombre" class="form-control">
										<br>

										<label for="a_paterno" class="formulario-letra">Apellido Paterno:</label>
										<input type="text" name="a_paterno" id="a_paterno" class="form-control">	
										<br>

										<label for="a_materno" class="formulario-letra">Apellido Materno:</label>
										<input type="text" name="a_materno" id="a_materno" class="form-control">	
										<br>

										<label for="especialidad" class="formulario-letra">Especialidad:</label>
										<input type="text" name="especialidad" id="especialidad" class="form-control">	
										<br>

										<label for="f_nac" class="formulario-letra">Fecha de Nacimiento:</label>
										<input type="date" name="f_nac" id="f_nac" class="form-control">	
										
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