<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <table id="dynamic_table_alumno" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo </th>
                    <th>Número Documento</th>
                    <th>Correo</th>
                    <th>Voluntario</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody id="tbodycontent_alu">
            </tbody>
        </table>
        <!-- PAGE CONTENT ENDS -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<!-- Popup :  Agregar -->
<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_alu">
    <div align="center">
        <div class="modal fade" id="modal_alumno" role="dialog">
            <div class="modal-dialog" style="width: 500px;">
                <div class="modal-content">
                    <!-- Modal content-->
                    <div class="page-header">
                        <!-- /.page-header -->
                        <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                        <div class="space-10"></div>
                        <h1> Alumno </h1>
                    </div>
                    <div class="row">
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3  control-label no-padding-right" for="form-field-3"> Tipo </label>
                            <div class="col-sm-9 col-xs-9">
                                <select id="alu_volunta" class="col-xs-5 col-sm-7">
                                    <option value="" disabled selected style="display:none;">*obligatorio</option>
                                    <option value="0">Alumno</option>
                                    <option value="1">Voluntario</option>                                                 
                                </select>

                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Nombre </label>
                            <div class="col-sm-9 col-xs-9">
                                <!-- las tildes en las vocales estan desde el 193-->
                                <input id="alu_nombre" type="text" id="form-field-3" class="col-xs-9 col-sm-9" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)" required/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código  </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="alu_codpucp" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" />
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="alu_nrodoc" type="text" class="col-xs-5 col-sm-7" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" />
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="alu_correo" id="form-field-5" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div align="center">
                            <button id="botonAlumno" type="submit" class="btn btn-primary"></button> &nbsp; &nbsp;
                            <button type="button" class="btn btn-primary btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

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
<script type="text/javascript">
</script>
<!-- inline scripts related to this page -->

