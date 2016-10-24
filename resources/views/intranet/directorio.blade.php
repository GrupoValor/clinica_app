<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Intranet | Directorio</title>

		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        
        <!--logo -->
        <link rel="stylesheet" href="assets/css/index.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

        <script src="assets/js/ace-extra.min.js"></script>

	</head>

	<body class="no-skin">
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
                    <li class="active"><!-- Directorio -->
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
							<li>
								<a href="#">Directorio</a>
							</li>
							<li class="active">Registro</li>
						</ul>
					</div>

					<div class="page-content">
						<div class="page-header"><!-- /.page-header -->
							<h1>
								Directorio de usuarios
							</h1>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<table id="grid-table"></table>

								<div id="grid-pager"></div>
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

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"><!-- flecha para scrollear hasta arriba en moviles-->
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.jqGrid.min.js"></script>
		<script src="assets/js/grid.locale-en.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			var grid_data = 
			[ 
				{name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
				{name:"Andres", lastname:"Leon", phone: "123-321", email:"andres.leon@pucp.pe", address:"Pueblo Libre"},
                {name:"Brajean", lastname:"Junchaya", phone: "321-123", email:"brajean.junchaya@pucp.pe", address:"Ica"},
                {name:"Christian", lastname:"Bedon", phone: "213-123", email:"cbedon@pucp.pe", address:"Jesus María"},
                {name:"Flor", lastname:"Noriega", phone: "135-123", email:"flornoriega@pucp.pe", address:"Surco"},
                {name:"Juanjo", lastname:"Ramirez", phone: "167-867", email:"juanjo.ramirez@pucp.pe", address:"San Miguel"},
                {name:"Juanjo", lastname:"Salas", phone: "314-463", email:"juansalas@pucp.pe", address:"Independencia"},
                {name:"Hugo", lastname:"Villanueva", phone: "198-353", email:"chugito@pucp.pe", address:"Los Olivos"},
                {name:"Milagros", lastname:"Ruiz", phone: "135-323", email:"meleee@pucp.pe", address:"Barranco"},
                {name:"Marcio", lastname:"Pereyra", phone: "134-323", email:"marcio@pucp.pe", address:"La Victoria"},
                {name:"Carlos", lastname:"Bachmann", phone: "123-864", email:"cbach@pucp.pe", address:"San Miguel"},
                {name:"Jose", lastname:"Amador", phone: "145-567", email:"jamador@pucp.pe", address:"Surco"},
                {name:"Kervy", lastname:"Rivas", phone: "198-234", email:"krivas@pucp.pe", address:"Comas"},
                {name:"Luis", lastname:"Alfaro", phone: "452-456", email:"luis.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Maria", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"},
                {name:"Karina", lastname:"Alfaro", phone: "123-123", email:"karina.alfaro@pucp.pe", address:"Los Olivos"}
			];
			
			
			jQuery(function($) {
				var grid_selector = "#grid-table";
				var pager_selector = "#grid-pager";
				
				
				var parent_column = $(grid_selector).closest('[class*="col-"]');
				//resize to fit page size
				$(window).on('resize.jqGrid', function () {
					$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
			    })
				
				//resize on sidebar collapse/expand
				$(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
					if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
						//setTimeout is for webkit only to give time for DOM changes and then redraw!!!
						setTimeout(function() {
							$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
						}, 20);
					}
			    })	
			
				jQuery(grid_selector).jqGrid({			
					data: grid_data,
					datatype: "local",
					height: 'auto',
					colNames:['','Nombres','Apellidos', 'Teléfono', 'Correo electrónico','Dirección'],
					colModel:[
                        {name:'',index:'', width:80, fixed:true, sortable:false, resize:false,
							formatter:'actions', 
							formatoptions:{ 
								keys:true,
								delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
								editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback},
                                
							}
						},
						{name:'name',index:'name', width:50, sortable:true, editable: true, resize:true},
						{name:'lastname',index:'lastname',width:70, sortable:true, editable: true,resize:true},
						{name:'phone',index:'phone', width:60, sorttype:"int", editable: true,resize:true},
						{name:'email',index:'email', width:70, sortable:true, editable: true},
						{name:'address',index:'address', width:150, sortable:true,resize:true,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}}
                        
					], 
			
					viewrecords : true,
					rowNum:10,
					rowList:[10,15,20],
					pager : pager_selector,
					altRows: true,
					//toppager: true,
					
					multiselect: true,
					//multikey: "ctrlKey",
			        multiboxonly: true,
			
					loadComplete : function() {
						var table = this;
						setTimeout(function(){
							styleCheckbox(table);
							
							updateActionIcons(table);
							updatePagerIcons(table);
							enableTooltips(table);
						}, 0);
					},
			
					editurl: "./dummy.php",//nothing is saved
					//caption: "jqGrid with inline editing"
			
					autowidth: true,
			
			
					/**
					,
					grouping:true, 
					groupingView : { 
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
					caption: "Grouping"
					*/
			
				});
                
                
				$(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size
		
				//switch element when editing inline
				function aceSwitch( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=checkbox]')
							.addClass('ace ace-switch ace-switch-5')
							.after('<span class="lbl"></span>');
					}, 0);
				}
				//enable datepicker
				function pickDate( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=text]')
							.datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
					}, 0);
				}
			
			
				//navButtons
				jQuery(grid_selector).jqGrid('navGrid',pager_selector,
					{ 	//navbar options
				        edit: false,
						editicon : 'ace-icon fa fa-pencil blue',
						add: true,
						addicon : 'ace-icon fa fa-plus-circle purple',
						del: true,
						delicon : 'ace-icon fa fa-trash-o red',
						search: true,
						searchicon : 'ace-icon fa fa-search orange',
						refresh: true,
						refreshicon : 'ace-icon fa fa-refresh green',
						view: false,
						viewicon : 'ace-icon fa fa-search-plus grey',
					},
					{
						//edit record form
						//closeAfterEdit: true,
						//width: 700,
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//new record form
						//width: 700,
						closeAfterAdd: true,
						recreateForm: true,
						viewPagerButtons: false,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
							.wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//delete record form
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;
							
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);
							
							form.data('styled', true);
						},
						onClick : function(e) {
							//alert(1);
						}
					},
					{
						//search form
						recreateForm: true,
						afterShowSearch: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
							style_search_form(form);
						},
						afterRedraw: function(){
							style_search_filters($(this));
						}						
					},
					{
						//view record form
						recreateForm: true,
						beforeShowForm: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
						}
					}
				)
                
          
			
			
				
				function style_edit_form(form) {
					//enable datepicker on "sdate" field and switches for "stock" field			
					
					form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
							   //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
							  //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');
			
							
					//update buttons classes
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
					buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')					
				}
			
				function style_delete_form(form) {
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
					buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
				}
				
				function style_search_filters(form) {
					form.find('.delete-rule').val('X');
					form.find('.add-rule').addClass('btn btn-xs btn-primary');
					form.find('.add-group').addClass('btn btn-xs btn-success');
					form.find('.delete-group').addClass('btn btn-xs btn-danger');
				}
				function style_search_form(form) {
					var dialog = form.closest('.ui-jqdialog');
					var buttons = dialog.find('.EditTable')
					buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
					buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
					buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
				}
				
				function beforeDeleteCallback(e) {
					var form = $(e[0]);
					if(form.data('styled')) return false;
					
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_delete_form(form);
					
					form.data('styled', true);
				}
				
				function beforeEditCallback(e) {
					var form = $(e[0]);
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_edit_form(form);
				}
			
			
			
				function styleCheckbox(table) {
	
				}
				
				function updateActionIcons(table) {
				
				}
				
				//replace icons with FontAwesome icons like above
				function updatePagerIcons(table) {
					var replacement = 
					{
						'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
						'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
						'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
						'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
					};
					$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
				}
			
				function enableTooltips(table) {
					$('.navtable .ui-pg-button').tooltip({container:'body'});
					$(table).find('.ui-pg-div').tooltip({container:'body'});
				}
			
				//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');
			
				$(document).one('ajaxloadstart.page', function(e) {
					$.jgrid.gridDestroy(grid_selector);
					$('.ui-jqdialog').remove();
                });
                                
                jQuery('#grid-pager_left').insertBefore('#gview_grid-table');
            
               
            });
		</script>
	</body>
</html>
