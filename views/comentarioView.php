<?php
require_once('./libs/smarty.class.php');
require_once('./models/comentariosModelo.php');

class ViewComentarios {
    private $smarty;

    public function __construct() {
    
        $this->smarty=new Smarty();

    }

    public function showComentarios($registros) {
       /* $this->smarty->assign(`registros`,`lista de registros`);*/
        $this->smarty->assign(`registros`, $registros);
        $this->smarty->assign(`BASE_URL`, BASE_URL);

        $this->smarty->display('templates/registros.tpl');
    }
    /*public function showAgregarComentario($registro){
        $this->smarty->assign(`comentario`, $registro);
        $this->smarty->assign(`BASE_URL`, BASE_URL);

        $this->smarty->assign('Templates/registro.tpl');
    }*/
   
}
?>