
<?php
//Conexion a la BD
require_once 'php-includes/connect.inc.php';
require_once 'classes/classes.php';
$display = new Display($db);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seguimiento de caso</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="scripts/tableroDragDrop.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
    </head>

    <body>
      <div class="row">
        <div class="col-md-4" id="tituloCaso"><h2>Seguimiento de caso <?php echo $_GET['id'] ?> </h2></div>
        <div class="col-md-8" id="datosEstadoCaso">
            <div class="col-md-2" id="columnaEnunciadoEstado"><h4>Estado del caso:</h4></div>
            <div class="col-md-2" id="nombre-estado"> <!--aquí se actualiza dinámicamente con ajax-->
              <h4> <?php echo $display->estadoCaso($_GET['id']); ?></h4>
            </div>
            <div class="col-md-3" id="cambia-estado"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-cambia-estado">Cambiar estado</button></div>
        </div>
      </div>
      <div class="row">
          <div id="areaTareas" >
            <div id="backlog-tablero" class="col-md-2">
                <h3>Backlog</h3>
                <ul id="backlog">
                    <?php echo $display->backlog($_GET['id']); ?>
                </ul>
                <button type="button" class="btn btn-success btn-info" data-toggle="modal" data-target="#modal-agrega-tarea">Agregar tarea</button>
            </div>
            <div id="pendientes-tablero" class="col-md-2">
                <h3>Pendientes</h3>
                <ul id="pendiente">
                    <?php echo $display->pendiente($_GET['id']); ?>
                </ul>
            </div>
            <div id="proceso-tablero" class="col-md-2">
                <h3>En proceso</h3>
                <ul id="proceso">
                    <?php echo $display->proceso($_GET['id']); ?>
                </ul>
            </div>
            <div id="finalizadas-tablero" class="col-md-2">
                <h3>Finalizadas</h3>
                <ul id="finalizada">
                    <?php echo $display->finalizada($_GET['id']); ?>
                </ul>
            </div>
          </div>
            <div id="panel-control-tablero" class="col-md-4">
              <div id="panel-control-tablero-interesados">
                <h3>Miembros</h3>
              </div>
              <div id="panel-control-tablero-actividad">
                <h3>Registro de actividad</h3>
              </div>
            </div>
      </div>
      <div class="row" id="detalles-caso">
          <div class="col-sm-4">
              <label class="control-label no-padding-right">Objetivo del caso:</label>

              <div>
                  <p><?php echo $display->objetivosCaso($_GET['id']); ?></p>
              </div>
          </div>
          <div class="col-sm-4">
              <label class="control-label no-padding-right">Observaciones del caso:</label>

              <div>
                  <p><?php echo $display->observacionesCaso($_GET['id']); ?></p>
              </div>
          </div>
      </div>

    </body>

    <div class="modal fade bs-modal-sm" tabindex="-1" id="modal-agrega-tarea" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Agregar tarea</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="titulo-tarea">Titulo:</label>
              <input type="text" class="form-control" id="titulo-tarea">
            </div>
            <div class="form-group">
              <label for="titulo-tarea">Descripcion:</label>
              <textarea class="form-control" rows="3" id="descripcion-tarea"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-guardar-tarea">Guardar</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade bs-modal-lg" id="modal-detalle-tarea" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Detalles de la tarea:</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="nombre-detalle-tarea" id="label-nombre-tarea">Nombre:</label>
              </div>
              <div class="form-group">
                <label for="descripcion-detalle-tarea" id="label-detalle-tarea">Detalle:</label>
              </div>
              <div id ="comentarios-tarea">
                <h3>Comentarios:</h3>
                <div id="contenedor-lista-comentarios"></div>
                <form class="form-inline">
                  <div class="form-group">
                    <label id="enunciadoComentario" for="contenido-comentario">Comentarios: </label>
                    <textarea class="form-control" rows="3" cols="75" id="contenido-comentario"></textarea>
                  </div>
                  <button type="button" class="btn btn-info" id="boton-ingresar-comentario">Ingresar</button>
                </form>
              </div>
                <form class="form-inline">
              <div class="form-group">
                <div>
                  <label for="fechaTarea">Vencimiento:</label>
                  <input type="date" name="fechaTarea">
                </div>
                <div>
                  <button type="button" class="btn btn-warning">+ Alerta documento</button>
                </div>

              </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"   data-dismiss="modal" id="boton-eliminar-tarea">Eliminar tarea</button>
                <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade bs-modal-sm" tabindex="-1" id="modal-cambia-estado" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Cambie el estado del caso:</h4>
          </div>
          <div class="modal-body">
            <form>
              <input type="radio" name="radio" value="1">Activo<br>
              <input type="radio" name="radio" value="2">Cerrado<br>
              <input type="radio" name="radio" value="3">En abandono<br>
              <input type="radio" name="radio" value="4">En seguimiento<br>
              <input type="radio" name="radio" value="5">Inactivo<br>
              <input type="radio" name="radio" value="6">Registrado<br>
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
