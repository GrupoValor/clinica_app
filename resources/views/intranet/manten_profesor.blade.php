<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <table id="dynamic_table_profesor" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo Pucp</th>
                    <th>Correo</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody id="tbodycontent_prof">
            </tbody>
        </table>
        <!-- PAGE CONTENT ENDS -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


<!-- Popup :  Agregar -->

<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_prof">
    <div align="center">
    <div class="modal fade" id="modal_profesor" role="dialog">
        <div class="modal-dialog" style="width: 500px;">
            <div class="modal-content">
                <!-- Modal content-->
                <div class="page-header">
                    <!-- /.page-header -->
                    <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                    <div class="space-10"></div>
                    <h1> Docente </h1>
                </div>
                <div class="row">                    
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Nombre </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="prof_nombre" type="text" id="form-field-3" class="col-xs-9 col-sm-9" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código PUCP </label>

                            <div class="col-sm-9 col-xs-9">
                                <input id="prof_codpucp" type="text" class="col-xs-5 col-sm-7" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>

                            <div class="col-sm-9 col-xs-9">
                                <input id="prof_correo" type="text" id="form-field-5" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>                    
                </div>


                <div class="modal-footer">
                    <div align="center">
                        <button id="botonProfesor" type="submit" class="btn btn-primary" onclick="close();"></button>
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


<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>
<script type="text/javascript">
</script>
<!-- inline scripts related to this page -->

<script type="text/javascript">
    var table_Prof;
    var dataset_prof = [];
    var editid_prof;
    var action_prof;
    const MAX_CODPUCP_PROF = 8;
    
    function getButtons_Profesor(i, pro_id) {

        var param = "'" + i + "','" + pro_id + "'";
        var butons = '<div class="hidden-sm hidden-xs action-buttons">' +

            '<a  onClick="edit_onClick_Profesor(' + param + ')" class="green">' +
            '<i class="ace-icon fa fa-pencil bigger-130">' + '</i>' +
            '</a>' +

            '<a onClick="delete_onClick_Profesor(' + param + ')" class="red" ">' +
            '<i class="ace-icon fa fa-trash-o bigger-130">' + '</i>' +
            '</a>' +
            '</div>';


        return butons;
    }


     $("#form_prof").submit(function(event) {
        //$("#botonAlumno").click();
        botonProf_onClick();
        event.preventDefault();
    });
    
    function add_onClick_Profesor() {
        action_prof = "ADD";

        $("#prof_nombre").val("");
        $("#prof_correo").val("");
        $("#prof_codpucp").val("");
        
        $("#prof_codpucp").attr('pattern', '.{8}');
        $("#prof_codpucp").attr('title', 'Tiene que tener 8 dígitos');
        
        document.getElementById("prof_codpucp").required = true;
        document.getElementById("prof_nombre").required = true;
        
        $("#prof_correo").attr('type', 'email');
        
        $("#modal_profesor").modal();
        document.getElementById("botonProfesor").innerHTML = 'Registrar';
    }


    function botonProf_onClick(){//$("#botonProfesor").on('click', function(e) {
        //boton de registro para profesor
        if (action_prof == "ADD") {
            //tipo = "Persona";
            i = dataset_prof.length;   
            $.ajax({
                type: "POST",
                url: 'service_docente',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {

                    eva_nombre: $('#prof_nombre').val(),
                    eva_tipeva: 'd',
                    eva_codpuc: $('#prof_codpucp').val(),
                    eva_correo: $('#prof_correo').val()
                },


                success: function(Response) {
                    dataset_prof.push([
                        //para agregar al datatable
                        Response,
                        $("#prof_nombre").val(),
                        $("#prof_codpucp").val(),
                        $("#prof_correo").val(),
                        getButtons_Profesor(i, i)

                    ]);
                    table_Prof.clear().rows.add(dataset_prof).draw();
                    alert("Registrado");
                }
            });
                $('#modal_profesor').modal('toggle');
        }
        if (action_prof == "UPDATE") {
            $.ajax({
                type: "PATCH",
                url: 'service_docente/' + dataset_prof[editid_prof][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {

                    eva_nombre: $('#prof_nombre').val(),
                    eva_codpuc: $('#prof_codpucp').val(),
                    eva_correo: $('#prof_correo').val()
                },
                success: function(Response) {
                    dataset_prof[editid_prof][1] = $("#prof_nombre").val();
                    dataset_prof[editid_prof][2] = $("#prof_codpucp").val();
                    dataset_prof[editid_prof][3] = $("#prof_correo").val();

                    table_Prof.clear().rows.add(dataset_prof).draw();

                    alert(Response);
                }
            });
            $('#modal_profesor').modal('toggle');            
        }

        if (action_prof == "DELETE") {
            $.ajax({
                type: "DELETE",
                url: 'service_docente/' + dataset_prof[editid_prof][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(Response) {

                    table_Prof.rows(editid_prof).remove().draw();

                    alert(Response);
                }
            });
            $('#modal_profesor').modal('toggle');
        }

    }//});

    function edit_onClick_Profesor(id, eva_id) {
        action_prof = "UPDATE";
        var rows = table_Prof.rows(id).data();
        editid_prof = parseInt(id);
        $("#prof_nombre").val(dataset_prof[editid_prof][1] + "");
        $("#prof_codpucp").val(dataset_prof[editid_prof][2] + "");
        $("#prof_correo").val(dataset_prof[id][3] + "");
        
        $("#prof_codpucp").attr('pattern', '.{8}');
        $("#prof_codpucp").attr('title', 'Tiene que tener 8 dígitos');
        
        document.getElementById("prof_codpucp").required = true;
        document.getElementById("prof_nombre").required = true;
        
        $("#prof_correo").attr('type', 'email');
        
        $("#modal_profesor").modal();
        document.getElementById("botonProfesor").innerHTML = 'Actualizar';
    }

    function delete_onClick_Profesor(id, eva_id) {
        action_prof = "DELETE";

        var rows = table_Prof.rows(id).data();
        editid_prof = parseInt(id);
        $("#prof_nombre").val(dataset_prof[editid_prof][1] + "");
        $("#prof_codpucp").val(dataset_prof[editid_prof][2] + "");
        $("#prof_correo").val(dataset_prof[id][3] + "");

        $("#prof_codpucp").removeAttr('pattern');
        $("#prof_codpucp").removeAttr('title');
        
        document.getElementById("prof_codpucp").required = false;
        document.getElementById("prof_nombre").required = false;
        
        $("#prof_correo").attr('type', 'text');
        
        $("#modal_profesor").modal();
        document.getElementById("botonProfesor").innerHTML = 'Eliminar';
    }

    $(document).ready(function() {
        table_Prof =
            $('#dynamic_table_profesor')
            .DataTable({
                bAutoWidth: false,
                "aoColumns": [
                    {"sWidth": "5%"},
                    {"sWidth": "27%"},
                    {"sWidth": "27%"},
                    {"sWidth": "27%"},
                    {"sWidth": "20%", "bSortable":false}
                ],
                "aaSorting": [],
                select: {
                    style: 'single'
                }
            });
        $.ajax({
            type: "GET",
            url: 'service_docente',
            success: function(result) {
                var data = jQuery.parseJSON(result);
                for (var i = 0; i < data.length; i++) {
                    if (data[i].usu_activo === 1) {
                        dataset_prof.push([
                            data[i].eva_id,
                            data[i].eva_nombre,
                            data[i].eva_codpuc,
                            data[i].eva_correo,
                            getButtons_Profesor(i)
                        ])
                    }
                }
                table_Prof.clear().rows.add(dataset_prof).draw()
            }
        });
    });
</script>