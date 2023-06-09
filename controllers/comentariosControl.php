<?php
require_once("models/comentariosModelo.php");
require_once("views/comentarioView.php");

class controllerComentarios {
    private $model;
    private $view;

  public function __construct(){
    $this->model= new ModelComentarios();
    $this->view= new ViewComentarios();

  }
  public function showAll(){
    $registros=$this->model->getAllRegistros();
    $this->view->showComentarios($registros);

  }
  public function showInsert($ID, $usuario, $comentario){
    $addComentario=$this->model->addComentarios($ID, $usuario, $comentario);
    $this->view->showComentarios($addComentario);

  }
  
    
  
}
?>