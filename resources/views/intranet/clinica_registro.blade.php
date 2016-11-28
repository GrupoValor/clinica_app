<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="icono/valor.png" />
    <meta name="csrf_token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Intranet | Clinicas</title>

    <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/css/ui.jqgrid.min.css"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css"/>

    <!--logo -->
    <link rel="stylesheet" href="assets/css/index.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>

    <script src="assets/js/ace-extra.min.js"></script>

</head>

<body class="no-skin">
<?php echo view('intranet/menu'); ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="index">Home</a>
                </li>
                <li>
                    Clinicas
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="page-header"><!-- /.page-header -->
                <h1 id="mytitulo">
                    Registro de clínicas
                    <button type="button" class="btn btn-primary" style="float: right;margin-top: -8px;"
                            onclick="add_onClick()">Nuevo +
                    </button>
                </h1>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <table id="tableClinicas" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>E-mail</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Google</th>
                            <th>Descripción</th>
                            <th>Dirección</th>
                            <th>Misión</th>
                            <th>Visión</th>
                            <th>Profesor</th>
                            <th>Activo</th>
                            <th>Modificar</th>
                        </tr>
                        </thead>
                        <tbody id="tbodycontentClinic">

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

<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_clinica">
    <div align="center">
        <div class="modal fade" id="modal_clinica" role="dialog">
            <div class="modal-dialog" style="width: 500px;">
                <div class="modal-content">
                    <!-- Modal content-->
                    <div class="page-header">
                        <!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px"
                                data-dismiss="modal"></button>
                        <div class="space-10"></div>
                        <h1> Clinica </h1>
                    </div>
                    <div class="row">

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3">
                                Nombre </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_nombre" type="text" margin-left="12px" id="form-field-3"
                                       class="col-xs-9 col-sm-9"
                                       placeholder="*obligatorio"
                                       onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">
                                Teléfono </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_telefono" type="text" margin-left="12px" class="col-xs-9 col-sm-9"
                                       onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">
                                Email </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_email" id="form-field-5" type="text" class="col-xs-9 col-sm-9"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">
                                Facebook </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_urlfbk" id="form-field-5" type="text" margin-left="12px"
                                       class="col-xs-9 col-sm-9"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Twitter</label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_urltwi" id="form-field-5" type="text" margin-left="12px"
                                       class="col-xs-9 col-sm-9"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Url
                                Google</label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cln_urlgoo" id="form-field-5" type="text" margin-left="12px"
                                       class="col-xs-9 col-sm-9"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Descripción</label>
                            <div class="col-sm-9 col-xs-9">
                                <textarea id="cln_descri" class="form_control col-xs-9 col-sm-9" rows="4"
                                          margin-left="12px" placeholder="*obligatorio"></textarea>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Dirección</label>
                            <div class="col-sm-9 col-xs-9">
                                <textarea id="cln_direcc" class="form_control col-xs-9 col-sm-9" rows="2"
                                          margin-left="12px" placeholder="*obligatorio"></textarea>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Misión</label>
                            <div class="col-sm-9 col-xs-9">
                                <textarea id="cln_mision" class="form_control col-xs-9 col-sm-9" rows="4"
                                          margin-left="12px" placeholder="*obligatorio"></textarea>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Vision</label>
                            <div class="col-sm-9 col-xs-9">
                                <textarea id="cln_vision" class="form_control col-xs-9 col-sm-9" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right"
                                   for="form-field-5">Profesor Encargado</label>
                            <div class="col-sm-9 col-xs-9">
                                <input class="col-xs-7 col-sm-7" type="text" id="cln_prof" value="" disabled/>
                                <button type="button" style="font-size: 12px" class="btn btn-info btn-lg"
                                        data-toggle="modal" data-target="#modal_docente">Buscar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div align="center">
                            <button id="botonAccion" type="button" class="btn btn-default" data-dismiss="modal" onclick="close();">Aceptar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div align="center">
    <div class="modal fade" id="modal_docente" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h1 type="button" class="close" data-dismiss="modal">
                    </h1>
                    <div class="page-header"><!-- /.page-header -->
                        <h1> Docentes </h1>
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
<?php echo view('intranet/footer'); ?>


<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

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


<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<!-- inline scripts related to this page -->

