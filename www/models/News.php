<?php

/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 06.12.2015
 * Time: 18:32
 */
require_once __DIR__."/../classes/DB.php";
class News
{
    public $id;
    public $deptid;
    public $name;


    public static function getAll(){
        $db = new DB;
        return $db->query("SELECT * FROM people",'News');
    }
}