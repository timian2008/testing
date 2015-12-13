<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 09.11.2015
 * Time: 16:51
 */


require_once __DIR__.'/autoload.php';

//var_dump($items);
//require_once __DIR__ . '/controllers/NewsController.php';

$ctrl = isset($_GET['ctrl'])?$_GET['ctrl']:'News';
$act = isset ($_GET['act'])?$_GET['act']:'All';

$controllerClassName = $ctrl.'Controller';
//require_once __DIR__.'/controllers/'.$controllerClassName.'.php';

$controller = new $controllerClassName;
$method = 'action'.$act;
$controller->$method();
//include __DIR__.'/views/index.php';
