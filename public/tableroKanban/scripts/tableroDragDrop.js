
$(document).ready(function () {
  var seEdito=false;

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
            $('#label-nombre-tarea').after('<input type="text" class="form-control" id="nombre-detalle-tarea" disabled>');
            $('#nombre-detalle-tarea').val(data1);
        });

        //Obtenemos la descripcion
        $.get("ajax/detalle-tarea.ajax.php", {'id': this.id}, function (data2) {
            $('#descripcion-detalle-tarea').remove();
            $('#label-detalle-tarea').after('<textarea class="form-control" rows="3" id="descripcion-detalle-tarea"  disabled>');
            $('#descripcion-detalle-tarea').val(data2);
        });

        //Obtenemos la fecha de registro
        $.get("ajax/detalle-fecha-registro.ajax.php", {'id': this.id}, function (data3) {
            $('#descripcion-fecha-registro').remove();
            $('#label-fecha-registro').after('<input type="datetime" class="form-control" id="descripcion-fecha-registro" disabled>');
            $('#descripcion-fecha-registro').val(data3);
        });

        //mostramos el modal
        $('#modal-detalle-tarea').modal('show');

        $(document).on('dblclick','.comentario',function () {
            var comentario=this;
            $('#modal-eliminar-comentario').modal('show');
            $('#boton-elimina-comentario').on('click',function () {
               $.get("ajax/elimina-comentario.ajax.php", {'id': comentario.id});
                comentario.remove();
            });
        });
        //manejo de eventos
        $('#boton-elimina-tarea-ok').on('click', function () {
            $.get("ajax/elimina-tarea.ajax.php", {'tar_id': tarea.id});
            tarea.remove();
            $('#modal-detalle-tarea').modal('hide');
        });


        $('#guardarCambios').on('click',function () {

            if(seEdito && ($('#nombre-detalle-tarea').val().trim().length>0)){
                  $.get("ajax/cambia-datos-caso.ajax.php",
                    {'tar_id':tarea.id,
                        'nombre-detalle-tarea': $('#nombre-detalle-tarea').val(),
                        'descripcion-detalle-tarea': $('#descripcion-detalle-tarea').val()
                    },function(){
                      document.getElementById(tarea.id).innerHTML = $('#nombre-detalle-tarea').val();
                    });
                    eEdito = false;
                    document.getElementById("nombre-detalle-tarea").disabled = true;
                    document.getElementById("descripcion-detalle-tarea").disabled = true;
                    document.getElementById("guardarCambios").disabled = true;
            } else {
              alert("Complete el titulo de tarea");
            }
        });


        $('#boton-editar').on('click', function () {
            seEdito=true;
            document.getElementById("guardarCambios").disabled = false;
            document.getElementById("nombre-detalle-tarea").disabled = false;
            document.getElementById("descripcion-detalle-tarea").disabled = false;
        });
        $('#boton-ingresar-comentario').off().on('click', function () {
            if($('#contenido-comentario').val().trim().length<1) {
                alert("No se permiten comentarios vacios");
            } else {
              //solo se agrega un comentario si es que se ha comentado algo (si no es vacio)
              $.get("ajax/inserta-comentario.ajax.php",
                  {
                      'tar_id': tarea.id,
                      'com_mensaje': $('#contenido-comentario').val()
                  }, function (data) {
                      $('#lista-comentarios').append('<li class="comentario" id="' + data + '"> super_user escribio: ' + $('#contenido-comentario').val() + '</li>');
                      $('#contenido-comentario').val('');
                  });
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
          if($('#titulo-tarea').val().trim().length>0){
        $.get("ajax/inserta-detalle-tarea.ajax.php",
            {
                'titulo': $('#titulo-tarea').val(),
                'descripcion': $('#descripcion-tarea').val(),
                'cas_id': parseInt(getUrlVars()['id'])
            }, function (data) {
                $('#backlog').append('<li class="tarea" id="' + data + '">' + $('#titulo-tarea').val() + '</li>');
                $('#titulo-tarea').val('');
                $('#descripcion-tarea').removeData();
            });
            $('#modal-agrega-tarea').modal('hide');
          }
            else(alert("Titulo obligatorio"));

    })

    $("#modal-agrega-tarea").on('hidden.bs.modal', function () {
        $('#titulo-tarea').val('');
        $('#descripcion-tarea').val('');
    });


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


    //registrar una alerta de pedido de documento
    $('#boton-agregar-alerta').on('click', function(){
      var win = window.open('../mapa/mapa.php', '_blank','height=480,width=900');
      if (win) {
          win.focus();
      } else {
          alert('Por favor permita pop-ups en su navegador');
      }
    })

});
