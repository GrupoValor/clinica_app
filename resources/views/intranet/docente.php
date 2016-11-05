
			
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
							<li class="active">Profesor</li>
						</ul>
					</div>

					<div class="page-content">
						<div class="page-header"><!-- /.page-header -->
							<h1 id = "mytitulo" >
								Mantenimiento de profesor
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
							<h1 >  Docente </h1>

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
                                    <button id="botonProfesor" type="button" class="btn btn-default" data-dismiss="modal" onclick="close();">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>

		

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
            jQuery('#mant-profesor').addClass('active');

       var myTable ;
       var data_set = [];
       var editid;
       var action;

        function getButtons(i,pro_id){

                    var param = "'"+i+"','"+pro_id+"'";
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
        $("#dir_correo").val("");
        $("#dir_codpucp").val("");
           
       	$("#boton").modal()
       }

      
       $("#botonProfesor").on('click', function (e){
                    //alert("mostareaas");
            if (action=="ADD"){
            	//tipo = "Persona";
            	i = data_set.length;
            	if ( $('#dir_nombre').val().length < 1)
            		return;
            	$.ajax({
                    type: "POST",
                    url:'service_docente',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           
                           eva_nombre: $('#dir_nombre').val(),
                           eva_tipeva: 'd',
                           eva_codpuc: $('#dir_codpucp').val(),
                           eva_correo: $('#dir_correo').val()},
                           
                    
                    success: function(Response){
                    	data_set.push([
                            //para agregar al datatable
            					data_set[i-1][0],
                                $("#dir_nombre").val(),
	                            $("#dir_codpucp").val(),
	                            $("#dir_correo").val(),
	                            getButtons(i,i)
	                            
	                        ] );
                    	 myTable.clear().rows.add(data_set).draw(); 
                        alert(Response);
                    }
                });


            	


            }
            if (action=="UPDATE")
            {


            data_set[editid][1]=$("#dir_nombre").val();
	        data_set[editid][2]=$("#dir_codpucp").val();
	        data_set[editid][3]=$("#dir_correo").val();
             myTable.clear().rows.add(data_set).draw(); 
            }          
                              
        });
       function edit_onClick(id,alu_id) {

       			//alert (id);
				action="UPDATE";
                var rows = myTable.rows(id).data();
                editid = parseInt(id);
                $("#dir_nombre").val(data_set[editid][1]+"");
                $("#dir_codpucp").val(data_set[editid][2]+"");
                $("#dir_correo").val(data_set[id][3]+"");

                $("#boton").modal()
    
              

              }
        $(document).ready(function(){
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                myTable =
                $('#dynamic-table')                
                        .DataTable({
                        	
                            bAutoWidth: false,
                    		
                            "aoColumns": [

                                null,null, null, null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });


           

           
                $.ajax({
                   
                    type: "GET",
                    url:'service_docente',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                      
                       
                        for(var i = 0; i<data.length ;i++)
                        {
                            //[{"eva_id":1,"usu_id":3,"eva_codpuc":"20012734","eva_tipeva":"d","eva_nombre":"Carlos Flores","eva_correo":"carlos@pucp.pe"}]

	                            data_set.push([
	                            data[i].eva_id,
                                data[i].eva_nombre,
	                            data[i].eva_codpuc,
	                            data[i].eva_correo,
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
