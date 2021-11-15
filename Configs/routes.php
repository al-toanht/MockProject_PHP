<?php
$routes= array(
    'default_controller' => 'HomeController',
    'login' => 'Admin/AdminController/login',
    'admin-changepassword' => 'Admin/AdminController/changePassword',
    'admin-category' => 'Admin/CategoryController',
    'admin-news' => 'Admin/NewsController',
    'logout' => 'Admin/AdminController/logout',
    'trang-chu' => 'HomeController',
    'chi-tiet/(\d+)' => 'HomeController/detailNews/$1',
    'danh-muc-cha/(\d+)' => 'HomeController/showNewsParentCategory/$1',
    'danh-muc-con/(\d+)' => 'HomeController/showNewsChildCategory/$1',
);
?>