<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 09.11.2015
 * Time: 16:51
 */

require_once __DIR__.'/models/news.php';
$items = News::getAll();
//var_dump($items);

include __DIR__.'/views/index.php';