<?php
$target_dir  = "photos/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$email = $_SESSION['email'];
// 检查是否为图片
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
}
// 检查格式
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Désolé , seulement  JPG, JPEG, PNG & GIF files sont autorisés à téléchargés.";
    $uploadOk = 0;echo "<br />";
}
// 检查 $uploadOk 是否为0
if ($uploadOk == 0) {
    echo "Désolé, votre photo n'est pas télécharger .";echo "<br />";
// 上传
} else {
    $_FILES["photo"]["name"]=$email.".jpg";
    $target_file=$target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
       echo $target_file;
    } else {
        echo "Désolé , une erreur s'est produite lors du téléchargement de votre fichier.";echo "<br />";
    }
    }