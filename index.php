<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/estilos/formularios.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<header class="container">
		<h2>Cabecera</h2>
	</header>
	<section class="container panel panel-default">
		<form id="" class="" method="post" action="clases/SaveForm.php">

			<!--***************************PASO 1*************************************************-->
			<fieldset class="steps">
				<legend class="panel-heading bg-primary">Cuestionario de seguimiento de egresados</legend>
				<div class=" panel panel-body">
					<div class="col-md-12">
						<p><h5>Por favor lea cuidadosamente y conteste este cuestionario de la siguiente manera, seg&uacuten sea el caso.</h5></p>
						<blockquote>

							<ul>
								<li></strong>1. En caso de preguntas cerradas, marque la que considere m&aacutens apropiada.</li>
								<li>2. En las preguntas de valoraci&oacuten se utiliza la escala del 1 al 5 en la que 1 es "Muy malo" y 5 es "Muy bueno".</li>
								<li>3. En los casos de preguntas abiertas dejamos un espacio para que usted escriba con mayuscula una respuesta (______).</li>
								<li>4. Al final anexamos un insiso para comentarios y sugerencias, le agradecemos anote ah&iacute lo que considere prudente para mejorar nuestro sistema educativo o bien los temas que, a su juicio, omitimos en el cuestionario.</li>
							</ul>
							<br>
							<h5><n>Gracias por su gentil colaboraci&oacuten</n></h5>
						</blockquote>
					</div>

				</div>
			</fieldset>
			<!--//////////////////////////FIN PASO 1//////////////////////////-->


			<!--****************************PASO 2************************************************-->
			<fieldset class="steps">
				<legend class="panel-heading bg-primary">
					Perfil Egresado
				</legend>
				<div class="row panel panel-body">
					<div class="form-group col-md-4">
						<input id="numeroControl" name="numeroControl" autocomplete="off" class="form-control input-numeros" type="text" maxlength="11"  ></input>
					</div>
					<div class="form-group col-md-8">
						<label for="numeroControl" class="label-control">*Ingrese su numero de control</label>
					</div>
				</div>

				<div class="row panel-body">
					<div class="form-group col-md-4">
						<label for="nombre">Nombre:</label>
						<input id="nombre" class="form-control" autocomplete="off" name="nombre" type="text" ></input>
					</div>
					<div class="form-group col-md-4">
						<label for="apPaterno">Apellido Paterno:</label>
						<input id="apPaterno" class="form-control"  autocomplete="off"name="apPaterno" type="text" ></input>
					</div>
					<div class="form-group col-md-4">
						<label for="apMaterno">Apellido Materno:</label>
						<input id="apMaterno" class="form-control" autocomplete="off" name="apMaterno" type="text" ></input>
					</div>
				</div>

				<div class="row panel-body">
					<div class="form-group col-md-6">
						<label for="fechaNacimiento">Fecha Nacimiento:</label>
						<input id="fechaNacimiento" class="form-control" autocomplete="off" name="fechaNacimiento" type="date" ></input>
					</div>
					<div class="form-group col-md-6">
						<label for="curp">	CURP:</label>
						<input id="curp" class="form-control" autocomplete="off" name="curp" maxlength="18"></input>
					</div>
				</div>

				<div class="row panel-body">
					<div class="form-group col-md-6">
						<label for="radioSexo">Sexo:</label>
						<div id="radioSexo">
							<label class="radio-inline"><input id="rdHombre" type="radio" name="rdSexo" value="M" >Hombre</label>
							<label class="radio-inline"><input id="rdMujer" type="radio" name="rdSexo" value="F"  >Mujer</label>
							<label class="radio-inline"><input id="rdDistinto" type="radio" name="rdSexo" value="D" >Distinto</label>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="radioSexo">Estado Civil:</label>
						<div id="radioSexo">
							<label class="radio-inline">
								<input id="rdSoltero" type="radio" name="rdEstadoCivil" value="S" >Soltero
							</label>
							<label class="radio-inline">
								<input id="rdCasado" type="radio" name="rdEstadoCivil" value="C" >Casado
							</label>
							<label class="radio-inline">
								<input id="rdOtro" type="radio" name="rdEstadoCivil" value="O" >Otro
							</label>
						</div>
					</div>
				</div>
				<fieldset class="panel panel-default">
					<legend class="panel-heading">Domicilio</legend>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-md-3">
								<label for="calle">Calle:</label>
								<input id="calle" class="form-control" autocomplete="off" name="calle" type="text" ></input>
							</div>
							<div class="form-group col-md-3">
								<label for="numero">Numero Casa:</label>
								<input id="numero" class="form-control input-numeros" autocomplete="off" name="numeroCasa" type="text" ></input>
							</div>
							<div class="form-group col-md-3">
								<label for="colonia">Colonia:</label>
								<input id="colonia" class="form-control"  autocomplete="off" name="colonia" type="text" ></input>
							</div>
							<div class="form-group col-md-3">
								<label for="CP">CP:</label>
								<input id="CP" class="form-control input-numeros" autocomplete="off" name="CP" type="text" maxlength="5" ></input>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-4">
								<label for="ciudad">Ciudad:</label>
								<input id="ciudad" class="form-control" autocomplete="off" name="ciudad" type="text" ></input>
							</div>
							<div class="form-group col-md-4">
								<label for="municipio">Municipio:</label>
								<input id="municipio" class="form-control" autocomplete="off" name="municipio" type="text" ></input>
							</div>
							<div class="form-group col-md-4">
								<label for="estado">Estado:</label>
								<input id="estado" class="form-control"  autocomplete="off" name="estado" type="text" ></input>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-4">
								<label for="celular">Celular:</label>
								<input id="celular" class="form-control" autocomplete="off" name="celular" type="tel" placeholder="#" ></input>
							</div>
							<div class="form-group col-md-4">
								<label for="correo">Correo Electronico:</label>
								<input id="correo" class="form-control" name="correo" type="email" placeholder="@" ></input>
							</div>
							<div class="form-group col-md-4">
								<label for="telCasa">Tel. Casa:</label>
								<input id="telCasa" class="form-control"  autocomplete="off" name="telCasa" type="tel" placeholder="#" ></input>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-md-4">
								<label for="slCarreraEgreso">Carrera de egreso y especialidad:</label>
								<select id="slCarreraEgreso" class="selectpicker show-tick" name="slCarreraEgreso" title="Escoge una" >
									<option>ISIC Redes y Sistemas Distribuidos</option>
									<option>IIN Calidad y Productividad</option>
									<option>IIAL Gestión Tecnológica Alimentaria</option>
									<option>IGEM Desarrollo de Negocios e Inovación  Tecnológica</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="fechaEgreso">Fecha Egreso:</label>
								<input id="fechaEgreso" class="form-control" name="fechaEgreso" type="date" ></input>
							</div>
							<div class="form-group col-md-4">
								<label for="radioTitulado">Titulado:</label>
								<div id="radioTitulado">
									<label class="radio-inline"><input id="rdTituladoSi" type="radio" name="rdTitulado" >Si</label>
									<label class="radio-inline"><input id="rdTituladoNo" type="radio" name="rdTitulado" >No</label>
								</div>
							</div>
						</div>

					</div>
				</fieldset>
				<fieldset class="panel panel-default">
					<legend class="panel-heading">Dominio Del Idioma Extranjero</legend>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-md-4">
								<label for="ingles">Ingles	:</label>
								<input id="ingles" class="form-control input-numeros" autocomplete="off" maxlength="3" name="ingles" type="tel" placeholder="%" ></input>
							</div>
							<div class="form-group col-md-3">
								<label for="slOtroIdioma" class="control-label">Otro idioma:</label>
								<br>
								<select id="slOtroIdioma" class="selectpicker show-tick" name="slOtroIdioma" multiple title="Escoge una" >
									<option>Frances</option>
									<option>Italiano</option>
									<option>portugués</option>
									<option>Aleman</option>
									<option>Ruso</option>
									<option>Noruego</option>
								</select>
								--->
							</div>

							<div class="form-group col-md-4">
								<label for="otroIdiomaPorcen">Porcentaje</label>
								<input id="otroIdiomaPorcen" class="form-control input-numeros" maxlength="3" name="otroIdiomaPorcen" type="tel" placeholder="%" ></input>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset class="panel panel-default">
					<legend class="panel-heading">Manejo de Paquetes Computacionales</legend>
					<div class="panel-body">
						<blockquote>
							Agregue detalles de paquetes que maneja*<br><br>
							<div class="row">
									<div class="form-group col-md-4">
										<input id="paquetesComp" class="form-control" name="paquetesComp" type="text" placeholder="Indique paquetes que maneja"  ></input>
									</div>
								</div>
							</div>
						</blockquote>

				</fieldset>

			</fieldset><!--//////////////////////////FIN PASO 2//////////////////////////-->
			<!--//////////////////////////FIN PASO 2//////////////////////////-->


			<!--****************************PASO 3************************************************-->
			<fieldset class="steps">
				<legend class="panel-heading bg-primary">Permanencia y disponibilidad de medios y recursos para el aprendizaje</legend>
				<div class="row panel panel-body">
					<blockquote style="font-size: 14px">
						<p style="font-style: italic;">
							<strong>
								Califique la calidad de la educacion profesional proporcionada por el personal docente, asi como el Plan de Estudios de la carrera que curso y las condiciones del plantel en cuanto infraestructura.
							</strong>
						</p>
						<div class="row filas">
							<label class="col-md-6">1.- Calidad de los docentes:</label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdCalidadDocente1" name="rdCalidadDocente" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdCalidadDocente2" name="rdCalidadDocente" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdCalidadDocente3" name="rdCalidadDocente" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdCalidadDocente4" name="rdCalidadDocente" value="MA" >Mala</label>
							</div>
					</div>

					<div class="row filas">
							<label class="col-md-6">2.- Plan de estudios:</label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdPlanEstudio1" name="rdPlanEstudio" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdPlanEstudio2" name="rdPlanEstudio" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdPlanEstudio3" name="rdPlanEstudio" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdPlanEstudio4" name="rdPlanEstudio" value="MA" >Mala</label>
							</div>
					</div>

					<div class="row filas">
							<label class="col-md-6">3.- Oportunidad de participar en proyectos de investigacion y desarrollo:</label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdProyectoInvestigacion1" name="rdProyectoInvestigacion" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdProyectoInvestigacion2" name="rdProyectoInvestigacion" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdProyectoInvestigacion3" name="rdProyectoInvestigacion" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdProyectoInvestigacion4" name="rdProyectoInvestigacion" value="MA" >Mala</label>
							</div>
					</div>

					<div class="row filas">
							<label class="col-md-6">4.- Enfasis que le prestaba a la investigacion dentro del proceso de enseñanza:</label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdEnfasisInvestigacion1" name="rdEnfasisInvestigacion" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdEnfasisInvestigacion2" name="rdEnfasisInvestigacion" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdEnfasisInvestigacion3" name="rdEnfasisInvestigacion" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdEnfasisInvestigacion4" name="rdEnfasisInvestigacion" value="MA" >Mala</label>
							</div>
					</div>

					<div class="row filas">
							<label class="col-md-6">5.- Satisfaccion con las condiciones de estudio (infraestructura):</label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdSatisfacionCondiciones1" name="rdSatisfacionCondiciones" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdSatisfacionCondiciones2" name="rdSatisfacionCondiciones" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdSatisfacionCondiciones3" name="rdSatisfacionCondiciones" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdSatisfacionCondiciones4" name="rdSatisfacionCondiciones" value="MA" >Mala</label>
							</div>
					</div>

					<div class="row filas">
							<label class="col-md-6">6.- Experiencia obtenida a traves de la residencia profesional: </label>
							<div class="col-md-6">
								<label class="radio-inline"><input type="radio" id="rdExperienciaObtenida1" name="rdExperienciaObtenida" value="MB" >Muy Buena</label>
								<label class="radio-inline"><input type="radio" id="rdExperienciaObtenida2" name="rdExperienciaObtenida" value="BU" >Buena</label>
								<label class="radio-inline"><input type="radio" id="rdExperienciaObtenida3" name="rdExperienciaObtenida" value="RE" >Regular</label>
								<label class="radio-inline"><input type="radio" id="rdExperienciaObtenida4" name="rdExperienciaObtenida" value="MA" >Mala</label>
							</div>
					</div>
					</blockquote>

				</div>


			</fieldset><!--//////////////////////////FIN PASO 3//////////////////////////-->
			<!--//////////////////////////FIN PASO 3//////////////////////////-->


			<!--****************************PASO 4*************************************************-->
			<fieldset class="steps">
				<legend class="panel-heading bg-primary">Ubicación Laboral</legend>
				<div class="panel panel-body">
					<div class="row" style="border-bottom: solid 2px #ccc; margin-bottom: 20px">
							<label class="col-md-4">1.- Actividad a la que se dedica actualmente:</label>
							<div class="col-md-8">
								<label class="radio-inline"><input class="rdUbicacionLaboral" type="radio" id="rdTrabaja" name="rdActividad" value="Trab" >Trabaja</label>
								<label class="radio-inline"><input class="rdUbicacionLaboral" type="radio" id="rdEstudia" name="rdActividad" value="Estu" >Estudia</label>
								<label class="radio-inline"><input class="rdUbicacionLaboral" type="radio" id="rdEstudiaTrabaja" name="rdActividad" value="EYT" >Estudia y Trabaja</label>
								<label class="radio-inline"><input class="rdUbicacionLaboral" type="radio" id="rdNoEstudia" name="rdActividad" value="NENT">No estudia ni Trabaja</label>
							</div>
					</div>

					<!--ESTUDIA PANEL-->
					<fieldset class="panel-default" id="panelEstudia" style="display:none">
					<legend class="panel-heading">Estudio</legend>
						<div class="panel-body">
							<fieldset class="panel panel-default">
							<legend class="panel-heading">Si Estudia, indicar si es:</legend>
								<div class="panel-body">
									<div class="panel-body panel panel-default">
											<div class="row">
												<div class="form-group text-center col-md-3">
													<label class="radio-inline"><input type="radio" id="rdEspecialidad" name="rdQueEstudia" value="Esp" >Especialidad</label>
												</div>
												<div class="form-group text-center col-md-3">
													<label class="radio-inline"><input type="radio" id="rdMaestria" name="rdQueEstudia" value="Mae" >Maestria</label>
												</div>
												<div class="form-group text-center col-md-3">
													<label class="radio-inline"><input type="radio" id="rdDoctorado" name="rdQueEstudia" value="Doc" >Doctorado</label>
												</div>
												<div class="form-group text-center col-md-3">
													<label class="radio-inline"><input type="radio" id="rdIdiomas" name="rdQueEstudia" value="Idi" >Idiomas</label>
												</div>
											</div>
										</div>

										<div class="panel-body panel panel-default">
											<div class="row">
												<div class="form-group text-center col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<label class="radio-inline">
																<input type="radio" id="otroEstudio" name="rdQueEstudia" >Otra:
															</label>
														</span>
														<input type="text" id="txOtroEstudio" name="rdQueEstudia" class="form-control" disabled>
													</div>

												</div>
											</div>
										</div>
								</div>
							</fieldset>
						</div>
					</fieldset>

					<!--TRABAJA PANEL INTERNO-->
					<fieldset class="panel-default" id="panelTrabaja" style="display:none">
					<legend class="panel-heading">Trabajo</legend>
						<div class="panel-body">
							<fieldset class="panel panel-default">
								<legend class="panel-heading">2.- En caso de trabajar: tiempo transcurrido para obtener el primer empleo.</legend>
								<div class="panel-body">
									<div class="row text-center">
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdAntesEgresar" name="rdTiempoTranscurrido" value="AE" >Antes de egresar</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdMenosSeisMeses" name="rdTiempoTranscurrido" value="M6M" >Menos de seis meses</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdSeisMesesUnAño" name="rdTiempoTranscurrido" value="E6M1A" >Entre seis meses y un año</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdMasAño" name="rdTiempoTranscurrido" value="MAS1A" >Mas de un año</label>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">3.- Medio para obtener el empleo.</legend>
								<div class="panel-body">
									<div class="row text-center">
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdBolsaTrabajoPlantel" name="rdMedioObtenerEmpleo" value="BTP" >Bolsa de trabajo del plantel</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdContantosPersonales" name="rdMedioObtenerEmpleo" value="CONP" >Contactos personales</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdResidenciaProfesional" name="rdMedioObtenerEmpleo" value="RP" >Residencia profecional</label>
										</div>
										<div class="form-group col-md-3">
											<label class="radio-inline"><input type="radio" id="rdMediosComunicacion" name="rdMedioObtenerEmpleo" value="MC" >Medios de comunicación</label>
										</div>

										<div class="form-group col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<label class="radio-inline"><input type="radio" id="rdOtrosMedios" name="rdMedioObtenerEmpleo" value="">otros:</label>
												</span>
												<input  class="form-control" id="txOtros" name="rdMedioObtenerEmpleo" type="tel" placeholder="#" disabled></input>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">4.- Requisitos de contratación.</legend>
								<div class="panel-body">
									<div class="row ">
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdCompetenciasLaborales" name="rdRequisitosContratacion" value="CL" >Competencias laborales</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdTituloProfesional" name="rdRequisitosContratacion" value="TP" >Título profesional</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdExamenSeleccion" name="rdRequisitosContratacion" value="EXS" >Examen de selección</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdIdiomaExtranjero" name="rdRequisitosContratacion" value="IEX" >Idioma extranjero</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdActitudesHabilidades" name="rdRequisitosContratacion" value="Actitudes y habilidades">Actitudes y habilidades socio-comunicativas</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdNinguno" name="rdRequisitosContratacion" value="Ninguno" >Ninguno</label>
										</div>
										<div class="form-group col-md-6">
											<div class="input-group">
								                <span class="input-group-addon">
								                	<label class="radio-inline">
								                		<input type="radio" id="rdOtroRequisito" name="rdRequisitosContratacion" value="" >Otro
								                	</label>
								                </span>
								               <input  class="form-control" id="txOtrosRequisitos" name="rdRequisitosContratacion" type="tel" placeholder="#" disabled ></input>
								            </div>
										</div>
									</div>
								</div>
							</fieldset>


							<fieldset class="panel panel-default">
								<legend class="panel-heading">5.- Idioma que utiliza en su trabajo.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-6">
											<select id="slOtroIdioma" class="selectpicker show-tick" name="slOtroIdioma"  title="Escoge una" >
												<option>Frances</option>
												<option>Italiano</option>
												<option>portugués</option>
												<option>Aleman</option>
												<option>Ruso</option>
												<option>Noruego</option>
											</select>
										</div>
										<div class="form-group col-md-6">
											<div class="input-group">
					                <span class="input-group-addon">Otro</span>
					               <input  class="form-control" id="txOtrosRequisitos" name="slOtroIdioma" type="text" placeholder="Especifique idioma" ></input>
								      </div>
										</div>

									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">6.- En qué proporción utiliza en el desempeño de sus actividades laborales cada una de las habilidades del idioma extranjero.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-3">
											<label for="idiomaHabla">Hablar </label>
											<input id="idiomaHabla" class="form-control input-numeros" name="idiomaHabla" type="tel" placeholder="%" maxlength="3"></input>
										</div>
										<div class="form-group col-md-3">
											<label for="idiomaEscribe">Escribir</label>
											<input id="idiomaEscribe" class="form-control input-numeros" name="idiomaEscribe" type="tel" placeholder="%" maxlength="3"></input>
										</div>
										<div class="form-group col-md-3">
											<label for="idiomaLee">Leer</label>
											<input id="idiomaLee" class="form-control input-numeros" name="idiomaLee" type="tel" placeholder="%" maxlength="3"></input>
										</div>
										<div class="form-group col-md-3">
											<label for="idiomaEscucha">Escuchar</label>
											<input id="idiomaEscucha" class="form-control input-numeros" name="idiomaEscucha" type="tel" placeholder="%" maxlength="3"></input>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">7.- Antigüedad en el empleo.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdMenos1Anio" name="rdAntiguedadEmpleo" value="MEN1A">Menos de un año</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rd1Anio" name="rdAntiguedadEmpleo" value="1A">Un año</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rd2Anios" name="rdAntiguedadEmpleo" value="2A">Dos años</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rd3Anios" name="rdAntiguedadEmpleo" value="3A">Tres años</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdMas3Anios" name="rdAntiguedadEmpleo" value="MAS3A">Mas de tres años</label>
										</div>
										<div class="form-group col-md-4">
											<select id="anioIngreso" class="selectpicker" name="anioIngreso">
												<option>Frances</option>
												<option>Italiano</option>
												<option>portugués</option>
												<option>Aleman</option>
												<option>Ruso</option>
												<option>Noruego</option>
											</select>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">8.- Ingreso (salario minimo diario).</legend>
								<div class="panel-body">
									<div class="row">
								<div class="form-group col-md-3">
									<label class="radio-inline"><input type="radio" id="rdSalario1" name="rdSalarioMinimo" value="MN5A">Menos de 5</label>
								</div>
								<div class="form-group col-md-3">
									<label class="radio-inline"><input type="radio" id="rdSalario2" name="rdSalarioMinimo" value="E5Y7">Entre 5 y 7</label>
								</div>
								<div class="form-group col-md-3">
									<label class="radio-inline"><input type="radio" id="rdSalario3" name="rdSalarioMinimo" value="8Y10">Entre 8 y 10</label>
								</div>
								<div class="form-group col-md-3">
									<label class="radio-inline"><input type="radio" id="rdSalario4" name="rdSalarioMinimo" value="MS10">Más de 10</label>
								</div>

							</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">9.- Nivel jerárquico en el trabajo.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo1" name="rdJerarquiaTrabajo" value="TECN">Tecnico</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo2" name="rdJerarquiaTrabajo" value="SUPE">Supervisor</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo3" name="rdJerarquiaTrabajo" value="JEAR">Jefe de area</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo4" name="rdJerarquiaTrabajo" value="FUNC">Funcionario</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo5" name="rdJerarquiaTrabajo" value="DIRE">Directivo</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdJerarquiaTrabajo6" name="rdJerarquiaTrabajo" value="EMPR">Empresario</label>
										</div>

									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">10.- Condición de trabajo.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdCondicionTrabajo1" name="rdCondicionTrabajo" value="BASE">Base</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdCondicionTrabajo2" name="rdCondicionTrabajo" value="EVEN">Eventual</label>
										</div>
										<div class="form-group col-md-4">
											<label class="radio-inline"><input type="radio" id="rdCondicionTrabajo3" name="rdCondicionTrabajo" value="CONT">Contrato</label>
										</div>
										<div class="form-group col-md-6">
											<div class="input-group">
												<span class="input-group-addon">
													<label class="radio-inline"><input type="radio" id="rdCondicionTrabajo4" name="rdCondicionTrabajo" value="OTRO">Otro</label>
												</span>
												<input id="otroPorcen" class="form-control" name="otroPorcen" type="tel" placeholder="%" ></input>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">11.- Relación del trabajo con su área de formación.</legend>
								<div class="panel-body">
									<div class="row">
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion1" name="rdRelacionAreaFormacion" value="0%">0%</label>
										</div>
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion2" name="rdRelacionAreaFormacion" value="20%">20%</label>
										</div>
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion3" name="rdRelacionAreaFormacion" value="40%">40%</label>
										</div>
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion4" name="rdRelacionAreaFormacion" value="60%">60%</label>
										</div>
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion5" name="rdRelacionAreaFormacion" value="80%">80%</label>
										</div>
										<div class="form-group col-md-2">
											<label class="radio-inline"><input type="radio" id="rdRelacionAreaFormacion6" name="rdRelacionAreaFormacion" value="100%">100%</label>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="panel panel-default">
								<legend class="panel-heading">12.- Datos de la empresa u organismo.</legend>
								<div class="panel-body">
									<fieldset class="panel panel-default">
										<legend class="panel-heading">Organismo</legend>
										<div class="panel-body">
											<div class="panel-body panel panel-default">
												<div class="row">
													<div class="form-group text-center col-md-4">
														<label class="radio-inline"><input type="radio" id="rdOrganismo" name="rdOrganismo" value="PUBL" >Publico</label>
													</div>
													<div class="form-group text-center col-md-4">
														<label class="radio-inline"><input type="radio" id="rdOrganismo" name="rdOrganismo" value="PRIV" >Primario</label>
													</div>
													<div class="form-group text-center col-md-4">
														<label class="radio-inline"><input type="radio" id="rdOrganismo" name="rdOrganismo" value="SOCI" >Social</label>
													</div>

												</div>
											</div>

											<div class="panel-body panel panel-default">
												<div class="row">
													<label class="form-group text-center col-md-6">Giro o actividad principal de la empresa u organismo.</label>
												<div class="form-group col-md-6">
													<textarea class="form-control rounded-0" id="txaGiroPrinEmpresa" name="txaGiroPrinEmpresa" rows="2"></textarea>
												</div>

												</div>
											</div>

											<div class="panel-body panel panel-default">
												<div class="row">
													<label class="form-group text-center col-md-6">Razon Social</label>
													<div class="form-group col-md-6">
														<input type="text" name="txRazonSocial" id="txRazonSocial" autocomplete="off" class="form-control">
													</div>
												</div>
											</div>


										</div>
									</fieldset>

									<fieldset class="panel panel-default">
										<legend class="panel-heading">Domicilio</legend>
										<div class="panel-body">
											<div class="panel-body panel panel-default">
												<div class="row">
													<div class="form-group col-md-3">
														<label for="nombre">Calle</label>
														<input id="nombre" class="form-control" autocomplete="off" name="calleEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apPaterno">Numero</label>
														<input id="apPaterno" class="form-control" autocomplete="off" name="numeroEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">Colonia</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="coloniaEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">CP</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="cpEmpresa" type="text" ></input>
													</div>
												</div>
											</div>
											<div class="panel-body panel panel-default">
												<div class="row">
													<div class="form-group col-md-3">
														<label for="nombre">Ciudad</label>
														<input id="nombre" class="form-control" autocomplete="off" name="ciudadEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apPaterno">Municipio</label>
														<input id="apPaterno" class="form-control" autocomplete="off" name="municipioEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">Estado</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="estadoEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">Telefono</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="telefonoEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="nombre">Tel y Ext</label>
														<input id="nombre" class="form-control" autocomplete="off" name="telExt" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apPaterno">Fax</label>
														<input id="apPaterno" class="form-control" autocomplete="off" name="fax" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">Email</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="emailEmpresa" type="text" ></input>
													</div>
													<div class="form-group col-md-3">
														<label for="apMaterno">Pagina Web</label>
														<input id="apMaterno" class="form-control" autocomplete="off" name="paginaWebEmpresa" type="text" ></input>
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<fieldset class="panel panel-default">
										<legend class="panel-heading">13.- Sector económico de la empresa.</legend>
										<div class="panel-body">
											<div class="row filas">
													<label class="col-md-4">SECTOR PRIMARIO</label>
													<div class="col-md-6">
														<label class="radio-inline"><input type="radio" id="rdSectorPrimario1" name="rdSectorPrimario" value="AGRO">Agroindustria</label>
														<label class="radio-inline"><input type="radio" id="rdSectorPrimario2" name="rdSectorPrimario" value="PESQ">Pesquero</label>
														<label class="radio-inline"><input type="radio" id="rdSectorPrimario3" name="rdSectorPrimario" value="MINE">Minero</label>
														<label class="radio-inline"><input type="radio" id="rdSectorPrimario4" name="rdSectorPrimario" value="OTRO">Otros</label>
													</div>
											</div>

											<div class="row filas">
													<label class="col-md-4">SECUNDARIO</label>
													<div class="col-md-6">
														<label class="radio-inline"><input type="radio" id="rdSectorSecundario1" name="rdSectorSecundario" value="INDU">Industrial</label>
														<label class="radio-inline"><input type="radio" id="rdSectorSecundario2" name="rdSectorSecundario" value="CONS">Construccion </label>
														<label class="radio-inline"><input type="radio" id="rdSectorSecundario3" name="rdSectorSecundario" value="PETR">Petroleo</label>
														<label class="radio-inline"><input type="radio" id="rdSectorSecundario4" name="rdSectorSecundario" value="OTRO">Otros</label>
													</div>
											</div>

											<div class="row filas">
													<label class="col-md-4">SECTOR TERCIARIO</label>
													<div class="col-md-6">
														<label class="radio-inline"><input type="radio" id="rdSectorTerciario1" name="rdSectorTerciario" value="EDUC">Educativo</label>
														<label class="radio-inline"><input type="radio" id="rdSectorTerciario2" name="rdSectorTerciario" value="TURI">Turismo</label>
														<label class="radio-inline"><input type="radio" id="rdSectorTerciario3" name="rdSectorTerciario" value="COME">Comercio</label>
														<label class="radio-inline"><input type="radio" id="rdSectorTerciario4" name="rdSectorTerciario" value="OTRO">Otros</label>
													</div>
											</div>


										</div>
									</fieldset>


									<fieldset class="panel panel-default">
										<legend class="panel-heading">14.- Tamaño de la empresa u organización.</legend>
										<div class="panel-body">
											<div class="row">
													<div class="form-group text-center col-md-3">
														<label class="radio-inline"><input type="radio" id="rdTamanioEmpresa1" name="rdTamanioEmpresa" value="MICR">MicroEmpresa(1-30)</label>
													</div>
													<div class="form-group text-center col-md-3">
														<label class="radio-inline"><input type="radio" id="rdTamanioEmpresa2" name="rdTamanioEmpresa" value="PEQU">Pequeña(31-100)</label>
													</div>
													<div class="form-group text-center col-md-3">
														<label class="radio-inline"><input type="radio" id="rdTamanioEmpresa3" name="rdTamanioEmpresa" value="MEDI">Mediana(101-500)</label>
													</div>
													<div class="form-group text-center col-md-3">
														<label class="radio-inline"><input type="radio" id="rdTamanioEmpresa4" name="rdTamanioEmpresa" value="GRAN">Grande(500+)</label>
													</div>
											</div>
										</div>
									</fieldset>

								</div>
							</fieldset>
						</div>
					</fieldset><!--**FIN TRABAJO**-->

				</div>
			</fieldset><!--//////////////////////////FIN PASO 4//////////////////////////-->
			<!--//////////////////////////FIN PASO 4//////////////////////////-->


			<!--***************************PASO 5**************************************************-->
			<fieldset class="steps">
				
				<legend class="panel-heading bg-primary">4.- Desempeño profesional de los egresados(Coherencia entre la formación y el tipo de empleo).</legend>
				<div class="panel panel-body">
					<fieldset class="panel panel-default">
						<legend class="panel-heading">1.- Eficiencia para realizar las actividades laborales, e relación con su formación académica.</legend>
						<div class="panel-body">
							<div class="row">
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdMuyEficiente" name="rdEficienciaLaboral" value="MEfi" >Muy Eficiente</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdEficiente" name="rdEficienciaLaboral" value="EFIC" >Eficiente</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdPocoEficiente" name="rdEficienciaLaboral" value="PEFI" >Poco Eficiente</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdDeficiente" name="rdEficienciaLaboral" value="DEFI">Deficiente</label>
									</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="panel panel-default">
						<legend class="panel-heading">2.- Como califica su formación académica con respecto a su desempeño laboral.</legend>
						<div class="panel-body">
							<div class="row">
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdExcelente" name="rdFormacionAcademica" value="EXCE" >Excelente</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdBueno" name="rdFormacionAcademica" value="BUEN" >Bueno</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdRegular" name="rdFormacionAcademica" value="REGU" >Regular</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdMalo" name="rdFormacionAcademica" value="MALO" >Malo</label>
									</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="panel panel-default">
						<legend class="panel-heading">3.- Utilidad de las residencias profesionales o prácticas profesionales para su desarrollo laboral y profesional.</legend>
						<div class="panel-body">
							<div class="row">
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdExcelentePracticas" name="rdPracticasProfesionales" value="EXCE" >Excelente</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdBuenoPracticas" name="rdPracticasProfesionales" value="BUEN" >Bueno</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdRegularPracticas" name="rdPracticasProfesionales" value="REGU" >Regular</label>
									</div>
									<div class="form-group text-center col-md-3">
										<label class="radio-inline"><input type="radio" id="rdMaloPracticas" name="rdPracticasProfesionales" value="MALO" >Malo</label>
									</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="panel-default">
						<legend class="panel-heading">4.- Aspectos que valora la empresa u organismo para la contratación de egresados.</legend>
						<div class="panel-body">
							<div class="panel-body panel panel-default">
								<div class="row filas">
									<label class="col-md-6">1.-Área o campo de estudio.</label>
									<div class="col-md-6">
										<label class="radio-inline"><input type="radio" id="rdNameCampoEstudio" name="rdValoraCampoEstudio" value="1" >Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoCampoEstudio" name="rdValoraCampoEstudio" value="2" >Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioCampoEstudio" name="rdValoraCampoEstudio" value="3" >Medio</label>
											<label class="radio-inline"><input type="radio" id="redMuchoCampoEstudio" name="rdValoraCampoEstudio" value="4" >Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoCampoEstudio" name="rdValoraCampoEstudio" value="5" >Todo</label>
									</div>
								</div>

								<div class="row filas">
										<label class="col-md-6">2.-Titulación.</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaTitulacion" name="rdTitulacion" value="1" >Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoTitulacion" name="rdTitulacion" value="2" >Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioTitulacion" name="rdTitulacion" value="3" >Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoTitulacion" name="rdTitulacion" value="4" >Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoTitulacion" name="rdTitulacion" value="5" >Todo</label>
										</div>
								</div>

								<div class="row filas">
										<label class="col-md-6">3-.Experiencia Laboral/Practica (Antes de egresar).</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaExperienciaLaboral" name="rdExperienciaLaboral" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoExperienciaLaboral" name="rdExperienciaLaboral" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioExperienciaLaboral" name="rdExperienciaLaboral" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoExperienciaLaboral" name="rdExperienciaLaboral" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoExperienciaLaboral" name="rdExperienciaLaboral" value="5">Todo</label>
										</div>
								</div>

								<div class="row filas">
										<label class="col-md-6">4-.Competencia laboral: Habilidad para resolver problemas, capacidad de análisis, habilidad para el aprendizaje, creatividad, administración del tiempo, capacidad de negociación, habilidades manuales, trabajo en equipo, iniciativa, honestidad, persistencia, etc.</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaHabilidadProblemas" name="rdHabilidadProblemas" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoHabilidadProblemas" name="rdHabilidadProblemas" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioHabilidadProblemas" name="rdHabilidadProblemas" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoHabilidadProblemas" name="rdHabilidadProblemas" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoHabilidadProblemas" name="rdHabilidadProblemas" value="5">Todo</label>
										</div>
								</div>

								<div class="row filas">
										<label class="col-md-6">5.-Posicionamiento de la institución de egreso.</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaPosicionInstituto" name="rdPosicionInstituto" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoPosicionInstituto" name="rdPosicionInstituto" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioPosicionInstituto" name="rdPosicionInstituto" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoPosicionInstituto" name="rdPosicionInstituto" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoPosicionInstituto" name="rdPosicionInstituto" value="5">Todo</label>
										</div>
								</div>

								<div class="row filas">
										<label class="col-md-6">6.-Conocimientos de idioma extranjero. </label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaConocimientoIdioma" name="rdConocimientoIdioma" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoConocimientoIdioma" name="rdConocimientoIdioma" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioConocimientoIdioma" name="rdConocimientoIdioma" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoConocimientoIdioma" name="rdConocimientoIdioma" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoConocimientoIdioma" name="rdConocimientoIdioma" value="5">Todo</label>
										</div>
								</div>
								<div class="row filas">
										<label class="col-md-6">7.-Recomendaciones/Referencias.</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdReferencias1" name="rdReferencias" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdReferencias2" name="rdReferencias" value="1">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdReferencias3" name="rdReferencias" value="1">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdReferencias4" name="rdReferencias" value="1">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdReferencias5" name="rdReferencias" value="1">Todo</label>
										</div>
								</div>
								<div class="row filas">
										<label class="col-md-6">8.-Personalidad/Actitudes.s</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaPersonalidadActitud" name="rdPersonalidadActitud" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoPersonalidadActitud" name="rdPersonalidadActitud" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioPersonalidadActitud" name="rdPersonalidadActitud" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoPersonalidadActitud" name="rdPersonalidadActitud" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoPersonalidadActitud" name="rdPersonalidadActitud" value="5">Todo</label>
										</div>
								</div>
								<div class="row filas">
										<label class="col-md-6">9.-Capacidad de liderazgo.</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaCapacidadLiderazgo1" name="rdCapacidadLiderazgo" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoCapacidadLiderazgo2" name="rdCapacidadLiderazgo" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioCapacidadLiderazgo3" name="rdCapacidadLiderazgo" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoCapacidadLiderazgo4" name="rdCapacidadLiderazgo" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoCapacidadLiderazgo5" name="rdCapacidadLiderazgo" value="5">Todo</label>
										</div>
								</div>
								<div class="row filas">
										<label class="col-md-6">10.-Otros</label>
										<div class="col-md-6">
											<label class="radio-inline"><input type="radio" id="rdNadaOtrosAspectosValoraEmpresa1" name="rdOtrosAspectosValoraEmpresa" value="1">Nada</label>
											<label class="radio-inline"><input type="radio" id="rdPocoOtrosAspectosValoraEmpresa2" name="rdOtrosAspectosValoraEmpresa" value="2">Poco</label>
											<label class="radio-inline"><input type="radio" id="rdMedioOtrosAspectosValoraEmpresa3" name="rdOtrosAspectosValoraEmpresa" value="3">Medio</label>
											<label class="radio-inline"><input type="radio" id="rdMuchoOtrosAspectosValoraEmpresa4" name="rdOtrosAspectosValoraEmpresa" value="4">Mucho</label>
											<label class="radio-inline"><input type="radio" id="rdTodoOtrosAspectosValoraEmpresa5" name="rdOtrosAspectosValoraEmpresa" value="5">Todo</label>
										</div>
								</div>
							</div>

							<fieldset class="panel-default panel">
								<legend class="panel-heading">V.-Expectativas de desarrollo, superación profesional y de actualización.</legend>
								<div class="panel-body">
									<fieldset clas
										<legend class="panel-heading">1.-Actualización de conocimientos.</legend>
										<div class="panel-body">
											<div class="row filas">
												<label class="col-md-6">Le gustaría tomar cursos de actualización.</label>
												<div class="col-md-6">
													<label class="radio-inline"><input type="radio" id="rdSiTomariaCursos" name="rdTomariaCursos" value="si">Si</label>
													<label class="radio-inline"><input type="radio" id="rdNoTomariaCursos" name="rdTomariaCursos" value="no">No</label>
												</div>
											</div>
											<div class="row filas">
												<label class="col-md-6">Le gustaría tomar algún posgrado.</label>
												<div class="col-md-6">
													<label class="radio-inline"><input type="radio" id="rdSiTomariaPostgrado" name="rdTomariaPostgrado" value="si">Si</label>
													<label class="radio-inline"><input type="radio" id="rdNOTomariaPostgrado" name="rdTomariaPostgrado" value="no">No</label>
												</div>
											</div>
										</div>
									</fieldset>

									<fieldset class="panel-default panel">
										<legend class="panel-heading">Vl.-Participación social de los egresados.</legend>
										<div class="panel-body">
											<div class="row filas">
												<label class="col-md-6">1.-Pertenece a organizaciones sociales:</label>
												<div class="col-md-6">
													<label class="radio-inline"><input type="radio" id="rdSiOrganizacionSocial" name="rdOrganizacionSocial" value="si">Si</label>
													<label class="radio-inline"><input type="radio" id="rdNoOrganizacionSocial" name="rdOrganizacionSocial" value="no">No</label>
												</div>
											</div>
											<div class="row filas">
												<label class="col-md-6">2.-Pertenece a organismos de profesionistas:</label>
												<div class="col-md-6">
													<label class="radio-inline"><input type="radio" id="rdSiOrganismoProfesionistas" name="rdOrganismoProfesionistas" value="si">Si</label>
													<label class="radio-inline"><input type="radio" id="rdNoOrganismoProfesionistas" name="rdOrganismoProfesionistas" value="no">No</label>
												</div>
											</div>
											<div class="row filas">
												<label class="col-md-6">3.-Pertenece a la asociación de egresados:</label>
												<div class="col-md-6">
													<label class="radio-inline"><input type="radio" id="rdSiAsociacionEgresados" name="rdAsociacionEgresados" value="si">Si</label>
													<label class="radio-inline"><input type="radio" id="rdNoAsociacionEgresados" name="rdAsociacionEgresados" value="no">No</label>
												</div>
											</div>
										</div>
									</fieldset>

									<fieldset class="panel panel-default">
										<legend class="panel-heading">Vll.-Comentarios y sugerencias.</legend>
										<div class="panel-body">
											<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="2" name="comentariosSugerencias"></textarea>
										</div>
									</fieldset>
								</div>
							</fieldset>
						</div>
					</fieldset>
				</div>
			</fieldset><!--///////FIN PASO 5////////-->
			<!--//////////////////////////FIN PASO 5//////////////////////////-->


			<!--Footer de botones-->
			<footer class="row panel-body">
				<input type="button" class="btn btn-primary" id="atras" value="Atras" disabled></input>
				<input type="button" class="btn btn-primary" id="adelante" value="Adelante"></input>
				<input type="submit" class="btn btn-success" id="enviarForm" value="Enviar" ></input>
			</footer>
			<!--Fin Footer-->

		</form>
	</section>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/funciones/validaciones.js"></script>
</body>
</html>
