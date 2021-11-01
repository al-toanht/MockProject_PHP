<?php
$routes['default_controller']='home';
$routes['admin-home']='admin/category';
$routes['trang-chu']='home';
$routes['tin-tuc/.+-(\d+)']= 'admin/category/show/$1';
?>