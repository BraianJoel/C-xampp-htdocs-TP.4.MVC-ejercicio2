<?php
define ('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once('controllers/comentariosControl.php');

if(!empty($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action='list';
}

$params=explode('/', $action);

switch ($params[0]) {
    case 'list';
        $controller=new controllerComentarios();
        $controller->showAll();
        break;
    case 'agregar';
        switch($params[1]){
            case 'comentario';
            $controller=new controllerComentarios();
            $controller->showInsert($ID, $usuario, $comentario);
            break;
        }
}
?>