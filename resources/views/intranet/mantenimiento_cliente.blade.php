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
											<th>Clínica</th>
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Fecha Nacimiento(Formato: Año-Mes-Dia)</label>

										<div class="col-sm-9">
											<input id="dir_fecnac" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
										</div>
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
													<option value="si">Secundaria incompleta</option>
													<option value="suc">Superior completa</option>
													<option value="sui">Superior incompleta</option>
		
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
										<label class="col-sm-3 col-xs-3 control-label no-padding-right"
											   for="form-field-5">Clínica</label>
										<div class="col-sm-9 col-xs-9">
											<input class="col-xs-7 col-sm-7" type="text" id="dir_clinica" value="" disabled/>
											<button type="button" style="font-size: 12px" class="btn btn-info btn-lg"
													data-toggle="modal" data-target="#modal_clinica">Buscar
											</button>
										</div>
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
		<div align="center">
			<div class="modal fade" id="modal_clinica" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h1 type="button" class="close" data-dismiss="modal">
							</h1>
							<div class="page-header"><!-- /.page-header -->
								<h1> Clínicas </h1>
							</div>
							<table id="table-clinicas" class="table table-striped table-bordered table-hover">
								<thead>
								<tr>

									<th>ID</th>
									<th>Nombre</th>

								</tr>
								</thead>
								<tbody id="tbodycontent">
								</tbody>
							</table>
						</div>
						<div class="modal-footer">
							<div align="center">
								<button id="btnIngresar" type="button" class="btn btn-default" data-dismiss="modal">Aceptar
								</button>
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
       var data_set_cli=[];
       var editid;
       var action;

        function getButtons(i,cli_id){

                    var param = "'"+i+"','"+cli_id+"'";
                    var butons = '<div class="hidden-sm hidden-xs action-buttons">'+
                                                    
                                                    '<a  onClick="edit_onClick('+param+')" class="green">'+
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
		$("#dir_clinica").val("");
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
					nivel = "Sin estudios";
				}else if($( "#dir_nivedu option:selected" ).val() === 'pi'){
					nivel = "Primaria incompleta";
				}else if($( "#dir_nivedu option:selected" ).val() === 'pc'){
					nivel = "Primaria completa";
				}else if($( "#dir_nivedu option:selected" ).val() === 'si'){
					nivel = "Secundaria incompleta";
				}else if($( "#dir_nivedu option:selected" ).val() === 'sc'){
					nivel = "Secundaria completa";
				}else if($( "#dir_nivedu option:selected" ).val() === 'sui'){
					nivel = "Superior incompleto";
				}else if($( "#dir_nivedu option:selected" ).val() === 'suc'){
					nivel = "Superior completo";
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
                           
							cli_nombre : $("#dir_nombre").val(),
							cli_genero : genero,
							cli_fecnac : $("#dir_fecnac").val(),
							cli_numhij : $("#dir_numhij").val(),
							cli_nivedu : nivel,
							cli_nrodoc : $("#dir_nrodoc").val(),
							cli_ocupac : $("#dir_ocupac").val(),
							cli_direcc : $("#dir_direcc").val(),
							cli_telno1 : $("#dir_telno1").val(),
							cli_telno2 : $("#dir_telno2").val(),
							cli_correo : $("#dir_correo").val(),
							cli_clinica: $("#dir_clinica").val()},
                    
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
								$("#dir_clinica").val(),
	                            getButtons(i,i)
	                            
	                        ]);
                    	myTable.clear().rows.add(data_set).draw(); 
                        alert("Registrado");
						
                    }
					
                });


            	


            }
            if (action=="UPDATE")
            {
			
			


            //data_set[editid][1]=$("#dir_nombre").val();
	        //data_set[editid][2]=$("#dir_nrodoc").val();
	        //data_set[editid][3]=$("#dir_nivedu").val();
			//data_set[editid][4]=$("#dir_ocupac").val();
			//data_set[editid][5]=$("#dir_telno1").val();
			//data_set[editid][6]=$("#dir_correo").val();
            // myTable.clear().rows.add(data_set).draw();
			 
			var genero;
            if ($( "#dir_genero option:selected" ).val() === 'm') {
				genero = "m";
            }else
				genero = "f";
			
			var nivel;
			if($( "#dir_nivedu option:selected" ).val() === 's'){
				nivel = "Sin Estudios";
			}else if($( "#dir_nivedu option:selected" ).val() === 'pi'){
				nivel = "Primaria incompleta";
			}else if($( "#dir_nivedu option:selected" ).val() === 'pc'){
				nivel = "Primaria completa";
			}else if($( "#dir_nivedu option:selected" ).val() === 'si'){
				nivel = "Secundaria incompleta";
			}else if($( "#dir_nivedu option:selected" ).val() === 'sc'){
				nivel = "Secundaria completa";
			}else if($( "#dir_nivedu option:selected" ).val() === 'sui'){
				nivel = "Superior incompleto";
			}else if($( "#dir_nivedu option:selected" ).val() === 'suc'){
				nivel = "Superior completo";
			}
			
			 
			$.ajax({
                    type: "PATCH",
                    url:'service_cliente/'+data_set[editid][0],
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');
            
                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           
							cli_nombre : $("#dir_nombre").val(),
							cli_genero : genero,
							cli_fecnac : $("#dir_fecnac").val(),
							cli_numhij : $("#dir_numhij").val(),
							cli_nivedu : nivel,
							cli_nrodoc : $("#dir_nrodoc").val(),
							cli_ocupac : $("#dir_ocupac").val(),
							cli_direcc : $("#dir_direcc").val(),
							cli_telno1 : $("#dir_telno1").val(),
							cli_telno2 : $("#dir_telno2").val(),
							cli_correo : $("#dir_correo").val(),
						   cli_clinica : $("#dir_clinica").val()},
                           
                    
                    success: function(Response){
                    	 
						
					data_set[editid][1]=$("#dir_nombre").val();
					data_set[editid][2]=$("#dir_nrodoc").val();
					data_set[editid][3]=nivel;
					data_set[editid][4]=$("#dir_ocupac").val();
					data_set[editid][5]=$("#dir_telno1").val();
					data_set[editid][6]=$("#dir_correo").val();
                    data_set[editid][7]=$("#dir_clinica").val();
					data_set[editid][9]=genero;
					data_set[editid][10]=$("#dir_fecnac").val();
					data_set[editid][11]=$("#dir_numhij").val();
					data_set[editid][12]=$("#dir_direcc").val();
					data_set[editid][13]=$("#dir_telno2").val();
					myTable.clear().rows.add(data_set).draw(); 
						 
                    alert(Response);
                    }
                });
			 
			 
            }

			if (action=="DELETE")
            {

	
			 
             //myTable.clear().rows.add(data_set).draw();
			 //guardar cambios
			 
			$.ajax({
                    type: "DELETE",
                    url:'service_cliente/'+data_set[editid][0],
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
                    
					myTable.rows(editid).remove().draw();
                    
					alert(Response);
                    }
                });
			 
            }
                              
        });
       function edit_onClick(id,cli_id) {

       			//alert (id);
				action="UPDATE";
				
				
		
                var rows = myTable.rows(id).data();
                editid = parseInt(id);
				
				var nivel;
				if(data_set[editid][3] === "Sin Estudios"){
					nivel = "se";
				}else if(data_set[editid][3] === "Primaria incompleta"){
					nivel = "pi";
				}else if(data_set[editid][3] === "Primaria completa"){
					nivel = "pc";
				}else if(data_set[editid][3] === "Secundaria incompleta"){
					nivel = "si";
				}else if(data_set[editid][3] === "Secundaria completa"){
					nivel = "sc";
				}else if(data_set[editid][3] === "Nivel Superior Incompleto"){
					nivel = "sui";
				}else if(data_set[editid][3] === "Nivel Superior Completo"){
					nivel = "suc";
				}
				
				
				
                $("#dir_nombre").val(data_set[editid][1]+"");
                $("#dir_nrodoc").val(data_set[editid][2]+"");
                $("#dir_nivedu").val(nivel);
				$("#dir_ocupac").val(data_set[editid][4]+"");
				$("#dir_telno1").val(data_set[editid][5]+"");
				$("#dir_correo").val(data_set[editid][6]+"");
				$("#dir_clinica").val(data_set[editid][7]+"");
				$("#dir_genero").val(data_set[editid][9]+"");
				$("#dir_fecnac").val(data_set[editid][10]+"");
				$("#dir_numhij").val(data_set[editid][11]+"");
				$("#dir_direcc").val(data_set[editid][12]+"");
				$("#dir_telno2").val(data_set[editid][13]+"");
				

                $("#boton").modal()
    
              

        }
		
		function delete_onClick(id,cli_id){
			action="DELETE";
			
			var rows = myTable.rows(id).data();
            editid = parseInt(id);
            $("#dir_nombre").val(data_set[editid][1]+"");
            $("#dir_nrodoc").val(data_set[editid][2]+"");
            $("#dir_nivedu").val(data_set[id][3]+"");
			$("#dir_ocupac").val(data_set[id][4]+"");
			$("#dir_telno1").val(data_set[id][5]+"");
			$("#dir_correo").val(data_set[id][6]+"");
			$("#dir_clinica").val(data_set[id][7]+"");
            $("#boton").modal()
		}
		
        $(document).ready(function(){
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                myTable =
                $('#dynamic-table')                
                        .DataTable({
                        	
                            bAutoWidth: false,
                    		
                            "aoColumns": [

                                null,null,null,null,null,null,null,null,
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
                            if(data[i].usu_activo === 1){
	                            data_set.push([
	                            data[i].cli_id,
                                data[i].cli_nombre,
	                            data[i].cli_nrodoc,
	                            data[i].cli_nivedu,
								data[i].cli_ocupac,
								data[i].cli_telno1,
								data[i].cli_correo,
									data[i].cli_clinica,
	                            getButtons(i),
								//para los modales
	                            data[i].cli_genero,
								data[i].cli_fecnac,
								data[i].cli_numhij,
								data[i].cli_direcc,
								data[i].cli_telno2
								
	                        ] )
	                        
							}
                        
                        }
                        myTable.clear().rows.add(data_set).draw()
                      
                    }
                        
                            
            
                 
            
                });
            
        });
            $(document).ready(function () {

                tableCli = $('#table-clinicas')
                    .DataTable({
                        bAutoWidth: false,
                        "aoColumns": [
                            null, null
                        ],
                        "aaSorting": [],
                        select: {
                            style: 'single'
                        }
                    });
                $('#table-clinicas').on('click', 'tr', function () {
                    var id2 = tableCli.row(this).index();
                    var data = tableCli.row(id2).data();
					/*doc_id = data[0];
					 $("#cln_prof").val(data[3]);*/
                    $("#dir_clinica").val(data[0]+"");
                });
                $.ajax({
                    type: "GET",
                    url: 'service_clinica',
                    success: function (result) {
                        var data = jQuery.parseJSON(result);
                        for (var i = 0; i < data.length; i++) {
                            data_set_cli.push([
                                data[i].cln_id,
                                data[i].cln_nombre

                            ])
                        }
                        tableCli.clear().rows.add(data_set_cli).draw()
                    }
                });
            });
</script>  




	</body>
</html>