<script type="text/javascript">
    //var myTable;
    var editid;
    var action;
    var data_set_doc = [];
    var data_set_clinica=[];
    var doc_id;

    function getButtons(i,cln_id) {
        var param = "'"+i+"','"+cln_id+"'";
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
    function add_onClick() {

        action = "ADD";
        $("#cln_nombre").val("");
        $("#cln_telefono").val("");
        $("#cln_email").val("");
        $("#cln_urlfbk").val("");
        $("#cln_urltwi").val("");
        $("#cln_urlgoo").val("");
        $("#cln_descri").val("");
        $("#cln_direcc").val("");
        $("#cln_mision").val("");
        $("#cln_vision").val("");
        $("#cln_prof").val("");
        document.getElementById("cln_nombre").required = true;
        document.getElementById("cln_email").required = true;
        document.getElementById("cln_descri").required = true;
        document.getElementById("cln_direcc").required = true;
        document.getElementById("cln_prof").required = true;
        $("#cln_email").attr('type', 'email');
        $("#modal_clinica").modal();
    }


    $("#botonAccion").on('click', function (e) {
        if (action == "ADD") {
            var i = data_set_clinica.length;
            $.ajax({
                type: "POST",
                url: 'service_clinica',
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {

                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    cln_nombre: $("#cln_nombre").val(),
                    cln_telefono: $('#cln_telefono').val(),
                    cln_email: $('#cln_email').val(),
                    cln_urlfbk: $('#cln_urlfbk').val(),
                    cln_urltwi: $('#cln_urltwi').val(),
                    cln_urlgoo: $('#cln_urlgoo').val(),
                    cln_descri: $('#cln_descri').val(),
                    cln_direcc: $('#cln_direcc').val(),
                    cln_mision: $('#cln_mision').val(),
                    cln_vision: $('#cln_vision').val(),
                    cln_prof: $('#cln_prof').val(),
                    cln_activo:'1'
                },
                success: function (Response) {
                    data_set_clinica.push([
                        data_set_clinica[i - 1][0]+1,
                        $("#cln_nombre").val(),
                        $("#cln_telefono").val(),
                        $("#cln_email").val(),
                        $("#cln_urlfbk").val(),
                        $("#cln_urltwi").val(),
                        $("#cln_urlgoo").val(),
                        $("#cln_descri").val(),
                        $("#cln_direcc").val(),
                        $("#cln_mision").val(),
                        $("#cln_vision").val(),
                        $("#cln_prof").val(),
                        '1',
                        getButtons(i, data_set_clinica[i-1][0]+1)
                    ]);
                    tablaClinicas.clear().rows.add(data_set_clinica).draw();
                    alert(Response);
                }
            });


        }
        if (action == "UPDATE") {
            $.ajax({
                type: "PATCH",
                url: 'service_clinica/' + data_set_clinica[editid][0],
                beforeSend: function (xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {

                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    cln_nombre: $("#cln_nombre").val(),
                    cln_telefono: $('#cln_telefono').val(),
                    cln_email: $('#cln_email').val(),
                    cln_urlfbk: $('#cln_urlfbk').val(),
                    cln_urltwi: $('#cln_urltwi').val(),
                    cln_urlgoo: $('#cln_urlgoo').val(),
                    cln_descri: $('#cln_descri').val(),
                    cln_direcc: $('#cln_direcc').val(),
                    cln_mision: $('#cln_mision').val(),
                    cln_vision: $('#cln_vision').val(),
                    cln_prof: $('#cln_prof').val(),
                    cln_activo: '1'
                },
                success: function (Response) {

                    data_set_clinica[editid][1] = $("#cln_nombre").val();
                    data_set_clinica[editid][2] = $("#cln_telefono").val();
                    data_set_clinica[editid][3] = $("#cln_email").val();
                    data_set_clinica[editid][4] = $("#cln_urlfbk").val();
                    data_set_clinica[editid][5] = $("#cln_urltwi").val();
                    data_set_clinica[editid][6] = $("#cln_urlgoo").val();
                    data_set_clinica[editid][7] = $("#cln_descri").val();
                    data_set_clinica[editid][8] = $("#cln_direcc").val();
                    data_set_clinica[editid][9] = $("#cln_mision").val();
                    data_set_clinica[editid][10] = $("#cln_vision").val();
                    data_set_clinica[editid][11] = $("#cln_prof").val();
                    data_set_clinica[editid][12]='1';
                    tablaClinicas.clear().rows.add(data_set_clinica).draw();

                    alert(Response);
                }
            });
        }
    });

    function delete_onClick(id,con_id){

        action="DELETE";
        editid=parseInt(id);
        $.ajax({
            type: "PATCH",
            url: 'service_clinica/' + data_set_clinica[editid][0],
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');
                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                }
            },
            data: {
                cln_nombre: $("#cln_nombre").val(),
                cln_telefono: $('#cln_telefono').val(),
                cln_email: $('#cln_email').val(),
                cln_urlfbk: $('#cln_urlfbk').val(),
                cln_urltwi: $('#cln_urltwi').val(),
                cln_urlgoo: $('#cln_urlgoo').val(),
                cln_descri: $('#cln_descri').val(),
                cln_direcc: $('#cln_direcc').val(),
                cln_mision: $('#cln_mision').val(),
                cln_vision: $('#cln_vision').val(),
                cln_prof: $('#cln_prof').val(),
                cln_activo: '0'
            },
            success: function(Response) {
                tablaClinicas.rows(id).remove().draw();
                alert("Se eliminó el registro correctamente");
            }

        });
    }
    function edit_onClick(id, cln_id) {
        action = "UPDATE";
        var rows = tablaClinicas.rows(id).data();
        editid = parseInt(id);

        $("#cln_nombre").val(data_set_clinica[editid][1]+"");
        $("#cln_telefono").val(data_set_clinica[editid][2]+"");
        $("#cln_email").val(data_set_clinica[editid][3] + "");
        $("#cln_urlfbk").val(data_set_clinica[editid][4] + "");
        $("#cln_urltwi").val(data_set_clinica[editid][5] + "");
        $("#cln_urlgoo").val(data_set_clinica[editid][6] + "");
        $("#cln_descri").val(data_set_clinica[editid][7]+"");
        $("#cln_direcc").val(data_set_clinica[editid][8]+"");
        $("#cln_mision").val(data_set_clinica[editid][9]+"");
        $("#cln_vision").val(data_set_clinica[editid][10]+"");
        $("#cln_prof").val(data_set_clinica[editid][11]+"");
        $("#modal_clinica").modal();
    }
    $(document).ready(function () {
        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
        //jQuery('#liclinica').addClass('active');
        tablaClinicas= $('#tableClinicas').DataTable({
                    bAutoWidth: false,

                    "aoColumns": [
                        null, null, null, null, null, null, null,null,null,null,null,null,
                        {"visible":false},{"bSortable":false}
                    ],
                    "aaSorting": [],
                    select: {
                        style: 'single'
                    }
                });
        $.ajax({
            type: "GET",
            url: 'service_clinica',
            success: function (result) {
                var data = jQuery.parseJSON(result);
                for (var i = 0; i < data.length; i++) {
                    data_set_clinica.push([
                        data[i].cln_id,
                        data[i].cln_nombre,
                        data[i].cln_telefono,
                        data[i].cln_email,
                        data[i].cln_urlfbk,
                        data[i].cln_urltwi,
                        data[i].cln_urlgoo,
                        data[i].cln_descri,
                        data[i].cln_direcc,
                        data[i].cln_mision,
                        data[i].cln_vision,
                        data[i].cln_prof,
                        data[i].cln_activo,
                        getButtons(i)
                    ])
                }
                tablaClinicas.clear().rows.add(data_set_clinica).draw()
            }
        });

        tableDoc = $('#table-docentes')
                .DataTable({
                    bAutoWidth: false,
                    "aoColumns": [
                        null, null, null, null, null
                    ],
                    "aaSorting": [],
                    select: {
                        style: 'single'
                    }
                });
        $('#table-docentes').on('click', 'tr', function () {
            var id = tableDoc.row(this).index();
            var data = tableDoc.row(id).data();
            /*doc_id = data[0];
            $("#cln_prof").val(data[3]);*/
            $("#cln_prof").val(data[0]+"");
        });
        $.ajax({
            type: "GET",
            url: 'service_docente',
            success: function (result) {
                var data = jQuery.parseJSON(result);
                for (var i = 0; i < data.length; i++) {
                    var tipo = "";
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

                    ])
                }
                tableDoc.clear().rows.add(data_set_doc).draw()
            }
        });
    });
</script>
</body>
</html>