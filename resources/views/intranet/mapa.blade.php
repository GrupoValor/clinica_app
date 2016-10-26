<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Intranet</title>

    <meta name="description" content="Draggabble Widget Boxes with Persistent Position and State" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />

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
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">Mapa de alertas</li>
                    </ul>
                </div>

                <div class="page-content">
                    <div class="page-header">
                        <h1>
                            Mapa de alertas
                        </h1>
                    </div><!-- /.page-header -->
                    <div align="left">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                            Registrar
                        </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Registro de alerta</h4>
                                    </div>
                                    <div class="row body">
                                        <form action="#">
                                            <ul>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="direccion">Direccion</label>

                                                    <div class="col-sm-9">
                                                        <input class="input-sm" type="text" id="form-field-1"
                                                               placeholder="direccion"
                                                        />
                                                        <div class="space-2"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="latitud">Latitud</label>

                                                    <div class="col-sm-9">
                                                        <input class="input-sm" type="text" id="form-field-2"
                                                               placeholder="latitud"
                                                        />
                                                        <div class="space-2"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="longitud">Longitud</label>

                                                    <div class="col-sm-9">
                                                        <input class="input-sm" type="text" id="form-field-0"
                                                               placeholder="longitud"
                                                        />
                                                        <div class="space-2"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="email">email<span
                                                            class="req">*</span></label>

                                                    <div class="col-sm-9">
                                                        <input class="input-sm" type="text" id="form-field-3"
                                                               placeholder="email"
                                                        />
                                                        <div class="space-2"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="telefono">Telefono</label>

                                                    <div class="col-sm-9">
                                                        <input class="input-sm" type="text" id="form-field-4"
                                                               placeholder="telefono"
                                                        />
                                                        <div class="space-2"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="comments">Descripcion<span
                                                            class="req">*</span></label>

                                                    <div class="col-sm-4">
                                                        <!--<input class="input-sm" type="text" id="form-field-4" placeholder="Observaciones" />
                                                        <div class="space-2"></div>-->
                                                        <textarea class="form-control" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div><h1></h1></div>                   

                    <div class="row">
                        <div class="col-xs-12">
                            <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                            <div id="map" style="width:100%;height:500px"></div>
                            <script>
                                // This example adds a search box to a map, using the Google Place Autocomplete
                                // feature. People can enter geographical searches. The search box will return a
                                // pick list containing a mix of places and predicted search terms.

                                function initAutocomplete() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -10.5049722, lng: -77.0641579},
                                        zoom: 5,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    });

                                    // Create the search box and link it to the UI element.
                                    var input = document.getElementById('pac-input');
                                    var searchBox = new google.maps.places.SearchBox(input);
                                    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                                    // Bias the SearchBox results towards current map's viewport.
                                    map.addListener('bounds_changed', function () {
                                        searchBox.setBounds(map.getBounds());
                                    });

                                    var markers = [];
                                    // [START region_getplaces]
                                    // Listen for the event fired when the user selects a prediction and retrieve
                                    // more details for that place.
                                    searchBox.addListener('places_changed', function () {
                                        var places = searchBox.getPlaces();

                                        if (places.length == 0) {
                                            return;
                                        }

                                        // Clear out the old markers.
                                        markers.forEach(function (marker) {
                                            marker.setMap(null);
                                        });
                                        markers = [];

                                        // For each place, get the icon, name and location.
                                        var bounds = new google.maps.LatLngBounds();
                                        places.forEach(function (place) {
                                            var icon = {
                                                url: place.icon,
                                                size: new google.maps.Size(71, 71),
                                                origin: new google.maps.Point(0, 0),
                                                anchor: new google.maps.Point(17, 34),
                                                scaledSize: new google.maps.Size(25, 25)
                                            };

                                            // Create a marker for each place.
                                            markers.push(new google.maps.Marker({
                                                map: map,
                                                icon: icon,
                                                title: place.name,
                                                position: place.geometry.location
                                            }));

                                            if (place.geometry.viewport) {
                                                // Only geocodes have viewport.
                                                bounds.union(place.geometry.viewport);
                                            } else {
                                                bounds.extend(place.geometry.location);
                                            }
                                        });
                                        map.fitBounds(bounds);
                                    });
                                    // [END region_getplaces]
                                }


                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO7aiKlHKsT7Kd4m-w-wjqVU0vX_J2gg0&libraries=places&callback=initAutocomplete"
                                    async defer></script>
                        </div>


                        <!-- PAGE CONTENT ENDS -->
                    </div>
                </div>


            </div>
        </div>

    <?php  echo view('intranet/footer'); ?>	

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
</body>
</html>
