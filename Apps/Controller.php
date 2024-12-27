<?php

class Controller{
    public function loadmodel($model){
        if (file_exists('Apps/Models/'.$model.'.php')) {
            require_once('Apps/Models/'.$model.'.php');
            $model = new $model;
        }
        return $model;
    }
    public function loadview($view, $data=null){
        if (file_exists('Apps/Views/'.$view.'.php')) {
            require_once('Apps/Views/'.$view.'.php');
        }
    }
}