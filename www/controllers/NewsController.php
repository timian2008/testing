<?php

//require_once __DIR__.'/../models/news.php';

class NewsController
{
    public function actionAll(){
        $items = News::getAll();
        include __DIR__.'/../views/news/all.php';
    }
    public function actionOne(){
        echo 'actionOne';
        //die;

        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
}