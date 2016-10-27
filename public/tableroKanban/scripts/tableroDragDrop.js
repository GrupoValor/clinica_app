$(document).ready(function() {

    $("#backlog").sortable({ //inicio sortable
		connectWith: "#pendiente, #proceso, #finalizada",
		receive: function(event, ui) { //inicio receive
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
		receive: function(event, ui) { //inicio receive
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
		receive: function(event, ui) { //inicio receive
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
		receive: function(event, ui) { //inicio receive
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
    $(document).on('mousedown','li', function() {
		$(this).css(
			{
				'backgroundColor' : 'black',
				'color' : 'white'
			}
		);
  	}).on('mouseup','li', function() {
  		$('li').css(
  			{
  				'backgroundColor' : '',
  				'color' : ''
  			}
  		)
  	});


    //Al  hacer doble click sobre las tareas se despliega su detalle
    $(document).on('dblclick','.tarea',function(){

        var id_tarea = this.id;

        $.get("ajax/detalle-tarea.ajax.php",{'id': this.id},function(data){
            $('#descripcion-detalle-tarea').remove();
            $('#label-detalle-tarea').after('<input type="text" class="form-control" id="descripcion-detalle-tarea" disabled placeholder="'+data+'">');

        });
        $('.bs-detalle-tarea-modal-lg').modal('show');

        $('#boton-eliminar-tarea').on('click',function(){

            alert("Tarea eliminada");
        })
        //<label for="descripcion-detalle-tarea">Titulo:</label>
        //<input type="text" class="form-control" id="descripcion-titulo-tarea" placeholder="" disabled>
    })


    //Agregar una tarea
    $('#btn-guardar-tarea').on('click', function(){
      $.get("ajax/inserta-detalle-tarea.ajax.php",
          {'titulo': $('#titulo-tarea').val(),
          'descripcion': $('#descripcion-tarea').val()
          }, function(data){
        $('#backlog').append('<li class="tarea" id="'+ data + '">' + $('#titulo-tarea').val()+'</li>');
      });



    })

});
