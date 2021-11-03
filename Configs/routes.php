<?php
$routes['default_controller']='home';
$routes['admin']='admin/category';
$routes['admin-category']='admin/category';
$routes['admin-news']='admin/news';
$routes['trang-chu']='home';
$routes['tin-tuc/.+-(\d+)']= 'admin/category/show/$1';
?>