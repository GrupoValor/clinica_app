function initMap(){

    var marcadores_nuevos = [];
    var marcadores_bd=[];
    var mapa = null;
    var marcador;

    var formulario = $("#formulario");

    var punto = new google.maps.LatLng(-12.0553011,-77.0802426);

    var config = {
        zoom:7,
        center:punto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    mapa = new google.maps.Map($("#mapa")[0], config);

    function quitar_marcadores(lista){
        for(i in lista){
            lista[i].setMap(null);
        }
    }

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

    function listar(){
        quitar_marcadores(marcadores_bd);
        var formulario_edicion = $('#formulario-edicion');
        $.get("ajax/listar-alertas.ajax.php", 'json', function(data){
            $.each(data, function(i, item){
                var posi = new google.maps.LatLng(item.aler_cx, item.aler_cy);
                var marca = new google.maps.Marker({
                    idMarcador: item.aler_id,
                    position: posi,
                    titulo: item.aler_titulo,
                    cx: item.aler_cx,
                    cy: item.aler_cy
                });
                google.maps.event.addListener(marca, "click", function(){
                    $('#collapseTwo').collapse('show');
                    $('#collapseOne').collapse('hide');
                    formulario_edicion.find("input[name='id']").val(marca.idMarcador);
                    formulario_edicion.find("input[name='titulo']").val(marca.titulo);
                    formulario_edicion.find("input[name='cx']").val(marca.cx);
                    formulario_edicion.find("input[name='cy']").val(marca.cy);
                });
                marcadores_bd.push(marca);
                marca.setMap(mapa);

            });
        });
    }

    $('#btn-grabar').on("click", function(){
        var f = $("#formulario");

        if(f.find("input[name='titulo']").val().trim()==""){
            alert("Falta titulo");
            return false;
        }

        if(f.find("input[name='cx']").val().trim()==""){
            alert("Falta coordenada X");
            return false;
        }

        if(f.find("input[name='cy']").val().trim()==""){
            alert("Falta coordenada Y");
            return false;
        }



        if(f.hasClass("busy")){
            return false;
        }
        f.addClass("busy");

        var loader_grabar = $("#loader-grabar");
        $.ajax({url:"ajax/inserta-alerta.ajax.php",
            data: f.serialize(),
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
    });

}

$(document).on('ready',function(){
    $('#btn-colapsar-one').on('click', function(){
        $('#collapseOne').collapse('hide');
    });
    $('#btn-colapsar-two').on('click', function(){
        $('#collapseTwo').collapse('hide');
    });

});
