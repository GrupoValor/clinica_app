<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Intranet | Registro de casos | Búsqueda</title>

    <meta name="description" content="Static &amp; Dynamic Tables"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/index.css"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
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

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
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
                        <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
									<small>Bienvenido,</small>
									Luis
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

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
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
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
                <a href="profile.html">
                    <!--<i class="menu-icon fa fa-list"></i>-->
                    <i class="menu-icon fa fa-user"></i>
                    <span class="menu-text"> Página Personal </span>

                    <!--<b class="arrow f-angle-down"></b>-->
                </a>
            </li>

            <li class="hidden">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								UI &amp; Elements
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Layouts
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="top-menu.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Top Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Default Mobile Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-3.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 3
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="typography.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Typography
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Elements
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="buttons.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Buttons &amp; Icons
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="content-slider.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Content Sliders
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="treeview.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Treeview
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jquery-ui.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jQuery UI
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="nestable-list.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Nestable Lists
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Three Level Menu
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#">
                                    <i class="menu-icon fa fa-leaf green"></i>
                                    Item #1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-pencil orange"></i>

                                    4th level
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-plus purple"></i>
                                            Add Product
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-eye pink"></i>
                                            View Products
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="active open">
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

                    <li class="active">
                        <a href="busqueda_casos.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Busqueda
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>

            <li class="">
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
                    <li class="">
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

            <li class="hidden">
                <a href="calendar.html">
                    <i class="menu-icon fa fa-calendar"></i>

                    <span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hidden">
                <a href="gallery.html">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> Gallery </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hidden">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text"> More Pages </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="profile.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            User Profile
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="inbox.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Inbox
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="pricing.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Pricing Tables
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="invoice.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Invoice
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="timeline.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Timeline
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="search.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Search Results
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="email.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Email Templates
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="login.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Login &amp; Register
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hidden">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>

                    <span class="menu-text">
								Other Pages

								<span class="badge badge-primary">5</span>
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            FAQ
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="error-404.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 404
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="error-500.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Error 500
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="grid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Grid
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="blank.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Blank Page
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

                    <li class="hidden">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Modificación
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
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
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
                        <a href="#">Registro de casos</a>
                    </li>
                    <li class="active">Búsqueda</li>
                </ul><!-- /.breadcrumb -->

            </div>

            <div class="page-content">


                <div class="page-header">
                    <h1>
                        Registro de casos
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Búsqueda
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <!--<div class="hr hr-18 dotted hr-double"></div>-->

                        <div class="row">
                            <div class="col-xs-12">


                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="hidden"></th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Tipo caso</th>
                                            <th>Fecha Ini</th>
                                            <th>Fecha Fin</th>
                                            <th>Estado</th>
                                            <th>Modificar</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>a1512</td>
                                            <td>Juan Perez</td>
                                            <td>Caso 1</td>
                                            <td>15/05/2015</td>
                                            <td>15/07/2015</td>
                                            <td>Cerrado</td>

                                            <!--<td class="hidden-480"> San Miguel</td>-->

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal6">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal6" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>


                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>b1577</td>
                                            <td>Nei Cahuantico</td>
                                            <td>caso 2</td>
                                            <td>16/05/2015</td>
                                            <td>17/07/2015</td>
                                            <td>En seguimiento</td>

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal5">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal5" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>a1512</td>
                                            <td>Jaspar Cornio</td>
                                            <td>Caso 3</td>
                                            <td>17/05/2015</td>
                                            <td>17/07/2015</td>
                                            <td>En seguimiento</td>


                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal4">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal4" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>c1512</td>
                                            <td>Juanjo Salas</td>
                                            <td>Caso 4</td>
                                            <td>17/08/2015</td>
                                            <td>17/09/2015</td>
                                            <td>Cerrado</td>

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal3">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal3" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>a1512</td>
                                            <td>Juan Perez</td>
                                            <td>Caso 5</td>
                                            <td>15/05/2015</td>
                                            <td>15/07/2015</td>
                                            <td>Cerrado</td>

                                            <!--<td class="hidden-480"> San Miguel</td>-->

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal7">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal7" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>b1577</td>
                                            <td>Nei Cahuantico</td>
                                            <td>Caso 6</td>
                                            <td>16/05/2015</td>
                                            <td>17/07/2015</td>
                                            <td>En seguimiento</td>

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal8">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal8" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>a1512</td>
                                            <td>Jaspar Cornio</td>
                                            <td>Caso 10</td>
                                            <td>17/05/2015</td>
                                            <td>17/07/2015</td>
                                            <td>En seguimiento</td>


                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal9">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal9" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </div>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>c1512</td>
                                            <td>Juanjo Salas</td>
                                            <td>Caso 9</td>
                                            <td>17/08/2015</td>
                                            <td>17/09/2015</td>
                                            <td>Cerrado</td>

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal10">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal10" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>a1512</td>
                                            <td>Juan Perez</td>
                                            <td>Caso 8</td>
                                            <td>15/05/2015</td>
                                            <td>15/07/2015</td>
                                            <td>Cerrado</td>

                                            <!--<td class="hidden-480"> San Miguel</td>-->

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="hidden">
                                            </td>

                                            <td>b1577</td>
                                            <td>Nei Cahuantico</td>
                                            <td>Caso 7</td>
                                            <td>16/05/2015</td>
                                            <td>17/07/2015</td>
                                            <td>En seguimiento</td>

                                            <td class="">
                                                <div class="hidden-sm hidden-xs action-buttons">

                                                    <a class="green" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                    <a class="purple" href="../Casos/caso.html" target="_blank">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>
                                                    <a type="blue" class="ace-icon fa fa-search-plus bigger-130"
                                                       data-toggle="modal" data-target="#myModal2">
                                                        <!--<i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                                                    </a>
                                                    <div class="modal fade" id="myModal2" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Detalle del caso</h4>
                                                                </div>
                                                                <div class="row body">
                                                                    <form action="#">
                                                                        <ul>
                                                                            <label class="col-sm-3 control-label no-padding-right">Codigo
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Codigo001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nombre</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">NombreCliente001</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Fecha
                                                                                de nacimiento</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">01/07/1950</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Nivel
                                                                                educativo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Secundaria</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Ocupacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ama
                                                                                de casa</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Hijos</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Dependientes</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">No
                                                                                tiene</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Telefono</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">9999999</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Correo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">correo@gmail.com</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Domicilio</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Ca.
                                                                                Universitaria 1600. San Miguel</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Tipo
                                                                                de actuacion</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Asesoria
                                                                                juridica</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Objetivo</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Descripcion
                                                                                del objetivo de la actuacion</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Observaciones</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Parrafo
                                                                                con las observaciones</label>
                                                                            <label class="col-sm-3 control-label no-padding-right">Encargados
                                                                                del caso</label>
                                                                            <label class="col-sm-9 control-label no-padding-right">Alumno1</label>

                                                                        </ul>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Aceptar
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <!--<li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>-->

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Editar">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Eliminar">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="../Casos/caso.html" class="tooltip-error"
                                                                   data-rel="tooltip"
                                                                   title="Ir al caso">
																				<span class="purple">
																					<i class="ace-icon fa fa-paperclip bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="tooltip-arrow" data-rel="tooltip"
                                                                   title="Detalle">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="modal-table" class="modal fade" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header no-padding">
                                        <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                <span class="white">&times;</span>
                                            </button>
                                            Results for "Latest Registered Domains
                                        </div>
                                    </div>

                                    <div class="modal-body no-padding">
                                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                            <thead>

                                            <tr>
                                                <th class="hidden"></th>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Tipo caso</th>
                                                <th>Fecha Ini</th>
                                                <th>Fecha Fin</th>
                                                <th>Estado</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">ace.com</a>
                                                </td>
                                                <td>$45</td>
                                                <td>3,330</td>
                                                <td>Feb 12</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">base.com</a>
                                                </td>
                                                <td>$35</td>
                                                <td>2,595</td>
                                                <td>Feb 18</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">max.com</a>
                                                </td>
                                                <td>$60</td>
                                                <td>4,400</td>
                                                <td>Mar 11</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">best.com</a>
                                                </td>
                                                <td>$75</td>
                                                <td>6,500</td>
                                                <td>Apr 03</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="#">pro.com</a>
                                                </td>
                                                <td>$55</td>
                                                <td>4,250</td>
                                                <td>Jan 21</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal-footer no-margin-top">
                                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                            <i class="ace-icon fa fa-times"></i>
                                            Close
                                        </button>

                                        <ul class="pagination pull-right no-margin">
                                            <li class="prev disabled">
                                                <a href="#">
                                                    <i class="ace-icon fa fa-angle-double-left"></i>
                                                </a>
                                            </li>

                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>

                                            <li>
                                                <a href="#">2</a>
                                            </li>

                                            <li>
                                                <a href="#">3</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">
                                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
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
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
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
    jQuery(function ($) {
        //initiate dataTables plugin
        var myTable =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": false},
                                null, null, null, null, null,null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],


                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });


        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons(myTable, {
            buttons: [
                {
                    "extend": "colvis",
                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    columns: ':not(:first):not(:last)'
                },
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: false,
                    message: 'This print was produced using the Print button for DataTables'
                }
            ]
        });
        myTable.buttons().container().appendTo($('.tableTools-container'));

        //style the message box
        var defaultCopyAction = myTable.button(1).action();
        myTable.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });


        var defaultColvisAction = myTable.button(0).action();
        myTable.button(0).action(function (e, dt, button, config) {

            defaultColvisAction(e, dt, button, config);


            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
            }
            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
        });

        ////

        setTimeout(function () {
            $($('.tableTools-container')).find('a.dt-button').each(function () {
                var div = $(this).find(' > div').first();
                if (div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);


        myTable.on('select', function (e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
            }
        });
        myTable.on('deselect', function (e, dt, type, index) {
            if (type === 'row') {
                $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
            }
        });


        /////////////////////////////////
        //table checkboxes
        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

        //select/deselect all rows according to table header checkbox
        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $('#dynamic-table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked) myTable.row(row).select();
                else  myTable.row(row).deselect();
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
            var row = $(this).closest('tr').get(0);
            if (this.checked) myTable.row(row).deselect();
            else myTable.row(row).select();
        });


        $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
            e.stopImmediatePropagation();
            e.stopPropagation();
            e.preventDefault();
        });


        //And for the first simple table, which doesn't have TableTools or dataTables
        //select/deselect all rows according to table header checkbox
        var active_class = 'active';
        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
            var th_checked = this.checked;//checkbox inside "TH" table header

            $(this).closest('table').find('tbody > tr').each(function () {
                var row = this;
                if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
            });
        });

        //select/deselect a row when the checkbox is checked/unchecked
        $('#simple-table').on('click', 'td input[type=checkbox]', function () {
            var $row = $(this).closest('tr');
            if ($row.is('.detail-row ')) return;
            if (this.checked) $row.addClass(active_class);
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

            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
            return 'left';
        }


        /***************/
        $('.show-details-btn').on('click', function (e) {
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
