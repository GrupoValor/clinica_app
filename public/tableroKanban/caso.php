
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
        <h1>Seguimieto de caso</h1>
        <div>
            <div id="left">
                <h2>Backlog</h2>
                <ul id="backlog">
                    <?php echo $display->backlog(); ?>
                </ul>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-agregartarea-modal-sm">Agregar tarea</button>
            </div>
            <div id="center">
                <h2>Pendientes</h2>
                <ul id="pendiente">
                    <?php echo $display->pendiente(); ?>
                </ul>
            </div>
            <div id="right">
                <h2>En proceso</h2>
                <ul id="proceso">
                    <?php echo $display->proceso(); ?>
                </ul>
            </div>
            <div id="right">
                <h2>Finalizadas</h2>
                <ul id="finalizada">
                    <?php echo $display->finalizada(); ?>
                </ul>
            </div>
        </div>

    </body>

    <div class="modal fade bs-agregartarea-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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


    <div class="modal fade bs-detalle-tarea-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4>Detalles de la tarea:</h4>
            </div>
            <div class="modal-body">
                <label for="descripcion-detalle-tarea" id="label-detalle-tarea">Detalle:</label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger"   data-dismiss="modal" id="boton-eliminar-tarea">Eliminar tarea</button>
            </div>
        </div>
      </div>
    </div>

</html>
