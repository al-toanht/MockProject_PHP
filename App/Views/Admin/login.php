<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <form action="<?php echo _WEB_ROOT;?>/login/login" method="POST">
                                <div class="form-group">
                                    <label class="label">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <?php  echo $data['usernameError']; ?>
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="*********">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <?php  echo $data['passwordError']; ?>
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo _WEB_ROOT; ?>/public/Assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/Assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?php echo _WEB_ROOT; ?>/public/Assets/js/shared/off-canvas.js"></script>
    <script src="<?php echo _WEB_ROOT; ?>/public/Assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="<?php echo _WEB_ROOT; ?>/public/Assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>