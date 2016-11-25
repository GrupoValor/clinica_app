<?php
class Display
{
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function backlog($id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM TA_TAREA WHERE tar_estado = 'backlog' AND cas_id = $id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function pendiente($id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM TA_TAREA WHERE tar_estado = 'pendiente' AND cas_id = $id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function proceso($id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM TA_TAREA WHERE tar_estado = 'proceso' AND cas_id = $id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function finalizada($id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM TA_TAREA WHERE tar_estado = 'finalizada' AND cas_id = $id ");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function objetivosCaso($id) {
        $stmt = $this->db->query("SELECT cas_objact FROM TA_CASO WHERE cas_id = $id ");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['cas_objact'];
    }

    public function observacionesCaso($id) {
        $stmt = $this->db->query("SELECT cas_observ FROM TA_CASO WHERE cas_id = $id ");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['cas_observ'];
    }

    public function estadoCaso($id) {
        $stmt = $this->db->query("SELECT ESTADO.estcas_detalle FROM TA_CASO CASO, TA_ESTADOCASO ESTADO WHERE CASO.estcas_id = ESTADO.estcas_id AND CASO.cas_id = $id");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['estcas_detalle'];
    }

    public function lista_actividades($id) {
        $output = '';
        $stmt = $this->db->query("SELECT act_desc, act_fecreg FROM TA_ACTIVIDAD WHERE cas_id = $id ORDER BY act_fecreg ASC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li>'.  $row['act_fecreg'].': '. $row['act_desc'] . '</li>';
        }
        return $output;
    }




    /*public function comentarios($tarea_id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM TA_COMENTARIO WHERE tar_id = $tarea_id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="comentario" id="' . $row['com_id'] . '">' . $row['com_contenid'] . '</li>';
        }
        return $output;
    }*/
}
?>
