
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
        <div class="col-md-6"><h1>Seguimieto de caso <?php echo $_GET['id'] ?></h1></div>
        <div class="col-md-2"><button type="button" class="btn btn-default">Estado caso</button></div>
      </div>
      <div class="row">
            <div id="backlog-tablero" class="col-md-2">
                <h2>Backlog</h2>
                <ul id="backlog">
                    <?php echo $display->backlog($_GET['id']); ?>
                </ul>
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=".bs-agregartarea-modal-sm">Agregar tarea</button>
            </div>
            <div id="pendientes-tablero" class="col-md-2">
                <h2>Pendientes</h2>
                <ul id="pendiente">
                    <?php echo $display->pendiente($_GET['id']); ?>
                </ul>
            </div>
            <div id="proceso-tablero" class="col-md-2">
                <h2>En proceso</h2>
                <ul id="proceso">
                    <?php echo $display->proceso($_GET['id']); ?>
                </ul>
            </div>
            <div id="finalizadas-tablero" class="col-md-2">
                <h2>Finalizadas</h2>
                <ul id="finalizada">
                    <?php echo $display->finalizada($_GET['id']); ?>
                </ul>
            </div>
            <div id="panel-control-tablero" class="col-md-4">
              <div id="panel-control-tablero-interesados">
                <h2>Miembros</h2>
              </div>
              <div id="panel-control-tablero-actividad">
                <h2>Registro de actividad</h2>
              </div>
            </div>
      </div>
      <div class="row">
          <div id="detalles-caso" class="col-md-6">
            <h2>Objetivos del caso:</h2>
            <p><?php echo $display->objetivosCaso($_GET['id']); ?></p>
            <h2>ObservacionesCaso del caso:</h2>
            <p><?php echo $display->observacionesCaso($_GET['id']); ?></p>
            <h2>Resultados del caso:</h2>


          </div>
      </div>

    </body>

    <div class="modal fade bs-agregartarea-modal-sm" tabindex="-1" id="modal-agrega-tarea" role="dialog" aria-labelledby="mySmallModalLabel">
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
                    <label for="contenido-comentario">Comentario: </label>
                    <textarea class="form-control" rows="3" cols="75" id="contenido-comentario"></textarea>
                  </div>
                  <button type="button" class="btn btn-default" id="boton-ingresar-comentario">Ingresar</button>
                </form>
              </div>
              <div class="form-group">
                <div>
                  <h5>Establecer fecha vencimiento:</h5>
                  <input type="date" name="fecha">
                </div>
                <div>
                  <br><button type="button" class="btn btn-warning">Alerta documento</button>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"   data-dismiss="modal" id="boton-eliminar-tarea">Eliminar tarea</button>
                <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>

</html>
