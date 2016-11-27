<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="icon/valor.png" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Eventos</title>

    <meta name="description" content="with draggable and editable events" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css" />
    <link rel="stylesheet" href="assets/css/chosen.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
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
                <li class="active">Eventos</li>
            </ul>
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Calendario de eventos
                </h1>
                <div>
                    <button id="botonNuevo" type="button" class="btn btn-primary" style="float: right;margin-top: -30px;" onclick="click_botonNuevo()">Nuevo +</button>
                </div>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="space"></div>

                            <div id="calendar"></div>
                        </div>

                        <div class="col-sm-3">
                            <div class="widget-box transparent">
                                <div class="widget-header">
                                    <h4>Buscar evento</h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <div class="row">
                                            <div class="col-xs-8 col-sm-11">
                                                <input type="hidden" name="id"/>
                                                <input type="text" class="form-control" id="buscador" placeholder="Palabra clave.."/>
                                                <button type="button" class="btn btn-success btn-sm" id="btn-buscar">Buscar</button></td>
                                            </div>
                                        </div>
                                        &nbsp; &nbsp;
                                        <div class="row">
                                            <div class="col-xs-8 col-sm-11" >
                                                <div id="tabla-busqueda" style='float:left;overflow-y: auto; width:250px; height: 500px;'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<?php  echo view('intranet/footer'); ?>


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
                        <div id="id_evento" class="hide"></div>
                        <div class="form-group">
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-3"> Título </label>
                            <div class="col-sm-8 col-xs-8">
                                <input id="titulo" type="text" class="form-control" placeholder="*obligatorio" required/>
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
                            <label class="col-sm-3 col-xs-3 control-label no-padding-right" for="form-field-5">Fechas y horas</label>
                            <div class="col-sm-8 col-xs-8">
                                <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
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

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/bootbox.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

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

