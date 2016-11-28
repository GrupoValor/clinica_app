<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mapa de alertas</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/mapaAlertas.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOwKYLMGElTWMO7Qf_QEGgNVgOMp2Ucgs&libraries=places&callback=initMap"></script>
</head>
<body>
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
