<?php
require_once("controllers/comentariosControl.php");

class ModelComentarios {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_comentarios;charset=utf8', 'root', '');
    }

     public function getAllRegistros() {
        $sentencia = $this->db->prepare("SELECT * FROM registros");
        $sentencia->execute();

        $registros= $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $registros;
    }
    public function addComentarios($ID, $usuario, $comentario){
        $sentencia = $this->db->prepare("INSERT INTO registros (ID, usuario, comentario) VALUES (?,?,?)" );
        $sentencia->execute([$ID, $usuario, $comentario]);

        $registro= $sentencia->fetchAll(PDO::FETCH_OBJ);

    }
}
?>