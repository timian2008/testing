<?php

/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 06.12.2015
 * Time: 18:32
 */
//require_once __DIR__."/../classes/DB.php";
class News
extends AbstractModel
{
    public $id;
    public $deptid;
    public $name;
    protected static $table = 'people';
    protected static $class = 'News';
}