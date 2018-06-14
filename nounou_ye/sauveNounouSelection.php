<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
<?php

require_once 'pdoConnexion.php';
session_start();
 $email = $_SESSION['email'];
require_once 'getPhoto.php';
$type_garde = $_POST['type_garde'];
$experience = $_POST['experience'];
$presentation = $_POST['presentation'];
require_once 'navbar.html';
try {
   
    $query="UPDATE `nounou` SET `Experience` = '$experience', `Presentation` = '$presentation',`type`='$type_garde' WHERE `nounou`.`Email` = '$email';";
   $dbh->exec($query);
    echo '<br /><strong>Merci</strong><br /> ';
}  catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
?>
        
    </body>
<a href=nounou.php>Retour</a>
</html>