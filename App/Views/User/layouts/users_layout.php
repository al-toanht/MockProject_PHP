<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/User/styles/app.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/User/styles/header.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/User/styles/main.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/Assets/User/styles/footer.css">
    <title>Home</title>
</head>

<body>
    <?php
    $this->view('User/block/header',$sub_content) 
    ?>
    <?php
    $this->view('User/block/content') 
    ?>
    <?php
    $this->view('User/block/footer') 
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>