<script type="text/javascript">
    var table_Alu;
    var dataset_alu = [];
    var edit_id_alu;
    var action_alu;
    var MAX_CODPUCP_ALU = 8;

    function add_OnClick_Alumno() {
        action_alu = "ADD";
        $("#alu_nombre").val("");
        $("#alu_correo").val("");
        $("#alu_codpucp").val("");
        $("#alu_nrodoc").val("");
        $("#modal_alumno").modal();
        
        $("#alu_codpucp").attr('pattern', '.{8}');
        $("#alu_codpucp").attr('title', 'Tiene que tener 8 dígitos');
        
        document.getElementById("alu_codpucp").required = true;
        document.getElementById("alu_nombre").required = true;
        
        $("#alu_correo").attr('type', 'email');
        
        document.getElementById("botonAlumno").innerHTML = 'Registrar';
    };

    $("#form_alu").submit(function(event) {
        //$("#botonAlumno").click();
        botonAlumno_onClick();
        event.preventDefault();
    });


    function botonAlumno_onClick() { //$("#botonAlumno").on('click', function(e) { //boton de registro para alumno
        //alert("mostareaas");
        if (action_alu == "ADD") {
            i = dataset_alu.length;
             var tipo = "NO";
            if($('#alu_volunta').val()=="1"){
                 tipo = "SI";
            }
           
            //validaciones            
            $.ajax({
                type: "POST",
                url: 'service_alumno',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    alu_volunt: $('#alu_volunta').val(),
                    alu_nombre: $('#alu_nombre').val(),
                    alu_nrodoc: $("#alu_nrodoc").val(),
                    alu_codpuc: $('#alu_codpucp').val(),
                    alu_correo: $('#alu_correo').val()
                },
                success: function(Response) {
                    dataset_alu.push([
                        //para agregar al datatable
                        Response,
                        $("#alu_nombre").val(),
                        $("#alu_codpucp").val(),
                        $("#alu_nrodoc").val(),
                        $("#alu_correo").val(),
                        tipo,
                        getButtons_Alumno(i, i)

                    ]);
                    table_Alu.clear().rows.add(dataset_alu).draw();
                    alert("Registrado");
                }
            });
            $('#modal_alumno').modal('toggle');

        }
        if (action_alu == "UPDATE") {
            var tipo = "NO";
            if($('#alu_volunta').val()=="1"){
                 tipo = "SI";
            }
           
            //guardar cambios
            $.ajax({
                type: "PATCH",
                url: 'service_alumno/' + dataset_alu[edit_id_alu][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    alu_volunt: $('#alu_volunta').val(),
                    alu_nombre: $('#alu_nombre').val(),
                    alu_nrodoc: $("#alu_nrodoc").val(),
                    alu_codpuc: $('#alu_codpucp').val(),
                    alu_correo: $('#alu_correo').val()
                },
                success: function(Response) {
                    dataset_alu[edit_id_alu][1] = $("#alu_nombre").val();
                    dataset_alu[edit_id_alu][2] = $("#alu_codpucp").val();
                    dataset_alu[edit_id_alu][3] = $("#alu_nrodoc").val();
                    dataset_alu[edit_id_alu][4] = $("#alu_correo").val();
                    dataset_alu[edit_id_alu][5] = tipo;
                    table_Alu.clear().rows.add(dataset_alu).draw();

                    alert(Response);
                }
            });
            $('#modal_alumno').modal('toggle');

        }
        if (action_alu == "DELETE") {
            //guardar cambios
            $.ajax({
                type: "DELETE",
                url: 'service_alumno/' + dataset_alu[edit_id_alu][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(Response) {
                    table_Alu.rows(edit_id_alu).remove().draw();
                    alert(Response);
                }
            });
            $('#modal_alumno').modal('toggle');
        }
    };

    function getButtons_Alumno(i, alu_id) {
        var param = "'" + i + "','" + alu_id + "'";
        var butons = '<div class="hidden-sm hidden-xs action-buttons">' +

            '<a  onClick="edit_onClick_Alumno(' + param + ')" class="green">' +
            '<i class="ace-icon fa fa-pencil bigger-130">' + '</i>' +
            '</a>' +

            '<a onClick="delete_onClick_Alumno(' + param + ')" class="red" ">' +
            '<i class="ace-icon fa fa-trash-o bigger-130">' + '</i>' +
            '</a>' +
            '</div>';
        return butons;
    }

    function edit_onClick_Alumno(id, alu_id) {
        action_alu = "UPDATE";
        var rows = table_Alu.rows(id).data();
        edit_id_alu = parseInt(id);
        $("#alu_nombre").val(dataset_alu[edit_id_alu][1] + "");
        $("#alu_codpucp").val(dataset_alu[edit_id_alu][2] + "");
        $("#alu_nrodoc").val(dataset_alu[edit_id_alu][3] + "");
        $("#alu_correo").val(dataset_alu[id][4] + "");
        var tipoint = 0;
        if (dataset_alu[id][5] == "SI")
            tipoint = 1
        $("#alu_volunta").val(tipoint);
        $("#alu_codpucp").attr('pattern', '.{8}');
        $("#alu_codpucp").attr('title', 'Tiene que tener 8 dígitos');
        
        document.getElementById("alu_codpucp").required = true;
        document.getElementById("alu_nombre").required = true;
        
        $("#alu_correo").attr('type', 'email');
        
        $("#modal_alumno").modal();
        document.getElementById("botonAlumno").innerHTML = 'Actualizar';
    }

    function delete_onClick_Alumno(id, alu_id) {
        action_alu = "DELETE";

        var rows = table_Alu.rows(id).data();
        edit_id_alu = parseInt(id);
        $("#alu_nombre").val(dataset_alu[edit_id_alu][1] + "");
        $("#alu_codpucp").val(dataset_alu[edit_id_alu][2] + "");
        $("#alu_nrodoc").val(dataset_alu[edit_id_alu][3] + "");
        $("#alu_correo").val(dataset_alu[id][4] + "");
        
        $("#alu_codpucp").removeAttr('pattern');
        $("#alu_codpucp").removeAttr('title');
        
        document.getElementById("alu_codpucp").required = false;
        document.getElementById("alu_nombre").required = false;
        
        $("#alu_correo").attr('type', 'text');
        
        $("#modal_alumno").modal();
        document.getElementById("botonAlumno").innerHTML = 'Eliminar';
    }


    $(document).ready(function() {
        table_Alu =
            $('#dynamic_table_alumno')
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [{
                    "sWidth": "5%"
                }, {
                    "sWidth": "20%"
                }, {
                    "sWidth": "15%"
                }, {
                    "sWidth": "15%"
                }, {
                    "sWidth": "15%"
                }, {
                    "sWidth": "10%"
                }, {
                    "sWidth": "20%",
                    "bSortable": false
                }],
                "aaSorting": [],
                select: {
                    style: 'single'
                }
            });
        $.ajax({ //Para llenar la tabla
            type: "GET",
            url: 'service_alumno',
            success: function(result) {
                var data = jQuery.parseJSON(result);
                var tipo;

                for (var i = 0; i < data.length; i++) {
                    if (data[i].usu_activo == 1) {
                        if (data[i].alu_volunt == 1) {
                            tipo = "SI";
                        } else {
                            tipo = "NO";
                        }
                        dataset_alu.push([
                            data[i].alu_id,
                            data[i].alu_nombre,
                            data[i].alu_codpuc,
                            data[i].alu_nrodoc,
                            data[i].alu_correo,
                            tipo,
                            getButtons_Alumno(i)
                        ])
                    }

                }
                table_Alu.clear().rows.add(dataset_alu).draw()

            }
        });

    });
</script>