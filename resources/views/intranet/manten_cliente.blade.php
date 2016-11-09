<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <table id="dynamic_table_cliente" class="table table-striped table-bordered table-hover">
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
            <tbody id="tbodycontent">
            </tbody>
        </table>
        <!-- PAGE CONTENT ENDS -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<!-- Popup :  Agregar -->
<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_cliente">
<div align="center">
    <div class="modal fade" id="modal_cliente" role="dialog">
        <div class="modal-dialog" style="width: 500px;">
            <div class="modal-content">
                <div class="page-header">
                    <!-- /.page-header -->
                    <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                    <div class="space-10"></div>
                    <h1> Cliente </h1>
                </div>
                <div class="row">                    
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Nombre </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_nombre" type="text" id="form-field-3" class="col-xs-9 col-sm-9" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)"/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3  control-label no-padding-right" for="form-field-3"> Género </label>
                            <div class="col-sm-9 col-xs-9">
                                <select id="cli_genero" class="col-xs-5 col-sm-7">
                                    <option value="" disabled selected style="display:none;">*obligatorio</option>
                                    <option value="m">Masculino</option>
                                    <option value="f">Femenino</option>													
                                </select>

                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° documento </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_nrodoc" type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="col-xs-5 col-sm-7" placeholder="*obligatorio"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Fecha de nacimiento</label>

                            <div class="col-sm-4 col-xs-4">
                                <div class="input-group">
                                    <input placeholder="*obligatorio" class="form-control date-picker" id="cli_fecnac" type="text" data-date-format="yyyy-mm-dd" onkeypress="return (event.charCode == 8 || event.charCode == 0 ) ? null : event.charCode >= 48 && event.charCode <= 57 || event.charCode==45"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar bigger-110"></i>
                                    </span>                                    
                                </div>
                                <span style="float:left">(yyyy-mm-dd)</span>
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> N° hijos </label>
                            <div class="col-sm-9 col-xs-9" style="margin-left:-22%;">
								<input type="text" id="cli_numhij" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" value="0"/>
                            </div>                            
                        </div>
                        
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Nivel Educativo </label>

                            <div class="col-sm-9 col-xs-9">
                                <select id="cli_nivedu" class="col-xs-5 col-sm-7">
                                    <option value="s" selected>Sin estudios</option>
                                    <option value="pc">Primaria completa</option>
                                    <option value="pi">Primaria incompleta</option>
                                    <option value="sc">Secundaria completa</option>
                                    <option value="si">Secundaria incompleta</option>
                                    <option value="suc">Superior completo</option>
                                    <option value="sui">Superior incompleto</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Ocupación </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_ocupac" type="text" class="col-xs-5 col-sm-7" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)"/>
                            </div>
                        </div>

                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Dirección </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_direcc" type="text" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Teléfono 1 </label>

                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_telno1" type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Teléfono 2 </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_telno2" type="text" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                        <div class="space-4"></div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="cli_correo" type="email" id="form-field-5" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                </div>
                
                <div class="modal-footer">
                    <div align="center">
                        <button id="botonCliente" type="submit" class="btn btn-primary" onclick="close();"></button>
                        &nbsp; &nbsp;
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

<script src="assets/js/bootstrap-datepicker.min.js"></script>


<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script type="text/javascript">
</script>


<!-- inline scripts related to this page -->

