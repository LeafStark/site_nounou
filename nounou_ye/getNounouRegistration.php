<?php
require ("connexion.php");
session_start();
$email = mysqli_real_escape_string($con,$_POST['email']);
$paasword = md5(mysqli_real_escape_string($con,$_POST['mot']));
$nom = mysqli_real_escape_string($con,$_POST['nom']);
$prenom = mysqli_real_escape_string($con,$_POST['nom']);
$age = mysqli_real_escape_string($con,$_POST['age']);
$ville = mysqli_real_escape_string($con,$_POST['ville']);
$portable = mysqli_real_escape_string($con,$_POST['portable']);
$experience = mysqli_real_escape_string($con,$_POST['experience']);
$presentation = mysqli_real_escape_string($con,$_POST['presentation']);

$target_dir = "documents/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
       
    } else {
        echo "Désolé , une erreur s'est produite lors du téléchargement de votre fichier.";echo "<br />";
    }
    }

$duplicate_email_query = "select * from nounou where Email='$email'";
$duplicate_email_result = mysqli_query($con, $duplicate_email_query) or die(mysqli_error($con));
$rows = mysqli_affected_rows($duplicate_email_result);
