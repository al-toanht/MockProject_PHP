<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="public/Assets/Admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="public/Assets/Admin/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="public/Assets/Admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/Assets/Admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="public/Assets/Admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="public/Assets/Admin/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="public/Assets/Admin/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="public/Assets/Admin/images/favicon.ico" />

</head>

<body>
    <?php 
    $this->view('Admin/Block/header');
    ?>
    <?php
    $this->view('Admin/Block/navmenu') ;
    ?>
    <?php
    $this->view($content,$sub_content); 
    ?>
    <?php
    $this->view('Admin/Block/footer'); 
    ?>
</body>

</html>