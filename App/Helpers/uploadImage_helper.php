<?php
 function uploadImage($fileImage){
    $target = "public/Assets/images/".basename($fileImage);
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    $uploadOk = 1;
    $filename = '';
    if ($_FILES["HinhAnh"]["size"] > 500000) {
        $uploadOk = 0;
    }
    if  ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
    } else {
        if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target)) {
            $filename = basename($fileImage);
        } else {
            $filename = false;
        }
    }
    return $filename;
}
?>