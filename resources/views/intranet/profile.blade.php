<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Intranet | Página Personal</title>

	<meta name="description" content="3 styles with inline editable feature" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="assets/css/select2.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-editable.min.css" />
    
	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    
    <!--logo -->
    <link rel="stylesheet" href="assets/css/index.css" />

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
	<div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <!-- menubar for phone-->
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a id="logo-intranet" href="index.html" class="navbar-brand"><!-- logo de la empresa -->						
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="purple dropdown-modal"> <!-- Campanita de alerta -->
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
                    <li class="light-blue dropdown-modal"> <!-- Bienvenido, Luis -->
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
                                        <small>Bienvenido,</small>
                                        Luis
                                    </span>
                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <!--lista plegable de Bienvenido, Luis-->
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
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state"> <!--menubar-->
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>
		<ul class="nav nav-list"><!-- barra de menu a la izq -->
			<li class=""> <!-- Principal -->
				<a href="index.html">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text">Principal </span>
				</a>
			</li>
			<li class=""> <!-- Registro de casos -->
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
							Búsqueda
						</a>
						<b class="arrow"></b>
					</li>					
                </ul>
			</li>
			<li class=""><!-- Tareas académicas -->
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Tareas académicas </span>
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
                    <li class="">
                        <a href="ta_rubricas.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Mantenimiento de rúbricas
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
			<li class=""><!-- Directorio -->
                <a href="directorio.html">
                    <i class="menu-icon fa fa-book"></i>
                    <span class="menu-text"> Directorio </span>                            
                </a>                        
            </li>

			<li class=""> <!-- Mapa -->
				<a href="mapa.html">
					<i class="menu-icon fa fa-map-marker"></i>
					<span class="menu-text"> Mapa </span>
				</a>
				<b class="arrow"></b>
			</li>
			<li class=""> <!-- Mantenimientos -->
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
                        Mantenimientos
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu"> 
                    <li class=""> <!-- Profesor -->
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

                    <li class=""> <!-- Jefe de Practica -->
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Jefe de práctica
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

                    <li class=""> <!-- Alumno -->
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

                    <li class=""><!-- Cliente -->
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
							
                  </ul>
            </li>
			<li class=""> <!-- Reportes -->
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
                    <li class=""><!-- Noticias -->
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
                    <li class=""> <!-- Eventos -->
                        <a href="gestor_eventos.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Eventos
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>        
        </ul>
		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <!--Contraer barra de menú-->
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="index.html">Home</a>
					</li>
					<li class="">Página Personal</li>
				</ul>
			</div>

			<div class="page-content">
				<div class="page-header"><!-- /.page-header -->
					<h1>Página Personal</h1>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="hr dotted"></div>
						<div>
							<div id="user-profile-1" class="user-profile row">
								<div class="col-xs-12 col-sm-3 center"> <!-- lado izquierdo del profile: foto + nombre completo-->
									<div>
                                        <span class="profile-picture"> <!-- foto de profile-->
                                            <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                        </span>
										<div class="space-4"></div>
										<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right"><!--nombre completo-->
											<div class="inline position-relative">
												<span class="white">Luis Flores</span>												
											</div>
										</div>
									</div>
									<div class="space-6"></div>
								</div>

								<div class="col-xs-12 col-sm-9"><!--lado derecho del profile: datos del usuario-->
									<div class="space-12"></div>
									<div class="profile-user-info profile-user-info-striped">
										<div class="profile-info-row"><!--Codigo-->
											<div class="profile-info-name"> Código </div>
											<div class="profile-info-value">
												<span class="">00000000</span>
											</div>
										</div>

										<div class="profile-info-row"><!--Nombres-->
											<div class="profile-info-name"> Nombres </div>
											<div class="profile-info-value">
												<span class="">Luis</span>
											</div>
										</div>

										<div class="profile-info-row"><!--Apellidos-->
											<div class="profile-info-name"> Apellidos </div>
											<div class="profile-info-value">
												<span class="">Flores</span>
											</div>
										</div>

										<div class="profile-info-row"><!--fecha de nacimiento-->
											<div class="profile-info-name"> Fecha de nacimiento </div>
											<div class="profile-info-value">
												<span class="">00/00/0000</span>
											</div>
										</div>


										<div class="profile-info-row"><!--telefono-->
											<div class="profile-info-name"> Teléfono </div>
											<div class="profile-info-value">
												<span class="editable editable-click username">000-000-000</span>
                                                <div class="help-button" data-rel="popover" data-trigger="hover" data-placement="right" data-content="You can edit by click in text.">?</div>
											</div>  
										</div>
										<div class="profile-info-row"><!--correo-->
											<div class="profile-info-name"> Correo </div>
											<div class="profile-info-value">
												<span class="editable editable-clic username">luis.flores@pucp.edu.pe</span>
                                                <div class="help-button" data-rel="popover" data-trigger="hover" data-placement="right" data-content="You can edit by click in text.">?</div>
											</div>
										</div>
									</div>
									<div class="space-20"></div>
									<div class="space-6"></div>
								</div>
							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->

	<div class="footer"><!--pie de pagina-->
		<div class="footer-inner">
			<div class="footer-content">
                <span class="bigger-120">
                    <span class="blue bolder">Grupo Valor</span>
                    Application &copy; 2016
                </span>
			</div>
		</div>
	</div>
    <!-- para moviles, sirve para scrollear hacia arriba-->
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"> 
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.gritter.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.hotkeys.index.min.js"></script>
<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/spinbox.min.js"></script>
<script src="assets/js/bootstrap-editable.min.js"></script>
<script src="assets/js/ace-editable.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		//editables on first profile page
		$.fn.editable.defaults.mode = 'inline';
		$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
		$.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
				'<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';
		//editables
		//text editable
        $('[data-rel=popover]').popover({container:'body'});
		$('.username').editable({
					type: 'text',
					name: 'username'
				});
		
		// *** editable avatar *** //
		try {//ie8 throws some harmless exceptions, so let's catch'em
			//first let's add a fake appendChild method for Image element for browsers that have a problem with this
			//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
			try {
				document.createElement('IMG').appendChild(document.createElement('B'));
			} catch(e) {
				Image.prototype.appendChild = function(el){}
			}
			var last_gritter
			$('#avatar').editable({
				type: 'image',
				name: 'avatar',
				value: null,
				image: {
					//specify ace file input plugin's options here
					btn_choose: 'Change Avatar',
					droppable: true,
					maxSize: 110000,//~100Kb
					//and a few extra ones here
					name: 'avatar',//put the field name here as well, will be used inside the custom plugin
					on_error : function(error_type) {//on_error function will be called when the selected file has a problem
						if(last_gritter) $.gritter.remove(last_gritter);
						if(error_type == 1) {//file format error
							last_gritter = $.gritter.add({
								title: 'File is not an image!',
								text: 'Please choose a jpg|gif|png image!',
								class_name: 'gritter-error gritter-center'
							});
						} else if(error_type == 2) {//file size rror
							last_gritter = $.gritter.add({
								title: 'File too big!',
								text: 'Image size should not exceed 100Kb!',
								class_name: 'gritter-error gritter-center'
							});
						}
						else {//other error
						}
					},
					on_success : function() {
						$.gritter.removeAll();
					}
				},
				url: function(params) {
					// ***UPDATE AVATAR HERE*** //
					//for a working upload example you can replace the contents of this function with
					//examples/profile-avatar-update.js
					var deferred = new $.Deferred
					var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
					if(!value || value.length == 0) {
						deferred.resolve();
						return deferred.promise();
					}
					//dummy upload
					setTimeout(function(){
						if("FileReader" in window) {
							//for browsers that have a thumbnail of selected image
							var thumb = $('#avatar').next().find('img').data('thumb');
							if(thumb) $('#avatar').get(0).src = thumb;
						}
						deferred.resolve({'status':'OK'});
						if(last_gritter) $.gritter.remove(last_gritter);
						last_gritter = $.gritter.add({
							title: 'Avatar Updated!',
							//text: 'Uploading to server can be easily implemented. A working example is included with the template.',
							class_name: 'gritter-info gritter-center'
						});
					} , parseInt(Math.random() * 800 + 800))
					return deferred.promise();
					// ***END OF UPDATE AVATAR HERE*** //
				},
				success: function(response, newValue) {
				}
			})
		}catch(e) {}		
		///////////////////////////////////////////
		///////////////////////////////////////////
		$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
		////////////////////
		//change profile
		$('[data-toggle="buttons"] .btn').on('click', function(e){
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			$('.user-profile').parent().addClass('hide');
			$('#user-profile-'+which).parent().removeClass('hide');
		});
		/////////////////////////////////////
		$(document).one('ajaxloadstart.page', function(e) {
			//in ajax mode, remove remaining elements before leaving page
			try {
				$('.editable').editable('destroy');
			} catch(e) {}
			$('[class*=select2]').remove();
		});
	});
</script>
</body>
</html>