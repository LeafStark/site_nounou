<?php

session_start();
require_once 'pdoConnexion.php';
$email = $_POST['email'];
$password = $_POST['motDePasse'];
$sauvegarder = isset($_POST['sauvegarder']) ? 1 : 0;

if (checkEmpty($email, $password)) {
    if ($sauvegarder == 1) {
        setcookie("eamil", $email, time() + 3600 * 24 * 3);
        setcookie("password", $password, time() + 3600 * 24 * 3);
    } else {
        setcookie("username", "", time() - 1);   //如果没有选择自动登录就清空cookie  
        setcookie("password", "", time() - 1);
    }

    $requet = "SELECT * FROM `compte` where `login` = '$email';";

    $res = $dbh->query($requet);
    /* while ($resultat = $res->fetch()) {
      print_r($resultat); */
    $resultat = $res->fetchAll();
    $rows = count($resultat);
    //echo "$rows";
    if ($rows != 0) {
        for ($i = 0; $i < $rows; $i++) {
            echo 2;
            if ($resultat[$i]['mot_de_passe'] == $password) {
                //echo '2';
                $_SESSION['email'] = $email;
                $_SESSION['motDePasse'] = $password;
                $requet_status = "SELECT * FROM `compte` WHERE `login`='$email'";
                $res_role = $dbh->query($requet_status);
                while ($res_s = $res_role->fetch()) {
                    print_r($res_s);

                    if ($res_s['status'] == 0) {
                        echo '<html><head><Script Language="JavaScript">alert("Vous êtes bloqué,veuillez contacter l\'administrateur !");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=signin.html\">";
                    } else {
                        $_SESSION['type'] = $res_s['role'];
                        echo 2;
                        if ($_SESSION['type'] == "parent") {
                            echo 3;
                            header('Location:parent.php');
                        } elseif ($_SESSION['type'] == "nounou") {
                            echo 4;
                            header('Location:nounou.php');
                        } elseif ($_SESSION['type'] == "administrateur") {
                            echo 4;
                            header('Location:administrateur.php');
                        }
                    }
                }
            } else {
                echo '<html><head><Script Language="JavaScript">alert("Mot de passe invalide");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=signin.html\">";
            }
        }
    } else {
        echo 1;
        echo '<html><head><Script Language="JavaScript">alert("Email invalide");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=signin.html\">";
    }
}

function checkEmpty($mail, $pass) {
    if ($mail == null || $pass == null) {
        echo '<html><head><Script Language="JavaScript">alert("用户名或密码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
    } else {
        return true;
    }
}

?>
