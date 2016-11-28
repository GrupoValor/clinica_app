var estado_alerta;
var id_alerta;
var marcadores_bd=[];
var mapa = null;

function initMap(){
    var marcadores_nuevos = [];

    var marcador;
    var formulario = $("#formulario");

    var punto = new google.maps.LatLng(-12.0553011,-77.0802426);

    var config = {
        zoom:7,
        center:punto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    mapa = new google.maps.Map($("#mapa")[0], config);

    google.maps.event.addListener(mapa, "click", function(event){
        var coordenadas = event.latLng.toString();
        coordenadas = coordenadas.replace("(","");
        coordenadas = coordenadas.replace(")","");

        var lista = coordenadas.split(",");

        var direccion = new google.maps.LatLng(lista[0],lista[1]);
        marcador = new google.maps.Marker({
            icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
            position: direccion,
            map: mapa,
            animation: google.maps.Animation.DROP,
            draggable: false
        });

        formulario.find("input[name ='cx']").val(lista[0]);
        formulario.find("input[name ='cy']").val(lista[1]);
        formulario.find("input[name ='titulo']").focus();

        marcadores_nuevos.push(marcador);

        quitar_marcadores(marcadores_nuevos);
        marcador.setMap(mapa);

    });

    listar();

    $("#formulario").submit(function(event) {
        //$("#botonAlumno").click();
        grabar_onClick();
        event.preventDefault();
    });

    function grabar_onClick(){//(($('#btn-grabar').on("click", function(){
        var f = $("#formulario");

        if(f.find("input[name='cx']").val().trim()=="" || f.find("input[name='cy']").val().trim()==""){
            alert("Falta especificar dirección");
            return false;
        }

        if(f.hasClass("busy")){
            return false;
        }
        f.addClass("busy");

        var loader_grabar = $("#loader-grabar");
        $.ajax({
            url:"ajax/inserta-alerta.ajax.php",
            data: {
                'titulo' : f.find("input[name='titulo']").val(),
                'direccion': f.find("input[name='direccion']").val(),
                'descripcion': f.find("textarea[name='descripcion']").val(),
                'incentivos': f.find("textarea[name='incentivos']").val(),
                'cx': f.find("input[name='cx']").val(),
                'cy': f.find("input[name='cy']").val(),
                'cas_id': parseInt(getUrlVars()['cas_id'])
            },
            success:function(data){
                marcador.setMap(null);
                listar();
            },
            beforeSend:function(){
                loader_grabar.removeClass("label-success").addClass("label-warning").text("Procesando...").slideDown();
            },
            complete:function(){
                f.removeClass("busy");
                f[0].reset();
                loader_grabar.removeClass("label-warning").addClass("label-success").text("Grabado OK").delay(2000).slideUp();
            }
        });
    };//});

    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    mapa.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    mapa.addListener('bounds_changed', function() {
        searchBox.setBounds(mapa.getBounds());
      });

  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();
    if (places.length == 0) {
      return;
    }

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    mapa.fitBounds(bounds);
  });


    $('#btn-cambia-estado').on("click", function(){
        //alert(estado_alerta); //" + estado_alerta + "
        $("#lista_estados input[value='" + estado_alerta+ "']").prop("checked", true);
        $('#modal-cambia-estado').modal();
    });



}

function quitar_marcadores(lista){
    for(i in lista){
        lista[i].setMap(null);
    }
}

function listar(){
        quitar_marcadores(marcadores_bd);
        var formulario_edicion = $('#formulario-edicion');
        $.get("ajax/listar-alertas.ajax.php", {'cas_id': parseInt(getUrlVars()['cas_id'])}, function(data){
            $.each(data, function(i, item){
                var posi = new google.maps.LatLng(item.ale_cx, item.ale_cy);
                var marca = new google.maps.Marker({
                    idMarcador: item.ale_id,
                    position: posi,
                    titulo: item.ale_titulo,
                    cx: item.ale_cx,
                    cy: item.ale_cy,
                    estado: item.ale_estado
                });
                var color_marca;
                switch(marca.estado){
                    case "registrada":
                        color_marca = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
                        break;
                    case "espera":
                        color_marca = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
                        break;
                    case "finalizada":
                        color_marca = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";
                        break;
                    case "vencida":
                        color_marca = "http://maps.google.com/mapfiles/ms/icons/purple-dot.png";
                        break;
                }
                marca.setIcon(color_marca);
                google.maps.event.addListener(marca, "click", function(){
                    $('#collapseTwo').collapse('show');
                    $('#collapseOne').collapse('hide');
                    formulario_edicion.find("input[name='id']").val(marca.idMarcador);
                    formulario_edicion.find("input[name='titulo']").val(marca.titulo);
                    formulario_edicion.find("input[name='cx']").val(marca.cx);
                    formulario_edicion.find("input[name='cy']").val(marca.cy);
                    estado_alerta = marca.estado;
                    id_alerta = marca.idMarcador;
                });
                marcadores_bd.push(marca);
                marca.setMap(mapa);
            });
        },'json');
    }

function updateMark(){

}


$(document).on('ready',function(){
    //initMap();
    $('#btn-colapsar-one').on('click', function(){
        $('#collapseOne').collapse('hide');
    });
    $('#btn-colapsar-two').on('click', function(){
        $('#collapseTwo').collapse('hide');
    });

    $('#boton-cambia-estado').on("click", function(){ //del modal
        estado_alerta = $('input[name=radio]:checked', '#lista_estados').val();
        var color_marca;

        switch(estado_alerta){
            case "registrada":
                color_marca = "http://maps.google.com/mapfiles/ms/icons/red-dot.png";
                break;
            case "espera":
                color_marca = "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png";
                break;
            case "finalizada":
                color_marca = "http://maps.google.com/mapfiles/ms/icons/green-dot.png";
                break;
            case "vencida":
                color_marca = "http://maps.google.com/mapfiles/ms/icons/purple-dot.png";
                break;
        }

        $.ajax({
            url:"ajax/actualiza-estado-alerta.ajax.php",
            data: {
                id_alerta: id_alerta,
                estado: estado_alerta
            },
            success:function(data){
                alert("Alerta actualizada");
                console.log(id_alerta + " actualizado a " + estado_alerta);
                listar();
            }
        });
    });

});


function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
        vars[key] = value;
    });
    return vars;
}
