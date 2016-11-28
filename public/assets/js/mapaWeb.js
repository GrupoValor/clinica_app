var estado_alerta;
var id_alerta;
var marcadores_bd=[];
var mapa = null;

function initMap(){
    var marcadores_nuevos = [];

    var marcador;
    var formulario = $("#formulario");

    var punto = new google.maps.LatLng(-9.189967,-75.015152);

    var config = {
        zoom:5,
        center:punto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    mapa = new google.maps.Map($("#mapa")[0], config);

    listar();

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

    var iconBase = "http://maps.google.com/mapfiles/ms/icons/";
    var icons = {
        registrada: {
            name: 'Registrada',
            icon: iconBase + 'red-dot.png'
        },
        espera: {
            name: 'Espera',
            icon: iconBase + 'yellow-dot.png'
        },
        finalizada: {
            name: 'Finalizada',
            icon: iconBase + 'green-dot.png'
        },
        vencida: {
            name: 'Vencida',
            icon: iconBase + 'purple-dot.png'
        }
    };

    var legend = document.getElementById('legend');
    for (var key in icons) {
        var type = icons[key];
        var name = type.name;
        var icon = type.icon;
        var div = document.createElement('div');
        div.innerHTML = '<img src="' + icon + '"> ' + name;
        legend.appendChild(div);
    }

    mapa.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
}

function showModal(id){

    $("#modal_atender").modal();

}

function quitar_marcadores(lista){
    for(i in lista){
        lista[i].setMap(null);
    }
}

function listar(){
        quitar_marcadores(marcadores_bd);
        var formulario_edicion = $('#formulario-edicion');
        $.get("ajax/listar-alertas.ajax.php", 'json', function(data){
            $.each(data, function(i, item){
                var posi = new google.maps.LatLng(item.ale_cx, item.ale_cy);
                var marca = new google.maps.Marker({
                    idMarcador: item.ale_id,
                    position: posi,
                    titulo: item.ale_titulo,
                    cx: item.ale_cx,
                    cy: item.ale_cy,
                    estado: item.ale_estado,
                    descripcion: item.ale_descrip,
                    direccion: item.ale_direccion,
                    incentivo: item.ale_incentivo
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
                };
                google.maps.event.addListener(marca, 'click', function(){
                    if((marca.estado !== 'vencida') && (marca.estado !== 'finalizada')) {
                        var infowindow = new google.maps.InfoWindow({
                            content: '<div style="font-size: 12px"> <h6>' + marca.titulo + '</h6>' +
                            '<h7>Dirección:</h7>'+
                            '<p>'+marca.direccion+'</p>'+
                            '<h7>Descripción:</h7>'+
                            '<p>'+marca.descripcion+'</p>'+
                            '<h7>Incentivos:</h7>'+
                            '<p>'+marca.incentivo+'</p>'+
                            '<button onclick="showModal(' + marca.idMarcador + ')">Atender</button></div>'
                        });
                        infowindow.open(mapa, this);
                    }

                    /*google.maps.event.addListener(marca, 'mouseout', function() {
                        infowindow.close();
                    });*/
                });
                marca.setIcon(color_marca);
                marcadores_bd.push(marca);
                marca.setMap(mapa);
            });
        });
    }


$(document).on('ready',function(){
        //initMap();

        $('#botonSubmit').on("click", function(){ //del modal
            estado_alerta = "espera";
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
                    console.log(id_alerta + " actualizado a " + estado_alerta);
                    listar();
                }
            });
        });

    });
