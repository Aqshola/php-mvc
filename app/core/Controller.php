<?php 

class Controller {
    public function view($view, $data = [])
    {
        require_once(dirname(__DIR__).'/views/'. $view . '.php');
    }

    public function model($model)
    {
        require_once(dirname(__DIR__).'/models/'. $model . '.php');
        return new $model;
    }

    public function getAuth(){

    }

    public function checkMethod(){
        return $_SERVER['REQUEST_METHOD'];
    }
    
}