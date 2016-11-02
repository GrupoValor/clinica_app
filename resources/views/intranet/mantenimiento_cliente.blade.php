<!DOCTYPE html>
<html lang="en">
	<head>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Intranet | Mantenimientos - Cliente</title>

		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />
		
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />

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
							<li class="active">Clientes</li>
						</ul>
					</div>

					<div class="page-content">
						<div class="page-header"><!-- /.page-header -->
							<h1 id = "mytitulo" >
								Mantenimiento de Clientes
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
                                            <th>N° documento</th>
											<th>Nivel educativo</th>
											<th>Ocupación</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
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
							<h1 >  Cliente </h1>

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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Género </label>

										<div class="col-sm-9">
											 <select id="dir_genero" class="col-xs-5 col-sm-7" data-placeholder="Click para elegir...">
													<option value="m">Masculino</option>
													<option value="f">Femenino</option>
													
												</select>
									   	
										</div>
									</div>
                                    
                                   
                                
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Fecha Nacimiento(Formato: Año/Mes/Dia)</label>

										<div class="col-sm-9">
											<input id="dir_fecnac" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
										</div>
										<!--<div class="col-sm-4">
															<div class="col-sm-4">
																<div class="input-group">
																	
																	<input  class="form-control date-picker" class="col-xs-5 col-sm-7" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
										</div>-->
									</div>
								
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Numero de hijos </label>

										<div class="col-sm-9">
											<input id="dir_numhij" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
										</div>
									</div>
									
									
								
									<div class="space-4"></div>
									
									<div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Nivel Educativo </label>

										<div class="col-sm-9">
											 <select id="dir_nivedu" class="col-xs-5 col-sm-7" data-placeholder="Click para elegir...">
													<option value="s">Sin estudios</option>
													<option value="pc">Primaria completa</option>
													<option value="pi">Primaria incompleta</option>
													<option value="sc">Secundaria completa</option>
													<option value="si">secundaria incompleta</option>
													<option value="suc">Superior completa</option>
													<option value="sui">superior incompleta</option>
		
												</select>
									   	
										</div>
									</div>  

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Ocupación </label>

										<div class="col-sm-9">
											<input id="dir_ocupac" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
									
									<div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Direccion </label>

										<div class="col-sm-9">
											<input id="dir_direcc" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
									
								
									
									<div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Telefono 1 </label>

										<div class="col-sm-9">
											<input id="dir_telno1" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
								
									<div class="space-4"></div>
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Telefono 2 </label>

										<div class="col-sm-9">
											<input id="dir_telno2" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
								
                                    <div class="space-4"></div>
                                    
                                    

                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > Numero documento </label>

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
                                    <button id="botonCliente" type="button" class="btn btn-default" data-dismiss="modal" onclick="close();">Aceptar</button>
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
		
		<script src="assets/js/bootstrap-datepicker.min.js"></script>


		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
			
			
		</script>
		
		
		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
            //$('.date-picker').datepicker({
			//		autoclose: true,
			//		todayHighlight: true
			//	})
				//show datepicker when clicking on the icon
			//	.next().on(ace.click_event, function(){
			//		$(this).prev().focus();
			//	});
			
			jQuery('#limantenimientos').addClass('active open');
            jQuery('#mant-cliente').addClass('active');

       var myTable ;
       var data_set = [];
       var editid;
       var action;

        function getButtons(i,cli_id){

                    var param = "'"+i+"','"+cli_id+"'";
                    var butons = '<div class="hidden-sm hidden-xs action-buttons">'+
                                                    
                                                    '<a  onClick="edit_onClick('+param+')" class="green" ">'+
                                                        '<i class="ace-icon fa fa-pencil bigger-130">'+'</i>'+
                                                    '</a>'+

                                                    '<a onClick="edit_onClick(\'borrar\')" class="red" href="#">'+
                                                        '<i class="ace-icon fa fa-trash-o bigger-130">'+'</i>'+
                                                    '</a>'+
                                                '</div>';

                    
                    return butons;
            }


       function add_onClick(){

       	action="ADD";

       	$("#dir_nombre").val("");
		$("#dir_genero").val("");
		$("#dir_fecnac").val("");
		$("#dir_numhij").val("");
		$("#dir_nivedu").val("");
		$("#dir_nrodoc").val("");
		$("#dir_ocupac").val("");
		$("#dir_direcc").val("");
		$("#dir_correo").val("");
		$("#dir_telno1").val("");
		$("#dir_telno2").val("");
		
       	$("#boton").modal()
       }

      
       $("#botonCliente").on('click', function (e){
                    //alert("mostareaas");
            if (action=="ADD"){
            	var genero;
            	if ($( "#dir_genero option:selected" ).val() === 'm') {
					genero = "m";
                }else
					genero = "f";
				
				var nivel;
				if($( "#dir_nivedu option:selected" ).val() === 's'){
					nivel = "Sin Estudios";
				}else if($( "#dir_nivedu option:selected" ).val() === 'pi'){
					nivel = "Primaria Incompleta";
				}else if($( "#dir_nivedu option:selected" ).val() === 'pc'){
					nivel = "Primaria Completa";
				}else if($( "#dir_nivedu option:selected" ).val() === 'si'){
					nivel = "Secundaria Incompleta";
				}else if($( "#dir_nivedu option:selected" ).val() === 'sc'){
					nivel = "Secundaria Completa";
				}else if($( "#dir_nivedu option:selected" ).val() === 'sui'){
					nivel = "Nivel Superior Incompleto";
				}else if($( "#dir_nivedu option:selected" ).val() === 'suc'){
					nivel = "Nivel Superior Completo";
				}
				
				
				
				i = data_set.length;
				
            	
				if ( $('#dir_nombre').val().length < 1)
            		return;
            	
				$.ajax({
                    type: "POST",
                    url:'service_cliente',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           
							cli_nombre : $("#dir_nombre").val(""),
							cli_genero : genero,
							cli_fecnac : $("#dir_fecnac").val(""),
							cli_numhij : $("#dir_numhij").val(""),
							cli_nivedu : nivel,
							cli_nrodoc : $("#dir_nrodoc").val(""),
							cli_ocupac : $("#dir_ocupac").val(""),
							cli_direcc : $("#dir_direcc").val(""),
							cli_telno1 : $("#dir_telno1").val(""),
							cli_telno2 : $("#dir_telno2").val(""),
							cli_correo : $("#dir_correo").val("")},
                           
                    
                    success: function(Response){
                    	data_set.push([
                            //para agregar al datatable
            					Response,
                                $("#dir_nombre").val(),
								$("#dir_nrodoc").val(),
								nivel,
	                            $("#dir_ocupac").val(),
								$("#dir_telno1").val(),
								$("#dir_correo").val(),
	                            getButtons(i,i)
	                            
	                        ]);
                    	myTable.clear().rows.add(data_set).draw(); 
                        alert("Registrado");
						
                    }
					
                });


            	


            }
            if (action=="UPDATE")
            {
			
			


            data_set[editid][1]=$("#dir_nombre").val();
	        data_set[editid][2]=$("#dir_nrodoc").val();
	        data_set[editid][3]=$("#dir_nivedu").val();
			data_set[editid][4]=$("#dir_ocupac").val();
			data_set[editid][5]=$("#dir_telno1").val();
			data_set[editid][6]=$("#dir_correo").val();
             myTable.clear().rows.add(data_set).draw(); 
            }          
                              
        });
       function edit_onClick(id,cli_id) {

       			//alert (id);
				action="UPDATE";
                var rows = myTable.rows(id).data();
                editid = parseInt(id);
                $("#dir_nombre").val(data_set[editid][1]+"");
                $("#dir_nrodoc").val(data_set[editid][2]+"");
                $("#dir_nivedu").val(data_set[id][3]+"");
				$("#dir_ocupac").val(data_set[id][4]+"");
				$("#dir_telno1").val(data_set[id][5]+"");
				$("#dir_correo").val(data_set[id][6]+"");

                $("#boton").modal()
    
              

              }
        $(document).ready(function(){
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                myTable =
                $('#dynamic-table')                
                        .DataTable({
                        	
                            bAutoWidth: false,
                    		
                            "aoColumns": [

                                null,null,null,null,null,null,null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });


           

           
                $.ajax({
                   
                    type: "GET",
                    url:'service_cliente',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                      
                       
                        for(var i = 0; i<data.length ;i++)
                        {
                            
	                            data_set.push([
	                            data[i].cli_id,
                                data[i].cli_nombre,
	                            data[i].cli_nrodoc,
	                            data[i].cli_nivedu,
								data[i].cli_ocupac,
								data[i].cli_telno1,
								data[i].cli_correo,
	                            getButtons(i)
	                            
	                        ] )
	                        
                        
                        }
                        myTable.clear().rows.add(data_set).draw()
                      
                    }
                        
                            
            
                 
            
                });
            
        });
</script>  




	</body>
</html>