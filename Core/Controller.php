<?php
class Controller extends App{
    public $db;
    
    public function model($model){
        if (file_exists(_DIR_ROOT.'/App/Models/'.$model.'.php')) {
            require_once _DIR_ROOT.'/App/Models/'.$model.'.php';
            if(class_exists($model)) {
                $model= new $model;
                return $model;
            }
        }
        return false;
    }

    public function view($view,$data=[]){

        if(!empty(View::$dataShare)){
            $data = array_merge($data, View::$dataShare);
        }

        extract($data);
        if (file_exists(_DIR_ROOT.'/App/Views/'.$view.'.php')) {
            require_once _DIR_ROOT.'/App/Views/'.$view.'.php';
        }
        return false;
    }
} 
?>