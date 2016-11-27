
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Intranet | Noticias</title>

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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>

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
                    Noticias
                </li>
                <!--<li class="active">Registro</li>-->
            </ul>
        </div>




        <div class="page-content">
            <div class="page-header"><!-- /.page-header -->
                <h1 id = "mytitulo" >
                    Noticias
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
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Fecha</th>
                            <th>¿En web?</th>
                            <th>¿En panel?</th>
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
<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_evento">
    <div align="center">
        <div class="modal fade" id="modal_evento" role="dialog">
            <div class="modal-dialog" style="width: 500px;">
                <div class="modal-content">
                    <div class="page-header">
                        <!-- /.page-header -->
                        <button type="button" class="close" data-dismiss="modal" style="margin-right: 8px;">&times;</button>
                        <div class="space-10"></div>
                        <h1> Evento </h1>
                    </div>
                    <div class="row">
                        <div class="space-4"></div>
                        <div id="id_noticia" class="hide"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Título </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="titulo" type="text" class="form-control" placeholder="*obligatorio" required/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div id="id_evento" class="hide"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Autor </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="autor" type="text" class="form-control" placeholder="*obligatorio" required/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Descripción </label>
                            <div class="col-sm-8 col-xs-8">
                                <textarea class="form-control" rows="10" style="resize: vertical;overflow: auto;" id="descripcion" placeholder="*obligatorio" required autocomplete="off"></textarea>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Fecha</label>
                            <div class="col-sm-3 col-xs-3">
                                <input class="form-control" type="text" name="date-picker" id="id-date-picker-1" data-date-format="dd/mm/yyyy"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Imagen </label>
                            <div class="col-sm-6 col-xs-6">
                                <input type="file" id="imagen" value="" />
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Link </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="link" type="text" class="form-control" placeholder="*obligatorio" required/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> ¿En web? </label>
                            <div class="col-sm-1 col-xs-1">
                                <input id="enWeb" type="checkbox" class="form-control" checked/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> ¿En panel? </label>
                            <div class="col-sm-1 col-xs-1">
                                <input id="enPanel" type="checkbox" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div align="center">
                            <button type="submit" id="botonSubmit" class="btn btn-primary"></button>                            &nbsp; &nbsp;
                            <button type="button" id="botonDanger" class="btn btn-primary btn-danger remove" data-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

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
    var myTable ;
    var data_set = [];
    var editid;
    var action;

    $("#form_evento").submit(function(event) {
        event.preventDefault();
        click_botonSubmit();
    });

    $('#modal_evento').on('hidden.bs.modal', function () {
        $('#imagen').ace_file_input('reset_input');
    })

    $('#id-input-file-1 , #id-input-file-2, #imagen').ace_file_input({
        no_file:'',
        btn_choose:'Drop images or select',
        btn_change: null,
        style:'well',
        droppable:false,
        onchange:null,
        no_icon: "ace-icon fa fa-picture-o",
        thumbnail: 'large', //| small
        'allowExt': ['jpg', 'jpeg', 'png', 'img']
    });

    $('#imagen').ace_file_input('enable_reset', true);

    function getButtons(i,con_id){

        var param = "'"+i+"','"+con_id+"'";
        var butons = '<div class="hidden-sm hidden-xs action-buttons">'+

                '<a  onClick="edit_onClick('+param+')" class="green" >'+
                '<i class="ace-icon fa fa-pencil bigger-130">'+'</i>'+
                '</a>'+

                '<a onClick="delete_onClick('+param+')" class="red">'+
                '<i class="ace-icon fa fa-trash-o bigger-130">'+'</i>'+
                '</a>'+
                '</div>';


        return butons;
    }

    function add_onClick(){
        action="ADD";

        $("#modal_evento").find('input, textarea').val('').end();
        document.getElementById("enWeb").checked = true;
        document.getElementById("enPanel").checked = true;
        $('#imagen').ace_file_input('reset_input');
        $("span img[class='middle']").remove();
        $("span[class='ace-file-name']").html('<i class=" ace-icon ace-icon fa fa-picture-o">');
        document.getElementById("botonSubmit").innerHTML = 'Registrar';
        document.getElementById("botonDanger").innerHTML = 'Cancelar';

        $("#modal_evento").modal();
    }

    function click_botonSubmit (){//$("#botonCliente").on('click', function (e){
        var web=-1;
        var data_web = "No";
        if( document.getElementById("enWeb").checked == true){
            web = 1;
            data_web = "Sí";
        }else web=0;

        var panel=-1;
        var data_panel = "No";
        if( document.getElementById("enPanel").checked == true){
            panel = 1;
            data_panel = "Sí";
        }else panel=0;

        var file = document.getElementById('imagen').files;
        var imagen=null;
        if(file.length != 0){
            imagen = file[0];
        }
        var MyDate = new Date($("#id-date-picker-1").datepicker("getDate"));
        var fecha = MyDate.getFullYear() + '/'
                + ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
                + ('0' + MyDate.getDate()).slice(-2);
        var form_data = new FormData();
        form_data.append('not_titulo', $("#titulo").val());
        form_data.append('not_autor', $("#autor").val());
        form_data.append('not_fecha', fecha);
        form_data.append('not_descr', $("#descripcion").val());
        form_data.append('not_imagen', imagen);
        form_data.append('not_link', $("#link").val());
        form_data.append('not_enweb', web);
        form_data.append('not_enpanel', panel);

        if (action=="ADD"){
            form_data.append('not_id', "NO_ID");
            $.ajax({
                type: "POST",
                url:'service_noticia',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function(Response){
                    alert(Response);
                    data_set.push([
                        Response,
                        $("#titulo").val(),
                        $("#autor").val(),
                        $("#id-date-picker-1").val(),
                        data_web,
                        data_panel,
                        getButtons(Response,Response)
                    ] );
                    myTable.clear().rows.add(data_set).draw();
                    $("#modal_evento").modal('toggle');
                },
                error: function (e) {
                    alert("Error in ADD");
                }

            });
        }else if (action=="UPDATE"){
            form_data.append('not_id', $("#id_noticia").val());
            $.ajax({
                type: "POST",
                url:'service_noticia',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function(Response){
                    data_set[editid][1]= $("#titulo").val();
                    data_set[editid][2]=$("#autor").val();
                    data_set[editid][3]=$("#id-date-picker-1").val();
                    data_set[editid][4] = web;
                    data_set[editid][5]= panel;
                    myTable.clear().rows.add(data_set).draw();
                    alert(Response);
                }
            });
        }
    }

    function delete_onClick(id,con_id){
        action="DELETE";
        editid=parseInt(id);
        $.ajax({
            type: "DELETE",
            url: 'service_directorio/' + data_set[editid][0],
            beforeSend: function(xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            success: function(Response) {
                myTable.rows(id).remove().draw();
                alert(Response);
            }
        });
        //$('#modal_alumno').modal('toggle');
    }

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
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)

        $('#id-date-picker-1').datepicker({
            //format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true
        });

        jQuery('#lidirectorio').addClass('active');
        myTable =
                $('#dynamic-table')
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"sWidth": "5%"},
                                {"sWidth": "20%"},
                                {"sWidth": "20%"},
                                {"sWidth": "15%"},
                                {"sWidth": "10%"},
                                {"sWidth": "10%"},
                                {"sWidth": "20%", "bSortable":false}
                            ],
                            "aaSorting": [],
                            select: {
                                style: 'single'
                            }
                        });

        $.ajax({
            type: "GET",
            url: 'service_noticia',
            success: function(result){
                var data = jQuery.parseJSON(result);
                var rows = "";
                $("#tbodycontent").html(rows);

                for(var i = 0; i<data.length ;i++)
                {
                    var web ="No";
                    if (data[i].not_enweb == 1) {
                        web = "Sí";
                    }

                    var panel ="No";
                    if (data[i].not_enpanel == 1) {
                        panel = "Sí";
                    }

                    var MyDate = new Date(data[i].not_fecha);
                    var fecha_show = ('0' + MyDate.getDate()).slice(-2) + '/'
                            + ('0' + (MyDate.getMonth()+1)).slice(-2) + '/'
                            + MyDate.getFullYear();

                    data_set.push([
                        data[i].not_id,
                        data[i].not_titulo,
                        data[i].not_autor,
                        fecha_show,
                        web,
                        panel,
                        getButtons(i)
                    ] )


                }
                myTable.clear().rows.add(data_set).draw()
            },
            error:function (e) {
                alert("Error al cargar la tabla");
            }
        });
    });
</script>

</body>
</html>