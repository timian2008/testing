<?php

/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 06.12.2015
 * Time: 16:08
 */

class DB
{
    /**
     *
     */
    public  function __construct(){
        mysql_connect('localhost','root','');
        mysql_select_db('test');

    }
    public function queryAll($sql, $class = 'stdClass'){
        $res = mysql_query($sql);
        if (false == $res)
        return false;
        $ret = [];
            while ($row = mysql_fetch_object($res,$class)){
                $ret[] = $row;
                //var_dump($row);
            }
        //var_dump($ret);
        return $ret;
    }
    public function queryOne ($sql, $class = 'stdClass'){
        return $this->queryAll($sql,$class)[0];
    }
}