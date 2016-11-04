$(document).ready(function () {

    $("#backlog").sortable({ //inicio sortable
        connectWith: "#pendiente, #proceso, #finalizada",
        receive: function (event, ui) { //inicio receive
            var id = $(ui.item).attr('id');
            var estado = this.id;
            $.ajax({ //inicio ajax
                url: "ajax/conexion-multiple.ajax.php",
                type: "GET",
                data: {
                    'id': id,
                    'estado': estado
                },
            }); //fin ajax
        }, //fin receive
    }); //fin sortable

    $("#pendiente").sortable({ //inicio sortable
        connectWith: "#backlog, #proceso, #finalizada",
        receive: function (event, ui) { //inicio receive
            var id = $(ui.item).attr('id');
            var estado = this.id;
            $.ajax({ //inicio ajax
                url: "ajax/conexion-multiple.ajax.php",
                type: "GET",
                data: {
                    'id': id,
                    'estado': estado
                },
            }); //fin ajax
        }, //fin receive
    }); //fin sortable

    $("#proceso").sortable({ //inicio sortable
        connectWith: "#pendiente, #backlog, #finalizada",
        receive: function (event, ui) { //inicio receive
            var id = $(ui.item).attr('id');
            var estado = this.id;
            $.ajax({ //inicio ajax
                url: "ajax/conexion-multiple.ajax.php",
                type: "GET",
                data: {
                    'id': id,
                    'estado': estado
                },
            }); //fin ajax
        }, //fin receive
    }); //fin sortable

    $("#finalizada").sortable({ //inicio sortable
        connectWith: "#pendiente, #proceso, #backlog",
        receive: function (event, ui) { //inicio receive
            var id = $(ui.item).attr('id');
            var estado = this.id;
            $.ajax({ //inicio ajax
                url: "ajax/conexion-multiple.ajax.php",
                type: "GET",
                data: {
                    'id': id,
                    'estado': estado
                },
            }); //fin ajax
        }, //fin receive
    }); //fin sortable


    //Para los efectos de drag and drop
    $(document).on('mousedown', 'li', function () {
        $(this).css(
            {
                'backgroundColor': '#285e8c',
                'color': 'white'
            }
        );
    }).on('mouseup', 'li', function () {
        $('li').css(
            {
                'backgroundColor': '',
                'color': ''
            }
        )
    });


    //Al  hacer doble click sobre las tareas se despliega su detalle
    $(document).on('dblclick', '.tarea', function () {

        var tarea = this;

        //Primero tenemos que listar todos comentarios, usamos ajax
        $.get("ajax/lista-comentarios.ajax.php", {'tar_id': tarea.id},
            function (data) {
                $("#contenedor-lista-comentarios").html(data);
            }, "html");

        //Obtenemos el nombre de la tarea
        $.get("ajax/nombre-tarea.ajax.php", {'id': this.id}, function (data1) {
            $('#nombre-detalle-tarea').remove();
            $('#label-nombre-tarea').after('<input type="text" class="form-control" id="nombre-detalle-tarea" disabled placeholder="' + data1 + '">');
        });
        $('#botonEditar').on('click', function () {
            //$('#nombre-detalle-tarea').read;
        })
        //Obtenemos la direccion
        $.get("ajax/detalle-tarea.ajax.php", {'id': this.id}, function (data2) {
            $('#descripcion-detalle-tarea').remove();
            $('#label-detalle-tarea').after('<textarea class="form-control" rows="3" id="descripcion-detalle-tarea"  disabled placeholder="' + data2 + '"</textarea>');
        });

        //mostramos el modal
        $('#modal-detalle-tarea').modal('show');

        //manejo de eventos
        $('#boton-eliminar-tarea').on('click', function () {
            tarea.remove();
            $.get("ajax/elimina-tarea.ajax.php", {'id': tarea.id});
        })

        $('#boton-ingresar-comentario').off().on('click', function () {
            if ($('#contenido-comentario').val()) {
                //solo se agrega un comentario si es que se ha comentado algo (si no es vacio)

                $.get("ajax/inserta-comentario.ajax.php",
                    {
                        'tar_id': tarea.id,
                        'com_mensaje': $('#contenido-comentario').val()
                    }, function (data) {
                        $('#lista-comentarios').append('<li class="comentario" id="' + data + '"> super_user escribio: ' + $('#contenido-comentario').val() + '</li>');
                    });
                $('#contenido-comentario').removeData();
            }
        });
        //<label for="descripcion-detalle-tarea">Titulo:</label>
        //<input type="text" class="form-control" id="descripcion-titulo-tarea" placeholder="" disabled>
    })

    //Para conseguir variables de la url
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }

    //Agregar una tarea
    $('#btn-guardar-tarea').on('click', function () {
        if($('#titulo-tarea').val() && $('#descripcion-tarea').val()){
        $.get("ajax/inserta-detalle-tarea.ajax.php",
            {
                'titulo': $('#titulo-tarea').val(),
                'descripcion': $('#descripcion-tarea').val(),
                'cas_id': parseInt(getUrlVars()['id'])
            }, function (data) {
                $('#backlog').append('<li class="tarea" id="' + data + '">' + $('#titulo-tarea').val() + '</li>');
                $('#titulo-tarea').removeData();
                $('#descripcion-tarea').removeData();
            });}
    })

    //cambiar estado de un casos
    $('#boton-cambia-estado').on('click', function () {
        var value = $("form input[type='radio']:checked").val();
        if ($("form input[type='radio']").is(':checked')) {
            $.get("ajax/cambia-estado-caso.ajax.php", {
                'id_estado': value,
                'cas_id': parseInt(getUrlVars()['id'])
            }, function (data) {
                $("#nombre-estado").html(data);
            }, "html")
        }
        $("form input[type='radio']:checked").removeAttr("checked");
    })


});
