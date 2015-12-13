<?php

/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 13.12.2015
 * Time: 14:14
 */
abstract class AbstractModel
{
    protected static $table='fdfds';
    protected static $class='fgfdgd';
    public static function getAll(){
        $db = new DB;
        return $db->queryAll("SELECT * FROM ".static::$table, static::$class);
    }
    public static function getOne($id){
        $db = new DB;
        return $db->queryOne("SELECT * FROM ".static::$table." where id=".$id,static::$class);
    }
}