<script type="text/javascript">
    var table_cliente;
    var dataset_cliente = [];
    var edit_id_cliente;
    var action_cliente;

    function getButtons(i, cli_id) {
        var param = "'" + i + "','" + cli_id + "'";
        var butons = '<div class="hidden-sm hidden-xs action-buttons">' +

            '<a  onClick="edit_onClick_Cliente(' + param + ')" class="green">' +
            '<i class="ace-icon fa fa-pencil bigger-130">' + '</i>' +
            '</a>' +

            '<a onClick="delete_onClick_Cliente(' + param + ')" class="red" ">' +
            '<i class="ace-icon fa fa-trash-o bigger-130">' + '</i>' +
            '</a>' +
            '</div>';
        return butons;
    }

    $("#form_cliente").submit(function(event) {
        botonCliente_onClick();
        event.preventDefault();
    });
    
    function add_onClick_Cliente() {
        action_cliente = "ADD";
        $("#cli_nombre").val("");
        $("#cli_genero").val("");
        $("#cli_fecnac").val("");
        $("#cli_nrodoc").val("");
        $("#cli_ocupac").val("");
        $("#cli_direcc").val("");
        $("#cli_correo").val("");
        $("#cli_telno1").val("");
        $("#cli_telno2").val("");     
        $("#cli_nivedu").val("s");
        
        document.getElementById("cli_nombre").required = true;
        document.getElementById("cli_genero").required = true;
        document.getElementById("cli_fecnac").required = true;
        document.getElementById("cli_nrodoc").required = true;
        
        $("#cli_correo").attr('type', 'email');        

        $("#modal_cliente").modal();
        document.getElementById("botonCliente").innerHTML = 'Registrar';
    }


    function botonCliente_onClick(){//$("#botonCliente").on('click', function(e) {
        //alert("mostareaas");
        if (action_cliente == "ADD") {
            var genero = $("#cli_genero option:selected").val();
            
            var nivel;
            if ($("#cli_nivedu option:selected").val() === 's') {
                nivel = "Sin estudios";
            } else if ($("#cli_nivedu option:selected").val() === 'pi') {
                nivel = "Primaria incompleta";
            } else if ($("#cli_nivedu option:selected").val() === 'pc') {
                nivel = "Primaria completa";
            } else if ($("#cli_nivedu option:selected").val() === 'si') {
                nivel = "Secundaria incompleta";
            } else if ($("#cli_nivedu option:selected").val() === 'sc') {
                nivel = "Secundaria completa";
            } else if ($("#cli_nivedu option:selected").val() === 'sui') {
                nivel = "Superior incompleto";
            } else if ($("#cli_nivedu option:selected").val() === 'suc') {
                nivel = "Superior completo";
            }
            
            i = dataset_cliente.length;
            //Validaciones
            $.ajax({
                type: "POST",
                url: 'service_cliente',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    cli_nombre: $("#cli_nombre").val(),
                    cli_genero: genero,
                    cli_fecnac: $("#cli_fecnac").val(),
                    cli_numhij: $("#cli_numhij").val(),
                    cli_nivedu: nivel,
                    cli_nrodoc: $("#cli_nrodoc").val(),
                    cli_ocupac: $("#cli_ocupac").val(),
                    cli_direcc: $("#cli_direcc").val(),
                    cli_telno1: $("#cli_telno1").val(),
                    cli_telno2: $("#cli_telno2").val(),
                    cli_correo: $("#cli_correo").val()
                },
                success: function(Response) {
                    dataset_cliente.push([
                        Response,
                        $("#cli_nombre").val(),
                        $("#cli_nrodoc").val(),
                        nivel,
                        $("#cli_ocupac").val(),
                        $("#cli_telno1").val(),
                        $("#cli_correo").val(),
                        getButtons(i, i)
                    ]);    
                    dataset_cliente[i][8] = genero;
                    dataset_cliente[i][9] = $("#cli_fecnac").val();
                    dataset_cliente[i][10] = $("#cli_numhij").val();
                    dataset_cliente[i][11] = $("#cli_direcc").val();
                    dataset_cliente[i][12] = $("#cli_telno2").val(); 
                    table_cliente.clear().rows.add(dataset_cliente).draw();
                    alert("Registrado");
                }
            });
            $('#modal_cliente').modal('toggle');            
        }
        if (action_cliente == "UPDATE") {
            var genero = $("#cli_genero option:selected").val();

            var nivel;
            if ($("#cli_nivedu option:selected").val() === 's') {
                nivel = "Sin estudios";
            } else if ($("#cli_nivedu option:selected").val() === 'pi') {
                nivel = "Primaria incompleta";
            } else if ($("#cli_nivedu option:selected").val() === 'pc') {
                nivel = "Primaria completa";
            } else if ($("#cli_nivedu option:selected").val() === 'si') {
                nivel = "Secundaria incompleta";
            } else if ($("#cli_nivedu option:selected").val() === 'sc') {
                nivel = "Secundaria completa";
            } else if ($("#cli_nivedu option:selected").val() === 'sui') {
                nivel = "Superior incompleto";
            } else if ($("#cli_nivedu option:selected").val() === 'suc') {
                nivel = "Superior completo";
            }
            
            $.ajax({
                type: "PATCH",
                url: 'service_cliente/' + dataset_cliente[edit_id_cliente][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    cli_nombre: $("#cli_nombre").val(),
                    cli_genero: genero,
                    cli_fecnac: $("#cli_fecnac").val(),
                    cli_numhij: $("#cli_numhij").val(),
                    cli_nivedu: nivel,
                    cli_nrodoc: $("#cli_nrodoc").val(),
                    cli_ocupac: $("#cli_ocupac").val(),
                    cli_direcc: $("#cli_direcc").val(),
                    cli_telno1: $("#cli_telno1").val(),
                    cli_telno2: $("#cli_telno2").val(),
                    cli_correo: $("#cli_correo").val()
                },
                success: function(Response) {
                    dataset_cliente[edit_id_cliente][1] = $("#cli_nombre").val();
                    dataset_cliente[edit_id_cliente][2] = $("#cli_nrodoc").val();
                    dataset_cliente[edit_id_cliente][3] = nivel;
                    dataset_cliente[edit_id_cliente][4] = $("#cli_ocupac").val();
                    dataset_cliente[edit_id_cliente][5] = $("#cli_telno1").val();
                    dataset_cliente[edit_id_cliente][6] = $("#cli_correo").val();
                    dataset_cliente[edit_id_cliente][8] = genero;
                    dataset_cliente[edit_id_cliente][9] = $("#cli_fecnac").val();
                    dataset_cliente[edit_id_cliente][10] = $("#cli_numhij").val();
                    dataset_cliente[edit_id_cliente][11] = $("#cli_direcc").val();
                    dataset_cliente[edit_id_cliente][12] = $("#cli_telno2").val();                    table_cliente.clear().rows.add(dataset_cliente).draw();
                    alert(Response);
                }
            });
            $('#modal_cliente').modal('toggle');            
        }

        if (action_cliente == "DELETE") {
            $.ajax({
                type: "DELETE",
                url: 'service_cliente/' + dataset_cliente[edit_id_cliente][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(Response) {
                    table_cliente.rows(edit_id_cliente).remove().draw();
                    alert(Response);
                }
            });
            $('#modal_cliente').modal('toggle');
        }
    }//});

    function edit_onClick_Cliente(id, cli_id) {
        action_cliente = "UPDATE";
        var rows = table_cliente.rows(id).data();
        edit_id_cliente = parseInt(id);
        var nivel;
        if (dataset_cliente[edit_id_cliente][3] === "Sin estudios") {
            nivel = "s";
        } else if (dataset_cliente[edit_id_cliente][3] === "Primaria incompleta") {
            nivel = "pi";
        } else if (dataset_cliente[edit_id_cliente][3] === "Primaria completa") {
            nivel = "pc";
        } else if (dataset_cliente[edit_id_cliente][3] === "Secundaria incompleta") {
            nivel = "si";
        } else if (dataset_cliente[edit_id_cliente][3] === "Secundaria completa") {
            nivel = "sc";
        } else if (dataset_cliente[edit_id_cliente][3] === "Superior incompleto") {
            nivel = "sui";
        } else if (dataset_cliente[edit_id_cliente][3] === "Superior completo") {
            nivel = "suc";
        }
                
        $("#cli_nombre").val(dataset_cliente[edit_id_cliente][1] + "");
        $("#cli_nrodoc").val(dataset_cliente[edit_id_cliente][2] + "");
        $("#cli_nivedu").val(nivel).attr("selected", true); 
        $("#cli_ocupac").val(dataset_cliente[edit_id_cliente][4] + "");
        $("#cli_telno1").val(dataset_cliente[edit_id_cliente][5] + "");
        $("#cli_correo").val(dataset_cliente[edit_id_cliente][6] + "");
        
        $("#cli_genero").val(dataset_cliente[edit_id_cliente][8]).attr("selected", true);        
        $("#cli_fecnac").val(dataset_cliente[edit_id_cliente][9]);
        $("#cli_numhij").val(dataset_cliente[edit_id_cliente][10]);
        $("#cli_direcc").val(dataset_cliente[edit_id_cliente][11]);
        $("#cli_telno2").val(dataset_cliente[edit_id_cliente][12]);
        
        document.getElementById("cli_nombre").required = true;
        document.getElementById("cli_genero").required = true;
        document.getElementById("cli_fecnac").required = true;
        document.getElementById("cli_nrodoc").required = true;
        
        $("#cli_correo").attr('type', 'email');

        $("#modal_cliente").modal();
        document.getElementById("botonCliente").innerHTML = 'Actualizar';
    }

    function delete_onClick_Cliente(id, cli_id) {
        action_cliente = "DELETE";
        var rows = table_cliente.rows(id).data();
        edit_id_cliente = parseInt(id);
        
        var nivel;
        if (dataset_cliente[edit_id_cliente][3] === "Sin estudios") {
            nivel = "s";
        } else if (dataset_cliente[edit_id_cliente][3] === "Primaria incompleta") {
            nivel = "pi";
        } else if (dataset_cliente[edit_id_cliente][3] === "Primaria completa") {
            nivel = "pc";
        } else if (dataset_cliente[edit_id_cliente][3] === "Secundaria incompleta") {
            nivel = "si";
        } else if (dataset_cliente[edit_id_cliente][3] === "Secundaria completa") {
            nivel = "sc";
        } else if (dataset_cliente[edit_id_cliente][3] === "Superior incompleto") {
            nivel = "sui";
        } else if (dataset_cliente[edit_id_cliente][3] === "Superior completo") {
            nivel = "suc";
        }
        
                
        $("#cli_nombre").val(dataset_cliente[edit_id_cliente][1] + "");
        $("#cli_nrodoc").val(dataset_cliente[edit_id_cliente][2] + "");
        $("#cli_nivedu").val(nivel).attr("selected", true); 
        $("#cli_ocupac").val(dataset_cliente[edit_id_cliente][4]);
        $("#cli_telno1").val(dataset_cliente[edit_id_cliente][5]);
        $("#cli_correo").val(dataset_cliente[edit_id_cliente][6]);
        
        $("#cli_genero").val(dataset_cliente[edit_id_cliente][8]).attr("selected", true);        
        $("#cli_fecnac").val(dataset_cliente[edit_id_cliente][9]);
        $("#cli_numhij").val(dataset_cliente[edit_id_cliente][10]);
        $("#cli_direcc").val(dataset_cliente[edit_id_cliente][11]);
        $("#cli_telno2").val(dataset_cliente[edit_id_cliente][12]);
        
        document.getElementById("cli_nombre").required = false;
        document.getElementById("cli_genero").required = false;
        document.getElementById("cli_fecnac").required = false;
        document.getElementById("cli_nrodoc").required = false;
        
        $("#cli_correo").attr('type', 'text');

        $("#modal_cliente").modal();
        document.getElementById("botonCliente").innerHTML = 'Eliminar';
    }

    $(document).ready(function() {
        table_cliente =
            $('#dynamic_table_cliente')
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [
                    {"sWidth": "5%"},
                    {"sWidth": "13%"},
                    {"sWidth": "13%"},
                    {"sWidth": "13%"},
                    {"sWidth": "13%"},
                    {"sWidth": "13%"},
                    {"sWidth": "13%"},
                    {"sWidth": "15%", "bSortable":false}
                ],
                "aaSorting": [],
                select: {
                    style: 'single'
                }
            });
        $.ajax({
            type: "GET",
            url: 'service_cliente',
            success: function(result) {
                var data = jQuery.parseJSON(result);
                for (var i = 0; i < data.length; i++) {
                    if (data[i].usu_activo === 1) {
                        dataset_cliente.push([
                            data[i].cli_id,
                            data[i].cli_nombre,
                            data[i].cli_nrodoc,
                            data[i].cli_nivedu,
                            data[i].cli_ocupac,
                            data[i].cli_telno1,
                            data[i].cli_correo,
                            getButtons(i),
                            //para los modales
                            data[i].cli_genero,
                            data[i].cli_fecnac,
                            data[i].cli_numhij,
                            data[i].cli_direcc,
                            data[i].cli_telno2
                        ])
                    }
                }
                table_cliente.clear().rows.add(dataset_cliente).draw();
            }
        });

    });
</script>