<div class="space-10"></div>
<div class="col-xs-12" id="tools-jp">
    <div class="pull-right tableTools-container"></div>
</div>
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <table id="dynamic_table_jp" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
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
<form class="form-horizontal" role="form" style="padding-left: 66px;" id="form_jp">
<div align="center">
    <div class="modal fade" id="modal_jp" role="dialog">
        <div class="modal-dialog" style="width: 500px;">
            <div class="modal-content">
                <!-- Modal content-->
                <div class="page-header">
                    <!-- /.page-header -->
                    <button type="button" class="fa fa-times btn-danger" style="float: right; margin-right: 8px" data-dismiss="modal"></button>
                    <div class="space-10"></div>
                    <h1> Jefe de práctica </h1>
                </div>
                <div class="row">
                    
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Nombre </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="jp_nombre" type="text" id="form-field-3" class="col-xs-9 col-sm-9" placeholder="*obligatorio" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode==45 || event.charCode == 193 || event.charCode == 201 || event.charCode == 205 || event.charCode == 211 || event.charCode == 218 || event.charCode == 221 || event.charCode == 225 || event.charCode == 233 || event.charCode == 237 || event.charCode == 243 || event.charCode == 252 || event.charCode==32)"/>

                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Código  </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="jp_codpucp" type="text" class="col-xs-5 col-sm-7" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5"> Correo </label>
                            <div class="col-sm-9 col-xs-9">
                                <input id="jp_correo" id="form-field-5" class="col-xs-5 col-sm-7" />
                            </div>
                        </div>
                    
                </div>

                <div class="modal-footer">
                    <div align="center">
                        <button id="botonJP" type="submit" class="btn btn-primary" onclick="close();"></button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
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
    var table_JP;
    var dataset_JP = [];
    var edit_id_JP;
    var action_JP;

    function getButtons_JP(i, pro_id) {
        var param = "'" + i + "','" + pro_id + "'";
        var butons = '<div class="hidden-sm hidden-xs action-buttons">' +
            '<a  onClick="edit_onClick_JP(' + param + ')" class="green">' +
            '<i class="ace-icon fa fa-pencil bigger-130">' + '</i>' +
            '</a>' +
            '<a onClick="delete_onClick_JP(' + param + ')" class="red" ">' +
            '<i class="ace-icon fa fa-trash-o bigger-130">' + '</i>' +
            '</a>' +
            '</div>';
        return butons;
    }

    function add_OnClick_JP() {
        action_JP = "ADD";

        $("#jp_nombre").val("");
        $("#jp_correo").val("");
        $("#jp_codpucp").val("");
        
        $("#jp_codpucp").attr('pattern', '.{8}');
        $("#jp_codpucp").attr('title', 'Tiene que tener 8 dígitos');
        
        document.getElementById("jp_codpucp").required = true;
        document.getElementById("jp_nombre").required = true;
        
        $("#jp_correo").attr('type', 'email');
        
        $("#modal_jp").modal();
        document.getElementById("botonJP").innerHTML = 'Registrar';
    }

    $("#form_jp").submit(function(event) {
        botonJP_onClick();
        event.preventDefault();
    });
    
    function botonJP_onClick() { //$("#botonJP").on('click', function(e) {
        if (action_JP == "ADD") {
            i = dataset_JP.length;
            $.ajax({
                type: "POST",
                url: 'service_jp',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {

                    eva_nombre: $('#jp_nombre').val(),
                    eva_tipeva: 'j',
                    eva_codpuc: $('#jp_codpucp').val(),
                    eva_correo: $('#jp_correo').val()
                },


                success: function(Response) {
                    dataset_JP.push([
                        //para agregar al datatable
                        Response,
                        $("#jp_nombre").val(),
                        $("#jp_codpucp").val(),
                        $("#jp_correo").val(),
                        getButtons_JP(i, i)

                    ]);
                    table_JP.clear().rows.add(dataset_JP).draw();
                    alert("Registrado");
                }
            });
                $('#modal_jp').modal('toggle');            
        }
        if (action_JP == "UPDATE") {
            $.ajax({
                type: "PATCH",
                url: 'service_jp/' + dataset_JP[edit_id_JP][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                data: {
                    eva_nombre: $('#jp_nombre').val(),
                    eva_codpuc: $('#jp_codpucp').val(),
                    eva_correo: $('#jp_correo').val()
                },
                success: function(Response) {
                    dataset_JP[edit_id_JP][1] = $("#jp_nombre").val();
                    dataset_JP[edit_id_JP][2] = $("#jp_codpucp").val();
                    dataset_JP[edit_id_JP][3] = $("#jp_correo").val();                    table_JP.clear().rows.add(dataset_JP).draw();
                    alert(Response);
                }
            });
               $('#modal_jp').modal('toggle'); 
            
        }

        if (action_JP == "DELETE") {
            $.ajax({
                type: "DELETE",
                url: 'service_jp/' + dataset_JP[edit_id_JP][0],
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');

                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(Response) {
                    table_JP.rows(edit_id_JP).remove().draw();
                    alert(Response);
                }
            });
            $('#modal_jp').modal('toggle');
        }

    }//});

    function edit_onClick_JP(id, eva_id) {
        action_JP = "UPDATE";
        var rows = table_JP.rows(id).data();
        edit_id_JP = parseInt(id);
        $("#jp_nombre").val(dataset_JP[edit_id_JP][1] + "");
        $("#jp_codpucp").val(dataset_JP[edit_id_JP][2] + "");
        $("#jp_correo").val(dataset_JP[id][3] + "");        $("#modal_jp").modal();
        document.getElementById("botonJP").innerHTML = 'Actualizar';
    }

    function delete_onClick_JP(id, alu_id) {
        action_JP = "DELETE";
        var rows = table_JP.rows(id).data();
        edit_id_JP = parseInt(id);
        $("#jp_nombre").val(dataset_JP[edit_id_JP][1] + "");
        $("#jp_codpucp").val(dataset_JP[edit_id_JP][2] + "");
        $("#jp_correo").val(dataset_JP[id][3] + "");
        $("#modal_jp").modal();
        document.getElementById("botonJP").innerHTML = 'Eliminar';
    }

    $(document).ready(function() {
        table_JP =
            $('#dynamic_table_jp')
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

        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

        new $.fn.dataTable.Buttons( table_JP, {
            buttons: [
                {
                    "extend": "copy",
                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "csv",
                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "excel",
                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "pdf",
                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                    "className": "btn btn-white btn-primary btn-bold"
                },
                {
                    "extend": "print",
                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                    "className": "btn btn-white btn-primary btn-bold",
                    autoPrint: true
                }
            ]
        } );

        table_JP.buttons().container().appendTo( $('#tools-jp .tableTools-container ') );

        //style the message box
        var defaultCopyAction = table_JP.button(1).action();
        table_JP.button(1).action(function (e, dt, button, config) {
            defaultCopyAction(e, dt, button, config);
            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
        });

        setTimeout(function() {
            $($('#tools-jp .tableTools-container')).find('a.dt-button').each(function() {
                var div = $(this).find(' > div').first();
                if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                else $(this).tooltip({container: 'body', title: $(this).text()});
            });
        }, 500);


        $.ajax({
            type: "GET",
            url: 'service_jp',
            success: function(result) {
                var data = jQuery.parseJSON(result);
                for (var i = 0; i < data.length; i++) {
                    if (data[i].usu_activo == 1) {
                        dataset_JP.push([
                            data[i].eva_id,
                            data[i].eva_nombre,
                            data[i].eva_codpuc,
                            data[i].eva_correo,
                            getButtons_JP(i)

                        ])

                    }
                }
                table_JP.clear().rows.add(dataset_JP).draw()
            }
        });
    });
</script>