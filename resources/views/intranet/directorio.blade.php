
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="csrf_token" content="{{ csrf_token() }}" />
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
		<?php  echo view('intranet/menu'); ?>
			
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
							<h1 id = "mytitulo" >
								Directorio
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
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>Teléfono</th>
                                            <th>E-mail</th>
                                            <th>Dirección</th>
                                            <th>Dirección Web</th>
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
							<h1 >  Contacto </h1>

							<form class="form-horizontal" role="form" style="padding-left: 66px;">
                                    <div class="space-20" ></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Tipo </label>

										<div class="col-sm-9">
											 <select id="dir_tipocon" class="col-xs-5 col-sm-7" data-placeholder="Click para elegir...">
													<option value="p">Persona</option>
													<option value="i">Institucion</option>
		
												</select>
									   	
										</div>
									</div>
                                   
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Nombre </label>

										<div class="col-sm-9">
											<input id="dir_nombre" type="text" id="form-field-3"  class="col-xs-5 col-sm-7" />
										</div>
									</div>
                                    <div class="space-4"></div>
                                    
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Teléfono </label>

										<div class="col-sm-9">
											<input id="dir_telefono" type="text" id="form-field-4" class="col-xs-5 col-sm-7" />
										</div>
									</div>
                                    <div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5" > E-mail </label>

										<div class="col-sm-9">
											<input id="dir_email" type="text"   class="col-xs-5 col-sm-7"  />
										</div>
									</div>
									<div class="space-4"></div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Direccion Web</label>

										<div class="col-sm-9">
											<input id="dir_web" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"> Direccion </label>

										<div class="col-sm-9">
											<input id="dir_direcc" type="text" id="form-field-5"  class="col-xs-5 col-sm-7" />
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
		<script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../assets/js/dataTables.buttons.min.js"></script>
		<script src="../assets/js/buttons.flash.min.js"></script>
		<script src="../assets/js/buttons.html5.min.js"></script>
		<script src="../assets/js/buttons.print.min.js"></script>
		<script src="../assets/js/buttons.colVis.min.js"></script>
		<script src="../assets/js/dataTables.select.min.js"></script>


		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
			
			
		</script>
		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
       var myTable ;
       var data_set = [];
       var editid;
       var action;

        function getButtons(i,con_id){

                    var param = "'"+i+"','"+con_id+"'";
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
        $("#dir_telefono").val("");
        $("#dir_email").val("");
        $("#dir_web").val("");
        $("#dir_direcc").val("");
       	$("#boton").modal()
       }

      
       $("#botonCliente").on('click', function (e){
                    //alert("mostareaas");
            if (action=="ADD"){
            	tipo = "Persona";
            	if ($( "#dir_tipocon option:selected" ).val() == 'i') {
                                tipo = "Institucion";
                            }

                                
            	
            	i = data_set.length;
            	if ( $('#dir_nombre').val().length < 1)
            		return;
            	$.ajax({
                    type: "POST",
                    url:'/service_directorio',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           con_tipcon : $( "#dir_tipocon option:selected" ).val(),
                           con_nombre: $('#dir_nombre').val(),
                           con_nrotel: $('#dir_telefono').val(),
                           con_correo: $('#dir_email').val(),
                           con_dirweb: $('#dir_web').val(),
                           con_direcc: $('#dir_direcc').val()},
                    success: function(Response){
                    	data_set.push([
            					data_set[i-1][0],
	                            tipo,
	                            $("#dir_nombre").val(),
	                            $("#dir_telefono").val(),
	                            $("#dir_email").val(),
	                            $("#dir_web").val(),
	                            $("#dir_direcc").val(),
	                            getButtons(i,i)
	                            
	                        ] );
                    	 myTable.clear().rows.add(data_set).draw(); 
                        alert(Response);
                    }
                });


            	


            }
            if (action=="UPDATE")
            {

            tipo = 'i'
            if ($( "#dir_tipocon option:selected" ).val() == "Persona"){
            	tipo = 'p'
            }
            $.ajax({
                    type: "PATCH",
                    url:'/service_directorio/'+data_set[editid][0],
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           con_tipcon : tipo,
                           con_nombre: $('#dir_nombre').val(),
                           con_nrotel: $('#dir_telefono').val(),
                           con_correo: $('#dir_email').val(),
                           con_dirweb: $('#dir_web').val(),
                           con_direcc: $('#dir_direcc').val()},
                    success: function(Response){

                    	tipo = "Persona";
                    	if($("#dir_tipocon option:selected").val()== 'i')
                    		tipo = "Institucion";
                    	data_set[editid][1]= tipo;
                    	data_set[editid][2]=$("#dir_nombre").val();
				        data_set[editid][3]=$("#dir_telefono").val();
				        data_set[editid][4] =$("#dir_email").val();
				        data_set[editid][5]=$("#dir_web").val();
				        data_set[editid][6]=$("#dir_direcc").val();
			            myTable.clear().rows.add(data_set).draw(); 
                    	
                        alert(Response);
                    }
                });

           
            }          
                              
        });
       function edit_onClick(id,con_id) {

       			//alert (id);
				action="UPDATE";
                var rows = myTable.rows(id).data();
                editid = parseInt(id);
                tipo = "p";
                if (data_set[editid][1] == 'Institucion') {
                                tipo = "i";
                            }

                $("#dir_tipocon").val(tipo);
                $("#dir_nombre").val(data_set[editid][2]+"");
                $("#dir_telefono").val(data_set[editid][3]+"");
                $("#dir_email").val(data_set[editid][4]+"");
                $("#dir_web").val(data_set[editid][5]+"");
                $("#dir_direcc").val(data_set[id][6]+"");

                $("#boton").modal()
               //alert(rows[0][3]);
              

              }
        $(document).ready(function(){
               myTable =
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                        	
                            bAutoWidth: true,
                    		"columnDefs": [
							    { "width": "160px", "targets": [2,4] },
							     { "width": "200px", "targets": [5] },
							     { "visible": false, "targets": [0] }
							  ],
                            "aoColumns": [

                                null,null, null, null, null,null, null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });


           

           
                $.ajax({
                   
                    type: "GET",
                    url:'../service_directorio',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                        var rows = "";
                        $("#tbodycontent").html(rows);
                       
                        for(var i = 0; i<data.length ;i++)
                        {
                            var tipo ="";

                            if (data[i].con_tipcon == 'p') {
                                tipo = "Persona";
                            }
                            else
                                tipo = "Institucion";

	                            data_set.push([
	                            data[i].con_id,
	                            tipo,
	                            data[i].con_nombre,
	                            data[i].con_nrotel,
	                            data[i].con_correo,
	                            data[i].con_direcc,
	                            data[i].con_dirweb,
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