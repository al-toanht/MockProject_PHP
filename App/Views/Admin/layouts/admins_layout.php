<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/icheck/skins/all.css">
    <link rel="stylesheet"
        href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/css/shared/style.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/css/demo_1/style.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/css/upload.css">
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/images/favicon.ico" />

</head>

<body>
    <div class="container-scroller">
        <?php 
            $this->view('Admin/Block/header');
        ?>
        <div class="container-fluid page-body-wrapper">
            <?php
                $this->view('Admin/Block/navmenu') ;
            ?>
            <div class="main-panel">
                <?php
                    $this->view($content,$sub_content); 
                ?>
                <?php
                    $this->view('Admin/Block/footer'); 
                ?>
            </div>
        </div>
    </div>
</body>

</html>