<!-- inline scripts related to this page -->
<script type="text/javascript">
    var action;
    var action_calendar="NO";
    var action_delete="NO";
    jQuery('#ligestor').addClass('active open');
    jQuery('#lieventos').addClass('active');
    jQuery(function($) {

        /* initialize the external events
         -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });




        /* initialize the calendar
         -----------------------------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
            //isRTL: true,
            //firstDay: 1,// >> change first day of week
            eventColor: '#6FB3E0',
            timeFormat: 'h(:mm)t',
            buttonHtml: {
                prev: '<i class="ace-icon fa fa-chevron-left"></i>',
                next: '<i class="ace-icon fa fa-chevron-right"></i>'
            },

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: {
                url: 'service_evento',//'php-includes/events.json',//
                error:function(){
                    alert("Error al cargar la agenda");
                }
            },nowIndicator:true,
            eventResize: function(event, revertFunc) {
                if (!confirm("La fecha de fin del evento " + event.title + " cambiará a " + moment(event._end).format('DD/MM/YYYY h:mm A') + " ¿Está seguro?")) {
                    revertFunc();
                } else { //update date TODO
                    action = "UPDATE";
                    action_calendar = "YES";
                    click_botonSubmit(event);//event.id,0,event._end.format("YYYY-MM-DD H:mm"));
                }
                calendar.fullCalendar('unselect');
            },
            eventDrop: function(event,revertFunc) {

                if (!confirm("El evento " + event.title + " cambiará su fecha de inicio a " + moment(event._start).format('DD/MM/YYYY h:mm A') +  " y su fecha de fin a " + moment(event._end).format('DD/MM/YYYY h:mm A') + " ¿Está seguro?")) {
                    revertFunc();
                }else{
                    action = "UPDATE";
                    action_calendar = "YES";
                    click_botonSubmit(event);//event.id,event._start.format("YYYY-MM-DD H:mm"),event._end.format("YYYY-MM-DD H:mm"));
                }
                calendar.fullCalendar('unselect');
            },
            editable: true,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                action = "ADD"
                document.getElementById("botonSubmit").innerHTML = 'Registrar';
                document.getElementById("botonDanger").innerHTML = 'Cancelar';
                $("#modal_evento").find('input, textarea').val('').end();
                $('#imagen').ace_file_input('reset_input');
                document.getElementById("enWeb").checked=true;
                $("span img[class='middle']").remove();
                $("span[class='ace-file-name']").html('<i class=" ace-icon ace-icon fa fa-picture-o">');
                $("#modal_evento").modal();

                $('input[name=date-range-picker]').daterangepicker({ //Date range picker
                    'applyClass' : 'btn-sm btn-success',
                    'cancelClass' : 'btn-sm btn-default',
                    timePicker: true,
                    timePickerIncrement: 1,
                    locale: {
                        applyLabel: 'Apply',
                        cancelLabel: 'Cancel',
                        format: 'DD/MM/YYYY h:mm A'
                    },
                    "opens": "left",
                    "drops": "up",
                    "startDate": moment(start).format('DD/MM/YYYY h:mm A'),
                    "endDate": moment(end).format('DD/MM/YYYY h:mm A')
                }).prev().on(ace.click_event, function(){
                    $(this).next().focus();
                });
             calendar.fullCalendar('unselect');
            },
            eventClick: function(calEvent, jsEvent, view) {
                action_delete = "YES";
                action = "UPDATE";
                //$("#botonNuevo").click(action);
                document.getElementById("botonSubmit").innerHTML = 'Actualizar';
                document.getElementById("botonDanger").innerHTML = 'Eliminar';
                viewEvent(calEvent._id, calEvent._start, calEvent._end, calEvent.title, calEvent.description, calEvent.link, calEvent.active, calEvent.image);
                $("#modal_evento").modal();
             }

        });



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

        $('input[name=date-range-picker]').daterangepicker({ //Date range picker
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            timePicker: true,
            timePickerIncrement: 1,
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
                format: 'DD/MM/YYYY h:mm A'
            },
            "opens": "left",
            "drops": "up"
        })
                .prev().on(ace.click_event, function(){
            $(this).next().focus();
        });
        if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        $('#timepicker2').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker2').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });

    });

    //New functions

    function click_botonSubmit(evento){//id, start, end){ //Para agregar o actualizar un evento
        if(action=="ADD"){
            alert("Add a new event");
            var fecha_ini = $("#id-date-range-picker-1").data('daterangepicker').startDate.format("YYYY-MM-DD HH:mm:ss").toString();
            var fecha_fin = $("#id-date-range-picker-1").data('daterangepicker').endDate.format("YYYY-MM-DD HH:mm:ss").toString();
            var file = document.getElementById('imagen').files;
            var imagen=null;
            if(file.length != 0){
                imagen = file[0];
            }
            var act=-1;
            if( document.getElementById("enWeb").checked == true){
                act = 1;
            }else act=0;

            var form_data = new FormData();
            form_data.append('eve_id', "NO_ID");
            form_data.append('eve_titulo', $("#titulo").val());
            form_data.append('eve_fechaIn', fecha_ini);
            form_data.append('eve_fechaFin', fecha_fin);
            form_data.append('eve_descr', $("#descripcion").val() );
            form_data.append('file', imagen);
            form_data.append('eve_activo', act);
            form_data.append('eve_link', $("#link").val());

            $.ajax({
                enctype: "multipart/form-data",
                type: "POST",
                url: 'service_evento',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function(Response) {
                    $('#calendar').fullCalendar( 'refetchEvents' ); //para cargar el calendario con nuevos eventos
                    alert(Response);
                },
                error: function(xhr) {
                    alert("Error al agregar un evento");
                }
            });
            $('#modal_evento').modal('toggle');
        }else if(action=="UPDATE"){
            console.log("ss");
            var id_eve;
            var titulo;
            var descrip;
            var fecha_ini;
            var fecha_fin;
            var imagen;
            var link;
            var enweb;

            //Del calendario drop y change dates
            if(action_calendar=="YES") {
                id_eve = evento._id;
                titulo = evento.title;
                descrip = evento.description;
                fecha_ini = evento._start.format("YYYY-MM-DD HH:mm:ss");
                fecha_fin = evento._end.format("YYYY-MM-DD HH:mm:ss");
                imagen = evento.image;
                link = evento.link;
                enweb = evento.active;
                action_calendar = "NO";
            }else{
                id_eve = $("#id_evento").val();
                titulo = $("#titulo").val();
                descrip = $("#descripcion").val();
                fecha_ini = $("#id-date-range-picker-1").data('daterangepicker').startDate.format("YYYY-MM-DD HH:mm:ss").toString();
                fecha_fin = $("#id-date-range-picker-1").data('daterangepicker').endDate.format("YYYY-MM-DD HH:mm:ss").toString();
                var file = document.getElementById('imagen').files;
                imagen=null;
                if(file.length != 0){
                    imagen = file[0];
                }
                if( document.getElementById("enWeb").checked == true){
                    enweb = 1;
                }else enweb=0;

                link = $("#link").val();
                $('#modal_evento').modal('toggle');
            }


            var form_data = new FormData();
            form_data.append('eve_id', id_eve);
            form_data.append('eve_titulo', titulo);
            form_data.append('eve_fechaIn', fecha_ini);
            form_data.append('eve_fechaFin', fecha_fin);
            form_data.append('eve_descr', descrip);
            form_data.append('file', imagen);
            form_data.append('eve_activo', enweb);
            form_data.append('eve_link', link);

            $.ajax({
                enctype: "multipart/form-data",
                type: "POST",
                url: 'service_evento',
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                /*{
                    eve_titulo : titulo,
                    eve_fechaIn :fecha_ini,
                    eve_fechaFin : fecha_fin,
                    eve_descr :descrip,
                    file : imagen,
                    eve_activo :enweb,
                    eve_link: link
                },*/
                success: function(Response) {
                    $('#calendar').fullCalendar( 'refetchEvents' );
                    alert(Response);
                },
                error: function(e){
                    alert("Error");
                }
            });
        }

    }

    $("#form_evento").submit(function(event) {
        event.preventDefault();
        click_botonSubmit(0);
    });

    function click_botonNuevo(){//$("#botonNuevo").on("click",function(action){
        action = "ADD";
        action_delete = "NO";
        document.getElementById("botonSubmit").innerHTML = 'Registrar';
        document.getElementById("botonDanger").innerHTML = 'Cancelar';
        $("#modal_evento").find('input, textarea').val('').end();
        document.getElementById("enWeb").checked = true;
        $('#imagen').ace_file_input('reset_input');
        $("span img[class='middle']").remove();
        $("span[class='ace-file-name']").html('<i class=" ace-icon ace-icon fa fa-picture-o">');
        $("#modal_evento").modal();
    };

    $("#botonDanger").on("click",function(){
        if(action_delete=="YES"){
            var id_eve  = $("#id_evento").val();
            alert(id_eve);
            $.ajax({
                type: "DELETE",
                url: 'service_evento/' + id_eve,
                beforeSend: function(xhr) {
                    var token = $('meta[name="csrf_token"]').attr('content');
                    if (token) {
                        return xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                },
                success: function(Response) {
                    alert("success");
                    $('#calendar').fullCalendar( 'refetchEvents' );
                    alert(Response);
                },
                error:function(e){
                    alert("Error en eliminar el evento");
                }
            });
            action_delete = "NO";
        }
    });


    $('#btn-buscar').on("click", function() { //BUSQUEDA
        var buscar_palabra=$("#buscador").val().toString().toUpperCase();
        $('#eventos_encontrados').remove();
        $("#tabla-busqueda").append("<ol id='eventos_encontrados'><strong>Eventos encontrados:</strong></ol>");
        $('#calendar').fullCalendar('clientEvents', function(event){ //para cada evento se busca su titulo
            var titulo = event.title;
            var evento_titulo = titulo.toUpperCase();
            var descrip = event.description;
            var descrip_show = descrip.substring(0, 100); //para mostrar un limite de palabras en la descripcion de labusqueda
            var fecha_ini = moment(event._start).format('DD/MM/YYYY');
            var fecha_fin = moment(event._end).format('DD/MM/YYYY');
            var evento_descrip = descrip.toUpperCase();
            if(evento_titulo.indexOf(buscar_palabra)!==-1 || evento_descrip.indexOf(buscar_palabra)!==-1 ||
                    fecha_ini.indexOf(buscar_palabra)!==-1 || fecha_fin.indexOf(buscar_palabra)!==-1){ //buscar palabra en titulo y/o descripcion
                var goCalendar = "$(#'calendar').fullCalendar( 'gotoDate',";
                $("#eventos_encontrados").append("<li>"+
                        "<ul style='list-style-type:none'>" +
                        "<li>Título: "+titulo+"</li>" +
                        "<li>Descripción: "+descrip_show+"</li>" +
                        "<li>Fecha inicio: "+fecha_ini+"</li>" +
                        "<li>Fecha fin: "+fecha_fin+"</li>" +
                        "<li><a href='javascript:" + '$("#calendar").fullCalendar("gotoDate",' +event._start + ");'>Ver en calendario</a></li>" +
                        "<li>&nbsp;</li>"+
                        "</ul>" +
                        "</li>");
            }
        });
    });

    $('#modal_evento').on('hidden.bs.modal', function () {
        $('#imagen').ace_file_input('reset_input');
    })

    function loadImage(image) { //Para cargar la imagen en el modal
        if(image) {
            var loc = window.location.pathname;
            var dir = loc.substring(0, loc.lastIndexOf('/'));
            var image_name = image.substr(image.lastIndexOf("/") + 1); //nombre de la imagen
            $("span[class='ace-file-container']").removeAttr("data-title");
            $("span[class='ace-file-container']").addClass("hide-placeholder selected");
            $("span[class='ace-file-name']").attr('data-title', image_name);
            $("span[class='ace-file-name']").html("<img class='middle' style='background-image:url(" + dir + image + ");width:150px; heigth:150px;' src='" + dir + image + "'/>");
            $("span[class='ace-file-name']").addClass("large");
        }else{
            $("span img[class='middle']").remove();
            $("span[class='ace-file-name']").html('<i class=" ace-icon ace-icon fa fa-picture-o">');
        }
    }

    function viewEvent(id, start, end, title, descrip, link, act, image) { //Falta agregar imagen

        loadImage(image);
        $("#id_evento").val(id);
        $("#titulo").val(title);
        $("#descripcion").val(descrip);
        $("#link").val(link);
        $('input[name=date-range-picker]').daterangepicker({ //Date range picker
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            timePicker: true,
            timePickerIncrement: 1,
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
                format: 'DD/MM/YYYY h:mm A'
            },
            "opens": "right",
            "drops": "up",
            "startDate": moment(start).format('DD/MM/YYYY h:mm A'),
            "endDate": moment(end).format('DD/MM/YYYY h:mm A')
        }).prev().on(ace.click_event, function() {
            $(this).next().focus();
        });

        if(act == 1){
            document.getElementById("enWeb").checked == true;
        }else document.getElementById("enWeb").checked == false;
    };
</script>

<script>

    $(document).ready(function() {
        $.ajax({ //Para llenar la tabla
            type: "GET",
            url: 'service_evento',
            success: function(result) {
                jQuery.parseJSON(result);
            }
        });

    });



</script>

</body>
</html>
