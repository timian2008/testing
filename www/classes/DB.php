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
}