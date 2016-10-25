<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Intranet</title>

	<meta name="description" content="Draggabble Widget Boxes with Persistent Position and State" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

	<link rel="stylesheet" href="assets/css/index.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header pull-left">
			<a id="logo-intranet" href="index.html" class="navbar-brand">

			</a>
		</div>

		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="purple dropdown-modal">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						<span class="badge badge-important">8</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-exclamation-triangle"></i>
							8 Notifications
						</li>

						<li class="dropdown-content">
							<ul class="dropdown-menu dropdown-navbar navbar-pink">
								<li>
									<a href="#">
										<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary fa fa-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>
							</ul>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See all notifications
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
						<span class="user-info">
									<small>Bienvenido,</small>
									Luis
								</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="profile.html">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<ul class="nav nav-list">
			<li class="">
				<a href="index.html">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Principal </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-pencil-square-o"></i>
					<span class="menu-text"> Registro de casos </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
					<li class="">
						<a href="registro_casos.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Registro
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="busqueda_casos.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Busqueda
						</a>

						<b class="arrow"></b>
					</li>

				</ul>
			</li>

			<li class="active open">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-list-alt"></i>
					<span class="menu-text"> Tareas acad&eacute;micas </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="">
						<a href="ta_alumno.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Alumno
						</a>
						<b class="arrow"></b>
					</li>
					<li class="active">
						<a href="ta_rubricas.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Mantenimiento de r&uacute;bricas
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="ta_notas.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Registro de notas
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-book"></i>
					<span class="menu-text"> Directorio </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">

					<li class="">
						<a href="directorio_registro.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Registro
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="directorio_busqueda.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Búsqueda
						</a>

						<b class="arrow"></b>
					</li>

				</ul>
			</li>

			<li class="">
				<a href="mapa.html">
					<i class="menu-icon fa fa-map-marker"></i>
					<span class="menu-text"> Mapa </span>
				</a>

				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-desktop"></i>
					<span class="menu-text">
						Mantenimientos
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Profesor
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="mantenimientoProfesor.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registrar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="mantProfModificar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Modificar
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Jefe de Practica
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="mantenimientoJP.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registrar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="mantJPModificar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Modificar
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Alumno
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="mantenimientoAlumno.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registrar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="mantAlumModificar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Modificar
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Cliente
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="mantenimientoCliente.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registrar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="mantClieModificar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Modificar
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Clinicas
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="mantenimientoClinica.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registrar
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="mantCliniModificar.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Modificar
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-file-o"></i>
					<span class="menu-text">
						Reportes
                    </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
					<li class="">
						<a href="reporte1.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Reporte por alumno
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="reporte2.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Reporte por caso
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="reporte3.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Reporte 3
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li class=""> <!--Gestor de contenidos-->
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-cog"></i>
					<span class="menu-text">
                                <small>Gestor de contenidos</small>
							</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>

							Noticias
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="gestor_noticias_registro.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Registro
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="gestor_noticias_busqueda.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Búsqueda
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="gestor_eventos.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Eventos
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li> <!--Gestor de contenido -->

		</ul><!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Tareas acad&eacute;micas</a>
							</li>
							<li class="active">Mantenimiento de r&uacute;bricas</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>Mantenimiento de r&uacute;bricas</h1>
						</div><!-- /.page-header -->

						<p>Aqu&iacute; el profesor puede editar las r&uacute;bricas para registrar el avance de sus alumnos en el curso.</p>
						
						<!-- CONTROL DE TABLAS -->
						<div class="">
							Se mostrar&aacute;n 
							<div class="ace-spinner middle" style="width: 115px;">
								<input type="text" id="spinner1" />
							</div>
							tablas de r&uacute;bricas, para un total de 
							<div class="ace-spinner middle" style="width: 90px;">
								<input type="text" class="input-sm" id="spinner2" />
							</div>
							semanas.
						</div>
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<h3 class="header smaller lighter blue">
									R&uacute;brica 1:
									<input type="text" class="input-xxlarge" value="Participaci&oacute;n" />
									<div class="form-group" style="float:right">
										<label>Peso de la r&uacute;brica:</label>
										<input type="text" class="input-mini" value="1" />
										<label>de 2 (50%)</label>  
									</div>
								</h3>
								
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>T&iacute;tulo del rubro</th>
													<th>M&aacute;ximo puntaje</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Puntualidad" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Participaci&oacute;n y discusi&oacute;n" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td colspan=4 style="background-color:#EFF3F8">
														<div class="center">
															<button class="btn btn-white btn-info btn-bold">
																<i class="ace-icon fa fa-plus-circle bigger-120 blue"></i>
																A&ntilde;adir fila al final
															</button>
															&nbsp;&nbsp;
															<button class="btn btn-white btn-danger btn-bold">
																<i class="ace-icon fa fa-trash-o bigger-120 red"></i>
																Eliminar filas
															</button>
														</div>
													</td>
												</tr>	
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<h3 class="header smaller lighter blue">
									R&uacute;brica 2:
									<input type="text" class="input-xxlarge" value="Seguimiento de casos" />
									<div class="form-group" style="float:right">
										<label>Peso de la r&uacute;brica:</label>
										<input type="text" class="input-mini" value="1" />
										<label>de 2 (50%)</label>
									</div>
								</h3>
								
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>T&iacute;tulo del rubro</th>
													<th>M&aacute;ximo puntaje</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Relaci&oacute;n abogado-caso" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Ejercicio profesional" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Investigaci&oacute;n y redacci&oacute;n" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" value="Oralidad" />
													</td>
													<td>
														<input type="text" class="input-mini" value="5" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td>
														<input type="text" class="input-large" placeholder="T&iacute;tulo del rubro" />
													</td>
													<td>
														<input type="text" class="input-mini" placeholder="Puntaje" />
													</td>
													<td class="center">
														<a href="#" class="ace-icon glyphicon glyphicon-trash red" title="Eliminar fila"></a>
													</td>
												</tr>
												<tr>
													<td colspan=4 style="background-color:#EFF3F8">
														<div class="center">
															<button class="btn btn-white btn-info btn-bold">
																<i class="ace-icon fa fa-plus-circle bigger-120 blue"></i>
																A&ntilde;adir fila al final
															</button>
															&nbsp;&nbsp;
															<button class="btn btn-white btn-danger btn-bold">
																<i class="ace-icon fa fa-trash-o bigger-120 red"></i>
																Eliminar filas
															</button>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
								
								<div class="center">		
									<button class="btn btn-info" type="button">
										<i class="ace-icon fa fa-check bigger-110"></i>
										Guardar
									</button>
								</div>
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Grupo Valor</span>
							Application &copy; 2016
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/jquery-ui.min.js"></script> <!-- SPINNER -->
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script> <!-- SPINNER -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
					
			
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				/* SPINNERS */
				$('#spinner1').ace_spinner({value:2,min:1,max:20,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				});
				$('#spinner2').ace_spinner({value:14,min:1,max:30,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'});
				/* FIN SPINNERS */
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
