<?php
define('_DIR_ROOT',__DIR__);
//Xử lí http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {
    $web_root= 'https://'. $_SERVER['HTTP_HOST'];
}else {
    $web_root= 'http://'. $_SERVER['HTTP_HOST'];
}

$folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']),'',strtolower(_DIR_ROOT));
$web_root= str_replace('\\','/',$web_root);
define('_WEB_ROOT',$web_root);

//Xử lí import các file trong folder configs
$configs_dir = scandir('configs');
if(!empty($configs_dir)) {
    foreach($configs_dir as $item){
        if($item!='.' && $item!='..' && file_exists('configs/'.$item)) {
            require_once 'configs/'.$item;
        }
    }
}

//Middleware
require_once 'Core/Middlewares.php';

require_once "Core/Route.php"; // load route class  

$allHelpers = scandir('app/helpers');
if(!empty($allHelpers)) {
    foreach($allHelpers as $item){
        if($item!='.' && $item!='..' && file_exists('app/helpers/'.$item)) {
            require_once 'app/helpers/'.$item;
        }
    }
}
//Kiem tra config va load Database

if(!empty($config['database'])) {
    $db_config= array_filter($config['database']);
    if(!empty($db_config)) {
        require_once 'Core/Connection.php';
        require_once 'Core/QueryBuilder.php';
        require_once 'Core/Database.php';
        require_once 'Core/DB.php';
    }
}
require_once "App/App.php"; // load app

require_once 'Core/Model.php'; //load BaseModels

require_once "Core/Controller.php"; //load BaseController

?>