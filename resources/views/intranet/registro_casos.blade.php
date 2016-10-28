<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Registro de casos</title>

    <meta name="description" content="Registro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css"/>
    <link rel="stylesheet" href="assets/css/chosen.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/daterangepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>


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
                        Registro de casos
                    </li>
                    <li class="active">Registro</li>
                </ul><!-- /.breadcrumb -->

                
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Registro de casos
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Registro
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form">
                            

                            <div class="space-6"></div>
                            <div class="space-6"></div>
                            <div class="space-6"></div>
                            <div class="space-6"></div>

                            <div class="form-group">


                            <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Nombre del Cliente</label>


                            <div class="col-sm-6">

                                <button type="button" style="font-size: 12px" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_clientes">Buscar</button>

                                 <div class="col-sm-6">


                                <input class="input-sm" type="text" id="cliente" value="" disabled />

                                </div>

                            </div>


                            </div>

                            <div class="form-group">


                            <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Nombre del Docente</label>


                            <div class="col-sm-6">

                                <button type="button" style="font-size: 12px" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_docente">Buscar</button>

                                 <div class="col-sm-6">


                                <input class="input-sm" type="text" id="docente" value="" disabled />

                                </div>

                            </div>


                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-4">Objetivo de la actuación</label>

                                <div class="col-sm-4">
                                    <!--<input class="input-sm" type="text" id="form-field-4" placeholder="Observaciones" />
                                    <div class="space-2"></div>-->
                                    <textarea id="objetivo" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-4">Observaciones</label>

                                <div class="col-sm-4">
                                    <!--<input class="input-sm" type="text" id="form-field-4" placeholder="Observaciones" />
                                    <div class="space-2"></div>-->
                                    <textarea id="observaciones"class="form-control" rows="8"></textarea>
                                </div>
                            </div>

                            <div class="hidden">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-4">Archivos</label>
                                <div class="col-sm-4">
                                    <input type="file" id="id-input-file-2"/>
                                </div>
                            </div>
                            </div>

                            <div align="center">
                                <button id="click_button"class="btn btn-info" type="button">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Registrar Caso
                                </button>
                            </div>


                        </form>
                    </div>
                </div><!-- /.row -->



            </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->





<div align="center">                                            
    <div class="modal fade" id="modal_clientes" role="dialog">
        <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h1 type="button" class="close" data-dismiss="modal">
                    </h1>
                    <div class="page-header"><!-- /.page-header -->
                            <h1 >  Clientes </h1>
                    </div>
                    <table id="table-clientes" class="table table-striped table-bordered table-hover">
                       <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nro Documento</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                               

                            </tr>
                        </thead>
                        <tbody id ="tbodycontent">
                        </tbody>
                    </table>
               </div>                                  
               <div class="modal-footer">
                    <div align="center">
                        <button id="botonCliente" type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
           </div>
       </div>
    </div>
</div>



<div align="center">                                            
    <div class="modal fade" id="modal_docente" role="dialog">
        <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h1 type="button" class="close" data-dismiss="modal">
                    </h1>
                    <div class="page-header"><!-- /.page-header -->
                            <h1 >  Docentes </h1>
                    </div>
                    <table id="table-docentes" class="table table-striped table-bordered table-hover">
                       <thead>
                            <tr>
                                
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Codigo PUCP</th>
                                <th>Nombre</th>
                                <th>Correo</th>

                            </tr>
                        </thead>
                        <tbody id ="tbodycontent">
                        </tbody>
                    </table>
               </div>                                  
               <div class="modal-footer">
                    <div align="center">
                        <button id="btnIngresar" type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
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
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>


<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script src="assets/js/spinbox.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/bootstrap-timepicker.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/js/jquery.knob.min.js"></script>
<script src="assets/js/autosize.min.js"></script>
<script src="assets/js/jquery.inputlimiter.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/bootstrap-tag.min.js"></script>
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

<script type="text/javascript">
        $(document).ready(function(){
            jQuery('#casos').addClass('active open');
            jQuery('#casos-registro').addClass('active');
            
        });
        </script>


        </script>
        <!-- inline scripts related to this page -->
        
        <script type="text/javascript">
       var myTable ;
       var data_set_cli = [];
       var data_set_doc = [];
       var editid;
       var action;
       var cli_id;
       var doc_id;

       

       

      
       
       
        $(document).ready(function(){
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                
                tableCli =
                $('#table-clientes')                
                        .DataTable({
                            
                            bAutoWidth: false,
                            
                            "aoColumns": [

                                null,null, null,null
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });

                tableDoc =
                $('#table-docentes')                
                        .DataTable({
                            
                            bAutoWidth: false,
                            
                            "aoColumns": [

                                 null,null, null,null,null
                            ],
                            "aaSorting": [],




                            select: {
                                style: 'single'
                            }
                        });

           

            $('#table-clientes').on( 'click', 'tr', function () {


                var id = tableCli.row( this ).index();
                var data = tableCli.row( id ).data();
                cli_id = data[0];
                $("#cliente").val(data[2]);
                
            } );

            $('#table-docentes').on( 'click', 'tr', function () {


                var id = tableDoc.row( this ).index();
                var data = tableDoc.row( id ).data();
                doc_id = data[0];
                $("#docente").val(data[3]);

                
            } );

            function get_date(){
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();

                if(dd<10) {
                    dd='0'+dd
                } 

                if(mm<10) {
                    mm='0'+mm
                } 

                today = yyyy +'-'+ mm+'-'+dd;
                return today;
            }

            $("#click_button").on('click', function (e){
               
                $.ajax({
                    type: "POST",
                    url:'service_casos',
                    beforeSend: function (xhr) {
                        var token = $('meta[name="csrf_token"]').attr('content');

                        if (token) {
                              return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    },
                    data: {
                           usu_id : '2',
                           cli_id: cli_id,
                           doc_id: doc_id,
                           estcas_id: '6',
                           cas_fecate: get_date(),
                           cas_objact: $('#objetivo').val(),
                           cas_observ: $('#observaciones').val()},
                    success: function(Response){
                
                        alert(Response);
                    }
                });

                             
                                      
                });
            
           
                $.ajax({
                   
                    type: "GET",
                    url:'service_cliente',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                        
                       
                        for(var i = 0; i<data.length ;i++)
                        {
                            

                                data_set_cli.push([
                                data[i].cli_id,
                                data[i].cli_nrodoc,
                                data[i].cli_nombre,
                                data[i].cli_direcc

                            ] )
                            
                        
                        }
                        tableCli.clear().rows.add(data_set_cli).draw()
                        
                    }
                        
                            
            
                 
            
                });



                 $.ajax({
                   
                    type: "GET",
                    url:'service_docente',
                    success: function(result){
                        
                        
                        var data = jQuery.parseJSON(result);
                        
                       
                        for(var i = 0; i<data.length ;i++)
                        {
                            var tipo ="";
                            if (data[i].eva_tipeva == 'd') {
                                tipo = "Docente";
                            }
                            else
                                tipo = "Jefe Practica";

                                data_set_doc.push([
                                data[i].eva_id,
                                tipo,
                                data[i].eva_codpuc,
                                data[i].eva_nombre,
                                data[i].eva_correo

                            ] )
                            
                        
                        }
                  
                        tableDoc.clear().rows.add(data_set_doc).draw()
                    }
                        
                            
            
                 
            
                });
            
        });
</script>  

</body>
</html>
