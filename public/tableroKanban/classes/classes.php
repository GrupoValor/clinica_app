<?php
class Display
{
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function backlog() {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM cobarcom_clinicadb.TA_TAREA WHERE tar_estado = 'backlog'");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function pendiente() {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM cobarcom_clinicadb.TA_TAREA WHERE tar_estado = 'pendiente'");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function proceso() {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM cobarcom_clinicadb.TA_TAREA WHERE tar_estado = 'proceso'");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    public function finalizada() {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM cobarcom_clinicadb.TA_TAREA WHERE tar_estado = 'finalizada'");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="tarea" id="' . $row['tar_id'] . '">' . $row['tar_nombre'] . '</li>';
        }
        return $output;
    }

    /*public function comentarios($tarea_id) {
        $output = '';
        $stmt = $this->db->query("SELECT * FROM cobarcom_clinicadb.TA_COMENTARIO WHERE tar_id = $tarea_id");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<li class="comentario" id="' . $row['com_id'] . '">' . $row['com_contenid'] . '</li>';
        }
        return $output;
    }*/
}
?>
