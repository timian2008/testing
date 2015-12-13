<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.12.2015
 * Time: 13:37
 */
function __autoload($class){
    //var_dump($class);
    if (file_exists(__DIR__.'/controllers/'.$class.'.php'))
    require_once __DIR__.'/controllers/'.$class.'.php';
    elseif(file_exists(__DIR__.'/models/'.$class.'.php'))
        require_once __DIR__.'/models/'.$class.'.php';
    elseif(file_exists(__DIR__.'/classes/'.$class.'.php'))
        require_once __DIR__.'/classes/'.$class.'.php';

}