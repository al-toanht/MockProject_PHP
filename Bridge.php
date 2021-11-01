<?php
define('_DIR_ROOT',__DIR__);
$configs_dir = scandir('configs');
if(!empty($configs_dir)){
    foreach($configs_dir as $item){
        if($item!='.' && $item!='..' && file_exists('configs/'.$item)){
            require_once 'configs/'.$item;
        }
    }
}
require_once "Core/Route.php"; // load route class  
require_once "App/App.php"; // load app
//Kiem tra config va load Database
if(!empty($config['database'])){
    $db_config= array_filter($config['database']);
    if(!empty($db_config)){
        require_once 'Core/Connection.php';
        require_once 'Core/QueryBuilder.php';
        require_once 'Core/Database.php';
    }
}
require_once 'Core/Model.php';
require "Core/Controller.php"; //load BaseController
?>