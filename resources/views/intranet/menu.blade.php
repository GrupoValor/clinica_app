<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">


    function addPrincipal(){
        return '<li class="" id="principal" > <!-- Principal -->'+
                        '<a href="index">'+
                            '<i class="menu-icon fa fa-tachometer"></i>'+
                            '<span class="menu-text">Principal </span>'+
                        '</a>'+
                    '</li>';

    }
    function addCasos(){
        return '<li id="licasos" class=""> <!-- Registro de casos -->'+
                        '<a href="#" class="dropdown-toggle">'+
                         '   <i class="menu-icon fa fa-pencil-square-o"></i>'+
                          '  <span class="menu-text"> Registro de casos </span>'+
                           ' <b class="arrow fa fa-angle-down"></b>'+
                        '</a>'+
                        '<b class="arrow"></b>'+
                        '<ul class="submenu" >'+
                            '<li class="" id="casos-registro">'+
                                '<a href="casos_registro" >'+
                                    '<i class="menu-icon fa fa-caret-right"></i>'+
                                    'Registro'+
                                '</a>'+
                                '<b class="arrow"></b>'+
                            '</li>'+
                            '<li class="" id="casos-busqueda">'+
                                '<a href="casos_busqueda">'+
                                    '<i class="menu-icon fa fa-caret-right"></i>'+
                                    'Búsqueda'+
                                '</a>'+
                                '<b class="arrow"></b>'+
                            '</li>'+                   
                        '</ul>'+
                    '</li>';

    }

    function addTareas(){
        return '<li id="litareas"><!-- Tareas académicas -->'+
                '        <a href="#" class="dropdown-toggle">'+
                '            <i class="menu-icon fa fa-list-alt"></i>'+
                '            <span class="menu-text"> Tareas académicas </span>'+
                '            <b class="arrow fa fa-angle-down"></b>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '        <ul class="submenu">'+

                '            <li id ="licursos" >'+
                '                <a href="mant_curso">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Mantenimiento de curso'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '            <li id ="liciclo" >'+
                '                <a href="mant_ciclo">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Mantenimiento de ciclo'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '            <li id ="lirubricas" >'+
                '                <a href="ta_registro">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Mantenimiento de rúbricas'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '            <li id="linotas" class="">'+
                '                <a href="ta_notas">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Registro de notas'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '        </ul>'+
                '    </li>';
    }

    function addTareasjp(){
        return '<li id="litareas"><!-- Tareas académicas -->'+
                '        <a href="#" class="dropdown-toggle">'+
                '            <i class="menu-icon fa fa-list-alt"></i>'+
                '            <span class="menu-text"> Tareas académicas </span>'+
                '            <b class="arrow fa fa-angle-down"></b>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '        <ul class="submenu">'+
                '            <li id="linotas" class="">'+
                '                <a href="ta_notas">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Registro de notas'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '        </ul>'+
                '    </li>';
    }

    function addTareasAumno(){
        return '<li id="litareas"><!-- Tareas académicas -->'+
                '        <a href="#" class="dropdown-toggle">'+
                '            <i class="menu-icon fa fa-list-alt"></i>'+
                '            <span class="menu-text"> Tareas académicas </span>'+
                '            <b class="arrow fa fa-angle-down"></b>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '        <ul class="submenu">'+
                '            <li class="" id="lialumnos">'+
                '                <a href="service_alumno_ta">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Alumno'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '        </ul>'+
                '    </li>';
    }

    function addDirectorio(){
        return '<li id="lidirectorio"><!-- Directorio -->'+
                '        <a href="directorio">'+
                '            <i class="menu-icon fa fa-book"></i>'+
                '            <span class="menu-text"> Directorio </span>'+                           
                '        </a>'+                        
                    '</li>';
    }
    function addMapa(){
        return '<li class="hide" id="limapa"> <!-- Mapa -->'+
                '        <a href="mapa_intranet">'+
                '            <i class="menu-icon fa fa-map-marker"></i>'+
                '            <span class="menu-text"> Mapa </span>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '    </li>';
    }
    function addMantenimiento(){
        return '<li id="licasos" class=""> <!-- Registro de casos -->'+
                '   <a href="#" class="dropdown-toggle">'+
                '       <i class="menu-icon fa fa-desktop"></i>'+
                '       <span class="menu-text"> Mantenimientos </span>'+
                '       <b class="arrow fa fa-angle-down"></b>'+
                '   </a>'+
                '   <b class="arrow"></b>'+
                '   <ul class="submenu" >'+
                '   <li class="" id="casos-registro">'+
                '       <a href="manten2" >'+
                '           <i class="menu-icon fa fa-caret-right"></i>'+
                '           Usuarios'+
                '       </a>'+
                '       <b class="arrow"></b>'+
                '   </li>'+
                '   <li class="" id="casos-busqueda">'+
                '       <a href="mant_clinica">'+
                '       <i class="menu-icon fa fa-caret-right"></i>'+
                '       Clínicas'+
                '       </a>'+
                '       <b class="arrow"></b>'+
                '   </li>'+
                '   </ul>'+
                '</li>';
    }
    function addReportes(){
        return '<li id="lireportes"class=""> <!-- Reportes FALTA-->'+
                '        <a href="#" class="dropdown-toggle">'+
                '            <i class="menu-icon fa fa-file-o"></i>'+
                '            <span class="menu-text">'+
                '                Auditoria'+
                '            </span>'+
                '            <b class="arrow fa fa-angle-down"></b>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '        <ul class="submenu">'+
                '            <li class="">'+
                '                <a href="log">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Inicio Sesion'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '        </ul>'+
                '    </li>';
    }
    function addContenidos(){
        return '<li class="" id="ligestor"> <!--Gestor de contenidos-->'+
                '        <a href="#" class="dropdown-toggle">'+
                '            <i class="menu-icon fa fa-cog"></i>'+
                '            <span class="menu-text">'+
                '                Contenidos'+
                '            </span>'+
                '            <b class="arrow fa fa-angle-down"></b>'+
                '        </a>'+
                '        <b class="arrow"></b>'+
                '        <ul class="submenu">'+
                '            <li class="" id="linoticias"><!-- Noticias -->'+
                '                <a href="noticias_intranet">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Noticias'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '            <li class="" id="lieventos"> <!-- Eventos -->'+
                '                <a href="eventos_intranet">'+
                '                    <i class="menu-icon fa fa-caret-right"></i>'+
                '                    Eventos'+
                '                </a>'+
                '                <b class="arrow"></b>'+
                '            </li>'+
                '        </ul>'+
                '    </li>';
    }
    
    $.ajax({
                   
                    type: "GET",
                    url:'user',
                    success: function(result){
        
                        var data = JSON.parse(result);

                        $('#session_data').val(data);
                        $('#user_name').html(data.nombre)

                        if(data.rol=='1'){
                            $('#list_of_menu').html(
                            addPrincipal()+
                            addCasos()+
                            addTareas()+
                            addDirectorio()+
                            addMapa()+
                            addMantenimiento()+
                            addReportes()+
                            addContenidos()
                            )
                          
                        }
                        
                        //Alumno y Voluntario
                       
                        if(data.rol=='2' ){


                             $('#list_of_menu').html(
                            addPrincipal()+
                            addCasos()+
                            addTareasAumno()+
                            addDirectorio()+
                            addMapa()+
                            addMantenimiento()
                            )
                           
                        }

                        if(data.rol=='3'){

                            
                             $('#list_of_menu').html(
                            addPrincipal()+
                            addCasos()+
                            addDirectorio()+
                            addMapa()+
                            addMantenimiento()
                            )
                           
                        }

                        // Docente y JP
                        if(data.rol=='4'){
                            $('#list_of_menu').html(
                            addPrincipal()+
                            addCasos()+
                            addTareas()+
                            addDirectorio()+
                            addMapa()+
                            addMantenimiento()+
                            addReportes()
                            )
                          
                        }

                        if( data.rol=='5'){
                            $('#list_of_menu').html(
                            addPrincipal()+
                            addCasos()+
                            addTareasjp()+
                            addDirectorio()+
                            addMapa()+
                            addMantenimiento()+
                            addReportes()
                            )
                          
                        }
                        // Gestor de contenidos
                        if(data.rol=='6'){
                            
                            $('#list_of_menu').html(
                            addPrincipal()+
                            addContenidos()
                          
                            )
                            
                          
                        }
                         // Cliente
                        if(data.rol=='7'){
                            $('#list_of_menu').html(
                                addPrincipal()
                            );
                          
                        }

                    }
                        
                            
            
                 
            
                });

    function logout(){
        {
            $.ajax({
                   
                    type: "GET",
                    url:'logout',
                    success: function(result){
                        
                        window.location.replace("login");
                        
                      
                    }
                        
                            
            
                 
            
                });
        
        }
    } 


