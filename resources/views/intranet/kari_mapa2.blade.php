<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mapa de alertas</title>

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
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <script src="assets/js/ace-extra.min.js"></script>   

    <!-- mapa de alertas-->
    <link href="assets/css/style_mapa.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/mapaAlertas.js"></script>
    <script src="assets/js/bootstrap2016.min.js"></script>   
    <style>
        .controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

    </style>
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
                    <li class="active">Mapa de alertas</li>
                </ul>
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Mapa de alertas
                    </h1>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                        <div id="mapa" style="width:62%;height:500px"></div>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOwKYLMGElTWMO7Qf_QEGgNVgOMp2Ucgs&libraries=places&callback=initMap"></script>
                        
                        <div id="infor" style="width:38%"class="col-xs-8">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Agregar alertas
                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <form id="formulario">
                                                <table>
                                                    <tr>
                                                        <td>Título (*)</td>
                                                        <td><input type="text" class="form-control" name="titulo" autocomplete="off" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dirección </td>
                                                        <td><input type="text" class="form-control" name="direccion" autocomplete="off" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Descripción (*)</td>
                                                        <td><textarea class="form-control" rows="3" name="descripcion" autocomplete="off" required></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Incentivos </td>
                                                        <td><textarea class="form-control" rows="3" name="incentivos" autocomplete="off"></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordenada X (*)</td>
                                                        <td><input type="text" class="form-control" name="cx" autocomplete="off" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordenada Y (*) </td>
                                                        <td><input type="text" class="form-control" name="cy" autocomplete="off" readonly/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fecha vencimiento </td>
                                                        <td><input class="form-control" name="fecvenc" placeholder="MM/DD/YYYY" type="text" autocomplete="off" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color: red">(*) Campos obligatorios</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><span class="label label-warning" id="loader-grabar"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type="submit" class="btn btn-success btn-sm" id="btn-grabar">Grabar</button></td>
                                                        <td><button type="reset" class="btn btn-danger btn-sm" id="btn-colapsar-one">Cancelar</button></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Buscar alertas
                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <form id="formulario-edicion">
                                                <input type="hidden" name="id" />
                                                <table>
                                                    <tr>
                                                        <td>Titulo </td>
                                                        <td><input type="text" class="form-control" readonly name="titulo" autocomplete="off" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordenada X &nbsp;</td>
                                                        <td><input type="text" class="form-control" readonly name="cx" autocomplete="off" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coordenada Y </td>
                                                        <td><input type="text" class="form-control" readonly name="cy" autocomplete="off" /></td>
                                                    </tr>
                                                    <tr><td>&nbsp;</td></tr>
                                                    <tr>
                                                        <td></td>                                                        
                                                        <td><button type="button" class="btn btn-success btn-sm" id="btn-cambia-estado">Cambiar estado</button></td>
                                                        <td><button type="reset" class="btn btn-danger btn-sm" id="btn-colapsar-two">Cancelar</button></td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php  echo view('intranet/footer'); ?>
    
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!-- ace scripts -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>
    <script type="text/javascript">			
        $(document).ready(function(){
            //$("#litareas").addClass("active open");
            $("#limapa").addClass("active");
        });
    </script>    
</body>


<div class="modal fade bs-modal-sm" tabindex="-1" id="modal-cambia-estado" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Cambie el estado de alerta:</h4>
          </div>
          <div class="modal-body">
            <form id="lista_estados">
              <input type="radio" name="radio" value="registrada" class="hide"><!--Registrada<br>-->
              <input type="radio" name="radio" value="espera">En espera<br>
              <input type="radio" name="radio" value="finalizada">Finalizada<br>
              <input type="radio" name="radio" value="vencida">Vencida<br>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success" id="boton-cambia-estado" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
</div>

</html>