<div id="navbar" class="navbar navbar-default          ace-save-state"> <!--Barra superior-->
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <!-- menubar for phone-->
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a id="logo-intranet" href="index" class="navbar-brand"><!-- logo de la empresa -->						
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
                                    <a href="perfil">
                                        <i class="ace-icon fa fa-user"></i>
                                        Perfil
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Cerrar sesión
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

			<div id="sidebar" class="sidebar responsive ace-save-state"> <!--menubar-->
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>
                <ul class="nav nav-list"><!-- barra de menu a la izq -->
                    <li class=""> <!-- Principal -->
                        <a href="index">
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
                                <a href="casos_registro">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registro
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="casos_busqueda">
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
                                <a href="ta_alumnos">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Alumno
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="ta_rubricas">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mantenimiento de rúbricas
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="ta_notas">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Registro de notas
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class=""><!-- Directorio -->
                        <a href="directorio">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> Directorio </span>                            
                        </a>                        
                    </li>

                    <li class=""> <!-- Mapa -->
                        <a href="mapa">
                            <i class="menu-icon fa fa-map-marker"></i>
                            <span class="menu-text"> Mapa </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class=""> <!-- Mantenimientos-->
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
                                <a href="mant_profesor" class="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Profesor
                                </a>                                                                
                             </li>

                            <li class=""> <!-- Jefe de Practica -->
                                <a href="mant_jp" class="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Jefe de práctica
                                </a>                                
                            </li>

                            <li class=""> <!-- Alumno -->
                                <a href="mant_alumno" class="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Alumno
                                </a>
                            </li>

                            <li class=""><!-- Cliente -->
                                <a href="mant_cliente" class="">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Cliente
                                </a>                                
                            </li>

                          </ul>
                    </li>
                    <li class=""> <!-- Reportes FALTA-->
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
                                        <a href="noticias_registro">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Registro
                                        </a>
                                        <b class="arrow"></b>
                                    </li>
                                    <li class=""> <!--FALTA-->
                                        <a href="gestor_noticias_busqueda.php">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Búsqueda
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>
                            <li class=""> <!-- Eventos -->
                                <a href="eventos">
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
						<a href="index">Home</a>
					</li>