var num_notifieds = 0;

$.ajax({
                   
                    type: "GET",
                    url:'mispendientes',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                        num_notifieds += data.length;
                      
       
                        var column ='<span class="pull-left">'+
                                                                '<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>'+
                                                                ' Tareas pendientes'+
                                                            '</span>'+
                                                             '<span class="pull-right badge badge-info">+'+data.length+'</span>';


                        $("#tareas_notify").html(column);

                        
                       // $("#tbodycontent").html (rows);
                    }
                        
                            
            
                        //alert(Response);
                         
            
                });

function mapa_onclick(id){
            window.open("mapa/mapa.php?cas_id="+id, "Detalle del Caso", "directories=no, location=no, menubar=no, scrollbars=no, statusbar=no, tittlebar=no, width=1200, height=700,resizable=no,toolbar=no,dependent");
        }

$.ajax({
                   
                    type: "GET",
                    url:'misalertas',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
             
                        num_notifieds += data.length;
                       

                        var columns = $("#total_notifies").html();
                        for(var i = 0; i<data.length ;i++)
                        {
                        columns += ' <li>'+   
                         '                   <a  href="" onclick="mapa_onclick('+ data[i].cas_id+')">'+
                         '                    <div class="clearfix">'+
                         '                           <span class="pull-left">'+
                         '                       <i class="btn btn-xs btn-primary fa fa-flag"></i>'+
                         '                        <p style="    float: right; margin-left: 5px; max-width: 150px;"> '+
                         '<b style="color: #337ab7;"> Documentos encontrados </b> <br> '+data[i].cas_objact+' </p>'+
                         '                       </span>'+
                         '                           <span class="pull-right badge badge-info">+'+data[i].nincide+'</span>'+
                         '                       </div>'+
                         '                   </a> </li>';
                            }
                        


                         $("#total_notifies").html(columns)
                         $("#count_notify").html(num_notifieds);
                         $("#num_notify").html('<i class="ace-icon fa fa-exclamation-triangle"></i>'+num_notifieds+
                                    '  Notifications');

                       // $("#tbodycontent").html (rows);
                    }
                        
                            
            
                        //alert(Response);
                         
            
                });
</script>


<input id="session_data" type="hidden" name="">

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
                                <span class="badge badge-important" id="count_notify" ></span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close" id ="total_notifies">
                                <li class="dropdown-header" id="num_notify">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>
                                    8 Notifications
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="index">
                                                <div class="clearfix" id ="tareas_notify">
                                                            <span class="pull-left">
                                                                <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                                                Tareas pendientes
                                                            </span>
                                                    <span class="pull-right badge badge-info"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li >
                                        
                                        </li>
                                    </ul>
                                </li>

                                
                            </ul>
                        </li>
                        <li class="light-blue dropdown-modal"> <!-- Bienvenido, Luis -->
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="assets/images/avatars/user2.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                            <small>Bienvenido,</small>
                                            <p id="user_name" ></p>
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
                                    <a href="#" onclick="logout();">
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
                <ul  id=list_of_menu class="nav nav-list"><!-- barra de menu a la izq -->
                    
                    
                   
                   
                    		
                            
                </ul>
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <!--Contraer barra de menú-->
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            
