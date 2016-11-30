/*
 * Estas son funciones jQuery para todo lo implicado a mantenimiento de rubricas, registro de notas,
 * mantenimientos de cursos y ciclos, y registro de comentarios.
 * @author Agc96
 */

//FUNCION PARA EDITAR RUBRICA
function rba_editar(rba_id) {
	$('#rba_edit_id').attr('value', rba_id);
	$('#rba_edit_nombre').attr('value', $("h4#" + rba_id).text());
	$('#rba_edit_peso').attr('value', $("#rba_peso_" + rba_id).text());
}

//FUNCION PARA ELIMINAR RUBRICA
function rba_eliminar(rba_id) {
	$('#rba_delete_id').attr('value', rba_id);
}

//FUNCION PARA AÑADIR RUBRO
function rbo_anadir(rba_id) {
	$('#rba_add_id').attr('value', rba_id);
}

//FUNCION PARA EDITAR RUBRO
function rbo_editar(rbo_id) {
	$('#rbo_edit_id').attr('value', rbo_id);
	$('#rbo_edit_nombre').attr('value', $("#rbo_nombre_" + rbo_id).text());
	$('#rbo_edit_maxpunt').attr('value', $("#rbo_maxpunt_" + rbo_id).text());
}

//FUNCION PARA ELIMINAR RUBRO
function rbo_eliminar(rbo_id) {
	$('#rbo_delete_id').attr('value', rbo_id);
}

//FUNCION PARA CAMBIAR RUBRICAS (SELECT DINAMICO)
function cambiarRubricas() {
	var location = window.location.pathname;
	var directoryPath = location.substring(0, location.lastIndexOf("/")+1);

	$.get(directoryPath + "ta_notas_per?curso=" + $("#curso").val() + "&ciclo=" + $("#ciclo").val() + "",
		function(response, state)
		{
			//Cambiar valor del periodo (oculto)
			$('#periodo').attr('value', response[0].per_id);

			//Cambiar opciones del select de las semanas
			$("#semana").empty();
			if (response[0].per_semanas == 0) {
				$('#semana').append("<option value='" + 0 + "'>No existe</option>");
			}
			for (i = 1; i <= response[0].per_semanas; i++) {
				$('#semana').append("<option value='" + i + "'>" + i + "</option>");
			}
			$('#num_semanas').text(response[0].per_semanas);

			//Cambiar opciones del select de las rubricas
			$("#rubrica").empty();
			$.each(response[1], function(key, value) {
				$("#rubrica").append("<option value='" + key + "'>" + value + "</option>");
			});
		}
	);
}

function cambiarNota(alumno, rubrica) {
	//Obtener suma de notas
	var suma = 0;
	var esNull = true;
	$('input[name^="rubro[' + alumno + '][' + rubrica + ']"]').each(function(id, rubro) {
		var puntaje = parseInt(rubro.value);
		suma += (isNaN(puntaje)) ? 0 : puntaje;
		esNull &= (isNaN(puntaje));
	});
	//Si todos los rubros estan en null, la rubrica tambien
	if (esNull) suma = null;
	//Cambiar valores
	$('input[name="rubrica[' + alumno + '][' + rubrica + ']"]').attr('value', suma);
}


function enviarComentario() {
	var direccion = window.location.pathname;
	var directorio = location.substring(0, location.lastIndexOf("/")+1);
	var ruta = directorio + "ta_comment";

	$.ajax({
		url: route,
		type: 'POST',
		dataType: 'json',
		data: {
			alumno: 0,
			rubrica: 0,
			semana: 0
		},
		success: function() {
			alert("Success");
			//$("#msg-ok").fadeIn();
		},
		fail: function() {
			alert("Fail");
		},
		beforeSend: function() {
			alert("beforeSend");
		}

	});
}