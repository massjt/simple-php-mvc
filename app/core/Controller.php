<?php

class Controller
{
    /*
    @param $model  models下的model类
     */
    protected function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    /*
    @param $view views下的视图
    @param $data 传递给视图的参数
     */
    protected function view($view, $data = [])
    {
        require_once '../app/views/' . $view  . '.php';
    }
}
