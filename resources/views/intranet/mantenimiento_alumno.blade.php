<!DOCTYPE html>
<html lang="en">
	<head>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Intranet | Mantenimientos - Alumno</title>

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
		<?php  echo view('intranet/menu'); ?>			
            <div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index">Home</a>
							</li>
							<li>
								Mantenimientos
							</li>
							<li class="active">Alumno</li>
						</ul>
					</div>

					<div class="page-content">
						<div class="page-header"><!-- /.page-header -->
							<h1 id = "mytitulo" >
								Mantenimiento de Alumno
								<button type="button" class="btn btn-primary" style="float: right;margin-top: -8px;" onclick="add_onClick()" >Nuevo +</button>
							</h1>

						</div>
							
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">

                                        <thead>

                                        <tr>
                                        	<th>ID</th>
                                            <th>Nombre</th>
                                            <th>Codigo Pucp</th>
											<th>Número Documento</th>
                                            <th>Correo</th>
											<th>Voluntario</th>
                                            <th>Modificar</th>
                                        </tr>
                                        </thead>

                                        <tbody id ="tbodycontent">
                                       

                                    
                                        </tbody>
                                    </table>
								<div id="grid-pager"></div>
                                <!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->



				</div>

			</div><!-- /.main-content -->
        
			<!-- Popup :  Agregar -->

			<div align="center">        
                <div class="modal fade" id="boton" role="dialog">
					<div class="modal-dialog" style="width: 500px;">
					 
						<div class="modal-content">
                            <div class="modal-header">
                                <h1 type="button" class="close" data-dismiss="modal"></h1>
                            </div>
                            <!-- Modal content-->
                            	<div class="page-header"><!-- /.page-header -->
							<h1 >  Alumno </h1>

							<form class="form-horizontal" role="form" style="padding-left: 66px;">
                                    <div class="space-20" ></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Nombre </label>

										<div class="col-sm-9">
											 <input id="dir_nombre" type="text" id="form-field-3"  class="col-xs-5 col-sm-7" />
									   	
										</div>
									</div>
                                   
									
                                    
                                    
                                    <div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > codigo Pucp </label>

										<div class="col-sm-9">
											<input id="dir_codpucp" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>    
                                
								<div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Número de documento </label>

										<div class="col-sm-9">
											<input id="dir_nrodoc" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
								
								
                                    <div class="space-4"></div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Correo </label>

										<div class="col-sm-9">
											<input id="dir_correo" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
										</div>
									</div>
									<div class="form-group">
                                
                            </div>				
									
                                    <div class="space-20"></div>

								

								</form>


						</div>

                            <div class="modal-footer">
                                <div align="center">
                                    <button id="botonAlumno" type="button" class="btn btn-default" data-dismiss="modal" onclick="close();">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
			
		<?php  echo view('intranet/footer'); ?>

		

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
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


		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
			
			
		</script>
		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
            jQuery('#limantenimientos').addClass('active open');
            jQuery('#mant-alumno').addClass('active');

       var myTable ;
       var data_set = [];
       var editid;
       var action;

        function getButtons(i,alu_id){

                    var param = "'"+i+"','"+alu_id+"'";
                    var butons = '<div class="hidden-sm hidden-xs action-buttons">'+
                                                    
                                                    '<a  onClick="edit_onClick('+param+')" class="green" ">'+
                                                        '<i class="ace-icon fa fa-pencil bigger-130">'+'</i>'+
                                                    '</a>'+

                                                    '<a onClick="delete_onClick('+param+')" class="red" ">'+
                                                        '<i class="ace-icon fa fa-trash-o bigger-130">'+'</i>'+
                                                    '</a>'+
                                                '</div>';

                    
                    return butons;
            }


       function add_onClick(){

       	action="ADD";

       	$("#dir_nombre").val("");
        $("#dir_correo").val("");
        $("#dir_codpucp").val("");
		$("#dir_nrodoc").val("");
        
       	$("#boton").modal()
       }

      
       $("#botonAlumno").on('click', function (e){
                    //alert("mostareaas");
            if (action=="ADD"){
            	//tipo = "Persona";
            	i = data_set.length;
            	var tipo = "SI";
				//validaciones
				if ( $('#dir_nombre').val().length < 1)
            		return;
					
				//	
            	$.ajax({
                    type: "POST",
                    url:'service_alumno',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           
                           alu_nombre: $('#dir_nombre').val(),
                           alu_nrodoc: $("#dir_nrodoc").val(),
                           alu_codpuc: $('#dir_codpucp').val(),
                           alu_correo: $('#dir_correo').val()},
						   
                           
                    
                    success: function(Response){
                    	data_set.push([
						
                            //para agregar al datatable
            					Response,
                                $("#dir_nombre").val(),
	                            $("#dir_codpucp").val(),
								$("#dir_nrodoc").val(),
	                            $("#dir_correo").val(),
								tipo,
	                            getButtons(i,i)
	                            
	                        ] );
                    	 myTable.clear().rows.add(data_set).draw(); 
                        alert("Registrado");
                    }
                });


            	


            }
            if (action=="UPDATE")
            {

			 //guardar cambios
			 
			$.ajax({
                    type: "PATCH",
                    url:'service_alumno/'+data_set[editid][0],
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');
            
                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           
                           alu_nombre: $('#dir_nombre').val(),
                           alu_nrodoc: $("#dir_nrodoc").val(),
                           alu_codpuc: $('#dir_codpucp').val(),
                           alu_correo: $('#dir_correo').val()},
						   
                           
                    
                    success: function(Response){
                    	 
						
					data_set[editid][1]=$("#dir_nombre").val();
					data_set[editid][2]=$("#dir_codpucp").val();
					data_set[editid][3]=$("#dir_nrodoc").val();
					data_set[editid][4]=$("#dir_correo").val();
					
					myTable.clear().rows.add(data_set).draw(); 
						 
                    alert(Response);
                    }
                });
			 
            }

			if (action=="DELETE")
            {

	
			 myTable.rows(editid).remove().draw();
             //myTable.clear().rows.add(data_set).draw();
			 //guardar cambios
			 
			$.ajax({
                    type: "DELETE",
                    url:'service_alumno/'+data_set[editid][0],
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');
            
                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    //data: {
                           //alu_id ,
                           //alu_nombre: $('#dir_nombre').val(),
                           //alu_nrodoc: $("#dir_nrodoc").val(),
                           //alu_codpuc: $('#dir_codpucp').val(),
                           //alu_correo: $('#dir_correo').val()},
						   
                           
                    
                    success: function(Response){
                    
					
                    
					alert(Response);
                    }
                });
			 
            }
                              
        });
       function edit_onClick(id,alu_id) {

       			//alert (id);
				action="UPDATE";
                var rows = myTable.rows(id).data();
                editid = parseInt(id);
                $("#dir_nombre").val(data_set[editid][1]+"");
                $("#dir_codpucp").val(data_set[editid][2]+"");
				$("#dir_nrodoc").val(data_set[editid][3]+"");
                $("#dir_correo").val(data_set[id][4]+"");

                $("#boton").modal()
    
              

        }
		
		function delete_onClick(id,alu_id){
			action="DELETE";
			
			var rows = myTable.rows(id).data();
            editid = parseInt(id);
            $("#dir_nombre").val(data_set[editid][1]+"");
            $("#dir_codpucp").val(data_set[editid][2]+"");
			$("#dir_nrodoc").val(data_set[editid][3]+"");
            $("#dir_correo").val(data_set[id][4]+"");

            $("#boton").modal()
		}
		
        $(document).ready(function(){
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                myTable =
                $('#dynamic-table')                
                        .DataTable({
                        	
                            bAutoWidth: false,
                    		
                            "aoColumns": [

                                null,null,null,null,null,null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });


           

           
                $.ajax({
                   
                    type: "GET",
                    url:'service_alumno',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
						var tipo;
                       
                        for(var i = 0; i<data.length ;i++)
                        {
							if(data[i].alu_volunt === 1)
								tipo = "SI";
							else
								tipo = "NO";
                            //[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]
							if(data[i].usu_activo === 1){
	                            data_set.push([
	                            data[i].alu_id,
                                data[i].alu_nombre,
	                            data[i].alu_codpuc,
								data[i].alu_nrodoc,
	                            data[i].alu_correo,
								tipo,
	                            getButtons(i)
	                            
								])
	                        }
                        
                        }
                        myTable.clear().rows.add(data_set).draw()
                      
                    }
                        
                            
            
                 
            
                });
            
        });
</script>  




	</body>
</html>
